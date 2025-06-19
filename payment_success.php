<?php
include 'config.php';
session_start();

if (!isset($_POST['razorpay_payment_id'])) {
    echo "❌ Payment not completed.";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$payment_id = $_POST['razorpay_payment_id'];
$amount = 100; // ₹100
$status = 'Success';

$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "❌ Password and Confirm Password do not match.";
    exit;
}


// File Upload
$upload_dir = 'uploads/';
$file_name = basename($_FILES['gov_proof']['name']);
$target_file = $upload_dir . time() . '_' . $file_name;

if (!move_uploaded_file($_FILES['gov_proof']['tmp_name'], $target_file)) {
    echo "❌ File upload failed.";
    exit;
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, file_path, payment_id, amount, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssis", $name, $email, $phone, $password, $target_file, $payment_id, $amount, $status);

if ($stmt->execute()) {
    echo "<h2>✅ Payment Successful</h2>";
    echo "<p>Thank you, <strong>$name</strong>. Your details have been saved successfully.</p>";
    echo "<p><strong>Payment ID:</strong> $payment_id</p>";
} else {
    echo "<h2>❌ Error saving data</h2>";
    echo $stmt->error;
}

$stmt->close();
$conn->close();
?>
