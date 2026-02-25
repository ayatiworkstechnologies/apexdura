<?php
header('Content-Type: application/json');

include './conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

// =============================
// GET & SANITIZE INPUT
// =============================
$name    = trim($_POST['firstname'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$mobile  = trim($_POST['mobile'] ?? '');
$comment = trim($_POST['comment'] ?? '');

// =============================
// VALIDATION
// =============================
if (empty($name) || empty($email) || empty($mobile) || empty($comment)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'All required fields must be filled.']);
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

// =============================
// INSERT INTO DATABASE
// =============================
$stmt = $conn->prepare("INSERT INTO contact_enquiries 
    (name, email, subject, mobile, message, created_at) 
    VALUES (?, ?, ?, ?, ?, NOW())");

$stmt->bind_param("sssss", $name, $email, $subject, $mobile, $comment);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Database insert failed.'
    ]);
    exit;
}

// =============================
// EMAIL TEMPLATE
// =============================
$body = '
<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
<tr>
<td align="center">
<table width="600" cellpadding="0" cellspacing="0" 
style="background:#ffffff;border-radius:8px;overflow:hidden;">

<tr>
<td style="background:#d10000;padding:20px;text-align:center;color:#ffffff;">
<h2 style="margin:0;">New Contact Enquiry</h2>
</td>
</tr>

<tr>
<td style="padding:30px;">
<table width="100%" cellpadding="10" cellspacing="0" style="font-size:14px;border-collapse:collapse;">

<tr style="background:#fafafa;">
<td width="35%"><strong>Name</strong></td>
<td>'.htmlspecialchars($name).'</td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>'.htmlspecialchars($email).'</td>
</tr>

<tr style="background:#fafafa;">
<td><strong>Mobile</strong></td>
<td>'.htmlspecialchars($mobile).'</td>
</tr>

<tr>
<td><strong>Subject</strong></td>
<td>'.htmlspecialchars($subject).'</td>
</tr>

<tr style="background:#fafafa;">
<td valign="top"><strong>Message</strong></td>
<td>'.nl2br(htmlspecialchars($comment)).'</td>
</tr>

</table>
</td>
</tr>

<tr>
<td style="background:#f9f9f9;padding:20px;text-align:center;font-size:12px;color:#777;">
© '.date("Y").' Your Company Name
</td>
</tr>

</table>
</td>
</tr>
</table>
</body>
</html>
';

// =============================
// SEND EMAIL
// =============================
$mail = new PHPMailer(true);

 try {
            $mail->isSMTP();
            $mail->Host       = 'mail.ayatiworks.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'emailsmtp@ayatiworks.com';
            $mail->Password   = 'hYd@W,$nwNjC';  // Change immediately
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('emailsmtp@ayatiworks.com', 'Contact Enquiry');
            $mail->addAddress('balaji@ayatiworks.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Enquiry Received';
            $mail->Body    = $body;

            $mail->send();

            echo json_encode([
                'status' => 'success',
                'message' => 'Thank you! Our team will contact you shortly.'
            ]);

} catch (Exception $e) {

    echo json_encode([
        'status' => 'warning',
        'message' => 'Saved to database but email failed: ' . $mail->ErrorInfo
    ]);
}

$stmt->close();

$conn->close();
?>