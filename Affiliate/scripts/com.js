// Globle variables here
var isDyn = false;

$(document).ready(function () {

    var navTop = $('#header-nav').offset().top,	// get the top position of #header-nav
        spanArr = (function () { 					// Adjust postion of footer links
            var s = [];
            $('.page-footer .wrap span').each(function (index, curVal) {

                s.push(curVal.clientWidth);
            });
            return s;
        })();

    var resetStyleCB = function (windowScrollTop) {

        if ($(window).width() >= 992) {

            var winTop = windowScrollTop;

            // calculate navigation position then keep it at the top
            if ((winTop - navTop) > 0) {

                $('#logo').addClass('logo-margin');
                $('#header-nav').addClass('navbar-fixed-top');
                $('#header-nav-container').addClass('container');
                $('#header-nav-container').css('margin-bottom', '0px');
            }
            // when user scroll to the top, recover its position.
            else {

                $('#logo').removeClass('logo-margin');
                $('#header-nav').removeClass('navbar-fixed-top');
                $('#header-nav-container').removeClass('container');
                $('#header-nav-container').removeAttr('style');
            }
        }

        return true;
    };
    /**
     *    Keep navigation and left tab at the top.
     *    When their position are back, restore their original style.
     */
    $(window).scroll(function () {

        isDyn = resetStyleCB($(window).scrollTop());
    });

    $(window).resize(function () {

        dynamicStyle();
    });

    var tabletStyle = function () {
        $('#header-nav').removeClass('navbar-fixed-top');
        $('#header-nav-container').removeClass('container');
        $('#header-nav-container').removeAttr('style');
    }

    var dynamicStyle = function () {

        if ($(window).width() > 639) {

            if ($(window).width() < 992) {

                tabletStyle();
            }
        }
    }

    /**
     *    Run functions initially.
     */
    // detect current size of window for using the right style
    if (($(window).scrollTop() - navTop) > 0) {
        isDyn = resetStyleCB($(window).scrollTop());
    }
    if ($("title").text().toLowerCase().indexOf("clickbank") !== -1) {
        dynamicStyle();
    }

    /**
     *    Verify the email address of the form, #signUpModel, when it submit.
     */
    var SignupModel = {
        firstName: document.getElementById("inf_field_FirstName"),
        lastName: document.getElementById("inf_field_LastName"),
        userName: "af",
        init: function () {
            this.submit();
            this.addEvent(this.firstName, "keyup", function (e) {
                SignupModel.generateUserName(e, this);
            });
            this.addEvent(this.lastName, "keyup", function (e) {
                SignupModel.generateUserName(e, this);
            });
            this.addEvent(this.firstName, "keydown", function (e) {
                SignupModel.generateUserName(e, this);
            });
            this.addEvent(this.lastName, "keydown", function (e) {
                SignupModel.generateUserName(e, this);
            });
        },
        addEvent: function (handler, event, fun) {
            handler.addEventListener(event, fun);
        },
        verifySignUpForm: function (tag, tagName) {
            "use strict"
            var tagVal = tag instanceof NodeList ? tag : tag.val();
            switch (tagName) {
                case "email":
                    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                    if (tagVal === "" || pattern.test(tagVal) === false) {
                        tag.addClass('text-danger');
                        return 0;
                    }
                    else {
                        return 1;
                    }
                    break;
                case "name":
                    if (!isNaN(tagVal) || tagVal === "") {
                        tag.addClass('text-danger');
                        return 0;
                    }
                    else {
                        return 1;
                    }
                    break;
                case "password":

                    if (tagVal[0].value !== tagVal[1].value) {
                        for (var i = 0; i < tagVal.length; i++) {
                            tagVal[i].classList.add("text-danger");
                        }
                        return 0;
                    }
                    else {
                        return 1;
                    }
                    break;
                default :
                    break;
            }
        },
        submit: function () {
            "use strict"
            $('#signUpModal').submit(function (event) {
                "use strict"
                var isTrueArray = [];
                var tag = $('#inf_field_Email');
                var cntTrue = 0;
                isTrueArray.push(SignupModel.verifySignUpForm(tag, "email"));
                tag = $('#inf_field_FirstName');
                isTrueArray.push(SignupModel.verifySignUpForm(tag, "name"));
                tag = $('#inf_field_LastName');
                isTrueArray.push(SignupModel.verifySignUpForm(tag, "name"));
                tag = $('#inf_other_Username');
                isTrueArray.push(SignupModel.verifySignUpForm(tag, "name"));
                tag = document.querySelectorAll("input[type='password']");
                isTrueArray.push(SignupModel.verifySignUpForm(tag, "password"));

                isTrueArray.forEach(function (curVal, index, arr) {
                    if (curVal === 1) {
                        cntTrue++;
                    }
                });
                if (cntTrue === isTrueArray.length) {
                    return true;
                }
                return false;
            });
        },
        generateUserName: function (e, handler) {
            "use strict"
            var val = handler.value.trim();
            if ((e.keyCode >= 65 && e.keyCode <= 90)   // A-Z letters
                || e.keyCode === 16 // Shift Left & Right
                || e.keyCode === 20 // CapsLock
                || e.keyCode === 37 // Left Arrow
                || e.keyCode === 39 // Right Arrow
                || e.keyCode === 46 // Delete
                || e.keyCode === 8 // Backspace
                || e.keyCode === 9  // Tab
            ) {
                SignupModel.reset('af');
                document.getElementById("inf_other_Username").value = SignupModel.userName;
            } else {
                e.preventDefault();
            }
        },
        reset: function (header) {
            var fVal = document.getElementById("inf_field_FirstName").value;
            var lVal = document.getElementById("inf_field_LastName").value;
            SignupModel.userName = header + fVal.substring(0, 2) + lVal.substring(0, 2);
        }
    };

    SignupModel.init();

    /*var verifySignUpForm = function(tag, tagName){
     "use strict"
     var tagVal = tag instanceof NodeList ? tag : tag.val();
     switch (tagName){
     case "email":
     var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
     if(tagVal === "" || pattern.test(tagVal) === false){
     tag.addClass('text-danger');
     return 0;
     }
     else{
     return 1;
     }
     break;
     case "name":
     if(!isNaN(tagVal) || tagVal === ""){
     tag.addClass('text-danger');
     return 0;
     }
     else{
     return 1;
     }
     break;
     case "password":

     if(tagVal[0].value !== tagVal[1].value){
     for(var i = 0; i < tagVal.length; i++){
     tagVal[i].classList.add("text-danger");
     }
     return 0;
     }
     else{
     return 1;
     }
     break;
     default :
     break;
     }
     };*/

    /**
     *    Adjust the position when navigation is fixed
     */
    $('#signUpModal').on('show.bs.modal', function (e) {

        $(".navbar-fixed-top").css("left", "-16px");
    });

    /**
     *    Empty only email text content when the dialog hides.
     */
    $('#signUpModal').on('hidden.bs.modal', function (e) {

        if ($('#inf_field_Email').hasClass('text-danger')) {

            $('#inf_field_Email').removeClass('text-danger');
            $('#inf_field_Email').val('');
        }

        $(".navbar-fixed-top").css("left", "0px");
    });

    /**
     *    Define footer wrap width;
     */
    var footerWrap = function () {

        var labelArr = $('.page-footer .wrap label');
        var footerWidth = (function () {

            var wrapWidth = 0;
            var halfWrapWidth = 0;
            var oneWrapWidth = 0;
            var fw = document.getElementsByClassName('page-footer')[0].clientWidth;
            if (document.querySelector('.page-footer section .wrap span').clientWidth) {
                spanArr = (function () {
                    var s = [];
                    $('.page-footer .wrap span').each(function (index, curVal) {

                        s.push(curVal.clientWidth);
                    });
                    return s;
                })();
            }

            $.each(spanArr, function (index, val) {

                var span = (spanArr[index] + 4);

                if (index === 0) {

                    oneWrapWidth += span;
                }
                if (index < Math.floor(spanArr.length / 2)) {

                    halfWrapWidth += span;
                }
                wrapWidth += span;
            });
            $.each(labelArr, function (index, val) {

                var label = (labelArr[index].clientWidth + 4);

                if (index === 0) {

                    oneWrapWidth += label;
                }
                if (index < Math.floor(labelArr.length / 2)) {

                    halfWrapWidth += label;
                }
                wrapWidth += label;
            });

            if (halfWrapWidth >= (fw - (spanArr.length - 1) * 4)
                && fw >= window.innerWidth) {

                $('.page-footer section .wrap span').css("display", "none");
                return oneWrapWidth;
            }
            else if (wrapWidth
                >= document.getElementsByClassName('container')[0].clientWidth) {

                var spanList = document.querySelectorAll('.page-footer section .wrap span');
                Array.prototype.slice.call(spanList).forEach(function (cur, index, arr) {

                    cur.removeAttribute('style');
                });

                return halfWrapWidth;
            } else {

                var spanList = document.querySelectorAll('.page-footer section .wrap span');
                Array.prototype.slice.call(spanList).forEach(function (cur, index, arr) {

                    cur.removeAttribute('style');
                });

                return wrapWidth;
            }
        })();

        $('.page-footer section .wrap').css("width", footerWidth + "px");
    };

    /**
     * Compute section.body height dynamically.
     * */

    $(window).resize(function () {

        sectionBodyHeight.initial();
        footerWrap();
    });

    /**
     *    Run functions initially.
     */
    footerWrap();
    try {
        hasInvokeHeight;
    } catch (e) {
        hasInvokeHeight = false;
    } finally {
        if (hasInvokeHeight !== null && hasInvokeHeight === false) {
            sectionBodyHeight.initial();
        }
    }

});