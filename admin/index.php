<? $page_name = 'Панели администрирования'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title><?= $page_name; ?></title>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3><?= $page_name; ?></h3>
      <div id='admin-panels' style="display: flex; flex-wrap: nowrap; flex-direction: column;">
        <script>
          document.addEventListener("DOMContentLoaded", (event) => {
            output_admin_panels([ < ?
              foreach(array_diff(scandir('.'), array('..', '.')) as $name)
                        if (is_dir($name))
                            echo "'{$name}/',\n"; ?
                        >
                    ])
                });
        </script>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>