<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Руководство УГМС по ЛНР">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
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
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2>Руководство ФГБУ «УГМС по ЛНР»</h2>
      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Баева Ирина Николаевна</p>
          <p>Начальник учреждения</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Шишова Светлана Сергеевна</p>
          <p>Заместитель начальника учреждения – начальник Центра по мониторингу загрязнения окружающей среды</p>
          <p>Электронная почта: <a href='mailto:ugms.lnr@mail.ru'>ugms.lnr@mail.ru</a></p>
        </div>
      </div>

      <div class='leader'>
        <img src="/files/imgs/photo-w.png">
        <div>
          <p class='name'>Шубенок Светлана Николаевна</p>
          <p>Заместитель начальника учреждения – начальник гидрометцентра Луганской Народной Республики</p>
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
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
