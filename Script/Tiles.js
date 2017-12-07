
document.getElementById('navbarButtons').addEventListener('mouseleave', function() {
	deanimateBorder();
});

function animateBorder(item) {
	var border = document.getElementById('navbarItemBorder');
	item.appendChild(border);
	border.style.opacity = '1';
}

function deanimateBorder() {
	var border = document.getElementById('navbarItemBorder');
	document.getElementById('navbarButtons').appendChild(border);
	border.style.opacity = '0';
}

function slideForm(formID) {
	var pageFill = document.getElementById('pageFill');
	var registerForm = document.getElementById(formID);

	pageFill.style.zIndex = '50000';
	registerForm.style.zIndex = '100000';

	pageFill.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
	registerForm.style.top = '-2px';
}

function pageFillClicked() {
	var pageFill = document.getElementById('pageFill');
	var registerForm = document.getElementById('registerForm');
	var slideDownForms = document.getElementsByClassName('slideDownForm');

	for (i = 0; i < slideDownForms.length; i++) {
		pageFill.style.zIndex = '0';
		slideDownForms[i].style.zIndex = '0';

		pageFill.style.backgroundColor = 'rgba(0, 0, 0, 00)';
		slideDownForms[i].style.top = '-402px';
	}
}

$(document).ready(function() {
  $('.registerButton').click(function() {
    startTransition('button-textbox-form');
  });
});