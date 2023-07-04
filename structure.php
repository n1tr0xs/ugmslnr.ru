<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
    <link rel="stylesheet" href="/css/master.css">
    <script type='text/javascript'>
      $(document).ready(function(){
        $(".show").on('click', function(){
          var href = $(this).attr('href');
          $("div"+href).css('display', $("div"+href).css('display') == 'none' ? 'block' : 'none');
        });
      });

    </script>
    <style>
    .unit {
      display: none;
    }
    .show {
      cursor: pointer;
    }
    .show::after {
      /* content: "+"; */
    }
    div.department > h2 {
      background-color: #000000;
    }
    </style>
    <title>Структура</title>
</head>
<body>
  <? include 'header.php'; ?>
  <div class='content'>
    <div class='department'>
      <h2 href='#unit1' class='show'> Отдел 1</h2>
      <div id='unit1' class='unit'>
        <div class='contact'>
          Контакт 1
        </div>
        <div class='contact'>
          Контакт 3
        </div>
        <div class='contact'>
          Контакт 2
        </div>
      </div>
    </div>

    <div class='department'>
      <h2 href='#unit2' class='show'> Отдел 2 </h2>
      <div id='unit2' class='unit'>
        <div class='contact'>
          Контакт 1
        </div>
        <div class='contact'>
          Контакт 3
        </div>
        <div class='contact'>
          Контакт 2
        </div>
      </div>
    </div>
  </div>
  <? include 'footer.php'; ?>
</body>
</html>
