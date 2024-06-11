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

// ########################################################################
// listeners
// ########################################################################

// mobile menu button
let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
menuBtn.addEventListener('click', function() {
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
});

// mobile aside button
let asideBtn = document.querySelector('#aside-btn');
let aside = document.querySelector('#aside-content');
let content = document.querySelector('#content');
asideBtn.addEventListener('click', function() {
	asideBtn.classList.toggle('active');
	aside.classList.toggle('active');
	content.classList.toggle('disabled');
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

// news img src auto theme
document.querySelectorAll('#content img.themed').forEach((img) => {
	img.src = img.src.split('/').pop().split('.')[0] + '_' + getCookie('theme') + '.png';
});

// news img src && a href news pages auto fill
news_name = window.location.href.split('/').pop();
news_name = news_name.substr(0, news_name.lastIndexOf('.'));
document.querySelectorAll('#content img.asset').forEach((img) => {
	img.src = '/press/assets/' + news_name + '/' + img.src.split('/').pop()
});
document.querySelectorAll('#content a.asset').forEach((a) => {
	a.href = '/press/assets/' + news_name + '/' + a.href.split('/').pop()
});