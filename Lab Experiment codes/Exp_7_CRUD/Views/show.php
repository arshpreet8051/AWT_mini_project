<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users data</title>
  <style>
    table,td,th{
      border-collapse: collapse;
      font-size: 20px;
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
  <table border='1px' cellpadding="6px" cellspacing="2px">
    <tr>
      <th>User Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Delete</th>
      <th>Edit</th>
    </tr>
    <?php foreach($users as $user){?>
      <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['password']; ?></td>
        <td><a href="<?php echo base_url(); ?>Home/delete/<?php echo $user['id']; ?>">Delete</a></td>
        <td><a href="<?php echo base_url(); ?>Home/edit/<?php echo $user['id']; ?>">Edit</a></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>