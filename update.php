<?php

 require_once 'connect.php';


 if (empty($_GET['id'])){
 }else{
   $newsId=$_GET['id'];
   $news=mysqli_query($connect,"SELECT * FROM `newslist` WHERE `id`='$newsId'");
   $news=mysqli_fetch_assoc($news);

 ?>
    <div class="updateNews">
      <h3>Update the news</h3>
      <form action="api/update.php" method="post">
        <input type="hidden" name="Id" value="<?=$news['Id']?>">
        <p>Author:</p>
        <input type="text" name="Author" value="<?=$news['Author']?>">
        <p>Title:</p>
        <input type="text" name="Title" value="<?=$news['Title']?>">
        <p>Text</p>
        <textarea name="Text"><?=$news['Text']?></textarea> <br> <br>
        <button type="submit" class="updateNews">Update</button>
      </form>
    </div>
<?php
}
 ?>
