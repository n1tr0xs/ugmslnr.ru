// ############################################################################
// funcs
// ############################################################################

function setCookie(cname, cvalue, exdays=365) {
  const d = new Date();
  d.setTime(d.getTime() + exdays*24*60*60*1000);
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ')
      c = c.substring(1);
    if (c.indexOf(name) == 0)
      return c.substring(name.length, c.length);
  }
  return "";
}

function setSize(){
  const c = document.getElementById('content');
  const a = document.getElementById('aside-content');
  new_height = c.offsetHeight > a.offsetHeight ? c.offsetHeight : a.offsetHeight;
  console.log(c.offsetHeight, a.offsetHeight);
  a.style.height = new_height + 'px';
  c.style.height = new_height + 'px';
}

// ############################################################################
// listeners
// ############################################################################

// mobile menu button
document.addEventListener('DOMContentLoaded', function(){
  let menuBtn = document.querySelector('.menu-btn');
  let menu = document.querySelector('.menu');

  menuBtn.addEventListener('click', function(){
  	menuBtn.classList.toggle('active');
  	menu.classList.toggle('active');
  })
});

// dropdown menu items
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
});

// theme switcher
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
});

// get theme from cookie
document.addEventListener('DOMContentLoaded', function () {
  const theme = getCookie('theme');
  const localUrl = `/css/${theme}.css`;
  if(['dark', 'light'].requires(theme))
    document.getElementById("stylesheet").href = localUrl;
  document.getElementById('theme-switcher').checked = (theme === 'dark');
});

// prefered color scheme handler
document.addEventListener('DOMContentLoaded', function () {
  const colorSchemeQueryList = window.matchMedia('(prefers-color-scheme: dark)');
  let theme = 'light';
  if(colorSchemeQueryList['matches'] === true){
    document.getElementById('theme-switcher').checked = true;
    theme = 'dark';
  }
  const localUrl = `/css/${theme}.css`;
  document.getElementById("stylesheet").href = localUrl;
});

// custom file input
document.addEventListener('DOMContentLoaded', function(){
  try {
    const input = document.getElementById('file-input');
    const span = document.getElementById('file-msg');
    input.addEventListener('input', function(){
      if(this.files[0]['name'].split('.').pop() != 'png'){    
        alert('Выберите png файл!');
        return (this.value = "");
      }
      span.innerText = this.files[0]['name'];
    });
  } catch (e) {};
});