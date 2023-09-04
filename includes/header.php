<? 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; 
$conn = connect("visiter", "");
?>
<header>
  <script src="https://use.fontawesome.com/bd02b5ff79.js" defer></script>
  <script src="/js/script.js"></script>
  <div style="float: left;">
    <img src="/files/imgs/logo.png" alt="Логотип Росгидромет" class="no-border" align="left" style="width: 80px; height: 80px; margin-left: 25px">
    <p style="font-size: 1.2em"> ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ </p>
    <p style="font-size: 1.2em"> "Управление по гидрометеорологии и мониторингу окружающей среды по Луганской Народной Республике" </p>
  </div>
</header>

<nav style="clear: both;">

  <div class='mobile menu-btn'>
    <span></span>
    <span></span>
    <span></span>
  </div>

  <ul class='navbar menu'>
    <li class='navbar'><a href='/index.php'>Начальная страница</a></li>
    <li class='navbar dropdown'>
      <a class='dropdown' href="#">О нас </a>
      <ul class='navbar dropdown-content'>
        <li><a href='/about/index.php'>О нас</a></li>
        <li><a href='/about/leadership.php'>Руководство</a></li>
        <li><a href='/about/structure.php'>Структура</a></li>
        <li><a href='/about/requisites.php'>Реквизиты</a></li>
        <li><a href="/about/articles_of_association.php">Уставные документы</a></li>
        <li><a href="/about/anti_corruption.php">Противодействие коррупции</a></li>
        <li><a href='/about/contacts.php'>Контакты</a></li>
        <li><a href='/about/immortal_regiment.php'>Бессмертный полк</a></li>
        <li><a href='/about/history.php'>Историческая справка</a></li>
        <!-- <li><a href='/about/vakansy.php'>Вакансии</a></li> -->
      </ul>
    </li>
    <li class='navbar'><a href='/about/contacts.php'>Контакты</a></li>
    <li class='navbar dropdown'>
      <a class='dropdown' href='#'>Потребителям</a>
      <ul class='navbar dropdown-content'>
        <li><a href="/to_customers/index.php">Услуги</a></li>
        <li><a href="/to_customers/request_samples.php">Образцы писем-запросов</a></li>
        <li><a href="/to_customers/office_hours.php">Часы приема</a></li>
      </ul>
    </li>
    <li class='navbar'><a href='/weather_report.php'> Погода </a></li>
    <div id="theme-form-container">
    <form id="theme-form">
      ☀
      <label class="switch">
        <input type="checkbox" name="theme" id="theme-switcher">
        <span class="slider round"></span>
      </label>
      🌙
    </form>
  </div>
  </ul>
</nav>