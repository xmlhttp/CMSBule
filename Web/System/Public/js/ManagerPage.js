var M = {
	init: function() {
		var _this = this;
			_this.adjust()
			_this.event()
		},
	event: function() {
		var _this = this;
		//内页左侧导航点击
		$(".left_nav>a").click(function() { $(this).next('.left_sub').slideToggle(250).end().siblings("a").stop(true).next('.left_sub:visible').slideToggle(250) });
		//窗口改变后动态计算
		$(window).resize(function() { _this.adjust(); });
		//点击导航
		var items = $(".left_sub>.left_sub1>a")
		items.click(function() {
			items.removeClass("a_hover")
			$(this).addClass("a_hover")
		})
		//设置版本
		var ver = _this.GetUrlParam("ver")
		if (ver == "") { 
			ver=0
		}
		$("#vers>a:eq(" + ver + ")").addClass("a_active").siblings("a").removeClass("a_active")
	},
	adjust: function() {//设置窗体大小
		var conHei = $(window).outerHeight(true) - $(".topw").outerHeight(true) - $(".foot").outerHeight(true)
		$(".info").height(conHei);
		$(".info_right").height(conHei);
		$(".info_left").height(conHei);
		$(".left_sub").height(conHei - $(".left_nav>a").outerHeight(true) * $(".left_nav>a").length);
	},
	GetUrlParam: function(Param) { //获取get参数
		var strUrl = document.location.search.toString();
		var lisUrl = strUrl.split('?');
		if (lisUrl.length > 1) {
			var lisParam = lisUrl[1].split('&');
			for (var i = 0; i < lisParam.length; i++) {
				var strParm = lisParam[i].split('=');
				if (strParm[0] == Param) {
					return strParm[1];
				}
			}
			return "";
		} else {
			return ""
		}
	}	
}
$(function() {
	M.init();
})