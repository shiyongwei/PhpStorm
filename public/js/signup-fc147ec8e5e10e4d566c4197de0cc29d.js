ER.require("ER.Deals.SignUp",function(){var t={},e=function(){$(".js-signupTrigger").click(function(){var t=($(this),$($(".js-updatesTemplate").html()));return t.on("shown",function(){t.find("form").submit(function(){var e=$(this),n=e.find('button[type="submit"]');return n.data("clicked")||(n.data("clicked",!0),$.ajax({url:e.attr("action")+".js",type:e.attr("method"),data:e.serialize(!0),dataType:"json",success:function(e){ER.Notifications.showSuccessMessage(e.success_message),t.modal("hide"),$("html, body").animate({scrollTop:0},100)},error:function(t){var e=JSON.parse(t.responseText);alert(e.message)},complete:function(){n.data("clicked",!1)}})),!1})}),t.on("hidden",function(){t.remove()}),ER.Layout.showOverlay(t),!1})};return t.init=e,t}());