<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title>Администрирование - QR CODE</title>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <script>
    function getDocumentData() {
        // Data
        const documentData = {
            type: document.getElementById('doc_type').value,
            number: document.getElementById('doc_number').value,
            date: document.getElementById('doc_date').value,
            responseTo: document.getElementById('doc_source').value,
            recipient: document.getElementById('doc_receiver').value,
            executedBy: document.getElementById('doc_performer').value,
            signedBy: document.getElementById('doc_signer').value,
            comment: document.getElementById('doc_comment').value
        };
        return documentData;
    }

    function hashData(data) {
        const encoder = new TextEncoder();
        const encoded = encoder.encode(data);
        return crypto.subtle.digest('SHA-256', encoded).then(hashBuffer => {
            const hashArray = Array.from(new Uint8Array(hashBuffer));
            const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
            return hashHex;
        });
    };

    function updateQR() {
        document.getElementById('qrcode').innerHTML = ""; // deleting previous QR
        // QR options
        const options = {
            width: 256,
            height: 256,
            colorDark: "#000000",
            colorLight: "#ffffff",
        };
        documentData = getDocumentData();
        const stringData = JSON.stringify(documentData);
        const hash = hashData(stringData).then(hash => {
            document.getElementById('doc_hash').value = hash; // Updating doc_hash
            const data = `https://ugmslnr.ru/views/qr_check.php?h=${hash}`;
            // Updating QR code
            QRCode.toDataURL(data, options, function(error, url) {
                if (error) {
                    console.error(error);
                } else {
                    const img = document.createElement('img');
                    img.src = url;
                    img.id = 'qrcode_image';
                    document.getElementById('qrcode').appendChild(img);
                }
            })
        });
    }

    function downloadQR() {
        // Download QR code
        const href = document.getElementById('qrcode_image').src;
        const name = document.getElementById('doc_number').value;

        const link = document.createElement('a');
        link.href = href;
        link.download = `${name}.png`;
        link.click();
    }
    </script>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3> Администрирование - QR CODE</h3>
            <div id="qrcode"></div>
            <form action="exec.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>Тип документа</label>
                    <input type="text" name="doc_type" id="doc_type" onchange="updateQR();" required>

                    <label>Номер документа</label>
                    <input type="text" name="doc_number" id="doc_number" onchange="updateQR();" required>

                    <label>Дата документа</label>
                    <input type="date" name="doc_date" id="doc_date" onchange="updateQR();" required>

                    <label>Ответ на</label>
                    <input type="text" name="doc_source" id="doc_source" onchange="updateQR();" required>

                    <label>Получатель</label>
                    <input type="text" name="doc_receiver" id="doc_receiver" onchange="updateQR();" required>

                    <label>Исполнитель</label>
                    <input type="text" name="doc_performer" id="doc_performer" onchange="updateQR();" required>

                    <label>Подписал</label>
                    <input type="text" name="doc_signer" id="doc_signer" onchange="updateQR();" required>

                    <label>Комментарий</label>
                    <input type="text" name="doc_comment" id="doc_comment" onchange="updateQR();" required>

                    <input type="hidden" name="doc_hash" id="doc_hash">

                    <button onclick="downloadQR();">Отправить данные</button>
                </fieldset>
            </form>
            <span><a href='/admin/'> Список панелей администрирования </a></span>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>