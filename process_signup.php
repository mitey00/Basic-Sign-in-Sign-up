<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$birthdate = $_POST["birthdate"];
$gender = $_POST["gender"];
$country = $_POST["country"];
include 'connect_db.php';
$query = $connect->prepare("
 INSERT INTO `user_tbl`(`Name`, `Email`, `Password`,
`ConfirmPassword`, `DateofBirth`, `Gender`, `Country`)
VALUES ('$name', '$email', '$password', '$confirm_password',
 '$birthdate', '$gender', '$country')
");
$query->execute();
if($query){
echo '<script>alert("The data has been successfully added to the database.")</script>';
header("location: http://localhost/Grajo_CRUD/index.php")
}
else{ 
echo "Error in communication. Please try again";
}

?>