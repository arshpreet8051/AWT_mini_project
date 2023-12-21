<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
</head>
<body>
  <h1>Update Form</h1>
  <form method="POST" action="<?php echo site_url('Home/update'); ?>">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>"><br/><br/>
    <label><b>Name : </b></label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"><br/><br/>
    <label><b>Email : </b></label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"><br/><br/>
    <label><b>Password : </b></label>
    <input type="password" name="password" value="<?php echo $user['password']; ?>"><br/><br/>
    <input type="submit" name="submit" value="Update">
  </form>
</body>
</html>