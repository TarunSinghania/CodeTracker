<?php require ('connect.php'); ?>
<?php
  $user = $_POST['user'];
  $query = "select * from upload where user = '$user'";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $table = $row['tableId'];
  $query = "delete from `$table`";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
  $returnvar  = new \stdClass();
  $returnvar->status = "success";
  $returnvarjson = json_encode($returnvar);
  echo $returnvarjson;
?>