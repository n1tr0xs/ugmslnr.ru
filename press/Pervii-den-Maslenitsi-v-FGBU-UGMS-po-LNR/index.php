<? $news_title = "Первый день Масленицы в ФГБУ «УГМС по ЛНР»"; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <meta name="description" content="<?= $news_title; ?>">
    <title><?= $news_title; ?></title>
    <link rel="canonical" href="<?
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $uri[count($uri) - 1] = '';
    echo 'https://' . $_SERVER['HTTP_HOST'] . join('/', $uri);
    ?>
  " />
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3><?= $news_title; ?></h3>
            <div class='text-center'><img src='1.png'></div>
            <p>24 февраля в ФГБУ «УГМС по ЛНР» прошел первый день масленичной недели, как его еще называют день
                «Встречи». Масленица – один из самых ярких и любимых народных праздников в России, символизирующий
                проводы зимы и встречу весны.</p>
            <p>Первый день Масленичной недели, называемый «Встречей», имеет особое значение и насыщенные традиции,
                которые соблюдаются на протяжении многих лет. В этот день наши предки начинали готовиться к встрече
                весны, завершали подготовку к масленичным мероприятиям и начинали печь первые блины.</p>
            <p>«Масленица идет!» – таким приветствием в ФГБУ «УГМС по ЛНР» встречали начало Масленичной недели. В 2025
                году она продлится с 24 февраля по 2 марта.</p>
            <p>Пусть с первыми солнечными днями в каждый дом придут удача, смех и радость, достаток и счастье. Желаем
                вам и вашим близким здоровья и радостных встреч!</p>
            <div class='img-carousel' style='max-height: 43em'>
                <img src='2.png'>
                <img src='3.png'>
                <img src='4.png'>
            </div>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>