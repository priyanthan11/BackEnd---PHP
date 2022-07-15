<?php
$id = $_GET['id'];
$name = $_GET['fName'];
$address = $_GET['address'];
$payment = $_GET['payment'];

require_once("dbconnection.php");

// Create the quary
$query = "INSERT INTO student VALUES ('$id','$name','$address','$payment')";
$result = mysqli_query($connection,$query);
if($result)
{

  print "Data insert Successfully";
  

}
else
{
  echo "Error: ".$query. "<br>" . mysqli_error($connection);
}



//mysqli_close($connection);
?>
<a href="InsertStudent.php"> go back</a>