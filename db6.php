<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>databse:6</title>
</head>

<body>
    <?php
    $a = '';
    $b = '';
    if (isset($_POST['btn'])) {

        $a = $_POST["txtno"];

        $cnn = mysqli_connect("localhost", "root", "", "dbdemo");
        $qry = "SELECT * FROM employee WHERE Gender = '$a'";
        // echo $qry;
        $result = $cnn->query($qry);
        $cnt = mysqli_num_rows($result);

        if ($cnt > 0) {

            $tbl = " <table border='2'><tr><th>Eid</th><th>emname</th><th>gender</th><th>salary</th><th>department</th></tr>";
            while ($row = $result->fetch_assoc()) {
                $eid = $row['EMpid'];
                $ename = $row['Emname'];
                $ge = $row['Gender'];
                $sal = $row['salary'];
                $de = $row['department'];

                $tbl .= "<tr><td>$eid</td><td>$ename</td><td>$ge</td><td>$sal</td><td>$de</td></tr>";
            }
            $tbl .= "</table>";

            echo "$tbl total no $cnt";
        }
    }
    ?>

    <form action="" method="post">

        <span>Male:</span><input type="radio" name="txtno" id="" value="Male">
        <span>Female:</span><input type="radio" name="txtno" id="" value="female">
        <input type="submit" value="submit" name="btn">


    </form>


</body>

</html>