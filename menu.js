var ham = {
	toggle: document.getElementById('nav-toggle'),
	nav: document.getElementById('nav-menu'),

	doToggle: function(e) {
		e.preventDefault();
		this.toggle.classList.toggle('active');
		this.nav.classList.toggle('active');
	}
}

ham.toggle.addEventListener('click', function(e) {
	ham.doToggle(e);
})
// ham.nav.addEventListener('click', function(e) {
// 	ham.doToggle(e);
// })
