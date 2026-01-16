<!DOCTYPE html>
 <html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>User Table</title>
 <style type="text/css">
body{
    background: gray;
}
 .tables{
 width:100%;
 border:2px solid green;
 border-collapse: collapse #FFC312;
;
 }
 .users_thead, .users_tr, .users_th, .users_tbody, .users_td{
 border: 2px solid #FFC312;
 background-color: rgba(0,0,0,0.5) !important;
 color: white;
 }

 </style>
</head>
<body>
    <?php include 'controller.php'; ?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/
jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css"/>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <center><h2 style= "color:white; font-size: 50px;">Users List</h2></center>
 <table class="tables" id= "myTable">
 <thead class="users_thead">
 <tr class="users_tr">
 <th class="users_th">User ID</th>
 <th class="users_th">Name</th>
 <th class="users_th">Email</th>
 <th class="users_th">Date of Birth</th>
 <th class="users_th">Gender</th>
 <th class="users_th">Country</th>
 </tr>
 </thead>
 <tbody class="users_tbody">
<?php Get_All_Users(); ?>
 </tbody>
 </table>
 <script type = "text/javascript">
    $('#myTable').DataTable();
    </script>
</body>
</html>