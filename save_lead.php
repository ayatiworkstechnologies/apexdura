<?php
header('Content-Type: application/json');  // Respond with JSON
header("Access-Control-Allow-Origin: *");  // Allow all origins (for testing)
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

include './conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read JSON body if sent
    $input = $_POST;
    if (empty($input)) {
        $input = json_decode(file_get_contents("php://input"), true);
    }

    $name = mysqli_real_escape_string($conn, trim($input['name'] ?? ''));
    $email = mysqli_real_escape_string($conn, trim($input['email'] ?? ''));
    $mobile = mysqli_real_escape_string($conn, trim($input['mobile'] ?? ''));
    $message = mysqli_real_escape_string($conn, trim($input['message'] ?? ''));

    if (empty($name) || empty($email) || empty($mobile) || empty($message)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Insert data into database
    $sql = "INSERT INTO enquiries (name, email, mobile, message, created_at) 
            VALUES ('$name', '$email', '$mobile', '$message', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Prepare email
        $body = '
        <div style="text-align:center;">
            <img src="https://www.apextmt.com/images/logo.png" alt="Logo" style="margin-bottom:10px;" />
        </div>
        <table rules="all" style="border-color: #666; width: 500px; margin: 0 auto; border: 1px solid #eee;" cellpadding="10">
            <tr><td colspan="2" style="text-align:center;"><h3>Enquiry Details</h3></td></tr>
            <tr><td><strong>Name:</strong></td><td>' . htmlspecialchars($name) . '</td></tr>
            <tr><td><strong>Email:</strong></td><td>' . htmlspecialchars($email) . '</td></tr>
            <tr><td><strong>Phone Number:</strong></td><td>' . htmlspecialchars($mobile) . '</td></tr>
            <tr><td><strong>Message:</strong></td><td>' . nl2br(htmlspecialchars($message)) . '</td></tr>
        </table>';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'mail.ayatiworks.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'emailsmtp@ayatiworks.com';
            $mail->Password = 'hYd@W,$nwNjC';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('emailsmtp@ayatiworks.com', 'Apex Enquiry');
            $mail->addAddress('ramya@ayatiworks.com');
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->Subject = "Enquiry from Apex Investor Form";
            $mail->Body = $body;

            $mail->send();

            http_response_code(200);
            echo json_encode(['status' => 'success', 'message' => 'Form submitted successfully and email sent.']);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
        }
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Database insert failed.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

$conn->close();
?>
