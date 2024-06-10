<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - создание новости</title>
  <script type="text/javascript">
      function updateCode() {
        document.querySelector(".output").innerHTML = document.getElementById("code").value;
      
    	news_name = document.getElementById("out").value;
    	
    	document.querySelectorAll('#content img.asset').forEach((img) => {
    		img.src = '/press/assets/' + news_name + '/' + img.src.split('/').pop();
    	});
    	document.querySelectorAll('#content a.asset').forEach((a) => {
    		a.href = '/press/assets/' + news_name + '/' + a.href.split('/').pop();
    	});
    };
    
    function add_p(){
        const ta = document.getElementById("code");
        pos = ta.selectionStart;
        x = ta.value;
        ta.value = x.slice(0, pos) + "<p> </p>" + x.slice(pos);
    }
    
    function add_left_img(){
        const ta = document.getElementById("code");
        pos = ta.selectionStart;
        x = ta.value;
        img_name = window.prompt("Название картинки");
        if(img_name == null || img_name == "")
            return;
        ta.value = x.slice(0, pos) + "<img src='" + img_name + "' class='asset news-img-left'>" + x.slice(pos);
    }
    
    function add_center_img(){
        const ta = document.getElementById("code");
        pos = ta.selectionStart;
        x = ta.value;
        img_name = window.prompt("Название картинки");
        if(img_name == null || img_name == "")
            return;
        ta.value = x.slice(0, pos) + "<div class='text-center clear'><img src='" + img_name + "' class='asset'></div>" + x.slice(pos);
    }
  </script>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - создание новости</h3>
      
      <div class="output" style="min-height: 50px;"></div>
      <div class='clear'></div>
      <hr>
      <form action="/admin/add_news_exec.php" method="post">
        <fieldset>
          
          <label for="inp">Заголовок новости</label>
          <input type="text" id="inp" ondbclick="this.select()" oninput="translit(this.value, 'out');" onchange="translit(this.value, 'out');" name="news-title"> </input>
          <br>
          <textarea id="out" style="width: 600px;" name="news-name" required> </textarea>
          
          <button type="button" onclick="add_p();">Добавить абзац</button>
          <button type="button" onclick="add_left_img();">Добавить картинку слева</button>
          <button type="button" onclick="add_center_img();">Добавить картинку по центру</button>
         
          <textarea id="code" class="playable-code" oninput="updateCode()" onchange="updateCode()" cols="80" rows="15" name="code" style="width: 500px;" required> </textarea>
          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
