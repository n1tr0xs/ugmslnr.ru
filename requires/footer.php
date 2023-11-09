<footer>
  <div>
    <div id='company'>
      <p> Федеральное государственное бюджетное учреждение </p>
      <p> "УГМС по ЛНР" </p>
    </div>
    <div id='footer-contacts'>
      <p> Сообщить об ошибке: </p>
      <p> <a href='mailto:ugmslnr-site@mail.ru'> ugmslnr-site@mail.ru </a> </p>
    </div>
  </div>
  <div>
    <div>
      <p>©2023. Все права защищены.</p>
      <p class='muted new-line'>При использовании материалов сайта ссылка обязательна.</p>
    </div>
    <div class='muted'>
      <p> Последнее обновление страницы: </p>
      <p> <?=date("Y-m-d", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));?> </p>
    </div>
  </div>
</footer>
