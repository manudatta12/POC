Consumermate.Cookie={};
Consumermate.Cookie.get=function(A){if(document.cookie.length>0){begin=document.cookie.indexOf(" "+A+"=");
if(begin!=-1){begin+=A.length+2;
end=document.cookie.indexOf(";",begin);
if(end==-1){end=document.cookie.length
}return unescape(document.cookie.substring(begin,end))
}else{begin=document.cookie.indexOf(A+"=");
if(begin!=-1){begin+=A.length+1;
end=document.cookie.indexOf(";",begin);
if(end==-1){end=document.cookie.length
}return unescape(document.cookie.substring(begin,end))
}}}return null
};
Consumermate.Cookie.remove=function(B){var A=B+"=;expires=Thu, 01-Jan-1970 00:00:01 GMT";
document.cookie=A
};
var eventContinueShopping="continueShopping";
var eventCartCrossed="cartCrossed";
Consumermate.Cart=function(){var A=this,E,B,C;
var D=true;
};
Consumermate.CartService=function(){var B=this,C=new Consumermate.Cart(),A='<div class="ajax-loader-outer"><img src="'+Consumermate.getResourcePath("img/ajax-loader.gif")+'"/></div>';
this.init=function(){};
this.cartQty=function(){var D=Consumermate.Cookie.get("cartQty");
if(D){return D
}return 0
};

};
Consumermate.HomePage=function(){var A=this;
this.init=function(){window.cartService=new Consumermate.CartService();
window.cartService.init();
var E=window.cartService.cartQty();
$("#feedbackForm").mouseup(function(){return false
});
$(".feedback").click(function(F){return A.feedbackClick(F)
});
};
this.feedbackClick=function(C){C.preventDefault();
if($(C.target).parents(".feedback").length!=0&&$(".feedback").hasClass("off")){$(".feedback").removeClass("off");
$("#feedbackForm").hide()
}else{var D=Consumermate.getStaticPath("/info/feedback");
var B='<iframe src="'+D+'" class="feedback_wrap" scrolling="no" frameborder="0" width="400" height="370" allowtransparency="true">';
$("#feedbackForm").html(B);
$("#feedbackForm").css("display","none");
$("#feedbackForm").toggle();
$(".feedback").toggleClass("off");
}};
this.startSlider=function(){$(".slides").bxSlider({wrapper_class:"slider-wrap",controls:false,auto:true,pager:true,auto_controls:false})
};
this.showLoader=function(B){var C='<div type="sd.AjaxLoader" style="padding:0 20px 0 20px;text-align:center;"><img src="'+Consumermate.getResourcePath("img/ajax-loader.gif")+'"/></div>';
B.append(C)
};
this.hideLoader=function(B){B.find('div.[type="sd.AjaxLoader"]').each(function(C,D){$(D).remove()
})
}
};
$(document).ready(function(){page=new Consumermate.HomePage();
page.init()
});

