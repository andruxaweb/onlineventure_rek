<?php

require_once '../connect.php';
$Author=$_POST['Author'];
$Title=$_POST['Title'];
$Text=$_POST['Text'];
$Date=date('Y-m-d H:i:s');
mysqli_query($connect,"INSERT INTO `newslist` (`Id`, `Author`, `Title`, `Text`, `Date`) VALUES (NULL, '$Author', '$Title', '$Text', '$Date')");
header('Location: ../index.php')
 ?>
 
