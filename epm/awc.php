<? 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; 
$conn = connect("visiter", ""); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Информация о неблагоприятных метеорологических условиях (НМУ)</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Информация о неблагоприятных метеорологических условиях (НМУ) </h3>
      <p>
      К неблагоприятным метеорологическим условиям (НМУ) относятся условия, способствующие накоплению промышленных и автомобильных выбросов в приземном слое атмосферного воздуха. Для снижения уровня загрязнения в период возникновения НМУ на предприятия передаются информационные сообщения о возникновении НМУ, что соответствует режиму работ по регулированию выбросов.
      </p>
      <p><b>Прогноз НМУ:</b></p>
      <?
      $sql = "
      select `date`, `desc`
      from `ugmslnr`.`awc`
      order by `date` desc
      limit 1
      ";
      $row = get_row($conn, $sql);
      $date = date("d.m Y", strtotime($row['date']));
      $desc = $row['desc'];
      ?>
      <p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на <? echo $date; ?> года</p>
      <p class='description'> <? echo $desc; ?> </p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
