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
        $conn=mysqli_connect("localhost","root","","dbdemo");
        $qry="SELECT * FROM emp";
        $result=$conn->query($qry);
        $table="<table border=5><th>ENo</th><th>EName</th><th>Gender</th><th>Salary</th><th>DName</th><th>Edit</th><th>Delete</th>";
        while($row=$result->fetch_assoc())
        {
            $eno=$row['eno'];
            $enam=$row['ename'];
            $gen=$row['gender'];
            $sal=$row['salary'];
            $dnam=$row['dname'];
            $table.="<tr><td>$eno</td><td>$enam</td><td>$gen</td><td>$sal</td><td>$dnam</td><td><a href='edit.php?id=$eno'>Edit</td><td><a href='delete.php?id=$eno' onclick='return myfun()'>Delete</td></tr>";
        }
        echo $table;
    ?>
    <script>
        function myfun(){
            confirm("Are you sure you want to delete data.....");
        }
    </script>
</body>
</html>