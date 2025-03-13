<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Activity6 - Preview</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .info {
      margin-bottom: 8px;
    }
    .field-name {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Form Submission Preview</h1>

  <?php
    // A helper function to check if a field is empty
    function checkField($fieldName) {
      if(isset($_POST[$fieldName]) && trim($_POST[$fieldName]) !== "") {
        return $_POST[$fieldName];
      } else {
        return "$fieldName is not provided.";
      }
    }
    
    // For fields that might be arrays (like checkboxes), handle them separately
    function checkArrayField($fieldName) {
      if(!empty($_POST[$fieldName])) {
        // $_POST[$fieldName] will be an array of selected values
        return implode(", ", $_POST[$fieldName]);
      } else {
        return "$fieldName is not provided.";
      }
    }

    // Name
    $name = checkField("name");
    // Username
    $username = checkField("username");
    // Password
    $password = checkField("password");
    // Address
    $address = checkField("address");
    // Country
    $country = checkField("country");
    // ZIP
    $zip = checkField("zip");
    // Email
    $email = checkField("email");
    // Sex (radio)
    // Notice we can also check if 'sex' is set
    if(isset($_POST["sex"]) && $_POST["sex"] !== "") {
      $sex = $_POST["sex"];
    } else {
      $sex = "Sex is not provided.";
    }
    // Languages (checkboxes)
    $languages = checkArrayField("languages");
    // About
    $about = checkField("about");
  ?>

  <div class="info"><span class="field-name">Name:</span> <?php echo htmlspecialchars($name); ?></div>
  <div class="info"><span class="field-name">Username:</span> <?php echo htmlspecialchars($username); ?></div>
  <div class="info"><span class="field-name">Password:</span> <?php echo htmlspecialchars($password); ?></div>
  <div class="info"><span class="field-name">Address:</span> <?php echo htmlspecialchars($address); ?></div>
  <div class="info"><span class="field-name">Country:</span> <?php echo htmlspecialchars($country); ?></div>
  <div class="info"><span class="field-name">ZIP Code:</span> <?php echo htmlspecialchars($zip); ?></div>
  <div class="info"><span class="field-name">Email:</span> <?php echo htmlspecialchars($email); ?></div>
  <div class="info"><span class="field-name">Sex:</span> <?php echo htmlspecialchars($sex); ?></div>
  <div class="info"><span class="field-name">Languages:</span> <?php echo htmlspecialchars($languages); ?></div>
  <div class="info"><span class="field-name">About:</span> <?php echo nl2br(htmlspecialchars($about)); ?></div>

  <p><a href="Activity6.php">Go back to the form</a></p>
</body>
</html>