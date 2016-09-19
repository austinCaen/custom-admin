(function($){
	$(window).load(function(){
		$("#user_login").attr({
			placeholder: 'Identifiant',		
		});	
		$("#user_pass").attr({
			placeholder: 'Mot de passe',		
		});	
		$("#login").prepend('<a class="pixelea-logo" href="http://www.pixelea.fr"><img src="http://www.pixelea.fr/images/pixelea/logo_e.svg"/></a>')
	});
})(jQuery);