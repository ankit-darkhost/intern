<?php
include "connection.php";
$id=$_GET["id"];
$name="";
$age="";
$city="";
$res=mysqli_query($link,"select * from table1 where id=$id");
while($row=mysqli_fetch_array($res))
{
  $name=$row["name"];
  $age=$row["age"];
  $city=$row["city"];

}
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
  <div class="col-lg-4">
  <h2>Basic Form</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name; ?>">
    </div>

    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $age; ?>">
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $city; ?>">
    </div>
    

    
     <button type="submit" name="update" class="btn btn-default">Update</button>
      
  </form>
</div>
</div><br><br>

</div></div>

</body>
<?php
if(isset($_POST['update']))
{
  mysqli_query($link,"update table1 set name='$_POST[name]',age='$_POST[age]',city='$_POST[city]' where id=$id");

 ?>
<script type="text/javascript">
  window.location="index.php";
</script>
<?php
 }
?>
</html>

