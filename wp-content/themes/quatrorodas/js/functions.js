jQuery(document).ready(function($) {
	//Função que habilita e desabilita o menu p/ mobile
	$('.menu-mobile').live('click', function(event) {
		if($('#nav-header').is(':visible')){
			$('#nav-header').hide();	
		} else{
			$('#nav-header').show();	
		}
	});
});
