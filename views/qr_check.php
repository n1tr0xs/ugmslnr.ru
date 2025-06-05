<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta name="description" content="Проверка подлинности документа">
    <meta name="robots" content="noindex" />
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title>Проверка подлинности документа</title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h1>Проверка подлинности документа</h1>
            <?
            $h = $_GET['h'];
            $sql = "
            select doc_type, doc_number, doc_date, doc_source, doc_receiver, doc_performer, doc_signer, doc_comment 
            from `ugmslnr`.`qr_codes` 
            where doc_hash='{$h}'
            ";
            $row = get_row($conn, $sql);
            ?>
            <style>
                table {
                    margin: 0 auto;
                }

                td {
                    text-align: left;
                    width: min-content;
                    padding: 1rem 2rem;
                }
            </style>
            <div class='text-center'>
                <table>
                    <tbody>
                        <tr>
                            <td>Тип документа</td>
                            <td><?= $row['doc_type']; ?></td>
                        </tr>
                        <tr>
                            <td>Номер документа</td>
                            <td><?= $row['doc_number']; ?></td>
                        </tr>
                        <tr>
                            <td>Дата документа</td>
                            <td><?= $row['doc_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Ответ на</td>
                            <td><?= $row['doc_source']; ?></td>
                        </tr>
                        <tr>
                            <td>Получатель</td>
                            <td><?= $row['doc_receiver']; ?></td>
                        </tr>
                        <tr>
                            <td>Исполнитель</td>
                            <td><?= $row['doc_performer']; ?></td>
                        </tr>
                        <tr>
                            <td>Подписан</td>
                            <td><?= $row['doc_signer']; ?></td>
                        </tr>
                        <tr>
                            <td>Комментарий</td>
                            <td><?= $row['doc_comment']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Если обнаружены несовпадения, то, вероятно, документ подделан. В этом случае немедленно обратитесь в ФГБУ
                "УГМС по ЛНР" для уточнения информации!</p>
            <p style="color: red;">Обращаем внимание, что использование заведомо подложных документов является уголовно
                наказуемым преступлением!</p>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>