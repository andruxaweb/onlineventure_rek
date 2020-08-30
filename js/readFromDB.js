// to show all artic from DB
$( document ).ready(function() {
let endpoint = 'api/articles.php'

$( ".content tbody tr" ).each(function( index, element ) {
  $.ajax({
      url: endpoint,
      contentType: "application/json",
      dataType: 'json',
      success: function(result){
          var i=1;
          result.forEach(function(entry) {
            var this_id = $(this).attr('id');
            var pageNum = $('#content').attr('data-page');

            var this_id = $(this).attr('id');
            var pageNum = $('#content').attr('data-page');
            $( element ).before('<tr id=lineID_'+i+'>'
                                      +'<td>' + entry.Id+'</td> \n '
                                      +'<td>' + entry.Author +'</td> \n '
                                      +'<td>' + entry.Title +'</td> \n '
                                      +'<td>' + entry.Text +'</td> \n '
                                      +'<td>' + entry.Date +'</td> \n '

                                      +'<td><a href="index.php?id='+entry.Id+'"> <button type="button" name="button" class="updateButton" id="updateButton_'+entry.Id +'">UPDATE</button></a>'
                                      +'<td><a href="api/delete.php?id='+entry.Id+'"> <button type="button" name="button" class="deleteButton" id="deleteButton_'+entry.Id +'">DELETE</button></a>'
                                      +'</tr>'
                                      );

          i++;
          });
          // console.log(result);
          $( element ).remove();
      }
  })
});


// to show all needed artic from DB
$("#form").submit(function (e) {
        $(".findArticle").css('display','block');
          // console.log('work');
          let endpoint = 'api/findArticle.php';
           e.preventDefault();
            var form_data = $(this).serialize();
            $( ".findArticle tbody tr" ).each(function( index, element ) {
            $.ajax({
                type: "POST",
                url: endpoint,
                data: form_data,
                success: function(result){
                    var i=1;
                    result.forEach(function(entry) {
                      var this_id = $(this).attr('id');
                      var pageNum = $('#content').attr('data-page');

                      var this_id = $(this).attr('id');
                      var pageNum = $('#content').attr('data-page');
                      $( element ).before('<tr id=lineID_'+entry.Id+'>'
                                                +'<td>' + entry.Id +'</td> \n '
                                                +'<td>' + entry.Author +'</td> \n '
                                                +'<td>' + entry.Title +'</td> \n '
                                                +'<td>' + entry.Text +'</td> \n '
                                                +'<td>' + entry.Date +'</td> \n '

                                                +'<td><a href="index.php?id='+entry.Id+'"> <button type="button" name="button" class="updateButton" id="updateButton_'+entry.Id +'">UPDATE</button></a>'
                                                +'<td><a href="api/delete.php?id='+entry.Id+'"> <button type="button" name="button" class="deleteButton" id="deleteButton_'+entry.Id +'">DELETE</button></a>'
                                                +'</tr>'
                                                );
                    i++;
                    });
                    $( element ).remove();
                }
            });
            });
        });
// display add Form on main page
$('.displayAddBlock').click(function() {
  console.log('work');
$(".addNewsBlock").css('display','block');
 });

// zzzzzzzzzzzzzzzzzzzzzzzzzzz


// display add Form on main page

$("#form1").submit(function (e) {
        $(".weekWritersDisp").css('display','block');

          let endpoint = 'api/activeWriters.php';
           e.preventDefault();
            var form_data = $(this).serialize();
            $( ".weekWritersDisp tbody tr" ).each(function( index, element ) {
            $.ajax({
                type: "POST",
                url: endpoint,
                data: form_data,
                success: function(result){
                    result.forEach(function(entry) {
                      console.log(entry.Author);
                      $( element ).before('<tr>'
                                                +'<td>' + entry.Author +'</td> \n '
                                                +'<td>' + entry.count_Author +'</td> \n '
                                                +'<td>' + entry.Date +'</td> \n '
                                                +'</tr>'
                                                );

                    });
                    $( element ).remove();
                }
            });
            });
        });
 });
