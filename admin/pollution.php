<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - Загрязнение атмосферного воздуха</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3>Администрирование - Загрязнение атмосферного воздуха</h3>
      <form action="/admin/pollution_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<?=date('Y-m-d')?>" required>
        </div>
        <div class='form-row'><textarea cols="50" rows="5" name="desc" placeholder="Описание" required></textarea></div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class="form-row"><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
