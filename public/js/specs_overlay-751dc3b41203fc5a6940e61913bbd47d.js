ER.require("ER.SpecsOverlay",function(){var e={},r=function(){$(".js-specsTrigger").click(function(){var e=$(this).attr("data-specsUrl");ER.Layout.showSpinner(),$.ajax({url:e,type:"get",dataType:"json",success:function(e){var r=$(e.content);ER.Layout.showOverlay(r)},error:function(e){var r=JSON.parse(e.responseText);ER.Notifications.showErrorMessage(r.message)},complete:function(){ER.Layout.hideSpinner()}})})};return e.init=r,e}());