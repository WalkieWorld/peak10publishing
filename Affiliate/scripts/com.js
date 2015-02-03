$( document ).ready(function() {
	
	var isDyn = false,
		navTop = $('#header-nav').offset().top; 		// get the top position of #header-nav

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
		}
	});

	$( window ).resize(function() {

		dynamicStyle();
	});

	var tabletStyle = function(){
		$('#header-nav').removeClass('navbar-fixed-top');
		$('#header-nav-container').removeClass('container');
		$('#header-nav-container').removeAttr( 'style' );
	}

	var dynamicStyle = function(){

		if($(window).width() > 639){
			
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

	$('#webFormSignUpShow').on('click', function(){

		var tag = $('#show_field_Email');

		if(verifySignUpForm(tag)){

			$('#inf_field_Email').val($('#show_field_Email').val());
			$('#inf_field_FirstName').val($('#show_field_FirstName').val());
			$('#inf_field_LastName').val($('#show_field_LastName').val());
			$('#inf_field_Phone1').val($('#show_field_Phone1').val());
			$('#inf_field_clickbankop').val($('#show_custom_clickbankhop').val());
			$('#inf_field_Nickname').val($('#show_field_Nickname').val());
			
			$('#signUpModal').submit();
		}
	});

	/**
	*	Verify the email address of the form, #signUpModel, when it submit.
	*/
	var verifySignUpForm = function(tag){

		var email = tag.val();

		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		
		if(email === "" || pattern.test(email) === false){

			tag.addClass('text-danger');
			return false;
		}else{

			return true;
		}
	};


	$('#signUpModal').submit(function(event){

		var tag = $('#inf_field_Email');
		return verifySignUpForm(tag);
	});
	
	/**
	*	Adjust the position when navigation is fixed
	*/
	$('#signUpModal').on('show.bs.modal', function (e) {

		$(".navbar-fixed-top").css("left", "-16px");
	});

	/**
	*	Empty only email text content when the dialog hides.
	*/
	$('#signUpModal').on('hidden.bs.modal', function (e) {

		if($('#inf_field_Email').hasClass('text-danger')){

			$('#inf_field_Email').removeClass('text-danger');
			$('#inf_field_Email').val('');
		}

		$(".navbar-fixed-top").css("left", "0px");
	});

	/**
	*	Define footer wrap width;
	*/
	var footerWrap = function(){
		
		var spanArr = $('.page-footer .wrap span');
		var labelArr = $('.page-footer .wrap label');
		
		var footerWidth = (function(){

			var wrapWidth = 0;
			var halfWrapWidth = 0;

			$.each(spanArr, function(index, val){

				var span = (spanArr[index].clientWidth + 4);
				
				if(index < Math.ceil(spanArr.length / 2)) {

					halfWrapWidth += span;
				}
				wrapWidth += span;
			});
			$.each(labelArr, function(index, val){
				
				var label = (labelArr[index].clientWidth + 4);
				
				if(index < Math.ceil(labelArr.length / 2)) {

					halfWrapWidth += label;
				}
				wrapWidth += label;
			});

			if(document.getElementsByClassName('page-footer')[0].clientWidth <= 566){
			
				return halfWrapWidth;
			}else{
			
				return wrapWidth;
			}
		})();
console.log(document.getElementsByClassName('page-footer')[0].clientWidth);
		$('.page-footer section .wrap').css("width", footerWidth + "px");
	};

	/**
	*	Run functions initially.
	*/
	footerWrap();

});