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
        $eno=$_GET['id'];
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $qry="delete from emp where eno=$eno";
        $result=mysqli_query($conn,$qry);
        if($result)
            header("location:db15.php");
        else    
            echo "<script>alert('Failed to delete data');";
    ?>
</body>
</html>