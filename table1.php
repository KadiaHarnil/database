<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css"/>
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css"/>
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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script> 
<script>$(document).ready( function () {
    $('.myTable').DataTable();
} );</script>
</body>
</html>