<footer>
  <div id='company'>
    <p>
      Федеральное государственное бюджетное учреждение
    </p>
    <p>
      "УГМС по ЛНР"
    </p>
  </div>

  <div id='date'>
    <p>
      Последнее обновление страницы:
    </p>
    <p>
      <?=date("Y-m-d H:i:s", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));?>
    </p>
  </div>
</footer>
