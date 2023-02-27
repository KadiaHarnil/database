<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script> -->
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
</head>

<body>
    <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Office</th>
        
            </tr>
        </thead>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "dbdemo");
        $qry = "SELECT * FROM emp";
        $result = $conn->query($qry);
        
        while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <?php echo $row['eno']; ?>
                    </td>
                    <td>
                        <?php echo $row['ename']; ?>
                    </td>
                    <td>
                        <?php echo $row['gender']; ?>
                    </td>
                    <td>
                        <?php echo $row['salary']; ?>
                    </td>
                    <td>
                        <?php echo $row['dname']; ?>
                    </td>
                </tr>
            <?php } ?>
        
    </table>
</body>

</html>