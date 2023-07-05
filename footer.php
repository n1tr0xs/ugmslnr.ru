<footer>
  <div id='row1'>
    <div id='company'>
      <p> Федеральное государственное бюджетное учреждение </p>
      <p> "УГМС по ЛНР" </p>
    </div>
    <div id='contacts'>
      <p> Сообщить об ошибке: </p>
      <p> <a href='mailto:@mail.ru'> @mail.ru </a> </p>
    </div>
    <div class='muted text-right'>
      <p> Последнее обновление страницы: </p>
      <p> <?=date("Y-m-d H:i:s", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));?> </p>
    </div>
  </div>
  <div id='row2'>
    <div>
      <p>©2023. Все права защищены.</p>
      <p class='muted'>При использовании материалов сайта ссылка обязательна.</p>
    </div>
  </div>
</footer>
