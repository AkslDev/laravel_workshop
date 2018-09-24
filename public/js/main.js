var projectJS = new function(){
	this.init = function(){
		this.tooltip();
		this.popupRemove();
		this.inputFile();
		this.menuResponsive();
		this.menuDropdown();
		this.backToTop();
		this.verifFormBootstrap();
		this.notification();
		this.homeAnimation();
		this.contactLoginAnimation();
		this.adminAnimation();
	}
	// Appel des tooltips
	this.tooltip = function(){
		$('[data-toggle="tooltip"]').tooltip()
	}
	// Page Admin - Popup remove confirmation
	this.popupRemove = function(){
		$('.btn-delete').on('click', function (e) {
			e.preventDefault();
			let id = $(this).attr('data-id');
			let url_compiled = 'http://' + window.location.host + '/admin/delete/' + id;
			$('#deletePost').attr('href', url_compiled)
			TweenMax.to($('.popup_remove'), 0.8, {display: 'block', opacity: 1, ease: Circ.easeOut});
		})
		$('.btn-close-remove').on('click', function (e) {
			e.preventDefault();
			TweenMax.to($('.popup_remove'), 0.5, {display: 'none', opacity: 0, ease: Circ.easeOut});
		})
		$('.btn-cancel').on('click', function (e) {
			e.preventDefault();
			TweenMax.to($('.popup_remove'), 0.5, {display: 'none', opacity: 0, ease: Circ.easeOut});
		})
	}
	// Page Create - Input type file
	this.inputFile = function(){
		$(document).on('click', '.upload-field', function(){
			var file = $(this).parent().parent().parent().find('.input-file');
			file.trigger('click');
		});
		$(document).on('change', '.input-file', function(){
			$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		});
	}
	// Menu responsive
	this.menuResponsive = function(){
		var menuBurger = $('.menu-burger');
		var menuContent = $('.menu-content')
		menuBurger.on('click' , function () {
		    	menuBurger.toggleClass('active');
		    	menuContent.toggleClass('active');
		});
	}
	// Menu Dropdown
	this.menuDropdown = function(){
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
	}
	// Bouton pour retourner en haut de page
	this.backToTop = function(){
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
	}
	// Verification des formulaires au submit
	this.verifFormBootstrap = function(){
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
	}
	// Notification 
	this.notification = function(){
		var text = $('.notification-message');
		var notification = $('.notification');

		if (text.length == 0) {
			TweenMax.to($(notification), 0.5, {display: 'none', right:'-100%'});
		}else{
			TweenMax.to($(notification), 0.5, {display: 'block', right:'25px'});
		}

		$(notification).on('click', function(e){
			TweenMax.to($(notification), 0.5, {display: 'none', right:'-100%'});
		});
	}
	// Animation Accueil / Stage / Formation
	this.homeAnimation = function(){
		var 	self		= this,
			tl		= new TimelineMax();
			item 	= $('.item');
			search 	= $('.search');
			tl.staggerTo($(item), 0.4, {autoAlpha:1,scale:1, ease: Circ.easeOut}, 0.2);
			tl.to($(search), 0.5, {autoAlpha:1,scale:1, ease: Circ.easeOut});
	}
	// Animation - Contact / Login / Create / Edit
	this.contactLoginAnimation = function(){
		login 	= $('.login-content');
		contact	= $('.contact-content');
		view 	= $('.post .item-open');
		preview 	= $('.preview .item-open');
		create	= $('.create-content');
		edit 		= $('.edit-content');

		TweenMax.to($(login), 0.5, {autoAlpha:1,scale:1, ease: Circ.easeOut});
		TweenMax.to($(contact), 0.5, {autoAlpha:1,scale:1, ease: Circ.easeOut});
		TweenMax.to($(view), 0.5, {autoAlpha:1, ease: Circ.easeOut});
		TweenMax.to($(preview), 0.5, {autoAlpha:1, ease: Circ.easeOut});
		TweenMax.to($(create), 0.5, {autoAlpha:1,scale:1, ease: Circ.easeOut});
		TweenMax.to($(edit), 0.5, {autoAlpha:1,scale:1, ease: Circ.easeOut});
	}
	// Animation Admin
	this.adminAnimation = function(){
			admin 	= $('.admin-content');
			adminTr 	= $('.admin-content .table tbody tr')
			TweenMax.to($(admin), 0.5, {autoAlpha:1, ease: Circ.easeOut});
			TweenMax.staggerTo($(adminTr), 0.2, {autoAlpha:1, ease: Circ.easeOut}, 0.1);


	}
}
projectJS.init();
