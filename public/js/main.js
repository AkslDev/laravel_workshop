$( document ).ready(function() {	
	
	$('[data-toggle="tooltip"]').tooltip()

	// Dropdown du Menu
	var 	btn_user = $('.user');
	var 	dropdown = $('.dropdown');

	$(btn_user).on('click', function(e){
		if(dropdown.hasClass('dropdown-open')){
			dropdown.removeClass('dropdown-open');
			dropdown.slideUp(200);
		}else{
			dropdown.addClass('dropdown-open');
			dropdown.slideDown(200);
		}
		
	});

	var 	notification = $('.notification'),
		icon_close = $('.notification-close');

	$(notification).css('right', '-10px');

	$(notification).on('mouseenter',function(){
		icon_close.fadeIn(600);
	});
	$(notification).on('mouseleave',function(){
		icon_close.fadeOut(600);
	});
	$(notification).on('click', function(){
		notification.fadeOut(600);
	});


	var	popup_remove 		= $('.popup_remove'),
		btn_remove			= $('.btn-remove'),
		btn_close_remove		= $('.btn-close-remove'),
		btn_cancel			= $('.btn-cancel');

	$(btn_remove).on('click', function(){
		$('body').css('overflow','hidden');
		$('nav').css('filter','blur(5px)');
		$('.tableau').css('filter','blur(5px)');
		$('.notification').css('filter','blur(5px)');
		popup_remove.toggleClass('popup_open');
		popup_remove.fadeIn(600);
	});
	$(btn_close_remove).on('click',function(){
		$('nav').css('filter','blur(0px)');
		$('.tableau').css('filter','blur(0px)');
		$('.notification').css('filter','blur(0px)');
		popup_remove.fadeOut(600);
		popup_remove.toggleClass('popup_open');
		$('body').css('overflow','scroll');
	});

	$(btn_cancel).on('click',function(){
		$('nav').css('filter','blur(0px)');
		$('.tableau').css('filter','blur(0px)');
		$('.notification').css('filter','blur(0px)');
		popup_remove.fadeOut(600);
		popup_remove.toggleClass('popup_open');
		$('body').css('overflow','scroll');
	});

	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
					  	event.preventDefault();
					  	event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
});