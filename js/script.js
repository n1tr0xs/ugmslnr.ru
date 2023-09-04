// funcs
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

function setCookie(cname, cvalue, exdays=365) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// listeners
document.addEventListener('DOMContentLoaded', function(){
  let menuBtn = document.querySelector('.menu-btn');
  let menu = document.querySelector('.menu');

  menuBtn.addEventListener('click', function(){
  	menuBtn.classList.toggle('active');
  	menu.classList.toggle('active');
  })
}, false);

document.addEventListener('DOMContentLoaded', function(){
  let links = document.querySelectorAll('a.dropdown');
  for(let i=0; i<links.length; ++i){
    links[i].innerHTML = links[i].innerHTML + ' <i class="fa fa-angle-down" aria-hidden="true">';
  }
}, false);

document.addEventListener('DOMContentLoaded', function(){
  let dropdown = document.querySelectorAll('.dropdown');
  for(let i=0; i<dropdown.length; ++i) {
    let dd = dropdown[i];
    let dropdown_content = dd.querySelectorAll('.dropdown-content');
    dd.addEventListener('click', function(){
      for(let j=0; j<dropdown_content.length; ++j)
        dropdown_content[j].classList.toggle('active');
    });
  }
}, false);

document.addEventListener('DOMContentLoaded', function(){
  let c = document.getElementById('content');
  let a = document.getElementById('aside-content');
  new_height = c.offsetHeight;
  if(a.offsetHeight < new_height)
    a.style.height = new_height + 'px';
}, false);

window.addEventListener('resize', function(event) {
  let c = document.getElementById('content');
  let a = document.getElementById('aside-content');
  new_height = c.offsetHeight;
  if(a.offsetHeight < new_height)
    a.style.height = new_height + 'px';
}, true);

document.addEventListener('DOMContentLoaded', function () {
  themeForm = document.getElementById('theme-form');
  themeForm.addEventListener('change', function(){
    const is_checked = document.getElementById('theme-switcher').checked;
    const theme = `${is_checked === true ? 'dark' : 'light'}`;
    const fileName = `${theme}.css`;
    const localUrl = `/css/${fileName}`;
    document.getElementById("stylesheet").href = localUrl;
    setCookie('theme', theme);
  })
}, false);

document.addEventListener('DOMContentLoaded', function () {
  const theme = getCookie('theme');
  const localUrl = `/css/${theme}.css`;
  document.getElementById("stylesheet").href = localUrl;
  if(theme === 'dark')
    document.getElementById('theme-switcher').checked = true;
}, false);