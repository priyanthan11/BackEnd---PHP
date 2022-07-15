<?php
require_once("dbconnection.php");

$id = $_GET['ID'];

print $id;

$queary = "DELETE FROM student WHERE ID = '$id'";

$result = mysqli_query($connection,$queary);

if($result)
{
   "Student with ID $id Deleted successfuly";
}
