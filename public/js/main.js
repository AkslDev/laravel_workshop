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

	// var	popup_remove 		= $('.popup_remove'),
	// 	btn_remove			= $('.btn-remove'),
	// 	btn_close_remove		= $('.btn-close-remove'),
	// 	btn_cancel			= $('.btn-cancel');

	// $(btn_remove).on('click', function(){
	// 	$('body').css('overflow','hidden');
	// 	$('nav').css('filter','blur(5px)');
	// 	$('.tableau').css('filter','blur(5px)');
	// 	$('.notification').css('filter','blur(5px)');
	// 	popup_remove.toggleClass('popup_open');
	// 	popup_remove.fadeIn(600);
	// });
	// $(btn_close_remove).on('click',function(){
	// 	$('nav').css('filter','blur(0px)');
	// 	$('.tableau').css('filter','blur(0px)');
	// 	$('.notification').css('filter','blur(0px)');
	// 	popup_remove.fadeOut(600);
	// 	popup_remove.toggleClass('popup_open');
	// 	$('body').css('overflow','scroll');
	// });

	// $(btn_cancel).on('click',function(){
	// 	$('nav').css('filter','blur(0px)');
	// 	$('.tableau').css('filter','blur(0px)');
	// 	$('.notification').css('filter','blur(0px)');
	// 	popup_remove.fadeOut(600);
	// 	popup_remove.toggleClass('popup_open');
	// 	$('body').css('overflow','scroll');
	// });

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
});