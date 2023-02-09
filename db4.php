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
        $a='';
        $prt="";
        if(isset($_POST['btn'])) //if we press submit btn then and only this condition will executed
        {   
            $a=$_POST['txtno1'];
            $con=mysqli_connect("localhost","root","","dbdemo");
            $result=$con->query("select * from emp where ename like '$a%' ");
            $table="<table border='5'><th>EmpID</th><th>Ename</th><th>Gender</th><th>Salary</th><th>DName</th>";
            $cnt=mysqli_num_rows($result);
            if($cnt>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $id = $row['eno'];
                    $name = $row['ename'];
                    $gen = $row['gender'];
                    $sal = $row['salary'];
                    $dname = $row['dname'];
                    $table.="<tr><td>$id</td><td>$name</td><td>$gen</td><td>$sal</td><td>$dname</td></tr>";
                }
                echo $table;
            }
            else $prt="No record Found";
        }
    ?>
    <form action="" method="post">
        <span>Enter Starting letter:</span><input type="text" name="txtno1" value="<?php echo $a;?>">
        <input type="submit" name="btn"><br>
        <?php echo $prt;?>
    </form>
</body>
</html>