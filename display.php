<?php
include("config.php");
$qry="SELECT * FROM details INNER JOIN states ON details.state_id=states.id";
$result=$conn->query($qry);
$table="<table border=1><tr><th>City</th><th>State</th></tr>";
while($row=$result->fetch_assoc())
{
    $table.="<tr><td>".$row['city']."</td><td>".$row['name']."</td></tr>";
}
echo $table;
?>