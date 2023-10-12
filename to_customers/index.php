<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <meta name="description" content="Страница со списком услуг УГМС по ЛНР">
  <title>Услуги</title>
  <style>
    object {
      width: 900px;
      height: 900px;
      margin-top: 3em;
      margin-bottom: 3em;
    }
  </style>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <div id='pdf-container' style="text-align: center;">
        <object type="application/pdf" data="/files/pricelist.pdf" >
          <p><a href="/files/pricelist.pdf">Список услуг и цен</a></p>
        </object>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
