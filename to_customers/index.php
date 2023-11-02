<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
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
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <div id='pdf-container' style="text-align: center;">
        <object type="application/pdf" data="/files/pricelist.pdf" >
          <p><a href="/files/pricelist.pdf">Список услуг и цен</a></p>
        </object>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
