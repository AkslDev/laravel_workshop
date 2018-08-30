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

	$(notification).css('right', '20px');

	$(notification).on('mouseenter',function(){
		icon_close.fadeIn(600);
	});
	$(notification).on('mouseleave',function(){
		icon_close.fadeOut(600);
	});
	$(notification).on('click', function(){
		notification.fadeOut(600);
	})

});