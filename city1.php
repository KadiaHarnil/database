<?php
include("config.php");
$state_id=$_POST['id'];
$qry1="select * from cities where state_id=$state_id";
$result=$conn->query($qry1);
?>
<option value="">--Select--</option>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
        <option value="<?= $row['name'];?>"><?= $row['name'];?></option>
    <?php
}
?>
