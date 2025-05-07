<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Администрирование - создание новости</title>
  <script type="text/javascript">
    function updateCode() {
      document.querySelector(".output").innerHTML = document.querySelector("#code").value;
      news_name = document.querySelector("#out").value;
      document.querySelectorAll('#output img').forEach((img) => {
        img.src = '/press/' + news_name + '/' + img.src.split('/').pop();
      });
      document.querySelectorAll('#output a').forEach((a) => {
        a.href = '/press/' + news_name + '/' + a.href.split('/').pop();
      });
    };

    function add_code(code) {
      const ta = document.querySelector('#code');
      pos = ta.selectionStart;
      x = ta.value;
      ta.value = x.slice(0, pos) + code + x.slice(pos);
      updateCode();
    }

    function add_p() {
      code = "<p> </p>";
      add_code(code);
    }

    function add_left_img() {
      img_name = window.prompt("Имя файла изображения");
      if (img_name == null || img_name == "")
        return;
      code = `<img src='${img_name}' class='news-img-left'>`;
      add_code(code);
    }

    function add_center_img() {
      img_name = window.prompt("Название картинки");
      if (img_name == null || img_name == "")
        return;
      code = `<div class='text-center'><img src='${img_name}'></div>`;
      add_code(code);
    }

    function add_carousel() {
      img_count = Number(window.prompt("Количество картинок в карусели"));
      if (img_count < 1 || isNaN(img_count))
        return;
      code = "<div class='img-carousel' style='max-height: 43em'>\n";
      for (let i = 0; i < img_count; ++i) {
        img_name = window.prompt("Название картинки");
        if (img_name == null || img_name == "")
          return;
        code += `\t<img src='${img_name}'>\n`;
      }
      code += "</div>";
      add_code(code);
    }
  </script>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - создание новости</h3>
      <div id="output" class="output" style="min-height: 50px;"></div>
      <div class='clear'></div>
      <hr>
      <form action="exec.php" method="post">
        <fieldset>
          <label for="inp">Заголовок новости</label>
          <input type="text" id="inp" name="news-title" ondbclick="this.select()" oninput="translit(this.value, 'out');"
            onchange="translit(this.value, 'out');">
          </input>
          <br>
          <textarea id="out" style="width: 600px;" name="news-name" required> </textarea>
          <button type="button" onclick="add_p();">Добавить абзац</button>
          <button type="button" onclick="add_left_img();">Добавить картинку слева</button>
          <button type="button" onclick="add_center_img();">Добавить картинку по центру</button>
          <button type="button" onclick="add_carousel();">Добавить карусель картинок</button>
          <textarea id="code" class="playable-code" cols="100" rows="20" name="code" oninput="updateCode()"
            onchange="updateCode()" required>
          </textarea>
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>