var tabs = document.querySelectorAll(".fruitmenu a");

function tabClick(e) {
	var content = document.querySelectorAll('.pane')

	for (var i = 0; i < tabs.length; i++) {
		tabs[i].classList.remove('active');
	}

	var clicked = e.currentTarget;
	clicked.classList.add('active');
	e.preventDefault();

	for (var i = 0; i < content.length; i++) {
		content[i].classList.remove('active');
	}

	var anchor = e.target;
	var activeId = anchor.getAttribute('href');
	var active = document.querySelector(activeId);
	active.classList.add('active');

	var dots = document.querySelectorAll('.pane.active .timeline-dot');
	setTimeout(function() {
		for (var i = 0; i < dots.length; i++) {
			dots[i].classList.add('animate')
		}
	}, 500)

	$('.pane.active .slick').slick({
		arrows: false,
		dots: true,
		fade: true,
		adaptiveHeight: true
	})
}

for (var i = 0; i < tabs.length; i++) {
	tabs[i].addEventListener('click', tabClick);
}