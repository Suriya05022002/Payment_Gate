<?php
$host = 'localhost:3306';
$user = 'root';
$pass = ''; // XAMPP default is empty
$db = 'paymentdb';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}
?>


<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title>Student Discount Form</title>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
  * {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    background: linear-gradient(to right, #dbe6f6, #c5796d);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
  }

  form {
    background: white;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
  }

  form input[type="text"],
  form input[type="email"],
  form input[type="number"],
  form input[type="password"],
  form input[type="file"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    transition: border 0.3s ease;
  }

  form input[type="text"]:focus,
  form input[type="email"]:focus,
  form input[type="number"]:focus,
  form input[type="password"]:focus {
    border-color: #7f5af0;
    outline: none;
  }

  button {
    width: 100%;
    padding: 12px;
    background: #7f5af0;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  button:hover {
    background: #6246ea;
  }

  h2 {
    text-align: center;
    color: #333;
  }
</style>

</head>
<body>

<form id="paymentForm" method="POST" action="payment_success.php" enctype="multipart/form-data">
  <h4>Proceed to Payment without discount</h4>
  <input type="text" name="name" placeholder="Name" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="number" name="phone" placeholder="Phone Number" required><br><br>
  <input type="password" name="password" id="password" placeholder="Password" required><br><br>
  <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required><br><br>
  <input type="file" name="gov_proof" accept="application/pdf" required><br><br>

  <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
  <button type="button" onclick="payNow()">Pay ₹100</button>
</form>

<script>
function payNow() {
  const pwd = document.getElementById('password').value;
  const cpwd = document.getElementById('confirm_password').value;

  if (pwd !== cpwd) {
    alert("❌ Password and Confirm Password do not match.");
    return false;
  }

  var options = {
    "key": "rzp_test_b2sHTLys9aHo2Z",
    "amount": 10000,
    "currency": "INR",
    "name": "Your Company",
    "description": "Test Payment",
    "handler": function (response){
      document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
      document.getElementById('paymentForm').submit();
    },
    "prefill": {
      "name": document.querySelector('input[name=name]').value,
      "email": document.querySelector('input[name=email]').value,
      "contact": document.querySelector('input[name=phone]').value
    }
  };

  var rzp = new Razorpay(options);
  rzp.open();
}
</script>





</body>
</html>
