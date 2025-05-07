<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta name="description" content="Ежемесячный бюллетень загрязнения окружающей среды">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Ежемесячный бюллетень загрязнения окружающей среды</title>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2>Ежемесячный бюллетень загрязнения окружающей среды</h2>
      <table class='no-border text-left table-striped'>
        <tbody>
          <?
          $path = "/updatable/environment_review/";
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
          $month_order = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
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
        </tbody>
        <tbody>
          <?
          $path = "/updatable/environment_review/";
          $ext = ".zip";
          $files = array();
          foreach (get_files($path, $ext) as $filename) {
            $b_name = basename($filename, $ext);
            $files[] = [
              'year' => intval(explode(' ', $b_name)[7]),
              'name' => $filename,
              'path' => $path . $filename,
            ];
          }
          usort($files, function ($a, $b) use ($month_order) {
            return $b['year'] - $a['year'];
          });
          foreach ($files as $row) { ?>
            <tr>
              <td><a target="_blank" href="<?= $row['path'] ?>"><?= $row['name'] ?></a></td>
            </tr>
          <? } ?>
        </tbody>
      </table>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>