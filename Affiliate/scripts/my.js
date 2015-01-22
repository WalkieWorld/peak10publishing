$( document ).ready(function() {
	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	$('#clickBankTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

});