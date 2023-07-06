document.addEventListener('DOMContentLoaded', function(){
  let menuBtn = document.querySelector('.menu-btn');
  let menu = document.querySelector('.menu');

  menuBtn.addEventListener('click', function(){
  	menuBtn.classList.toggle('active');
  	menu.classList.toggle('active');
  })
}, false);

document.addEventListener('DOMContentLoaded', function(){
  var links = document.querySelectorAll('a.dropdown');
  for(let i=0; i<links.length; ++i){
    links[i].innerHTML = links[i].innerHTML + ' <i class="fa fa-angle-down" aria-hidden="true">';
  }
}, false);
