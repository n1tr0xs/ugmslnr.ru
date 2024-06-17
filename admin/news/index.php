<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - новости</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h3>Администрирование - новости</h3>
        <div id='admin-panels' style="display: flex; flex-wrap: nowrap; flex-direction: column;">
            <script type="text/javascript">
                let files = [<?
                    foreach(array_diff(scandir('.'), array('..', '.')) as $name) 
                        if(is_dir($name)) 
                            echo "'{$name}/',\n";
                ?>]
                files.sort();

                const div = document.querySelector('#admin-panels');
                const parser = new DOMParser();
                for(let i=0; i<files.length; ++i){
                    const xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            const page = parser.parseFromString(this.responseText, 'text/html');
                            a = document.createElement('a');
                            a.href = this.responseURL;
                            a.innerText = page.querySelector('title').innerText;
                            a.style.order = i;
                            div.appendChild(a);
                        }
                    };
                    xhttp.open('GET', files[i], true);
                    xhttp.send();
                }
            </script>
        </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
