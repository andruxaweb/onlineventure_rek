<?php
require_once '../connect.php';
$response = array();
if($connect){
  $sql="SELECT * FROM `newslist`";
  $result=mysqli_query($connect,$sql);
  if($result){
    header('Content-Type: application/json');
    $i=0;
    while ($row=mysqli_fetch_assoc($result)) {
      $response[$i]['Id']=$row['Id'];
      $response[$i]['Author']=$row['Author'];
      $response[$i]['Title']=$row['Title'];
      $response[$i]['Text']=$row['Text'];
      $response[$i]['Date']=$row['Date'];
      $i++;
    }
  echo json_encode($response);
  }
}
else{
  echo 'db connection failed';
}

 ?>
