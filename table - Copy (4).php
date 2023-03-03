<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>

<body>
    <table class="myTable">
        <thead>
            <tr>
                <th>sdfd</th>
                <th>sdfd</th>
                <th>sdfd</th>
                <th>sdfd</th>
            </tr>
        </thead>
        <?php
            $conn=mysqli_connect("localhost","root","","dbdemo");
            $qry="select * from emp";
            $result=$conn->query($qry);
            while($row=$result->fetch_assoc())
            {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['eno']?></td>
                <td><?php echo $row['ename']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['dname']?></td>
                <td><?php echo $row['dname']?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('.myTable').DataTable();
        });
    </script>
</body>

</html>