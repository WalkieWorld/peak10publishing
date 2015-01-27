$( document ).ready(function() {


	var 
		navTop = $('#header-nav').offset().top, 		// get the top position of #header-nav
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