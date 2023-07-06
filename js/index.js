function loadFile(filePath) {
  var result = null;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", filePath, false);
  xmlhttp.send();
  if (xmlhttp.status==200) {
    result = xmlhttp.responseText;
  }
  return result;
}

document.addEventListener('DOMContentLoaded', function(){
  var min_news = 1;
  var max_news = 5;
  var folder = '/news/short_news/';
  var div = document.getElementById('news-container');
  for(let i=max_news; i>=min_news; --i) {
    let fileName = 'short_news' + i + '.php';
    div.innerHTML += loadFile(folder + fileName);
  }
}, false);
