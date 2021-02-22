<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="web2";
 
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{

echo " ";
}
else
{
	echo"no connection";
}



?>