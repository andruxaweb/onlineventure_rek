<?php
require_once '../connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
$response = array();

if (empty($_GET['id'])){

   echo $_GET['id'] ;
}
else{
  $id=$_GET['id'];
  $sql="DELETE FROM `newslist` WHERE `newslist`.`Id` = $id";
  $result=mysqli_query($connect,$sql);
    if($result){
        echo json_encode($response);
        header('Location: ../');
    }
  else{
    echo 'db connection failed';
  }
}

?>
