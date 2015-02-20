/**
 * Created by HZ on 2/20/2015.
 */
var sectionBodyHeight = {

    headerHt: undefined,
    footerHt: 0,
    windowHt: undefined,
    bodyHt: undefined,
    sBody: document.querySelector("section.body"),
    sHgt: 0,

    initial: function(){
        "use strict"
        this.headerHt = document.querySelector("header.big-header").clientHeight;
        //this.footerHt = document.querySelector("footer.page-footer").clientHeight;
        this.windowHt = document.getElementsByTagName("body")[0].clientHeight;
        this.bodyHt = document.querySelector("section.body").clientHeight;
        this.sHgt = this.bodyHt;
        setInterval(this.setHeight, 1);
    },

    setHeight: function(){
        "use strict"
        if(document.querySelector("footer.page-footer") !== undefined){
            sectionBodyHeight.footerHt = document.querySelector("footer.page-footer").clientHeight;
        }
        if(sectionBodyHeight.windowHt > (sectionBodyHeight.headerHt + sectionBodyHeight.sHgt)){
            sectionBodyHeight.sHgt += 5;
            if(sectionBodyHeight.windowHt - (sectionBodyHeight.sHgt + sectionBodyHeight.headerHt + sectionBodyHeight.headerHt) < 5){
                sectionBodyHeight.sBody.style.minHeight = (sectionBodyHeight.windowHt - sectionBodyHeight.headerHt - sectionBodyHeight.footerHt) + "px";
                clearInterval(sectionBodyHeight.setHeight);
            }else{
                sectionBodyHeight.sBody.style.minHeight = sectionBodyHeight.sHgt + "px";
            }
        }
    }
};

sectionBodyHeight.initial();