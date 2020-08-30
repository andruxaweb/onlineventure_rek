<?php
require_once '../connect.php';
$response = array();
if($connect){
  $sql="SELECT `Author`, count(`Author`),`Date` FROM `newslist` WHERE Date> (CURRENT_DATE-7) GROUP BY `Author` ORDER BY count(`Author`) DESC LIMIT 3";
  $result=mysqli_query($connect,$sql);
  if($result){
    header('Content-Type: application/json');
    $i=0;
    while ($row=mysqli_fetch_assoc($result)) {
      $response[$i]['Author']=$row['Author'];
      $response[$i]['count_Author']=$row['count(`Author`)'];
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
