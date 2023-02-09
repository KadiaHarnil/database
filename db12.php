<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $a='';
    if(isset($_POST['btn']))
    {
        $a=$_POST['txt'];
        $conn=mysqli_connect("localhost","root","","member");
        $qry="delete from member_table where mid='$a'";
        $result=$conn->query($qry);
        if($result)
        echo "Data from table deleted";
        else    
        echo "failed";
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txt" placeholder="Enter id">
        <input type="submit" name="btn">
    </form>
</body>
</html>