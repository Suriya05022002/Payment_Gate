<?php include 'config.php'; session_start(); ?>
<?php
$discount_title = "Student Discount";
$amount = 10000;
$type = 'student';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Discount Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-wrapper">
  <h2><?php echo $discount_title; ?> Form</h2>
  <form id="discountForm" enctype="multipart/form-data" method="post" onsubmit="return validatePasswords()">
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="number" name="phone" placeholder="Phone" required><br><br>

    <div class="password-container">
      <input type="password" name="password" id="password" placeholder="Password" required>
      <span onclick="togglePassword('password', this)">👁️</span>
    </div>

    <div class="password-container">
      <input type="password" id="confirm_password" placeholder="Confirm Password" required>
      <span onclick="togglePassword('confirm_password', this)">👁️</span>
    </div>

    <br><br>
    Upload Student ID Card: 
    <input type="file" name="id_card" accept="image/*" required><br><br>

    <button type="submit" name="pay">Pay ₹<?php echo $amount; ?></button>
  </form>
</div>

<script>
  function togglePassword(fieldId, icon) {
    const input = document.getElementById(fieldId);
    input.type = input.type === "password" ? "text" : "password";
    icon.textContent = input.type === "password" ? "👁️" : "🙈";
  }

  function validatePasswords() {
    const pass = document.getElementById("password").value;
    const confirm = document.getElementById("confirm_password").value;
    if (pass !== confirm) {
      alert("Passwords do not match!");
      return false;
    }
    return true;
  }
</script>

<?php
if (isset($_POST['pay'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; 

    $uploadDir = "uploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $filename = $_FILES["id_card"]["name"];
    $tempname = $_FILES["id_card"]["tmp_name"];
    $folder = $uploadDir . time() . "_" . basename($filename);
    move_uploaded_file($tempname, $folder);

    $_SESSION['student'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
        'id_card' => $folder,
        'amount' => $amount,
        'title' => $discount_title,
        'type' => $type
    ];
    ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_b2sHTLys9aHo2Z",
            "amount": <?= $amount * 100 ?>,
            "currency": "INR",
            "name": "<?= $discount_title ?>",
            "description": "Discount Payment",
            "handler": function (response){
                window.location.href = "payment_success1.php?payment_id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "<?= $name ?>",
                "email": "<?= $email ?>",
                "contact": "<?= $phone ?>"
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    </script>
    <?php
}
?>

</body>
</html>
