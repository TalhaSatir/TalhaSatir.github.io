<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />  
  <title>Activity6 - Preview</title>
</head>
<body>
  <h1>Form Submission Preview</h1>

  <?php
    function checkField($fieldName) {
      if(isset($_POST[$fieldName]) && trim($_POST[$fieldName]) !== "") {
        return $_POST[$fieldName];
      } else {
        return "$fieldName is not provided.";
      }
    }
    function checkArrayField($fieldName) {
      if(!empty($_POST[$fieldName])) {

        return implode(", ", $_POST[$fieldName]);
      } else {
        return "$fieldName is not provided.";
      }
    }

    $name = checkField("name");
    $username = checkField("username");
    $password = checkField("password");
    $address = checkField("address");
    $country = checkField("country");
    $zip = checkField("zip");
    $email = checkField("email");
    if(isset($_POST["sex"]) && $_POST["sex"] !== "") {
      $sex = $_POST["sex"];
    } else {
      $sex = "Sex is not provided.";
    }
    $languages = checkArrayField("languages");
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
