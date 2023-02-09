<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $eno=$_GET['id'];
    if(isset($_POST['btn']))//if we press submit btn then and only this condition will executed
    {
        $enam=$_POST['txtname'];
        $gen=$_POST['txtgen'];
        $sal=$_POST['txtsal'];
        $dnam=$_POST['txtdname'];
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $qry="update emp set ename='$enam',gender='$gen',salary='$sal',dname='$dnam' where eno=$eno";
        $result=$conn->query($qry);
        if($result)
            {
                header("location:db15.php");
            }
        else
        echo"<script>alert('Data Failed to added');</script>";
    }
    $conn=mysqli_connect("localhost","root","","dbdemo");
    $qry="select * from emp where eno=$eno";
    $result=$conn->query($qry);
    $row=$result->fetch_assoc();
    $ename=$row['ename'];
    $gen=$row['gender'];
    $sal=$row['salary'];
    $dname=$row['dname'];
?>
<body>
    <form action="" method="post">
        <span>ename</span><input type="text" name="txtname" value="<?php echo $ename;?>">
        <span>gender</span><input type="text" name="txtgen" value="<?php echo $gen;?>">
        <span>salary</span><input type="text" name="txtsal" value="<?php echo $sal;?>">
        <span>dname</span><input type="text" name="txtdname" value="<?php echo $dname;?>">
        <input type="submit" name="btn" onclick="return mybtn()">
    </form>
    <script>
        function mybtn() {
            alert("Data added successfully");
        }
    </script>
</body>
</html>