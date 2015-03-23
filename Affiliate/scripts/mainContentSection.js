/**
 * Created by HZ on 2/20/2015.
 */

var hasInvokeHeight = false;
var sectionBodyHeight = {

    headerHt: undefined,
    footerHt: 0,
    windowHt: undefined,
    bodyHt: undefined,
    sBody: document.querySelector("section.body"),
    sHgt: 0,
    mySetHeightInterval: undefined,

    initial: function(){
        "use strict"
        hasInvokeHeight = true;
        this.headerHt = document.querySelector("header.big-header").clientHeight;
        //this.footerHt = document.querySelector("footer.page-footer").clientHeight;
        this.windowHt = document.getElementsByTagName("body")[0].clientHeight;
        this.bodyHt = document.querySelector("section.body").clientHeight;
        this.sHgt = this.bodyHt;
        this.mySetHeightInterval = setInterval(this.setHeight, 1);
    },

    setHeight: function(){
        "use strict"
        if(document.querySelector("footer.page-footer") !== undefined){
            sectionBodyHeight.footerHt = document.querySelector("footer.page-footer").clientHeight;
        }
        if(sectionBodyHeight.windowHt > (sectionBodyHeight.headerHt + sectionBodyHeight.sHgt)){
            sectionBodyHeight.sHgt += 5;
            if(Math.abs(sectionBodyHeight.windowHt - (sectionBodyHeight.sHgt + sectionBodyHeight.headerHt + sectionBodyHeight.footerHt)) < 5){
                sectionBodyHeight.sBody.style.minHeight = (sectionBodyHeight.windowHt - sectionBodyHeight.headerHt - sectionBodyHeight.footerHt - 4)  + "px";
                clearInterval(sectionBodyHeight.mySetHeightInterval);
            }else{
                sectionBodyHeight.sBody.style.minHeight = sectionBodyHeight.sHgt + "px";
            }
        }else{
            sectionBodyHeight.sBody.style.minHeight = (sectionBodyHeight.windowHt - sectionBodyHeight.headerHt - sectionBodyHeight.footerHt - 4) + "px";
            clearInterval(sectionBodyHeight.mySetHeightInterval);
        }
    }
};
// Implement the function, resizing body height, immediately.
(function(){
    "use strict"
    /**
     * In case of that IE doesn't support it
     * */
    try{
        var isCalled = true;
        var myAychr = new Promise(function(resolve, reject){
            resolve();
        });
        myAychr.then(
            sectionBodyHeight.initial()
        )
    }
    catch(e) {
        isCalled = false;
    }
    finally{
        if(!isCalled){
            sectionBodyHeight.initial();
        }
    }
})();