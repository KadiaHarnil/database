<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn=mysqli_connect("localhost","root","","member");
    $qry="select * from member_table";
    $table="<table border=5><th>MID</th><th>Username</th><th>Password</th><th>Date</th><th>Lastname</th><th>FirstName</th><th>Edit</th><th>Delete</th></tr>";
    $result=$conn->query($qry);
    while($row=$result->fetch_assoc())
    {
        $mid=$row['mid'];
        $us=$row['username'];
        $pwd=$row['password'];
        $dat=$row['date'];
        $fnam=$row['fname'];
        $lnam=$row['lname'];
        $table.="<tr><td>$mid</td><td>$us</td><td>$pwd</td><td>$dat</td><td>$fnam</td><td>$lnam</td>
        <td><a href='MemberEdit.php?id=$mid'>Change</a></td><td><a href='Memberdelete.php?id=$mid'>Delete</a></td></tr>";
    }
    echo $table;
?>
</body>
</html>