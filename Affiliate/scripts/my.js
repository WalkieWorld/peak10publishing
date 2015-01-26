$( document ).ready(function() {


	var 
		navTop = $('#header-nav').offset().top 		// get the top position of #header-nav
		cbTabTop = $('#clickBankTab').offset().top;
	
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
	*	Keep navigation and left tab at the top.
	*	When their position are back, restore their original style.
	*/
	$(window).scroll(function(){
		if($(window).width() >= 992){
			var winTop = $(window).scrollTop();

			// calculate navigation position then keep it at the top
			if ((winTop - navTop) > 0){

				$('#logo').addClass('logo-margin');
				$('#header-nav').addClass('navbar-fixed-top');
				$('#header-nav-container').addClass('container');
				$('#header-nav-container').css('margin-bottom', '0px');
			}
			// when user scroll to the top, recover its position.
			else{

				$('#logo').removeClass('logo-margin');
				$('#header-nav').removeClass('navbar-fixed-top');
				$('#header-nav-container').removeClass('container');
				$('#header-nav-container').removeAttr( 'style' );
			}

			//calculate ClickBank tab position then keep it at the top
			if(winTop - cbTabTop > -68){

				$('#clickBankTab').addClass('fixed-cbTab');
				$('#clickBankTabContent').addClass('fixed-cbTab-right-tab-content');
			}else{

				$('#clickBankTab').removeClass('fixed-cbTab');
				$('#clickBankTabContent').removeClass('fixed-cbTab-right-tab-content');
			}
		}
	});

	$( window ).resize(function() {

		dynamicStyle();
	});

	var tabletStyle = function(){
		$('#header-nav').removeClass('navbar-fixed-top');
		$('#header-nav-container').removeClass('container');
		$('#header-nav-container').removeAttr( 'style' );
		$('#clickBankTab').removeClass('fixed-cbTab');
		$('#clickBankTabContent').removeClass('fixed-cbTab-right-tab-content');
	}

	var phoneStyle = function(){
		$('#clickBankTab').removeClass('left-tabs');
		$('#left-tabpanel').removeClass('left-tabpanel');
	}

	var dynamicStyle = function(){

		if($(window).width() <= 639){

			phoneStyle();
		}else{

			$('#clickBankTab').addClass('left-tabs');
			$('#left-tabpanel').addClass('left-tabpanel');

			if($(window).width() < 992){

				tabletStyle();
			}
		}
	}

	/**
	*	Run functions initially.
	*/

	// detect current size of window for using the right style
	dynamicStyle();

});