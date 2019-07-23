<?php require ('connect.php'); ?>
<?php
   //session_start();
   $user = $_POST['user'];
   $query = "select * from upload where user = '$user'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row = mysqli_fetch_array($result);
   $table = $row['tableId'];
   $query = "select * from `$table` where status = 'PENDING'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $data = mysqli_fetch_array($result);

   $flag = mysqli_num_rows($result);
   $i =1;

  if($flag!=0){
      $post_data = array('added_links' => array($data['link']),$data['link'] => array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']),"count"=>1);
 }
 else
{
     $post_data = array('added_links' => array($data['link']),$data['link'] => array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']),"count"=>0);
}
   while($data = mysqli_fetch_array($result))
   {
	   
	   $post_data["added_links"][$i] = $data['link'];
	   $post_data[$data['link']] = array("status" => $data['status'],"tags"=>$data['tag'],"time_added"=>"","time_solved"=>$data['time']);
	   $post_data["count"] = $i+1;
	   $i++;
   }

   $json = json_encode($post_data, JSON_FORCE_OBJECT);
   echo $json;
?>