<?php
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'] ?? '';
$files = $_FILES['files'] ?? null;

if (!$news_name || !$files) {
    http_response_code(400);
    exit("Недостаточно данных.");
}

$path = $_SERVER['DOCUMENT_ROOT'] . "/press/" . $news_name . '/';
if (!is_dir($path)) {
    mkdir($path, 0755, true);
}

$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
$maxWidth = 800;

foreach ($files['name'] as $i => $fname) {
    echo "<p>Обработка {$fname}</p>";
    
    $tmpName = $files['tmp_name'][$i];
    $ext = strtolower(pathinfo($fname, PATHINFO_EXTENSION));
    $dest = $path . basename($fname);

    if (!in_array($ext, $allowed_extensions)) {
        http_response_code(400);
        echo "Недопустимый формат изображения: $fname";
        continue;
    }

    [$width, $height] = getimagesize($tmpName);
    echo "<p>Исходный размер картинки: {$width}x{$height}.</p>";
    if ($width > $maxWidth) {
        $ratio = $maxWidth / $width;
        $newWidth = $maxWidth;
        $newHeight = (int)($height * $ratio);
        echo "<p>Сжимаем картинку до размера {$newWidth}x{$newHeight}.</p>";

        switch ($ext) {
            case 'jpg':
            case 'jpeg':
                $srcImg = imagecreatefromjpeg($tmpName);
                break;
            case 'png':
                $srcImg = imagecreatefrompng($tmpName);
                break;
            case 'gif':
                $srcImg = imagecreatefromgif($tmpName);
                break;
        }

        $dstImg = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($dstImg, $srcImg, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        echo "<p>Загрузка картинки в {$dest}.</p>";
        switch ($ext) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($dstImg, $dest, 85);
                break;
            case 'png':
                imagepng($dstImg, $dest, 6);
                break;
            case 'gif':
                imagegif($dstImg, $dest);
                break;
        }

        imagedestroy($srcImg);
        imagedestroy($dstImg);
    } else {
        echo "<p>Загрузка картинки в {$dest}.</p>";
        move_uploaded_file($tmpName, $dest);
    }
}

echo "<p><a href='.'>Вернуться на страницу ввода</a></p>";
