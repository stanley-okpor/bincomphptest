<?php
//creating login credentials
$host="localhost";
$user_name="xinfocom_stanley";
$pass_word="@bincomphptest";
$database_name="xinfocom_bincomphptest";
$connection=mysqli_connect($host,$user_name,$pass_word,$database_name);
if($connection){
    //testing for connection
   // echo "Connected successfully";

} else{
    //display error message if any.
    die($connection->errno());
}

?>