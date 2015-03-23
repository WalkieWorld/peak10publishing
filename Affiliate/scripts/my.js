$(document).ready(function() {

	var navTop = $('#header-nav').offset().top, 		// get the top position of #header-nav
		cbTabTop = $('#clickBankTab').offset().top;

	// Reset the style of ClickBank tabs and panels.
	var resetStyleCB = function(windowScrollTop){
		
		if($(window).width() >= 992){

			var winTop = windowScrollTop;
			// if isDyn === true, 
			// that means that this part has already implemented by com.js
			if(!isDyn){
				// calculate navigation position then keep it at the top
				if ((winTop - navTop) > 0){
					
					$('#logo').addClass('logo-margin');
					$('#header-nav').addClass('navbar-fixed-top');
					$('#header-nav-container').addClass('container');
				}
				// when user scroll to the top, recover its position.
				else{

					$('#logo').removeClass('logo-margin');
					$('#header-nav').removeClass('navbar-fixed-top');
					$('#header-nav-container').removeClass('container');
					$('#header-nav-container').removeAttr( 'style' );
				}
			}

			//calculate ClickBank tab position then keep it at the top
			if(winTop - cbTabTop > -52){

				$('#clickBankTab').addClass('fixed-cbTab');
				$('#clickBankTabContent').addClass('fixed-cbTab-right-tab-content');
			}else{

				$('#clickBankTab').removeClass('fixed-cbTab');
				$('#clickBankTabContent').removeClass('fixed-cbTab-right-tab-content');
			}
		}
	}

	/**
	*	Keep navigation and left tab at the top.
	*	When their position are back, restore their original style.
	*/
	$(window).scroll(function(){

		resetStyleCB($(window).scrollTop());
	});

	$( window ).resize(function() {

		dynamicStyle();
		dynamicResizeBannerImage();
	});

	// style script for tablets.
	var tabletStyle = function(){
		$('#header-nav').removeClass('navbar-fixed-top');
		$('#header-nav-container').removeClass('container');
		$('#header-nav-container').removeAttr( 'style' );
		$('#clickBankTab').removeClass('fixed-cbTab');
		$('#clickBankTabContent').removeClass('fixed-cbTab-right-tab-content');
	}

	// style script for phones
	var phoneStyle = function(){
		$('#clickBankTab').removeClass('left-tabs');
		$('#left-tabpanel').removeClass('left-tabpanel');
		$('#left-tabpanel').addClass('top-tabpanel');
	}

	// compute what right style is for current user dynamically
	var dynamicStyle = function(){

		if($(window).width() <= 639){

			phoneStyle();
		}else{

			$('#clickBankTab').addClass('left-tabs');
			$('#left-tabpanel').addClass('left-tabpanel');
			$('#left-tabpanel').removeClass('top-tabpanel');

			if($(window).width() < 992){

				tabletStyle();
			}
		}
	}

	var dynamicResizeBannerImage = function(){
		var bannerImage = $('.banner-info figure img').width();

		if( bannerImage <= 298 && (bannerImage + 2) >= document.querySelector('.banner-info').clientWidth){

			$('.tab-content .banner-info').addClass('banner-info-resize');
		}else if(bannerImage > 298){

			$('.tab-content .banner-info.banner-info-resize').removeClass('banner-info-resize');
		}
	}

	/**
	*	Run functions initially.
	*/
	// detect current size of window for using the right style
	resetStyleCB($(window).scrollTop());
	
	dynamicStyle();

    /*************************************************************** Generate Link Functions *********************************************************/
	// Verify the required content helper
	function MM_findObj(n, d) { //v4.01
		var p,i,x;  
		if(!d) d=document; 
		if((p=n.indexOf("?"))>0 && parent.frames.length) {
			d=parent.frames[n.substring(p+1)].document; 
			n=n.substring(0,p);
		}
		if(!(x=d[n])&&d.all) x=d.all[n]; 
		for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
			for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
				if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	// Verify the required content
	function MM_validateForm() { //v4.0
		var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
		for (i=0; i<(args.length-2); i+=3) { 

			test=args[i+2]; val=MM_findObj(args[i]);

			if (val) { 

				nm=val.name; 

				if ((val=val.value)!="") {

					if (test.indexOf('isEmail')!=-1) { 
						p=val.indexOf('@');
						if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
					} else if (test!='R') { 

						num = parseFloat(val);
						
						if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

						if (test.indexOf('inRange') != -1) { 

							p=test.indexOf(':');
							min=test.substring(8,p); max=test.substring(p+1);
							if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
						} 
					} 
				} 
				else if (test.charAt(0) == 'R') errors += 'The Infusionsoft Affiliate ID'+nm+' is required!\n';
			}
		} 
		if (errors) alert('The following error(s) occurred:\n'+errors);
		document.MM_returnValue = (errors == '');
	}

	var genBtn = document.getElementById("genBtn");

    var alertRequired = function(handle, classArray){
        classArray.forEach(function(curVal, index, arr){
            handle.classList.add(curVal);
        });
    }
	// Generate Button event
	genBtn.addEventListener("click", function(){

		MM_validateForm('cbid','','R');
		if(document.MM_returnValue){

			GenerateLinkObject.clearAlert(document.getElementById('cbid'), ["alert", "alert-danger", "my-alert"]);

			var cbid = document.getElementById('cbid').value.trim(),
			tid = document.getElementById('tid').value.trim(),
			pVal,
			onOff,
			generatedLink = "https://ts970.isrefer.com/go/";
			
			var pSelect = GenerateLinkObject.toArray(document.getElementById('pTarget'));
			var rCheck = document.querySelectorAll("[type='radio']");

            pSelect.forEach(function(curVal, index, arr){
                if(curVal.selected === true){
                    pVal = curVal.value;
                }
            });

			rCheck.item(0).checked === true	? onOff = rCheck.item(0).value 
											: onOff = rCheck.item(1).value;

            if(onOff === ""){ // pop when exit
                generatedLink += pVal + "/" + cbid.trim() + "/" + tid.trim();
            }else{  // no pop when exit
                generatedLink += pVal + "/" + cbid.trim() + "/" + tid.trim() + "?v=n";
            }
			document.getElementById("generatedLink").value = generatedLink;
			document.getElementById("generatedLink").title = generatedLink;
			
			$('#generatedLink[data-toggle="tooltip"]').tooltip();

			$('#generatedLink[data-toggle="tooltip"]').on('shown.bs.tooltip', function () {
				
				document.getElementsByClassName("tooltip-inner")[0].textContent = generatedLink;
			});
		}else{

			alertRequired(document.getElementById('cbid'), ["alert", "alert-danger", "my-alert"]);
		}
	});

    //================================== Switch Generate Link Tab Functions ============================================//

    var GenerateLinkObject = {
        mainTabsFrame: document.getElementById("clickBankTab"),
        mainTabs: undefined,
        subTabs: undefined,
        flag: "patrioticParacordGenerateLink",    // set it manually
        init: function(){
            "use strict"
            this.mainTabs = this.toArray(this.mainTabsFrame.getElementsByTagName("a"));
            var leftSubTabsFrame = document.getElementById("clickBankTabContent");
            this.subTabs = this.toArray(leftSubTabsFrame.getElementsByTagName("a"));
            this.render();
        },
        toArray: function(nodeList){
            return Array.prototype.slice.call(nodeList);
        },
        addEvent: function(handler, event, fun){
            handler.addEventListener(event, fun);
        },
        /**
         * selectedId:
         *  0: Solar Air Lantern ID,
         *  1: Grenade ID,
         *  2: Patriotic Paracord,
         *  3: Cobra Belt
         * */
        appearGenerateLink: function(id, selectedId){
            "use strict"
            document.getElementById('generateLiknForm').classList.remove('hidden');
            $(id).append($('#generateLiknForm'));

            document.getElementById('pTarget').querySelectorAll("option").item(selectedId).selected = "selected";
        },
        clearGeneratLinkForm: function(){
            "use strict"
            document.getElementById('generatedLink').value = "";
            document.getElementById('cbid').value = "";
            document.getElementById('tid').value = "";
            document.getElementById('onPop').checked = true;
            $('#generatedLink[data-toggle="tooltip"]').tooltip('destroy');
        },
        clearAlert: function(handle, classArray){
            "use strict"
            classArray.forEach(function(curVal, index, arr){

                handle.classList.remove(curVal);
            });
        },
        directToGL: function(selector){
            "use strict"
            var salNode = $(selector)[0];
            salNode = Array.prototype.slice.call(salNode.children);
            salNode.forEach(function(curVal, index, arr){

                if(curVal.className.indexOf("active") === 0){
                    curVal.classList.remove("active");
                }
                if(index === arr.length - 1){
                    curVal.classList.add("active");
                }
            });
        },
        checkRenderResult: function(){
            "use strict"
            if(document.getElementById(GenerateLinkObject.flag) !== null){
                clearInterval(GenerateLinkObject.checkRenderResult);
                GenerateLinkObject.render();
            }else{
                return false;
            }
        },
        // Add event to left-main-tab-nav and sub-tab-nav
        render: function(){
            "use strict"
            // Add event to left-main-tab-nav
            this.mainTabs.forEach(function(curVal, index, arr){
                GenerateLinkObject.addEvent(curVal, "click", function(){
                    var id = curVal.href.split("#")[1];
                    // remove the first tab link, because it's not a product
                    if(id !== "cbAbout"
                        && id !== undefined){
                        GenerateLinkObject.clearAlert(document.getElementById('cbid'), ["alert", "alert-danger", "my-alert"]);
                        GenerateLinkObject.clearGeneratLinkForm();
                        GenerateLinkObject.appearGenerateLink("#" + id + "GenerateLink", index - 1);
                    }
                });
            });
            // Add event to sub-tab-nav
            this.subTabs.forEach(function(curVal, index, arr){
                var id = curVal.href.split("#")[1];
                if(id !== undefined && id.indexOf("Link") !== -1){
                    if(document.getElementById(id).className.indexOf('active') !== -1){
                        GenerateLinkObject.clearAlert(document.getElementById('cbid'), ["alert", "alert-danger", "my-alert"]);
                        GenerateLinkObject.clearGeneratLinkForm();
                        var mainId = GenerateLinkObject.mainTabs.indexOf(id);
                        GenerateLinkObject.appearGenerateLink("#" + id, mainId - 1);
                        GenerateLinkObject.directToGL("#" + id + "Tab");
                    }
                }
            });
        }
    };

    GenerateLinkObject.init();

    //============================== End Switch Generate Link Tab Functions ============================================//
    /******************************************************************* End Generate Link Functions *************************************************/

    //ZeroClipboard.config( { swfPath: "https://cdnjs.cloudflare.com/ajax/libs/zeroclipboard/2.2.0/ZeroClipboard.swf" } );
    // For testing Copy function
    var myCopy = {
        btnArray: Array.prototype.slice.call(document.getElementsByClassName("copy")),
        preArray: Array.prototype.slice.call(document.getElementsByTagName("pre")),
        init: function(){
            this.getBtnArray();
            this.preArray.forEach(function(curVal, index, arr){
                myCopy.addEvent(curVal, "mouseenter", function(e){
                    $(this).next("button").show("slow").animate({
                        "bottom": "58px"
                    }, 500);
                });
            });
        },
        getBtnArray: function(){
            new ZeroClipboard(this.btnArray);
        },
        addEvent: function(handler, event, fun){
            handler.addEventListener(event, fun);
        }
    };
    myCopy.init();

    /**
     * Detect click nav tabs automatically.
     * */
    (function(){
        "use strict"
        var myAychr = new Promise(function(resolve, reject){
            var urlParameter = window.location.hash.split("#");
            if(urlParameter.length === 2){
                try{
                    resolve(urlParameter[1]);
                }
                catch (ex){
                    reject(ex.message);
                }
            }
        });
        myAychr.then(function(id){
            var myClick = document.querySelector("[aria-controls='" + id + "']");
            if(myClick){
                myClick.click();
            }
        }, function(err){
            alert(err);
        });
    })();
});
