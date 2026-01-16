<?php
function Get_All_Users(){
include 'connect_db.php';
$query = $connect->prepare("SELECT * FROM `user_tbl` ORDER BY Name ASC");
$query->execute();
foreach ($query as $user_row) {
 $user_id = $user_row['UserID'];
 $user_name = $user_row['Name'];
 $user_email = $user_row['Email'];
 $userdob = $user_row['DateofBirth'];
 $user_gender = $user_row['Gender'];
 $user_country = $user_row['Country'];
 echo "
 <tr>
 <td class='users_td'>$user_id</td>
 <td class='users_td'>$user_name</td>
 <td class='users_td'>$user_email</td>
 <td class='users_td'>$userdob</td>
 <td class='users_td'>$user_gender</td>
 <td class='users_td'>$user_country</td>
 </tr>";
}
}
?>