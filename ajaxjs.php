<!DOCTYPE html>
<html>
<body>
<form action="indeximg.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload Profile Pic</button>
</form>
<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$contact2 = $_POST['contact1'];
$connection = mysql_connect("localhost","root",""); // Establishing Connection with Server..
$db = mysql_select_db("mydb", $connection); // Selecting Database
if (!$connection) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully     ";
if (isset($_POST['name1'])) {
$query = mysql_query("INSERT INTO form_element(student_name, student_email, student_password, student_contact) VALUES ('$name2', '$email2', '$password2','$contact2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>
</body>
</html>