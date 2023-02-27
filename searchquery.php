<?php
    // echo "hello";
    include("config.php");
    $input=$_POST['input'];
    $output="";
    $qry="select * from emp where ename like '%{$input}%'";
    $result=$conn->query($qry);
    if(mysqli_num_rows($result)>0){
        $output="<thead>
        <tr>
          <th>ename</th>
          <th>gender</th>
          <th>salary</th>
          <th>dname</th>
        </tr>
      </thead>
      <tbody>";
      while($row=$result->fetch_assoc())
      {
        $name = $row['ename'];
        $gen = $row['gender'];
        $sal = $row['salary'];
        $dname = $row['dname'];
        $output.="
        <tr>
            <td>$name</td>
            <td>$gen</td>
            <td>$sal</td>
            <td>$dname</td>
        </tr>";
      }
      $output.="</tbody>";
      echo $output;
    }
    else{
        echo "no record found"; 
    }
?>