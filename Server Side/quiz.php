<?php require ('connect.php'); ?>

<?php

   $user = $_POST['user'];
   $id = $_POST['id'];
   $usr_ans = $_POST['usr_ans'];
   
   $query = "select * from `upload` where `user` = '$user'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row = mysqli_fetch_array($result);
   $table = $row['quizinfoid'];
   
   $cor_ans =NULL;
   $chk = NULL;
   

   if($id != NULL){
   
   $query  = "select * from `questions` where `id` = $id";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row    = mysqli_fetch_array($result);
   $cor_ans = $row['correctOp'];
    
   $chk = 'N';
   if($cor_ans == $usr_ans)
      $chk='Y';
   $tm = date("d/m/Y");
   $query = "insert into `$table` (`id`,`time`,`correct`) values ('$id','$tm','$chk')";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));

   }


   retry :
   $query  = "select * from `questions` order by rand() limit 1";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row    = mysqli_fetch_array($result);
   $fetched_id = $row['id'];
   $query  = "select * from `$table` where id = '$fetched_id'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $co        =mysqli_num_rows($result);
   
   if($co > 0)
   {
    goto retry;
   }

    $returnvar  = new \stdClass(); 
    $returnvar->question = $row['question'];
    $returnvar->opA = $row['opA'];
    $returnvar->opB = $row['opB'];
    $returnvar->opC = $row['opC'];
    $returnvar->opD = $row['opD'];
    $returnvar->id = $row['id'];
    $returnvar->correctOp =$cor_ans;
    $returnvar->chk = $chk;

    $returnvarjson = json_encode($returnvar);
    echo $returnvarjson;
?>