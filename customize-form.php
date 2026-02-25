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

// ==========================
// GET & SANITIZE INPUT
// ==========================
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$mobile   = trim($_POST['mobile'] ?? '');
$message  = trim($_POST['message'] ?? '');
$products = $_POST['products'] ?? [];
$sizes    = $_POST['sizes'] ?? [];

$productList = !empty($products) ? implode(', ', $products) : 'Not Selected';
$sizeList    = !empty($sizes) ? implode(', ', $sizes) : 'Not Selected';

// ==========================
// VALIDATION
// ==========================
if (empty($name) || empty($email) || empty($mobile)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'All required fields must be filled.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid email format.'
    ]);
    exit;
}

if (!preg_match('/^\d{10}$/', $mobile)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Mobile number must be 10 digits.'
    ]);
    exit;
}

// ==========================
// INSERT INTO DATABASE
// ==========================
$stmt = $conn->prepare("INSERT INTO customize_enquiries 
(name, email, mobile, products, sizes, message, created_at)
VALUES (?, ?, ?, ?, ?, ?, NOW())");

if (!$stmt) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database preparation failed.'
    ]);
    exit;
}

$stmt->bind_param("ssssss", $name, $email, $mobile, $productList, $sizeList, $message);

if (!$stmt->execute()) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database insert failed.'
    ]);
    exit;
}

// ==========================
// PROFESSIONAL EMAIL TEMPLATE
// ==========================
$emailBody = '
<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
<tr>
<td align="center">
<table width="600" cellpadding="0" cellspacing="0" 
style="background:#ffffff;border-radius:8px;overflow:hidden;">

<tr>
<td style="background:#c40000;padding:25px;text-align:center;color:#ffffff;">
<h2 style="margin:0;">New Customize Product Enquiry</h2>
</td>
</tr>

<tr>
<td style="padding:30px;">
<table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;font-size:14px;">

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
<td><strong>Selected Products</strong></td>
<td>'.htmlspecialchars($productList).'</td>
</tr>

<tr style="background:#fafafa;">
<td><strong>Selected Sizes</strong></td>
<td>'.htmlspecialchars($sizeList).'</td>
</tr>

<tr>
<td valign="top"><strong>Message</strong></td>
<td>'.nl2br(htmlspecialchars($message)).'</td>
</tr>

</table>
</td>
</tr>

<tr>
<td style="background:#f9f9f9;padding:20px;text-align:center;font-size:12px;color:#777;">
© '.date("Y").' Your Company Name. All rights reserved.
</td>
</tr>

</table>
</td>
</tr>
</table>
</body>
</html>
';

// ==========================
// SEND EMAIL
// ==========================
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'mail.ayatiworks.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'emailsmtp@ayatiworks.com';
    $mail->Password   = 'hYd@W,$nwNjC'; // CHANGE THIS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('emailsmtp@ayatiworks.com', 'Customize Form');
    $mail->addAddress('balaji@ayatiworks.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Customize Product Enquiry';
    $mail->Body    = $emailBody;

    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Form submitted successfully. Our team will contact you soon.'
    ]);

} catch (Exception $e) {

    echo json_encode([
        'status' => 'warning',
        'message' => 'Saved successfully but email sending failed: ' . $mail->ErrorInfo
    ]);
}

$stmt->close();
$conn->close();
?>