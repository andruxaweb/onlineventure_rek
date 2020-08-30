
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="js/readFromDB.js"></script>
  </head>
  <body>
    <div>
    <div class="content">
      <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Author</th>
            <th>Title</th>
            <th>Text</th>
            <th>Date</th>
            <th>Buttons</th>
        </tr>
      </thead>
      <tbody>
      <tr>
      </tr>
    </tbody>
  </table>
    </div>
    <button type="button" name="button" class="displayAddBlock" >ADD</button>
  </div>
  <?php
  include 'update.php';
  ?>
  <div class="addNewsBlock" style="display:none;">
    <h3>Add new news</h3>
    <form id="fupForm" action="api/addnews.php" method="post">
      <p>Author:</p>
      <input type="text" name="Author" class="authorAdd" id="author">
      <p>Title:</p>
      <input type="text" name="Title" class="titleAdd" id="title">
      <p>Text</p>
      <textarea name="Text" class="textAdd" id="text"></textarea> <br> <br>
      <a href="/index.php"><button type="submit" class="addNews">Add new news</button></a>
    </form>
  </div>
  <form id="form">
   <input type=search name="findArticle" placeholder="Write the id of article or Author" size="50">
   <input type="submit" value="Find" />
  </form>
  <div class="findArticle" style="display:none;">
    <table>
      <thead>
      <tr>
          <th>Id</th>
          <th>Author</th>
          <th>Title</th>
          <th>Text</th>
          <th>Date</th>
          <th>Buttons</th>
      </tr>
    </thead>
    <tbody>
    <tr>
    </tr>
  </tbody>

</table>
  </div>
  <div class="weekTopWriters">
    <form id="form1">
      <span>Our 3 most active writers of the week</span>
      <input type="submit" value="Show" id="displayActiveWriters" >
    </form>

    <div class="weekWritersDisp" style="display:none;">
      <table>
        <thead>
          <tr>

              <th>Author</th>
              <th>Posts Count</th>
              <th>Date</th>

          </tr>
        </thead>
        <tbody>
          <tr></tr>
        </tbody>
      </table>
    </div>
  </div>

  </body>
</html>
