<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $limit=6;
        $page=$_GET['page'];
        $offset=($page-1)*$limit;
        $qry="select * from emp limit $offset,$limit";
        $result=mysqli_query($conn,$qry);

        $table="<table border=5><th>ENo</th><th>EName</th><th>Gender</th><th>Salary</th><th>DName</th>";
        while($row=$result->fetch_assoc())
        {
            $eno=$row['eno'];
            $enam=$row['ename'];
            $gen=$row['gender'];
            $sal=$row['salary'];
            $dnam=$row['dname'];
            $table.="<tr><td>$eno</td><td>$enam</td><td>$gen</td><td>$sal</td><td>$dnam</td></tr>";
        }
        echo $table;
    ?>
<body>
        <?php
            $conn1=mysqli_connect("localhost","root","","dbdemo");
            $qry1="select * from emp";
            $result1=mysqli_query($conn1,$qry1);
            $cnt=mysqli_num_rows($result1);
            if($cnt>0)
            {
                $total_row=mysqli_num_rows($result1);
                $total_pages=ceil($total_row/$limit);
                for($i=1;$i<=$total_pages;$i++)
                {
                    echo"<a href='db16.php?page=$i'>$i</a>";
                }
            }
        ?>
</body>
</html>