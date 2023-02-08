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
        $table="<table border='10'><th>EmpID</th><th>EName</th><th>Gender</th><th>Salary</th><th>DName</th>";
        $con=mysqli_connect("localhost","root","","dbdemo");
        $result=$con->query("select * from emp");
        $cnt=mysqli_num_rows($result);
        echo "$cnt <br>";
        while($row=$result->fetch_assoc())
        {
            $id = $row['eno'];
            $name = $row['ename'];
            $gen = $row['gender'];
            $sal = $row['salary'];
            $dname = $row['dname'];

            $table.="<tr><td>$id</td> <td>\t$name</td> <td>\t$gen</td> <td>\t$sal</td> <td>\t$dname</td>";
        }
        // $table.="</table>";
        echo $table;
    ?>
</body>
</html>