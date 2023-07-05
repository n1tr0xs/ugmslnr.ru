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
    div.department > h2 {
      background-color: rgb(38, 59, 84);
    }
    div.employee {
      border-bottom: 1px solid #dbdbdb;
      border-bottom: 1px solid var(--border);
    }
    div.employee:last-child {
      border: 0;
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
        <div class='employee'>
          <p> ФИО 1 </p>
          <p> Должность 1 </p>
        </div>
        <div class='employee'>
          <p> ФИО 2 </p>
          <p> Должность 2 </p>
        </div>
        <div class='employee'>
          <p> ФИО 3 </p>
          <p> Должность 3 </p>
        </div>
      </div>
    </div>

  </div>
  <? include 'footer.php'; ?>
</body>
</html>
