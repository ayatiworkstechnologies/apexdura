<?php
header('Content-Type: application/json');

include './conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values
    $name    = trim($_POST['businessname'] ?? '');
    $email   = trim($_POST['business_email'] ?? '');
    $mobile  = trim($_POST['mobile_number'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($mobile) || empty($message)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    if (!preg_match('/^\d{10}$/', $mobile)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Mobile number must be 10 digits.']);
        exit;
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO investor_enquiry 
        (business_name, business_email, mobile_number, message, created_at) 
        VALUES (?, ?, ?, ?, NOW())");

    $stmt->bind_param("ssss", $name, $email, $mobile, $message);

    if ($stmt->execute()) {

        // Professional Email Template
        $body = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        </head>
        <body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
        <tr>
        <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" 
        style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 3px 10px rgba(0,0,0,0.05);">

        <tr>
        <td style="background:#c40000;padding:20px;text-align:center;color:#ffffff;">
        <h2 style="margin:0;">New Investor Enquiry</h2>
        <p style="margin:5px 0 0;font-size:14px;">A new enquiry has been submitted</p>
        </td>
        </tr>

        <tr>
        <td style="padding:30px;">
        <table width="100%" cellpadding="10" cellspacing="0" style="font-size:14px;border-collapse:collapse;">

        <tr style="background:#fafafa;">
        <td width="35%"><strong>Business Name</strong></td>
        <td>' . htmlspecialchars($name) . '</td>
        </tr>

        <tr>
        <td><strong>Email Address</strong></td>
        <td>' . htmlspecialchars($email) . '</td>
        </tr>

        <tr style="background:#fafafa;">
        <td><strong>Mobile Number</strong></td>
        <td>' . htmlspecialchars($mobile) . '</td>
        </tr>

        <tr>
        <td valign="top"><strong>Message</strong></td>
        <td>' . nl2br(htmlspecialchars($message)) . '</td>
        </tr>

        </table>
        </td>
        </tr>

        <tr>
        <td style="background:#f9f9f9;padding:20px;text-align:center;font-size:12px;color:#777;">
        This enquiry was submitted from your website investor form.<br>
        © ' . date("Y") . ' Your Company Name. All rights reserved.
        </td>
        </tr>

        </table>
        </td>
        </tr>
        </table>
        </body>
        </html>
        ';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'mail.ayatiworks.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'emailsmtp@ayatiworks.com';
            $mail->Password   = 'hYd@W,$nwNjC';  // Change immediately
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('emailsmtp@ayatiworks.com', 'Investor Enquiry');
            $mail->addAddress('balaji@ayatiworks.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'New Investor Enquiry Received';
            $mail->Body    = $body;

            $mail->send();

            echo json_encode([
                'status' => 'success',
                'message' => 'Form submitted successfully and email sent.'
            ]);

        } catch (Exception $e) {
            echo json_encode([
                'status' => 'warning',
                'message' => 'Saved to DB but email failed: ' . $mail->ErrorInfo
            ]);
        }

    } else {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Database insert failed.'
        ]);
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}

$conn->close();
?>