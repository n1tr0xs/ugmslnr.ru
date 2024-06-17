// ########################################################################
// funcs
// ########################################################################

function setCookie(cname, cvalue, exdays = 365) {
	const d = new Date();
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ')
			c = c.substring(1);
		if (c.indexOf(name) == 0)
			return c.substring(name.length, c.length);
	}
	return "";
}

function translit(src, out_id) {
	const map={"Ё":"YO","Й":"I","Ц":"TS","У":"U","К":"K","Е":"E","Н":"N","Г":"G","Ш":"SH","Щ":"SCH","З":"Z","Х":"H","Ъ":"'","ё":"yo","й":"i","ц":"ts","у":"u","к":"k","е":"e","н":"n","г":"g","ш":"sh","щ":"sch","з":"z","х":"h","ъ":"'","Ф":"F","Ы":"I","В":"V","А":"A","П":"P","Р":"R","О":"O","Л":"L","Д":"D","Ж":"ZH","Э":"E","ф":"f","ы":"i","в":"v","а":"a","п":"p","р":"r","о":"o","л":"l","д":"d","ж":"zh","э":"e","Я":"Ya","Ч":"CH","С":"S","М":"M","И":"I","Т":"T","Ь":"'","Б":"B","Ю":"YU","я":"ya","ч":"ch","с":"s","м":"m","и":"i","т":"t","ь":"'","б":"b","ю":"yu",'"':"-"," ":"-"};
	const b = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-';

	document.getElementById(out_id).value = src.split('').map(function(char) {
		c = map[char];
		if (c) return c;
		if (b.indexOf(char) > -1) return char;
		return '';
	}).join("");
}

function output_admin_panels(files){
    files.sort();
    const div = document.querySelector('#admin-panels');
    const parser = new DOMParser();
    for(let i=0; i<files.length; ++i){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                const page = parser.parseFromString(this.responseText, 'text/html');
                a = document.createElement('a');
                a.href = this.responseURL;
                a.innerText = page.querySelector('title').innerText;
                a.style.order = i;
                div.appendChild(a);
            }
        };
        xhttp.open('GET', files[i], true);
        xhttp.send();
    }
}
// ########################################################################
// listeners
// ########################################################################

// mobile menu and aside buttons
let menuBtn = document.querySelector('.menu-btn');
let asideBtn = document.querySelector('#aside-btn');
let menu = document.querySelector('.menu');
let aside = document.querySelector('#aside-content');
let content = document.querySelector('#content');
const CONTENT_STYLE_DISPLAY = content.style.display;

menuBtn.addEventListener('click', function() {
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
	aside.classList.remove('active');
	asideBtn.classList.remove('active');
	content.style.display = menu.classList.contains('active') ? 'none' : CONTENT_STYLE_DISPLAY;
});

asideBtn.addEventListener('click', function() {
	asideBtn.classList.toggle('active');
	aside.classList.toggle('active');
	menuBtn.classList.remove('active');
	menu.classList.remove('active');
	content.style.display = aside.classList.contains('active') ? 'none' : CONTENT_STYLE_DISPLAY;
});

// dropdown menu items
let dropdown = document.querySelectorAll('.dropdown');
for (let i = 0; i < dropdown.length; ++i) {
	dropdown[i].addEventListener('click', function() {
		let dropdown_content = this.querySelectorAll('.dropdown-content');
		for (let j = 0; j < dropdown_content.length; ++j)
			dropdown_content[j].classList.toggle('active');
	});
}

// theme switcher
themeForm = document.getElementById('theme-form');
themeForm.addEventListener('change', function() {
	const is_checked = document.getElementById('theme-switcher').checked;
	const theme = `${is_checked === true ? 'dark' : 'light'}`;
	if(theme == 'dark')
	    document.querySelector('html').classList.add('dark');
	else
	    document.querySelector('html').classList.remove('dark');
	setCookie('theme', theme);
});


// prefered color scheme handler
const colorSchemeQueryList = window.matchMedia('(prefers-color-scheme: dark)');
if (colorSchemeQueryList['.matches'] === true) {
	document.querySelector('html').classList.add('dark');
	document.getElementById('theme-switcher').checked = true;
}

// set theme from cookie
const theme = getCookie('theme');
if (theme === 'dark') {
	document.querySelector('html').classList.add('dark');
	document.getElementById('theme-switcher').checked = true;
}

// custom file input
const input = document.getElementById('file-input');
const span = document.getElementById('file-msg');
if (input && span) {
	input.addEventListener('input', function() {
		span.innerText = "";
		for (let i = 0; i < this.files.length; ++i)
			span.innerText += this.files[i].name + '\n';
	});
}

// img src auto theme
document.querySelectorAll('#content img.themed').forEach((img) => {
	img.src = img.src.split('/').pop().split('.')[0] + '_' + getCookie('theme') + '.png';
});