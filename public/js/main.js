$( document ).ready(function() {	
	
	// Appel des tooltips
	$('[data-toggle="tooltip"]').tooltip()

	// Page Create - Input type file
	$(document).on('click', '.upload-field', function(){
  		var file = $(this).parent().parent().parent().find('.input-file');
  		file.trigger('click');
	});
	$(document).on('change', '.input-file', function(){
  		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});

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

	// Bouton pour retourner en haut de la page
	var 	$backToTop = $(".go-top");

	$(window).on('scroll', function() {
	 	if ($(this).scrollTop() > 500) {
	   		$backToTop.fadeIn();
	 	}else{
	   		$backToTop.fadeOut();
	 	}
	});
	
	$backToTop.on('click', function(e) {
	  	$("html, body").animate({scrollTop: 0}, 1200);
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