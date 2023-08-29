<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Образцы писем-запросов</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2>Образцы писем-запросов</h2>
      <div>
        <ul>
          <?
          // reads files from folder and creates list of links
          $folder = "request_samples/";
          $dir = $_SERVER['DOCUMENT_ROOT'] . "/files/". $folder;
          if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
              while (($file = readdir($dh)) !== false) {
                if(strpos($file, ".doc") !== false){
                  ?>
                  <li><a href="/files/<? echo $folder.$file; ?>"><? echo $file; ?></a></li>
                  <?
                }
              }
              closedir($dh);
            }
          }
          ?>
        </ul>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>