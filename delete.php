<?php
require_once("dbconnection.php");

$id = $_GET['id'];

//print $id;

$queary = "DELETE FROM student WHERE S_ID = '$id'";

$result = mysqli_query($connection, $queary);

if ($result) {
   "Student with ID $id Deleted successfuly";
}
