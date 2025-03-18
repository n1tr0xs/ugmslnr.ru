<? header('Location: /'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Информационный гидрометеорологический бюллетень">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Информационный гидрометеорологический бюллетень</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Информационный гидрометеорологический бюллетень</h3>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/hydromet_bulletin/";
          $ext = ".pdf";
          $files = array();
          foreach(get_files($path, $ext) as $filename){
              $b_name = basename($filename, $ext);
              $files[] = [
                  'month' => explode(' ', $b_name)[3],
                  'year' => intval(explode(' ', $b_name)[4]),
                  'name' => $filename,
                  'path' => $path.$filename,
              ];
          }
          $month_order = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
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
