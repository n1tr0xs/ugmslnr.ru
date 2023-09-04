<? 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; 
$conn = connect("visiter", "");
?>
<header>
  <style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>
  <script src="https://use.fontawesome.com/bd02b5ff79.js" defer></script>
  <script src="/js/listeners.js"></script>
  <div style="float: left;">
    <img src="/files/imgs/logo.png" alt="Логотип Росгидромет" class="no-border" align="left">
    <p style="font-size: 1.2em"> ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ </p>
    <p style="font-size: 1.2em"> "Управление по гидрометеорологии и мониторингу окружающей среды по Луганской Народной Республике" </p>
  </div>
  <div style="float: right;">
      <!-- <div class="form-row"><input type="radio" name="theme" id="theme-auto" value="auto" checked="true"> <label for="theme-auto">Автоматическая тема 🌙 / ☀</label></div> -->
      <!-- <div class="form-row"><input type="radio" name="theme" id="theme-light" value="light"> <label for="theme-light">Светлая тема ☀</label></div> -->
      <!-- <div class="form-row"><input type="radio" name="theme" id="theme-dark" value="dark"> <label for="theme-dark">Темная тема 🌙</label></div> -->
      <form id="theme-form">
      ☀
        <label class="switch">
          <input type="checkbox" name="theme" id="theme-switcher">
          <span class="slider round"></span>
        </label>
      🌙
      </form>
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
  </ul>
</nav>