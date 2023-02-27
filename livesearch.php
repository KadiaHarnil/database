<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <input type="text" class="container" id="search" placeholder="Search..">
    <table class="table container" id="livesearch">
  <thead>
    <tr>
      <th scope="col">ename</th>
      <th scope="col">gender</th>
      <th scope="col">salary</th>
      <th scope="col">dname</th>
    </tr>
  </thead>
  <?php
  include("config.php");
  $qry="select * from emp";
  $result=$conn->query($qry);
  while($row=$result->fetch_assoc())
  {
  ?>
  <tbody>
    <tr>
      <td><?php echo $row['ename'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['salary'];?></td>
      <td><?php echo $row['dname'];?></td>
    </tr>
</tbody>
<?php } ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            var input=$(this).val();
            // alert(input);
            $.ajax({
                url:"searchquery.php",
                method:"POST",
                data:{input:input},
                success:function(data){
                    $("#livesearch").html(data);
                }
            });
        });
    });
</script>
</body>
</html>