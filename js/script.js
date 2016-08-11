var html = document.documentElement;
html.className = html.className.replace("no-js","js");


var link = document.querySelector(".login");
var popup = document.querySelector(".modal-content");
var form = popup.querySelector("form");
var close = document.querySelector(".modal-content-close");
var login = popup.querySelector("[name=login]");
var password = popup.querySelector("[name=password]");
var storage = localStorage.getItem("login");
var gallery = document.querySelector(".gallery");

if (gallery){ 
	gallery.classList.add("gallery-live"); 
	var buttons = '<button class="btn gallery-prev">Назад</button>' + '<button class="btn gallery-next">Вперед</button>';
	gallery.innerHTML += buttons; 
	var prev = document.querySelector(".gallery-prev");
	prev.setAttribute('disabled', 'disabled');
}

link.addEventListener("click", function(event){
	event.preventDefault();
	//console.log("клик");
	popup.classList.add("modal-content-show");
	
	if (storage) {
		login.value = storage;
		password.focus();
	}
	else {
		login.focus();
	}
});

close.addEventListener("click", function(event){
	event.preventDefault();
	popup.classList.remove("modal-content-show");
});

form.addEventListener("submit", function(event){
	if (!(login.value && password.value)) {
		event.preventDefault();
		//console.log(login.value);
		//console.log(password.value);
		//console.log("Нужно ввести логин и пароль");
		popup.classList.remove("modal-error");
		popup.classList.add("modal-error");
	} else {
		localStorage.setItem("login", login.value);
	}
});

window.addEventListener("keydown", function(event){
	if (event.keyCode == 27) {
		if (popup.classList.contains("modal-content-show")) {
			popup.classList.remove("modal-content-show");
		}
	}
});

var mapOpen = document.querySelector(".open-map");
var mapPopup = document.querySelector(".modal-content-map");
var mapClose = mapPopup.querySelector(".modal-content-close");

if (mapOpen) {
	mapOpen.addEventListener("click", function(event) {
		event.preventDefault();
		mapPopup.classList.add("modal-content-show");
	});

	mapClose.addEventListener("click", function(event) {
		event.preventDefault();
		mapPopup.classList.remove("modal-content-show");
	});
}

window.addEventListener("keydown", function(event) {
	if (event.keyCode == 27) {
		if (mapPopup.classList.contains("modal-content-show")) {
			mapPopup.classList.remove("modal-content-show");
		}
	}
});

	var btn = document.getElementsByClassName('btn2')[0];

	btn.addEventListener("click", onButtonClick);

	var onButtonClick = function(event) {
		console.log(event.target);
	}
