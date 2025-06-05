<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");
?>

<!-- Yandex.Metrika counter -->
<script>
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96387965, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/96387965" style="position:absolute; left:-9999px;" alt=""></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<header>
    <? if (date("Y") == "2024") { ?>
        <div>
            <a href="/press/190-let/"
                style="background-image:url(/files/imgs/banner_background.png);background-position: center;background-size:cover;display:flex;justify-content:center;width:100%;overflow:hidden;align-items:center;">
                <img src="/files/imgs/banner_190.png" style="width: 100%; margin: 0;" alt="">
            </a>
        </div>
    <? } ?>
    <? if (date("Y") == "2025") { ?>
        <a href="#"
            style="background-image:url(/files/imgs/banner80letwowback.png); background-position: center; background-size:cover;display:flex;justify-content:center;width:100%;overflow:hidden;align-items:center; padding: 0">
            <img src="/files/imgs/banner80letwowfront.png" style="max-height: 60px; max-width:100%; object-fit:contain;"
                alt="">
        </a>
    <? } ?>
    <div>
        <img src="/files/imgs/logo.png?v=2" alt="Логотип Росгидромет"
            style="width: 80px; height: 80px; margin-left: 25px; float: left">
        <p style="font-size: 1.2em; padding: .5em;"> ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ </p>
        <p style="font-size: 1.2em; padding: .5em;"> «Управление по гидрометеорологии и мониторингу окружающей среды по
            Луганской Народной Республике» </p>
    </div>
</header>

<nav style="clear: both;">

    <div style="display: flex; flex-direction: row; flex-wrap: nowrap">
        <div class='mobile menu-btn'>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div id="aside-btn"></div>
    </div>
    <ul class='navbar menu'>
        <li class='navbar'><a href='/index.php'>Новости</a></li>
        <li class='navbar dropdown'>
            <a class='dropdown'>О нас ▼</a>
            <ul class='navbar dropdown-content'>
                <li><a href='/about/index.php'>О нас</a></li>
                <li><a href='/about/leadership.php'>Руководство</a></li>
                <li><a href='/about/structure.php'>Структура</a></li>
                <li><a href='/about/requisites.php'>Реквизиты</a></li>
                <li><a href="/about/articles_of_association.php">Уставные документы</a></li>
                <li><a href="/about/anticorruption.php">Противодействие коррупции</a></li>
                <li><a href='/about/immortal_regiment.php'>Бессмертный полк</a></li>
                <li><a href='/about/history.php'>Историческая справка</a></li>
            </ul>
        </li>
        <li class='navbar'><a href='/about/contacts.php'>Контакты</a></li>
        <li class='navbar dropdown'>
            <a class='dropdown'>Потребителям ▼</a>
            <ul class='navbar dropdown-content'>
                <li><a href="/to_customers/index.php">Услуги</a></li>
                <li><a href="/to_customers/contacts.php">Контакты</a></li>
                <li><a href="/to_customers/dp_confirmation.php">Подтверждение возникновения ОЯ</a></li>
            </ul>
        </li>
        <li class='navbar dropdown'>
            <a class='dropdown'>Весеннее половодье и дождевые паводки ▼</a>
            <ul class='navbar dropdown-content'>
                <li><a href="/high_water/2025.php">2025</a></li>
            </ul>
        </li>
        <li class='navbar'><a href='/views/weather_report.php'>Погода</a></li>

        <li id="theme-form-container">
            <form id="theme-form">
                🌞
                <label class="switch">
                    <input type="checkbox" name="theme" id="theme-switcher">
                    <span class="slider round"></span>
                </label>
                🌙
            </form>
        </li>
    </ul>
</nav>