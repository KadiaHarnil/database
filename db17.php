<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['btn']))
    {   
        $name=$_POST['txtname'];
        $sel=$_POST['txtsel'];
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $qry="INSERT INTO `prat`(`name`, `selects`) VALUES ('$name','$sel')";
        $result=$conn->query($qry);
        if($result)
        {
            echo "Added Successfully....";
        }
        else{echo "failed";}
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txtname">
        <select name="txtsel">
            <option >--Select Option--</option>
            <option value="Maths">Maths</option>
            <option value="Social Science">Social Science</option>
            <option value="Science">Science</option>
        </select>
        <input type="submit" name="btn" value="submit">
    </form>
</body>
</html>