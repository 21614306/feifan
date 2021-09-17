$(document).ready(function() {
	
	var test = window.location.host;
	if(test=="sh.cocbang.cn")
	{
	 	$('#home').attr('href','/shanghai/');
		$('#sub_addr_city').html("[ 上海分公司 ]");
		$("#bang_logo").attr('src',"/images/sh_logo.png");
		$("#bang_tel").attr('src',"/images/sh_tel.png");
	}
	else if(test=="js.cocbang.cn")
	{
		$('#home').attr('href','/jiangsu/'); 
		$('#sub_addr_city').html("[ 江苏子公司 ]");
		$("#bang_logo").attr('src',"/images/js_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else if(test=="zj.cocbang.cn")
	{
		$('#home').attr('href','/zhejiang/'); 
		$('#sub_addr_city').html("[ 浙江子公司 ]");
		$("#bang_logo").attr('src',"/images/zj_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else if(test=="gd.cocbang.cn")
	{
		$('#home').attr('href','/guangdong/'); 
		$('#sub_addr_city').html("[ 广东分公司 ]");
		$("#bang_logo").attr('src',"/images/gd_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else if(test=="ln.cocbang.cn")
	{
		$('#home').attr('href','/liaoning/'); 
		$('#sub_addr_city').html("[ 辽宁分公司 ]");
		$("#bang_logo").attr('src',"/images/ln_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else if(test=="bj.cocbang.cn")
	{
		$('#home').attr('href','/beijing/'); 
		$('#sub_addr_city').html("[ 北京分公司 ]");
		$("#bang_logo").attr('src',"/images/bj_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else if(test=="fj.cocbang.cn")
	{
		$('#home').attr('href','/fujian/'); 
		$('#sub_addr_city').html("[ 福建分公司 ]");
		$("#bang_logo").attr('src',"/images/fj_logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	else
	{
		$('#home').attr('href','/'); 
		$('#sub_addr_city').html("[ 山东总公司 ]");
		$("#bang_logo").attr('src',"/images/logo.png");
		$("#bang_tel").attr('src',"/images/tel.png");
	}
	
	
	$(".side1").hover(function(){
		$(this).addClass("ck_ico_1");
		$(".kf_leyu").show(300);
		$(".kf_tel").hide(300);
		$(".kf_ewm").hide(300);
		$(".side2").removeClass("ck_ico_2");
		$(".side3").removeClass("ck_ico_3");
		$(".side4").removeClass("ck_ico_4");
	});
	
	$(".side2").hover(function(){
		$(this).addClass("ck_ico_2");
		$(".kf_tel").show(300);
		$(".kf_leyu").hide(300);
		$(".kf_ewm").hide(300);
		$(".side1").removeClass("ck_ico_1");
		$(".side3").removeClass("ck_ico_3");
		$(".side4").removeClass("ck_ico_4");
	});
	
	$(".side3").hover(function(){
		$(this).addClass("ck_ico_3");
		$(".kf_ewm").show(300);
		$(".kf_leyu").hide(300);
		$(".kf_tel").hide(300);
		$(".side1").removeClass("ck_ico_1");
		$(".side2").removeClass("ck_ico_2");
		$(".side4").removeClass("ck_ico_4");
	});
	
	$(".side4").hover(function(){
		$(this).addClass("ck_ico_4");
		$(".kf_ewm").hide(300);
		$(".kf_leyu").hide(300);
		$(".kf_tel").hide(300);
		$(".side1").removeClass("ck_ico_1");
		$(".side2").removeClass("ck_ico_2");
		$(".side3").removeClass("ck_ico_3");
	},function(){
		$(this).removeClass("ck_ico_4");
	});
	
	$(".kf_close_1").click(function(){
		$(".kf_leyu").hide(300);
		$(".side1").removeClass("ck_ico_1");
	  });
	$(".kf_close_2").click(function(){
		$(".kf_tel").hide(300);
		$(".side2").removeClass("ck_ico_2");
	  });
	$(".kf_close_3").click(function(){
		$(".kf_ewm").hide(300);
		$(".side3").removeClass("ck_ico_3");
	  });
	$(".kf_close_4").click(function(){
		$(".kf_qq").hide(300);
		$(".side4").removeClass("ck_ico_4");
	  });
	
	
	$(".sub_4").hover(function(){
		$("#wx").slideDown();
	  },function(){
		$("#wx").slideUp();
	  });
	
	$(".xc_left_wx").hover(function(){
		$("#xc_left_wxs").slideDown();
	  },function(){
		$("#xc_left_wxs").slideUp();
	  });
	
	$("#map_1_1").hover(function(){
		$("#map_addr_1").slideDown();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_2").hover(function(){
		$("#map_addr_2").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	
	$("#map_1_3").hover(function(){
		$("#map_addr_3").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_4").hover(function(){
		$("#map_addr_4").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_5").hover(function(){
		$("#map_addr_5").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_6").hover(function(){
		$("#map_addr_6").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_7").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_7").hover(function(){
		$("#map_addr_7").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_8").slideUp();
	  });
	$("#map_1_8").hover(function(){
		$("#map_addr_8").slideDown();
		$("#map_addr_1").slideUp();
		$("#map_addr_2").slideUp();
		$("#map_addr_3").slideUp();
		$("#map_addr_4").slideUp();
		$("#map_addr_5").slideUp();
		$("#map_addr_6").slideUp();
		$("#map_addr_7").slideUp();
	  });
	
	
	$("#tipd").click(function(){
	  $(".tip").show();
	});
	$(".tip_close").click(function(){
	  $(".tip").hide();
	});
		
	
	$("#back-to-top").hide();
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function (){
		$(window).scroll(function(){
		if ($(window).scrollTop()>350){
		$("#back-to-top").fadeIn(100);
		}
		else
		{
		$("#back-to-top").fadeOut(100);
		}
		
		var element = $('.xc_hot');
		if (element.offset().top + element.height()+360 <=  $(window).height() + $(window).scrollTop()) {
			$("#xxkmenu").hide();
		} else {
			$("#xxkmenu").show();
		}
		
		});
		});	
});
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

function AddFavorite(title, url) {
    try {
        window.external.addFavorite(url, title);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(title, url, "");
        }
        catch (e) {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

function createMask() {
	var sWidth, sHeight;
	sWidth = window.screen.availWidth;
	//屏幕可用工作区高度： window.screen.availHeight;
	//屏幕可用工作区宽度： window.screen.availWidth;
	//网页正文全文宽：     document.body.scrollWidth;
	//网页正文全文高：     document.body.scrollHeight;
	if (window.screen.availHeight > document.body.scrollHeight) { //当高度少于一屏
		sHeight = window.screen.availHeight;
		$("#fade").addClass("black_overlay").show();
	} else {//当高度大于一屏
		sHeight = document.body.scrollHeight;
		$("#fade").addClass("black_overlay").height(sHeight).show();
	}
}

function copyToClipBoard(){ 
var clipBoardContent=""; 
clipBoardContent+=document.title; 
clipBoardContent+=""; 
clipBoardContent+=this.location.href; 
window.clipboardData.setData("Text",clipBoardContent); 
alert("复制成功，请粘贴推荐给您的好友"); 
}