<?php
//creating a session unlike a cookie, the information is not stored on the users computer.
//create with session id
// Start the session
session_start();
session_id( 'SessionId' );
session_start();
$id = session_id();
echo "Session id is " . $id . "<br>";
//set session variables
$_SESSION["name"] = "php";
$_SESSION["color"] = "blue";
//unset all session variables
//session_unset(); 
// destroy the session 
//session_destroy(); 
//echo "Session is destroyed";
?>