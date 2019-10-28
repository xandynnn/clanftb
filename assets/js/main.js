/*
	Future Imperfect by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel.breakpoints({
		xlarge:	'(max-width: 1680px)',
		large:	'(max-width: 1280px)',
		medium:	'(max-width: 980px)',
		small:	'(max-width: 736px)',
		xsmall:	'(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$menu = $('#menu'),
			$sidebar = $('#sidebar'),
			$main = $('#main');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// IE<=9: Reverse order of main and sidebar.
			if (skel.vars.IEVersion <= 9)
				$main.insertAfter($sidebar);

		// Menu.
			$menu
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'right',
					target: $body,
					visibleClass: 'is-menu-visible'
				});

		// Search (header).
			var $search = $('#search'),
				$search_input = $search.find('input');

			$body
				.on('click', '[href="#search"]', function(event) {

					event.preventDefault();

					// Not visible?
						if (!$search.hasClass('visible')) {

							// Reset form.
								$search[0].reset();

							// Show.
								$search.addClass('visible');

							// Focus input.
								$search_input.focus();

						}

				});

			$search_input
				.on('keydown', function(event) {

					if (event.keyCode == 27)
						$search_input.blur();

				})
				.on('blur', function() {
					window.setTimeout(function() {
						$search.removeClass('visible');
					}, 100);
				});

		// Intro.
			var $intro = $('#intro');

			// Move to main on <=large, back to sidebar on >large.
			skel.on('+large', function() {
				$intro.prependTo($main);
			}).on('-large', function() {
				$intro.prependTo($sidebar);
			});

		var strPass="manobradosFTB";

		jQuery(".acceptApply").click(function(){
			var obj = jQuery(this);
			var line = obj.parent().parent();
			var user = obj.attr("data-player");
			var loadingBar = '<div class="button"><i class="fa fa-cog fa-spin"></i></div>';
			var box = obj.parent();
			box.html(loadingBar);
			$.post('../call/acceptUser.php', {account:user} ).done(function(data){
				var json = eval("("+data+");");
				if ( json.success == true){
					box.html('<div class="buttonS"><i class="fa fa-check"></i></div>');
					line.fadeOut(1000);
				}else{
					box.html('<div class="buttonE"><i class="fa fa-exclamation-triangle"></i></div>');
				}
			});
		});

		jQuery(".declineApply").click(function(){
			var obj = jQuery(this);
			var line = obj.parent().parent();
			var user = obj.attr("data-player");
			var loadingBar = '<div class="button"><i class="fa fa-cog fa-spin"></i></div>';
			var box = obj.parent();
			box.html(loadingBar);
			$.post('../call/declineUser.php', {account:user} ).done(function(data){
				var json = eval("("+data+");");
				if ( json.success == true){
					box.html('<div class="buttonS"><i class="fa fa-check"></i></div>');
					line.fadeOut(1000);
				}else{
					box.html('<div class="buttonE"><i class="fa fa-exclamation-triangle"></i></div>');
				}
			});
		});

		// Ajax
		var updateButton = $(".updatePlayer");
		updateButton.click(function(){
			var obj = $(this);
			var box = obj.parent();
			var loadingBar = '<i class="fa fa-cog fa-spin"></i>';
			box.html(loadingBar);
			var plataforma = obj.attr("data-plataforma");
			var username = obj.attr("data-username");
			var urlUpdate = obj.attr("data-update") + "?username=" + username;
			$.ajax({
				url: urlUpdate,
				success: function( response ){
					//forçando o parser
					var data = response;
					if ( data == "success"){
						box.html('<i class="fa fa-check"></i>');
					}else{
						box.html('<i class="fa fa-exclamation-triangle"></i>');
					}

				}
			});
		});

		//Inscrição Player
		var registerForm = $('#registerForm');
		registerForm.submit(function(e) {

			if (jQuery("#auth").val() == strPass){

				var obj = $(this);

				$.post('../call/registerUser.php', obj.serialize() ).done(function(data) {
					var json = eval("("+data+");");
					if(json.error){
						obj.find(".msg").remove();
						var nItens = json.error.field.length;
						obj.find('[name]').parent().removeClass("has-error");
						for(i=0;i<nItens;){
							obj.find('[name='+json.error.field[i]+']').parent().addClass("has-error");
							i++;
						}
						var mensagem = json.message;
						if ( json.errorUsername ){ mensagem = mensagem + json.errorUsername; }
						if ( json.errorEmail ){	mensagem = mensagem + json.errorEmail; }
						var string = '<div class="msg"><blockquote><h3>Opss... Ocorreu algum problema.</h3>'+mensagem+'</blockquote></div>';
						obj.prepend(string);

					} else {
						obj.find(".msg").remove();
						obj.find('[name]').parent().removeClass("has-error");
						if ( json.sucess == true ){
							var string = '<div class="msg"><blockquote><h3>Player cadastrado com sucesso!</h3>Para visualizar o Player, acesse o link Players no menu Principal.</blockquote></div>';
							obj.prepend(string);
							obj.find("input[type='text'], textarea").val("");
						} else {
							var string = '<div class="msg"><blockquote><h3>Opss... Ocorreu algum problema.</h3>'+mensagem+'</blockquote></div>';
							obj.prepend(string);
						}
					}
				});

			}

			return false;
		});

		jQuery("#auth").on("keyup",function(){
			if( jQuery(this).val() == strPass ){
				jQuery("#registerSec, #linksSec, #approvalSec").slideDown();
				jQuery("#registerSec").find("#nome").focus();
				jQuery("#registerPage, #adminPage, #approvalPage").slideUp();
			}
		});

		// Apply Player
		var applyForm = $('#applyForm');
		applyForm.submit(function(e) {

			var obj = $(this);

			$.post('call/registerApply.php', obj.serialize() ).done(function(data) {
				var json = eval("("+data+");");
				if(json.error){
					obj.find(".msg").remove();
					var nItens = json.error.field.length;
					obj.find('[name]').parent().removeClass("has-error");
					for(i=0;i<nItens;){
						obj.find('[name='+json.error.field[i]+']').parent().addClass("has-error");
						i++;
					}
					var mensagem = json.message;
					if ( json.errorUsername ){ mensagem = mensagem + json.errorUsername; }
					if ( json.errorEmail ){	mensagem = mensagem + json.errorEmail; }
					var string = '<div class="msg"><blockquote><h3>Opss... Ocorreu algum problema.</h3>'+mensagem+'</blockquote></div>';
					obj.prepend(string);

				} else {
					obj.find(".msg").remove();
					obj.find('[name]').parent().removeClass("has-error");
					if ( json.sucess == true ){
						var string = '<div class="msg"><blockquote><h3>Player cadastrado com sucesso!</h3>Para visualizar o Player, acesse o link Players no menu Principal.</blockquote></div>';
						obj.prepend(string);
						obj.find("input[type='text'], textarea").val("");
					} else {
						var string = '<div class="msg"><blockquote><h3>Opss... Ocorreu algum problema.</h3>'+mensagem+'</blockquote></div>';
						obj.prepend(string);
					}
				}
			});

			return false;
		});

	});

})(jQuery);