<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Ежемесячный бюллетень загрязнения окружающей среды">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Ежемесячный бюллетень загрязнения окружающей среды</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2>Ежемесячный бюллетень загрязнения окружающей среды</h2>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/environment_review/";
          $ext = ".pdf";
          $files = get_files($path, $ext); 
          foreach($files as $path => $name){ ?>
            <tr><td><a target="_blank" href="<?=$path?>">  <?=$name?></a></td></tr>
          <? } ?>
      </table>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
