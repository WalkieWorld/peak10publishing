$( document ).ready(function() {
	
	$('#clickBankTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	$('#solarAirLanternTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	$('#grenadeTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	//$('#scroll-fix-bar')

});