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
