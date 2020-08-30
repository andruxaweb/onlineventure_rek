 <?php
 require_once '../connect.php';
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: PUT');
 $response = array();
 $id=$_POST['Id'];
 if (empty($id)){

 }
 else{
   $Author=$_POST['Author'];
   $Title=$_POST['Title'];
   $Text=$_POST['Text'];
   $Date=date('Y-m-d H:i:s');
   $sql="UPDATE `newslist` SET `Author` = '$Author', `Title` = '$Title', `Text` = '$Text' WHERE `newslist`.`Id` = '$id'";
   $result=mysqli_query($connect,$sql);
     if($result){
         $response['Author']=$Author;
         $response['Title']=$Title;
         $response['Text']=$Text;
         $response['Date']=$Date;
         echo json_encode($response);
         header('Location: ../');
     }
   else{
     echo 'db connection failed';
   }
 }

 ?>
