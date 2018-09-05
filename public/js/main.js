$( document ).ready(function() {	

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

	var 	popup_add 		= $('.popup_add'),
		btn_add 			= $('.btn-add'),
		popup_remove 	= $('.popup_remove'),
		btn_remove		= $('.btn-remove'),
		btn_close 		= $('.btn-close'),
		btn_cancel		= $('.btn-cancel')

	
	$(btn_add).on('click', function(){
		$('body').css('overflow','hidden');
		$('.tableau').css('filter','blur(5px)');
		$('.notification').css('filter','blur(5px)');
		popup_add.toggleClass('popup_open');
		popup_add.fadeIn(600);
	});
	$(btn_close).on('click',function(){
		$('.tableau').css('filter','blur(0px)');
		$('.notification').css('filter','blur(0px)');
		popup_add.fadeOut(600);
		popup_add.toggleClass('popup_open');
		$('body').css('overflow','scroll');
		
	})
	$(btn_remove).on('click', function(){
		$('body').css('overflow','hidden');
		$('.tableau').css('filter','blur(5px)');
		$('.notification').css('filter','blur(5px)');
		popup_remove.toggleClass('popup_open');
		popup_remove.fadeIn(600);
	});
	$(btn_close).on('click',function(){
		$('.tableau').css('filter','blur(0px)');
		$('.notification').css('filter','blur(0px)');
		popup_remove.fadeOut(600);
		popup_remove.toggleClass('popup_open');
		$('body').css('overflow','scroll');
	});
	$(btn_cancel).on('click',function(){
		$('.tableau').css('filter','blur(0px)');
		$('.notification').css('filter','blur(0px)');
		popup_remove.fadeOut(600);
		popup_remove.toggleClass('popup_open');
		$('body').css('overflow','scroll');
	});
});