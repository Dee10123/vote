<?php
include_once("connection.php");

$select_Query = "SELECT * FROM `user1`";
$result = mysqli_query($connect, $select_Query);

if (!$result) {
    die("Database query failed: " . mysqli_error($connect));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 300px;
            display:fixed;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
        }

        a:hover {
            background-color: #45a049;
        }
        .button1 {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
  }

  .button1:hover {
    background-color: #45a049;
  }
    </style>
</head>
<body>

<h1>Registered Users</h1>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Nationality</th>
        <th>Status</th>
        <th>Gender</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['age']}</td>";
        echo "<td>{$row['birthday']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['contact']}</td>";
        echo "<td>{$row['nationality']}</td>";
        echo "<td>{$row['status']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "</tr>";
    }
    ?>
</table>

<a href="index.php" class="button1">Back to Registration Form</a>

</body>
</html>