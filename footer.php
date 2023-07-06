<footer class='pc'>
  <link rel="stylesheet" href="/css/footer.css">
  <script src="https://use.fontawesome.com/bd02b5ff79.js"></script>
  <div id='row1'>
    <div id='company'>
      <p> Федеральное государственное бюджетное учреждение </p>
      <p> "УГМС по ЛНР" </p>
    </div>
    <div id='footer-contacts'>
      <p> Сообщить об ошибке: </p>
      <p> <a href='mailto:@mail.ru'> <i class='fa fa-envelope' aria-hidden='true'></i>@mail.ru </a> </p>
    </div>
  </div>
  <div id='row2'>
    <div>
      <p>©2023. Все права защищены.</p>
      <p class='muted'>При использовании материалов сайта ссылка обязательна.</p>
    </div>
    <div class='muted'>
      <p> Последнее обновление страницы: </p>
      <p> <?=date("Y-m-d H:i:s", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));?> </p>
    </div>
  </div>
</footer>
