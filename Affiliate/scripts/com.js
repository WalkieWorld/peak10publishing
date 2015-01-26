$( document ).ready(function() {
	
	/**
	*	Verify the email address of the form, #signUpModel, when it submit.
	*/
	$('#signUpModal').submit(function(event){

		var email = $('#inf_field_Email').val();

		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		
		if(email === "" || pattern.test(email) === false){

			$('#inf_field_Email').addClass('text-danger');
			return false;
		}
	});
	
	/**
	*	Empty only email text content when the dialog hides.
	*/
	$('#signUpModal').on('hidden.bs.modal', function (e) {

		if($('#inf_field_Email').hasClass('text-danger')){

			$('#inf_field_Email').removeClass('text-danger');
			$('#inf_field_Email').val('');
		}
	});

	/**
	*	Define footer wrap width;
	*/
	var footerWrap = function(){
		
		var spanArr = $('.page-footer .wrap span');
		var labelArr = $('.page-footer .wrap label');
		
		var footerWidth = (function(){

			var wrapWidth = 0;

			$.each(spanArr, function(index, val){

				wrapWidth += (spanArr[index].clientWidth + 4);
			});
			$.each(labelArr, function(index, val){
		
				wrapWidth += (labelArr[index].clientWidth + 4);
			});

			return wrapWidth;
		})();

		$('.page-footer section .wrap').css("width", footerWidth + "px");
	};

	/**
	*	Run functions initially.
	*/
	footerWrap();

});