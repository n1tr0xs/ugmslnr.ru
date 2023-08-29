<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Гидрометеорологические условия</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <table class='no-border text-left table-striped'>
        <?
        // reads files from folder and creates list of links
        $folder = "circumstances/";
        $dir = $_SERVER['DOCUMENT_ROOT'] . "/updatable/". $folder;
        if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
              if(strpos($file, ".pdf") !== false){
                ?>
                <tr><td><a href="/updatable/<? echo $folder.$file; ?>">  <? echo basename($file, '.pdf'); ?></a></td></tr>
                <?
              }
            }
            closedir($dh);
          }
        }
        ?>
      </table>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>