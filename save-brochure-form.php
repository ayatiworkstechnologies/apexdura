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
$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');

// =============================
// VALIDATION
// =============================
if (empty($name) || empty($email) || empty($phone)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'All fields are required.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid email format.'
    ]);
    exit;
}

if (!preg_match('/^\d{10}$/', $phone)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Phone number must be 10 digits.'
    ]);
    exit;
}

// =============================
// INSERT INTO DATABASE
// =============================
$stmt = $conn->prepare("
    INSERT INTO brochure_downloads (name, email, phone, created_at)
    VALUES (?, ?, ?, NOW())
");

$stmt->bind_param("sss", $name, $email, $phone);

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
<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">

<tr>
  <td style="padding:30px 20px;">
    <table width="100%" cellpadding="0" cellspacing="0"
           style="max-width:600px;margin:0 auto;background:rgba(255,255,255,0.08);border:1px solid rgba(0, 0, 0, 0.2);border-radius:12px;">
      <tr>
        <td style="padding:15px 20px;text-align:left;">
          <img src="https://apexdura.apextmt.com/Apex-icons/Logo.png"
               alt="Apex Dura Logo"
               style="max-width:120px;height:auto;display:block;">
        </td>

        <td style="padding:15px 20px;text-align:right;color:#DC2626;font-family:Arial, sans-serif;font-size:20px;font-weight:600;">
          New Brochure Download
        </td>
      </tr>
    </table>
  </td>
</tr>

<tr>
<td style="padding:30px;">
<table width="100%" cellpadding="10" cellspacing="0" style="font-size:14px;border-collapse:collapse;">

<tr style="background:#fafafa;">
<td width="35%"><strong>Name</strong></td>
<td>' . htmlspecialchars($name) . '</td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>' . htmlspecialchars($email) . '</td>
</tr>

<tr style="background:#fafafa;">
<td><strong>Phone</strong></td>
<td>' . htmlspecialchars($phone) . '</td>
</tr>

<tr>
<td><strong>Enquiry Type</strong></td>
<td>Brochure Download</td>
</tr>

</table>
</td>
</tr>

<tr>
<td style="background:#f9f9f9;padding:20px;text-align:center;font-size:12px;color:#777;">
' . date("Y") . ' Apex Dura. All rights reserved.
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
    $mail->Password   = 'hYd@W,$nwNjC';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('emailsmtp@ayatiworks.com', 'Brochure Download');
    $mail->addAddress('balaji@ayatiworks.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Brochure Download Lead';
    $mail->Body    = $body;

    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Saved successfully. Brochure download starting.'
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