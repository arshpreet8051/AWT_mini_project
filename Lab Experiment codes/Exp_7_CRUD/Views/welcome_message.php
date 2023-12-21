<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form method="POST" action="<?php echo site_url('Home/insert'); ?>">
    <label><b>Name : </b></label>
    <input type="text" name="name"><br/><br/>
    <label><b>Email : </b></label>
    <input type="email" name="email"><br/><br/>
    <label><b>Password : </b></label>
    <input type="password" name="user_password"><br/><br/>
    <input type="submit" name="submit" value="Insert">
  </form>
</body>
</html>