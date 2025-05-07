<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta name="description" content="Вероятностный прогноз температуры воздуха и осадков">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Вероятностный прогноз температуры воздуха и осадков</title>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2> Вероятностный прогноз температуры воздуха и осадков </h2>
      <p> Вероятностный прогноз температуры и осадков составлен специалистами ФГБУ «Гидрометцентр России».</p>
      <p> <a href='https://meteoinfo.ru/1month-forc'>https://meteoinfo.ru/1month-forc</a> </p>
      <table class='no-border text-left table-striped'>
        <?
        $path = "/updatable/pfatp/";
        $ext = ".pdf";
        $files = array();
        foreach (get_files($path, $ext) as $filename) {
          $b_name = basename($filename, $ext);
          $files[] = [
            'month' => explode(' ', $b_name)[6],
            'year' => intval(explode(' ', $b_name)[7]),
            'name' => $filename,
            'path' => $path . $filename,
          ];
        }
        $month_order = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        usort($files, function ($a, $b) use ($month_order) {
          if ($a['year'] == $b['year']) {
            return array_search($b['month'], $month_order) - array_search($a['month'], $month_order);
          }
          return $b['year'] - $a['year'];
        });
        foreach ($files as $row) { ?>
          <tr>
            <td><a target="_blank" href="<?= $row['path'] ?>"><?= $row['name'] ?></a></td>
          </tr>
        <? } ?>
      </table>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>