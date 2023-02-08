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
        $prt='';
        if(isset($_POST['btn']))
        {
            $a=$_POST['txtno1'];
            $con=mysqli_connect("localhost","root","","dbdemo");
            $result=$con->query("select * from emp where eno=$a");
            $table="<table border='5'><th>EmpID</th><th>EName</th><th>Gender</th><th>Salary</th><th>DName</th>";
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
                    $table.="<tr><td>$id</td> <td>\t$name</td> <td>\t$gen</td> <td>\t$sal</td> <td>\t$dname</td>";
                }
                echo $table;
            }
            else
                $prt="No record found";
        }
    ?>
    <form action="" method="post">
        <span>Employee Id</span><input type="text" name="txtno1" value="<?php echo$a;?>">
        <input type="submit" name="btn">
        <?php echo $prt;?>
    </form>
</body>
</html>