<?php
include_once("config.php"); // your DB connection file

$query = "SELECT * FROM users ORDER BY user_id DESC";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Users</title>
  <style>
    body { font-family: Arial, sans-serif; background: #121212; color: #fff; }
    table { width: 90%; margin: 40px auto; border-collapse: collapse; }
    th, td { padding: 12px; border-bottom: 1px solid #555; text-align: left; }
    th { background: #ff6b00; color: #fff; }
    tr:hover { background: #1e1e1e; }
    h2 { text-align: center; color: #ff6b00; }
  </style>
</head>
<body>

<h2>Registered Users</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date Registered</th>
  </tr>

  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?php echo $row['user_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo date("d M Y, h:i A", strtotime($row['date_registered'])); ?></td>
  </tr>
  <?php } ?>

</table>

</body>
</html>
