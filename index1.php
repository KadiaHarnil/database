<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<?php
include("config.php");
$qry = "select * from states";
$result = $conn->query($qry);
if (isset($_POST['btn'])) {
    $state = $_POST['state'];
    $city = $_POST['city'];
    $qry = "INSERT INTO `details`(`city`, `state_id`) VALUES ('$city','$state')";
    $result = $conn->query($qry);
    if ($result) {
        header("location:index1.php");
    } else {
        echo "failed";
    }
}
?>
    
<body>
    <form action="" method="post">
        <select name="state" id="state">
            <option value="">--Select--</option>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php } ?>
        </select>
        <select name="city" id="city">
            <option value="">--Select--</option>
        </select>
        <input type="submit" name="btn">
    </form>
    <script>
        $(document).ready(function () {
            $('#state').change(function () {
                var id = this.value;
                // console.log(id);
                $.ajax({
                    url: 'city1.php',
                    method: 'POST',
                    data: { id: id },
                    success: function (result) {
                        $('#city').html(result);
                        // console.log(result);
                    }
                });
            });
        });
    </script>
</body>

</html>