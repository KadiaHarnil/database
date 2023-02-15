<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body i{
            font-size:41px;
        }
    </style>
</head>
    <?php 
        $qry="select *from approved where status='pending'";
        $result=$conn->query($qry);
        $ctn=mysqli_num_rows($result);
        // $row= $result->fetch_assoc();
        
    ?>
<body>

<i class="bi bi-people bi--8xl"></i> <span class="badge text-bg-secondary"><?php echo $ctn?></span>
    <h1>Pending List</h1>
<table class="table table-dark">
  <thead class="table-light">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
      <th scope="col">Approved/Reject</th>
    </tr>
  </thead>
<?php
    $qry="select * from approved where status='pending'";
    $result=$conn->query($qry);
    while($row=$result->fetch_assoc()){
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['subject'];?></td>
      <td><?php echo $row['text'];?></td>
      <td><?php echo $row['status'];?></td>
      <td>
        <form action="app.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <input type="submit" value="Approve"name="approve">
            <input type="submit" value="Reject"name="reject">
        </form>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table> 
<?php
    if(isset($_POST['approve']))
    {
        $id=$_POST['id'];
        echo $id;
        $qry="update approved set status='approve' where id='$id'";
        $result=$conn->query($qry);
        header("location:app.php");
    }
    if(isset($_POST['reject']))
    {
        $id=$_POST['id'];
        echo $id;
        $qry="update approved set status='reject' where id='$id'";
        $result=$conn->query($qry);
        header("location:app.php");
    }
?>
<h1>Approved List</h1>
<table class="table table-dark">
  <thead class="table-light">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
<?php
    $qry="select * from approved where status='approve'";
    $result=$conn->query($qry);
    while($row=$result->fetch_assoc()){
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['subject'];?></td>
      <td><?php echo $row['text'];?></td>
      <td><?php echo $row['status'];?></td>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<h1>Reject List</h1>
<table class="table table-dark">
  <thead class="table-light">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
<?php
    $qry="select * from approved where status='reject'";
    $result=$conn->query($qry);
    while($row=$result->fetch_assoc()){
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['subject'];?></td>
      <td><?php echo $row['text'];?></td>
      <td><?php echo $row['status'];?></td>
      </td>
    </tr>
  </tbody>
  <?php } ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>