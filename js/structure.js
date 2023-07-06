$(document).ready(function(){
  $(".show").on('click', function(){
    var data = $(this).attr('href');
    $("div"+data).css('display', $("div"+data).css('display') == 'none' ? 'block' : 'none');
  });
});
