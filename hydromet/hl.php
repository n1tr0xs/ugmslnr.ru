<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Отдел гидрологии</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3 >Отдел гидрологии</h3>
      Основными видами деятельности отдела гидрологии является:
      <ul>
        <li>производство гидрологических и метеорологических наблюдений на гидрологических постах рек бассейна Северского Донца и реки Нагольная (бассейн Приазовья);</li>
        <li>руководство и контроль работы наблюдателей гидрологических постов;</li>
        <li><a href="/hydromet/hydro_review.php">составление гидрологических обзоров и прогноза развития гидрологической обстановки на реках Луганской Народной Республики;</a></li>
        <li>обработка режимной информации с гидрологических постов, изучение гидрологического режима рек Луганской Народной Республики и подготовка материалов для гидрологических справочников ежегодных и многолетних данных о режиме поверхностных вод суши;</li>
        <li>обработка оперативной информации и составление предупреждений об опасных гидрологических явлениях;</li>
        <li>обеспечение органов власти, населения и заинтересованных организаций гидрологической информацией, в том числе в период весеннего половодья.</li>
      </ul>

      <div class="text-center"><img src="/updatable/hydro_map.png" class="no-border"></div>
      <table class="text-left" style="font-size: 1em; width: 25%; float: bottom;" >
        <caption>Условные обозначения</caption>
        <tr>
          <td style="color: black;">210</td>
          <td width="min-content">Уровень воды</td>
        </tr>
        <tr>
          <td style="color: red;">1</td>
          <td>Изменение уровня воды</td>
        </tr>          
      </table>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
