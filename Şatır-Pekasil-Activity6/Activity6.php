<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Activity6 - Registration Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form action="Activity6-preview.php" method="POST">
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" />
    </div>
    <br/>
    
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" />
    </div>
    <br/>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
    </div>
    <br/>
    
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" />
    </div>
    <br/>
    
    <div class="form-group">
      <label for="country">Country:</label>
      <select name="country" id="country">
        <option value="">Please select a country</option>
        <option value="Turkey">Turkey</option>
        <option value="USA">USA</option>
        <option value="Germany">Germany</option>
        <option value="France">France</option>
      </select>
    </div>
    <br/>
    
    <div class="form-group">
      <label for="zip">ZIP Code:</label>
      <input type="text" name="zip" id="zip" />
    </div>
    <br/>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" />
    </div>
    <br/>
    
    <div class="form-group">
      <label>Sex:</label>
      <div class="radio-group">
        <input type="radio" name="sex" value="Male" id="male" />
        <label for="male" style="font-weight:normal;">Male</label>
        <input type="radio" name="sex" value="Female" id="female" />
        <label for="female" style="font-weight:normal;">Female</label>
      </div>
    </div>
    <br/>
    
    <div class="form-group">
      <label>Language:</label>
      <div class="checkbox-group">
        <input type="checkbox" name="languages[]" value="English" id="english" />
        <label for="english" style="font-weight:normal;">English</label>
        <input type="checkbox" name="languages[]" value="French" id="french" />
        <label for="french" style="font-weight:normal;">French</label>
        <input type="checkbox" name="languages[]" value="German" id="german" />
        <label for="german" style="font-weight:normal;">German</label>
      </div>
    </div>
    <br/>
    
    <div class="form-group">
      <label>Language:</label>
      <div class="checkbox-group">
        <input type="checkbox" name="languages[]" value="English" id="english" />
        <label for="english" style="font-weight:normal;">English</label>
        <input type="checkbox" name="languages[]" value="French" id="french" />
        <label for="french" style="font-weight:normal;">French</label>
        <input type="checkbox" name="languages[]" value="German" id="german" />
        <label for="german" style="font-weight:normal;">German</label>
      </div>
    </div>
    <br/>
    
    <div class="form-group">
      <label for="about">About:</label>
      <textarea name="about" id="about"></textarea>
    </div>
    <br/>
    
    <div class="form-group submit-button">
      <input type="submit" value="Submit" />
    </div>
  </form>
</body>
</html>
