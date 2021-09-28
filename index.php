<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project for Internship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  body {
  background: black;

  overflow: visible;

}
h2,h3,label{
  color: whitesmoke;
}
th{
  color: dodgerblue;
}
td{
  color: greenyellow;
}
</style>
<body>

<div class="container">
 
    <div class="col-lg-6 m-auto">
       <div class="card border-info" >
      <div class="card ">
        <div class="card-title ">
          <h1 class="bg-primary text-white text-center">Basic Form</h1>
        </div>
          <div class="card-body">
            <form action="" name="form1" method="POST">
              
              <div class="form-group">
                <label for="email">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>

              <div class="form-group">
                  <label for="pwd">Age:</label>
                  <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
              </div>
              <div class="form-group">
                    <label for="email">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
              </div>
    

    <button type="submit" name="insert" class="btn btn-success">SUBMIT</button>
      </form>
          </div>
      </div>
    </div>
  </div>
</div>
<hr><br><br>
<div class="container">
<div class="col-lg-12">
  
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>CITY</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
$res=mysqli_query($link,"select * from table1");
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["name"]; echo "</td>";
        echo "<td>"; echo $row["age"]; echo "</td>";
          echo "<td>"; echo $row["city"]; echo "</td>";
           echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-primary">Modify</button></a> <?php echo "</td>";
            echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delele</button></a> <?php echo "</td>";
}
      ?>

         </tbody>
  </table>

</div></div>

</body>
<?php
  if(isset($_POST["insert"]))
  {
    mysqli_query($link,"insert into table1 values(NULL,'$_POST[name]','$_POST[age]','$_POST[city]')");
  ?>
  <script type="text/javascript">
    window.location.href=window.location.href;
  </script>
  <?php
  }
  
?>
</html>

