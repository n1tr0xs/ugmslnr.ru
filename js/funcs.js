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


function setMinContentHeight(){
  var h = document.getElementById('aside-content').offsetHeight;
  var el = document.getElementById('content');
  cs =window.getComputedStyle(el, null);
  paddings = parseFloat(cs.getPropertyValue('padding-bottom')) + parseFloat(cs.getPropertyValue('padding-top'));
  document.getElementById('content').style.minHeight = h-paddings+'px';
}