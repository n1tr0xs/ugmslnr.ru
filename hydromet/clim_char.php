<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta name="description" content="Климатическая характеристика">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Климатическая характеристика</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h2>Климатическая характеристика</h2>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/clim_char/";
          $ext = ".pdf";
          $files = array();
          foreach(get_files($path, $ext) as $filename){
              $b_name = basename($filename, $ext);
              $files[] = [
                  'month' => explode(' ', $b_name)[2],
                  'year' => intval(explode(' ', $b_name)[3]),
                  'name' => $filename,
                  'path' => $path.$filename,
              ];
          }
          $month_order = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
          usort($files, function($a, $b) use ($month_order){
              if($a['year']==$b['year']){
                  return array_search($b['month'], $month_order) - array_search($a['month'], $month_order);
              }
              return $b['year'] - $a['year'];
          });
          foreach($files as $row){ ?>
            <tr><td><a target="_blank" href="<?=$row['path']?>"><?=$row['name']?></a></td></tr>
          <? } ?>
      </table>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
