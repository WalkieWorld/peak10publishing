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
        var addAnchorClass = function(handler, pageName, addAttr){
            if( handler.href.indexOf(pageName) !== -1 ){
                handler.classList.add(addAttr);
            }
        };
        menuArray.forEach(function(curVal, index, arr){
            if( url.indexOf("index.php") !== -1 ){
                addAnchorClass(curVal, "index.php", "active");
            }else if(url.indexOf("clickbank.php") !== -1){
                addAnchorClass(curVal, "clickbank.php", "active");
            }else if(url.indexOf("survivalfrog.php") !== -1){
                addAnchorClass(curVal, "survivalfrog.php", "active");
            }else{
                addAnchorClass(curVal, "contactus.php", "active");
            }
        });
    },

    toArray: function(obj){
        return Array.prototype.slice.call(obj);
    }
};

(function(){
    new Promise(function(resolve, reject){
        resolve(RestyleDOM.init());
    });
})();