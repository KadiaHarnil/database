<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['submit']))
    {
        $sub=$_POST['txtsub'];
        $text=$_POST['txtarea'];
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $qry="insert into approved values('','$sub','$text','pending')";
        $result=$conn->query($qry);
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txtsub"><br><br>
        <textarea name="txtarea" id="" cols="30" rows="10">
        </textarea>
        <input type="submit" name="submit">
    </form>
</body>
</html>