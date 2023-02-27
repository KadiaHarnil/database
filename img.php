<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $filename='';
   if(isset($_FILES['myfile']))
   {
    echo "<pre>";
    print_r($_FILES['myfile']);
    echo "</pre>";
    $filename=$_FILES['myfile']['name'];
    $temp=$_FILES['myfile']['tmp_name'];
    $extenseion=pathinfo($filename,PATHINFO_EXTENSION);
    if(!in_array($extenseion,['zip','png']))
    {
        echo "not allow";
    }
    move_uploaded_file($temp,"image/".$filename);
            $conn=mysqli_connect("localhost","root","","dbdemo");
            $qry="INSERT INTO `img`(`imgsrc`) VALUES ('$filename')";
            $result=$conn->query($qry);
        
   }
//    include("config.php");
//    $qry1="select * from img";
//    $result1=$conn->query($qry1);
//    $row=$result1->fetch_assoc();
   
?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="">
        <input type="submit">
    </form>
</body>
</html>