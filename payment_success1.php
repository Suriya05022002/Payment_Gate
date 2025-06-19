
<!DOCTYPE html>
<html>
<head>
  <title>Payment Success</title>
  <link rel="stylesheet" href="success.css">
</head>
<body>
<?php
include 'config.php';
session_start();

if (!isset($_SESSION['student'])) {
    echo "Session expired.";
    exit;
}

$data = $_SESSION['student'];
$payment_id = $_GET['payment_id'] ?? NULL; 

if (!$payment_id) {
    echo "<p style='color:red;'>⚠️ Razorpay payment ID missing!</p>";
    exit;
}


$status = "Success";

// Determine correct table based on type
$type = $_SESSION['student']['type'] ?? 'student';

switch ($type) {
    case 'ceg':
        $table = 'ceg_payments';
        break;
    case 'low_income':
        $table = 'low_income_payments';
        break;
    case 'student':
    default:
        $table = 'student_payments';
        break;
}


// Prepare and execute the insert query
$stmt = $conn->prepare("INSERT INTO $table (name, email, phone, password, id_card, payment_id, amount, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

$stmt->bind_param("ssssssis", 
    $data['name'], 
    $data['email'], 
    $data['phone'], 
    $data['password'], 
    $data['id_card'], 
    $payment_id, 
    $data['amount'], 
    $status
);

$stmt->execute();

// Display success message
echo '<div class="success-container">';
echo "<h2>🎉 Payment Successful</h2>";
echo "<p><strong>{$data['title']}</strong></p>";
echo "<p class='payment-id'>Payment ID: $payment_id</p>";
echo "<p>Thanks, <span class='user-name'>" . htmlspecialchars($data['name']) . "</span></p>";
echo "<a href='index.php' class='button'>Go to Home</a>";
echo '</div>';


// Clear session
unset($_SESSION['student']);
?>
</body>
</html>
