<?php include 'config.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Discount Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script>
  function togglePassword(fieldId, icon) {
    const input = document.getElementById(fieldId);
    if (input.type === "password") {
      input.type = "text";
      icon.textContent = "🙈";
    } else {
      input.type = "password";
      icon.textContent = "👁️";
    }
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

    // Example of session assignment — ensure 'type' is included
   $_SESSION['student'] = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'password' => $_POST['password'],
    'id_card' => $folder, // ✅ Correct variable
    'amount' => $discounts[$type]['amount'],
    'title' => $discounts[$type]['title'],
    'type' => $type
];



?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_b2sHTLys9aHo2Z", // Your Razorpay key
            "amount": <?= $current['amount'] * 100 ?>,
            "currency": "INR",
            "name": "<?= $current['title'] ?>",
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
<?php } ?>
</body>
</html>
