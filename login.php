<?php
 if (isset($_POST['login_btn'])) {
 include 'connect_db.php';
 $usernames = $_POST['username'];
 $passwords = sha1($_POST['password']);
 $stmt = $connect->prepare("SELECT * FROM user_tbl WHERE Email = '$'$usernames' AND Password = '$passwords'");
 $stmt->execute();
 if ($stmt->rowCount() > 0) {
 header("Location: http://localhost/Grajo_CRUD/users_list.php");
 exit();
 } else {
 echo "Invalid username or password.";
 }
 }
 $connect = null;
?>