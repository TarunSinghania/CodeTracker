<?php require ('connect.php'); ?>

<?php
   //session_start();
   $user = $_POST['user'];
   $query = "select * from upload where user = '$user'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row = mysqli_fetch_array($result);
   $table = $row['tableId'];
   $query = "select * from `$table` where status = 'SOLVED'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $data = mysqli_fetch_array($result);
  
  $flag = mysqli_num_rows($result);
  if($flag!=0){
   $post_data = array('solved_links' => array($data['link']),$data['link'] => array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']),"count"=>1);}
   else
   { $post_data = array('solved_links' => array($data['link']),$data['link'] => array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']),"count"=>0);}

   $i =1;
   while($data = mysqli_fetch_array($result))
   {
	   
	   $post_data["solved_links"][$i] = $data['link'];
	   $post_data[$data['link']] = array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']);
	   $post_data["count"] = $i+1;
	   $i++;
   }
   /*$post_data = array('added_links' => $added_links,
    'tags' => $tag,
    'time_solved' => $time_solved,
    'status' => $status);*/
   $json = json_encode($post_data, JSON_FORCE_OBJECT);
   echo $json;
?>