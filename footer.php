<footer>
  <link rel="stylesheet" href="/css/footer.css">
  <div id='date'>
  <span>
    Последнее обновление страницы:
  </span>
  <br>
  <span>
    <?=date("Y-m-d H:i:s", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));?>
  </span>
</footer>
