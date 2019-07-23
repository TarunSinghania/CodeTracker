<?php require ('connect.php'); ?>

<?php
   $email = $_POST['email'];
   $password = $_POST['pass'];
   $password = filter_var($password);
   $password = hash("sha256",$password);
   $returnvar  = new \stdClass();
   
   $tableid = uniqid(rand(0,100));
   $tableid2 = uniqid(rand(100,200));
  

 
   
   $query2b = "create table `$tableid2`(`id` int,`time` varchar(255),`correct` char(1))";
   $result2b = mysqli_query($con,$query2b) or die(mysqli_error($con));

   $query = "insert into upload(`user`,`tableId`,`quizinfoid`) values('$email','$tableid','$tableid2')";
   $result3 = mysqli_query($con,$query) or die(mysqli_error($con));
    
   $query = "Insert into user(`user`,`password`,`rating`) values('$email','$password','1500')";
   $result1 = mysqli_query($con,$query) or die(mysqli_error($con));

   $query = "create table `$tableid`(`link` varchar(255) primary key,`tag` varchar(255),`time` varchar(255),`status` varchar(255))";
   $result2 = mysqli_query($con,$query) or die(mysqli_error($con));




   if($result1==true&&$result2==true&&$result3==true&&$result2b==true)
   { // session_start();
      //$_SESSION['user'] = $email;
   $returnvar->status = "success";
   $returnvarjson = json_encode($returnvar);
   echo $returnvarjson;
   }
   else
   {
      $returnvar->status = "system_error please_try_again";
      $returnvarjson = json_encode($returnvar);
      echo $returnvarjson;
   }


   ?>