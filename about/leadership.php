<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Руководство</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Руководство </h3>

      <hr>
      <div class='leader'>
        <figure>
          <img src="files/t.jpg" alt="" sizes="(max-width: 734px) 100vw, 734px">
        </figure>
        <div>
          <p>ФИО</p>
          <p>ОТДЕЛ</p>
        </div>
      </div>

      <hr>
      <div class='leader'>
        <figure>
          <img src="files/t.jpg" alt="" sizes="(max-width: 734px) 100vw, 734px">
        </figure>
        <div>
          <p>ФИО</p>
          <p>ОТДЕЛ</p>
        </div>
      </div>

    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
