$(function(){

	//Masked Input
	$(".parcela").mask("R$ 99,99", {
		//placeholder:"Ex: (XX) 9999-9999"
	});
	$(".tel").mask("(99) 9999-9999", {
		//placeholder:"Ex: (XX) 9999-9999"
	});

	//Accordion
	$('h4.accordion-title').click(function(){
		$(this).parent().find('div.accordion-content').slideToggle(300);
	});
	
});