<? 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; 
$conn = connect("visiter", "");
?>
<div id='aside-content'>

  <div id='weather-container' class='text-left'>
    <span class='div-name'> Погода в Луганске </span>
    <?
    $sql = "
    select 
      w.`date`, 
      i.`url`, 
      w.`temperature`, 
      w.`wind_speed`, 
      w.`humidity`, 
      w.`pressure`
    from 
      `ugmslnr`.`weather_current` w
      join `ugmslnr`.`icons` i
    order by `date` desc
    limit 1
    ";
    $row = get_row($conn, $sql);    
    ?>
    <p style='text-align: center;'><? echo date("d.m.Y", strtotime($row['date'])); ?></p>
    <div class='text-center'><img src="<? echo $row['url'];?> " class='no-border' width="75px"></div>
    <p><span style='color: red;'>Температура</span>:<? echo $row["temperature"]; ?> &#x2103;</p>
    <p><span style='color: green;'>Ветер</span>: <? echo $row["wind_speed"]; ?>м/с</p>
    <p><span style='color: blue;'>Влажность</span>: <? echo $row["humidity"]; ?>%</p>
    <p><span style='color: black;'>Давление</span>: <? echo $row["pressure"]; ?> мм.рт.ст.</p>
  </div>

  <div id='warnings-container'>
    <span class='div-name'>Предупреждения</span>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/warnings.html'; ?>
  </div>

  <div>
    <span class='div-name'> Мониторинг загрязнения окружающей среды </span>
    <ul>
      <li><a href='/epm/index.php'> Центр мониторинга загрязнения окружающей среды </a></li>
      <li><a href='/epm/criteria.php'> Критерии качества компонентов природной среды </a></li>
      <li><a href='/epm/awc.php'> Информация о неблагоприятных метеорологических условиях (НМУ) </a></li>
      <li><a href='/epm/pollution.php'> Загрязнение атмосферного воздуха </a></li>
      <li><a href='/epm/radiation.php'> Радиационная обстановка </a></li>
      <li><a href='/epm/month_review.php'> Ежемесячный обзор состояния окружающей среды </a></li>
    </ul>
  </div>

  <div>
    <span class='div-name'>Гидрометцентр</span>
    <ul>
      <li><a href='/hydromet/index.php'>О гидрометцентре </a></li>
      <li><a href='/hydromet/mndf.php'>Отдел метеорологических и численных прогнозов </a></li>
      <li><a href='/hydromet/amfam.php'>Отдел агрометеорологических прогнозов и агрометеорологии</a></li>
      <li><a href='/hydromet/hl.php'>Отдел гидрологии</a></li>
      <li><a href='/weather_report.php'>Прогноз погоды </a></li>
      <li><a href='/hydromet/comments.php'>Комментарии синоптика </a></li>
      <li><a href='/hydromet/fire_danger.php'>Пожарная опасность</a></li>
      <li><a href='/hydromet/criteria.php'>Критерии ОЯ и НЯ</a></li>
      <li><a href="/hydromet/circumstances.php">Гидрометеорологические условия</a></li>
      <li><a href="/hydromet/clim_char.php">Климатическая характеристика</a></li>
      <li><a href="/hydromet/pfatp.php">Вероятностный прогноз температуры воздуха и осадков</a></li>
    </ul>
  </div>
</div>
