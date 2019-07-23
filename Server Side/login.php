<?php require ('connect.php'); ?>
<?php
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $pass = filter_var($pass);
   $pass = hash("sha256",$pass);
  // echo $user;
   //echo $pass;
   $query = "select * from user where user='$user' and password='$pass'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $count = mysqli_num_rows($result);
   if($count!=0)
   {
   
      $returnvar  = new \stdClass();
      $returnvar->status = "success";
      $returnvar->name = "user";
      
      $returnvarjson = json_encode($returnvar);
      echo $returnvarjson;
   }
   else
   {
       $returnvar  = new \stdClass();
       $returnvar->status = "fail";
      $returnvar->name = "user";
      $returnvarjson = json_encode($returnvar);
      echo $returnvarjson;
   }
?>