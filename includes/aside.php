<div id='aside-content'>
  
  <div id='weather-container' class='text-left'>
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
    $row = get_row($conn, $sql); ?>
    <span class='div-name'> Погода в Луганске </span>
    <? if($row) {?>
      <p style='text-align: center;'><?=date("d.m.Y", strtotime($row['date']))?></p>
      <div class='text-center'><img src="<?=$row['url']?>" class='no-border' width="75px"></div>
      <p><span id="temperature">Температура</span>: <?=$row["temperature"]?> &#x2103;</p>
      <p><span id="wind">Ветер</span>: <?=$row["wind_speed"]?> м/с</p>
      <p><span id="humidity">Влажность</span>: <?=$row["humidity"]?> %</p>
      <p><span id="pressure">Давление</span>: <?=$row["pressure"]?> мм.рт.ст.</p>
    <? } else { ?>
      <p> Нет данных о текущей погоде </p>
    <? } ?>
  </div>

  <div id='warnings-container'>
    <span class='div-name'>Предупреждения</span>
    <div id="warnings" class="text-left">
      <?
      $warned = array();
      $not_warned = array('Метеорологическое', 'Гидрологическое', 'Загрязнение окружающей среды', 'Агрометеорологическое');
      $d = str_pad(intval(date('d'))+1, 2, '0', STR_PAD_LEFT);
      $tomorrow = date('Y-m-').$d.date(' h:m:s');
      $now = date('Y-m-d h:m:s');
      $sql = "
      select
        w.id, 
        w.type,
        w.start,
        w.end,
        w.aside_name
      from `ugmslnr`.`warnings` w
      where 
        (w.start <= '{$today}' and w.end > '{$today}') 
        or
        (w.start <= '{$tomorrow}' and w.end > '{$tomorrow}')
      ";
      $data = get_arr($conn, $sql);
      foreach($data as $row) { ?>
        <? array_push($warned, $row['aside_name']); ?>
        <div class="warning warned" title="Предупреждение есть">
          <div>
            <div class="circle"></div>
            <span><a href="/warning.php?id=<?=$row['id']?>"><?=$row['aside_name']?></a></span>
          </div>
        </div>
      <? } ?>
      <? $not_warned = array_diff($not_warned, $warned); ?>
      <? foreach($not_warned as $type) { ?>
        <div class="warning" title="Предупреждений нет или нет данных">
          <div>
            <div class="circle"></div>
            <span><?=$type?></span>
          </div>
        </div>
      <? } ?>
    </div>
  </div>

  <div>
    <span class='div-name'> Мониторинг загрязнения окружающей среды </span>
    <ul>
      <li><a href='/epm/index.php'> Центр мониторинга загрязнения окружающей среды </a></li>
      <li><a href='/epm/criteria.php'> Критерии качества компонентов природной среды </a></li>
      <li><a href='/epm/awc.php'> Информация о неблагоприятных метеорологических условиях (НМУ) </a></li>
      <li><a href='/epm/pollution.php'> Загрязнение атмосферного воздуха </a></li>
      <li><a href='/epm/radiation.php'> Радиационная обстановка </a></li>
      <li><a href='/epm/environment_review.php'> Ежемесячный обзор состояния окружающей среды </a></li>
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
      <li><a href="/hydromet/meteo_net.php">Сеть метеостанций ФГБУ "УГМС по ЛНР"</a></li>
    </ul>
  </div>
</div>