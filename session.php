<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("mydb", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['form_element_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select student_email from form_element where student_email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$form_element_session =$row['student_email'];
if(!isset($form_element_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>