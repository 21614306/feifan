$(function(){	
		var $dcv_li =$("div.history_tab ul li");
	    $dcv_li.hover(function(){
			$(this).addClass("selected")            //当前<li>元素高亮
				   .siblings().removeClass("selected");  //去掉其他同辈<li>元素的高亮
            var index =  $dcv_li.index(this);  // 获取当前点击的<li>元素 在 全部li元素中的索引。
			$("div.history_li > div")   	//选取子节点。不选取子节点的话，会引起错误。如果里面还有div 
					.eq(index).show()   //显示 <li>元素对应的<div>元素
					.siblings().hide(); //隐藏其他几个同辈的<div>元素
		})
		var $lx_li =$("div.lx_biaodan_tab ul li");
	    $lx_li.hover(function(){
			$(this).addClass("sels")            //当前<li>元素高亮
				   .siblings().removeClass("sels");  //去掉其他同辈<li>元素的高亮
            var lx =  $lx_li.index(this);  // 获取当前点击的<li>元素 在 全部li元素中的索引。
			$("div.lx_biaodan_box > div")   	//选取子节点。不选取子节点的话，会引起错误。如果里面还有div 
					.eq(lx).show()   //显示 <li>元素对应的<div>元素
					.siblings().hide(); //隐藏其他几个同辈的<div>元素
		})
		var $casenew_T =$("div.casenew_T_l ul li");
	    $casenew_T.hover(function(){
			$(this).addClass("selected")            //当前<li>元素高亮
				   .siblings().removeClass("selected");  //去掉其他同辈<li>元素的高亮
            var casenew_Tx =  $casenew_T.index(this);  // 获取当前点击的<li>元素 在 全部li元素中的索引。
			$("div.cases_win > div")   	//选取子节点。不选取子节点的话，会引起错误。如果里面还有div 
					.eq(casenew_Tx).show()   //显示 <li>元素对应的<div>元素
					.siblings().hide(); //隐藏其他几个同辈的<div>元素
		})
})