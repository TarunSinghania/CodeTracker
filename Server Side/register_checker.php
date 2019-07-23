<?php require ('connect.php'); ?>

<?php
   function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
   $returnvar  = new \stdClass();
   $email = test_input($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   // "Invalid email format"; 
         $returnvar->status = "fail";
         $returnvar->reason = "Invalid email";
         goto ex;
   }
   $query = "select * from user where user='$email'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $count = mysqli_num_rows($result);
   $returnvar  = new \stdClass();
   if($count!=0)
   {
      $returnvar->status = "fail";    
      $returnvar->reason = "Email Id exists";          
   }
   else
   {
      $returnvar->status = "success";    
   }
    ex:
    $returnvarjson = json_encode($returnvar);
      echo $returnvarjson;
?>