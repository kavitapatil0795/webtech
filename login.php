<?php 
session_start();
//connection to database no password for mysql
$con=mysqli_connect("localhost","root","root","testingdatabase");
if(!$con)
{
echo 'connection is not estalished';
}
//getting values from ajax
$name =$_POST['username'];
//storing value in session so that i can access anywhere
$_SESSION['name']=$name;
$pass=$_POST['password'];
echo $pass;
//query to database
$sql="select * from form where firstname='$name' and password='$pass'";
               //result from db
//query to fetch imag from db
 $result=mysqli_query($con,$sql);

$rows=mysqli_num_rows($result);
// converting result in object to string so that i can access
$row = mysqli_fetch_assoc($result);
	if($rows<=0)
      {
         //values return to ajax callback function
	echo 0;
      }
	else 
	{
      echo 1;
      }
?>