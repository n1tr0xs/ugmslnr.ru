<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Руководство</title>
  <style>
    .leader {
      display:  flex;
      align-items: center;
      justify-content: left;
    }
    .leader > div > p:nth-child(2) {
      font-style: italic;
    }
  </style>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Руководство УГМС по ЛНР</h3>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Баева Ирина Николаевна</p>
          <p>Начальник Учреждения</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Шишова Светлана Сергеевна</p>
          <p>Заместитель начальника Учреждения – начальник центра мониторинга загрязнения окружающей среды</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Шубенок Светлана Николаевна</p>
          <p>Заместитель начальника Учреждения – начальник Гидрометцентра Луганской Народной Республики</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Грановская Галина Владимировна</p>
          <p>Главный бухгалтер – начальник отдела бухгалтерского учета</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
