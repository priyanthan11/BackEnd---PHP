<html>

<head>
  <title> View Student</title>
</head>

<body>
  <table border="1">
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Address</td>
      <td>Payment</td>
      <td>Delete</td>

    </tr>
    <?php
    // db connection
    require_once("dbconnection.php");

    // Create quary for select values
    $query = "SELECT * FROM  student";
    // execute quary
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {

    ?>
      <tr>
        <td><?php print $row['S_ID']; ?></td>
        <td><?php print $row['S_Name']; ?></td>
        <td><?php print $row['S_Address']; ?></td>
        <td><?php print $row['S_Payment']; ?></td>
        <td><a href="delete.php?id=<?php print $row['S_ID']; ?>">Delete</a></td>
      </tr>

    <?php

    }

    ?>
  </table>
</body>

</html>