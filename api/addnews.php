
 <?php
  require_once '../connect.php';
  $response = array();
  $Author=$_POST['Author'];
  $Title=$_POST['Title'];
  $Text=$_POST['Text'];
  $Date=date('Y-m-d H:i:s');
  if(empty($Author) && empty($Title)&& empty($Text)){
    header('Location: ../');
  }
  else{
    $sql="INSERT INTO `newslist` (`Author`, `Title`, `Text`, `Date`) VALUES ('$Author', '$Title', '$Text', '$Date')";
    if (mysqli_query($connect, $sql)) {
      $response['Author']=$Author;
      $response['Title']=$Title;
      $response['Text']=$Text;
      $response['Date']=$Date;
  		echo json_encode($response);
      header('Location: ../');
  	}
  }
?>
