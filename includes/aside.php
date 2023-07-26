<div id='aside-content'>
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      var trs = document.querySelectorAll('#warnings > :not(.warned)');
      for(let i=0; i<trs.length; ++i){
        t = trs[i];
        t.onclick = function(){
          t.append
        }
      }
    }, false);
  </script>
  <div id='weather-container' class='text-left'>
    <span class='div-name'> Погода в Луганске </span>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/weather.html'; ?>
  </div>
  <div id='warnings-container'>
    <span class='div-name'>Предупреждения</span>
    <table id='warnings' class='no-border text-left'>
      <tbody class='warned'>
        <tr>
          <td style="white-space: nowrap;">Метеорологическое</td>
          <td><div id='circle'></div></td>
        </tr>
        <tr><td colspan="2"></td></tr>
      </tbody>
      <tbody class=''>
        <tr>
          <td style="white-space: nowrap;">Гидрометеорологическое</td>
          <td><div id='circle'></div></td>
        <tr><td colspan="2"></td></tr>
        </tr>
      </tbody>
      <tbody class=''>
        <tr>
          <td style="white-space: nowrap;">Агрометеорологическое</td>
          <td><div id='circle'></div></td>
        <tr><td colspan="2"></td></tr>
        </tr>
      </tbody>
      <tbody class=''>
        <tr>
          <td style="white-space: nowrap;">Загрязнение окружающей среды</td>
          <td><div id='circle'></div></td>
        <tr><td colspan="2"></td></tr>
        </tr>
      </tbody>
    </table>
  </div>
  <div>
    <span class='div-name'> Мониторинг загрязнения окружающей среды </span>
    <ul>
      <li> <a href='/epm/index.php'> Центр мониторинга загрязнения окружающей среды </a> </li>
      <li> <a href='/epm/criteria.php'> Критерии качества компонентов природной среды </a> </li>
      <li> <a href='/epm/awc.php'> Информация о неблагоприятных метеорологических условиях (НМУ) </a> </li>
      <li> <a href='#'> Загрязнение атмосферного воздуха </a> </li>
      <li> <a href='#'> Радиационная обстановка </a> </li>
      <li> <a href='/epm/month_review.php'> Ежемесячный обзор состояния окружающей среды </a> </li>
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
      <li><a href='#'>Комментарии синоптика </a></li>
      <li><a href='/hydromet/fire_danger.php'>Пожарная опасность</a></li>
      <li><a href='/hydromet/criteria.php'>Критерии ОЯ и НЯ</a></li>
      <li><a href="/hydromet/circumstances.php">Гидрометеорологические условия</a></li>
      <li><a href="/hydromet/clim_char.php">Климатическая характеристика</a></li>
    </ul>
  </div>
</div>
