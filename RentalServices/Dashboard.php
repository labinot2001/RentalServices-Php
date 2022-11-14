
<html>
<head>
<title>Dashboard</title>
        <link rel="stylesheet" href="dashboar.css" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
</head>
<?php
require_once 'Mapper.php';


?>
<body>
    <main>

<h1 style="color:green; margin-left:600px;">Dashboard</h1>

<h1 style="color:green;margin-left:170px;margin-top:100px;">UsersList</h1>
<div id="userlist">
<table border="4"style="color:green; display:flex; justify-content:center; ">

<tr>
    <th>ID</th>
<th>Name</th>
<th>Emaill</th>
<th>Password</th>
<th>Role</th>
<th>Delete user </th>

</tr>

<?php

$mapperi=new Mapper();
$userat=$mapperi->getAllUsers();
foreach($userat as $user){
    ?>
    <tr>
     <td><?php echo $user['id'];?></td>
    <td><?php echo $user['name']?></td>
    <td><?php echo $user['email'];?></td>
    <td><?php echo $user['password'];?></td>
    <td><?php echo $user['role'];?></td>
    <td><a href=<?php echo"delete.php?ID=".$user['id'];?>>---Delete---</td>
        
    </tr>
<?php
}
?>



<?php

?>

   

</table>
</div>
<div style="height:300px;"> </div>

</main>
</body>
<?php

?>


