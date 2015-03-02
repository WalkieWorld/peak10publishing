/**
 * Created by HZ on 2/19/2015.
 */
//When the DOM is not ready completely, this code will be invoked.
var RestyleDOM = {

    init: function(){
        this.setActiveAttr();
    },

    setActiveAttr: function(){
        "use strict"
        var url = window.location.href;
        var nav = document.getElementById("header-nav");
        var menuArray = this.toArray(nav.querySelectorAll("a"));
        var cntFlag = 0;
        var addAnchorClass = function(handler, pageName, addAttr){
            if((handler.href && handler.href.indexOf(pageName) !== -1)
                || (handler.childNodes[0].href && handler.childNodes[0].href.indexOf(pageName) !== -1)
            ){
                handler.classList.add(addAttr);
            }
        };
        menuArray.forEach(function(curVal, index, arr){
            if(url.toLowerCase() === "http://affiliate.survivalfrog.com/" ||url.indexOf("index.php") !== -1 ){
                addAnchorClass(curVal, "index.php", "active");
            }
            else if(url.indexOf("affiliatecontest.php") !== -1){
                addAnchorClass(curVal.parentNode, "affiliatecontest.php", "active");
            }
            else if(url.indexOf("survivalfrog.php") !== -1){
                addAnchorClass(curVal.parentNode, "survivalfrog.php", "active");
            }
            else if(url.indexOf("contactus.php") !== -1){
                addAnchorClass(curVal.parentNode, "contactus.php", "active");
            }
            else{
                if(cntFlag === 0) {
                    var p = document.createElement("p");
                    var li = document.createElement("li");
                    var ul = document.getElementsByClassName("nav navbar-nav");
                    li.classList.add("active");
                    p.classList.add("navbar-text");
                    if (url.indexOf("privacypolicy.php") !== -1) {
                        p.textContent = "Privacy Policy";
                    }
                    else if (url.indexOf("termconditions.php") !== -1) {
                        p.textContent = "Terms & Conditions";
                    }
                    ul[0].appendChild(li);
                    li.appendChild(p);
                    cntFlag = 1;
                }
            }
        });
    },

    toArray: function(obj){
        return Array.prototype.slice.call(obj);
    }
};

(function(){
    /**
     * In case of that IE doesn't support it
     * */
    try{
        var isCalled = true;
        var myAychr = new Promise(function(resolve, reject){
            resolve();
        });
        myAychr.then(
            RestyleDOM.init()
        )
    }
    catch(e) {
        isCalled = false;
    }
    finally{
        if(!isCalled){
            RestyleDOM.init();
        }
    }
})();