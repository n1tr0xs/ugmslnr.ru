<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html';?>
  <title>Администрирование</title>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
      const files = [
        'awc',
        'comments',
        'fire_danger_pic',
        'fire_forecast',
        'hydro_map_pic',
        'pollution',
        'warnings',
        'weather_current',
        'weather_forecast_table',
        'weather_forecast_text',
        'radiation',
        ]
      const div = document.getElementById('content');
      const ul = document.createElement('ul');
      div.appendChild(ul);
      const parser = new DOMParser();
      files.forEach((file)=>{
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            const page = parser.parseFromString(this.responseText, 'text/html');
            li = document.createElement('li');
            ul.appendChild(li);
            a = document.createElement('a');
            li.appendChild(a);
            a.href = this.responseURL;
            a.innerText = page.querySelector('title').innerText;
          }
        };
        xhttp.open('GET', file+'.php', false);
        xhttp.send();
      });
    }, false);
  </script>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
