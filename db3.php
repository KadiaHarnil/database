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
    $b='';
    $prt='';
        if(isset($_POST['btn']))
        {   
            $a=$_POST['txtno1'];
            $b=$_POST['txtno2'];
            $con=mysqli_connect("localhost","root","","dbdemo");
            $result=$con->query("select * from emp where salary between $a and $b");
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
            else    $prt="No record found";
        }
    ?>
    <form action="" method="post">
        <span>Range 1</span><input type="text" name="txtno1" value="<?php echo$a?>">
        <span>Range 2</span><input type="text" name="txtno2" value="<?php echo$b?>">
        <input type="submit" name="btn">
        <?php echo $prt;?>
    </form>
</body>
</html>