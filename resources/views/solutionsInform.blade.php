<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>验厂服务详情</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="{{$base->url}}img/hengwang.png" href="{{$base->url}}img/hengwang.png">
  <link rel="stylesheet" href="{{$base->url}}css/amazeui.css"/>
  <link rel="stylesheet" href="{{$base->url}}css/style.css"/>
  <link rel="stylesheet" href="{{$base->url}}css/kefu.css"/>
  
</head>
<body>
<header class="am-topbar header">
    <div class="am-container-1">
        <div class="left hw-logo">
          <img class=" logo" src="{{$base->url.'uploads/'.$base->logo}}"></img>
          <!-- <img class="word" src="{{$base->url}}img/hw-word.png"></img> -->
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li><a href="/">首页</a></li>
      <li class="hw-menu-active"><a href="{{$base->url}}solutions">验厂服务</a></li>
      <li><a href="{{$base->url}}product-show">GRS认证</a></li>
      <li><a href="{{$base->url}}customer-case">客户案例</a></li>
      <li ><a href="{{$base->url}}news">新闻动态 </a></li>
      <li><a href="{{$base->url}}about-us">关于我们</a></li>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	<div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-lightbulb-o toppic-title-i"></i>
			<span class="toppic-title-span">方案详情</span>
			<p>Information</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="solutions.html" class="w-white">验厂服务</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-inform.html" class="w-white">服务详情</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	<div class="words-title margin-t30">
		<i class="am-icon-file-text file-text"></i><span>{{$auth->name}}</span>	
	</div>
</div>
		
<div class="solution-inform">
	<div class=" solution-inform-content-all">
		<div class="solution-inform-content">
		    <p class="inform-content-p">{{$auth->introduction}}</p>
	      <div class="solution-inform-content-img">
	      	<img src="{{$base->url}}img/inform.png"/>
	      	<div class="clear"></div>
	      </div>
		</div>
	</div>
</div>
  
   
<footer class="footer ">
    
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">厦门公司</div>
            <div class="part-5-words2">
                <span>厦门地址:厦门集美创意城11#1407室</span>
                <span>邮箱:alan_jwp@163.com</span>
                <span><i class="am-icon-phone"></i><em >18950080452</em></span>
            </div>

        </li>
         <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">南昌公司</div>
            <div class="part-5-words2">
                <span>南昌地址:南昌西湖区兰宫路269号</span>
                <span>邮箱:36183180@qq.com</span>
                <span><i class="am-icon-phone"></i><em >18970960038</em></span>
            </div>
            
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}solutions">验厂服务</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}product-show">GRS认证</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}customer-case">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}about-us">关于我们</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>
    <div class="side">
        <ul>
            <li style="position:relative;">
                <div class="sidebox side1"></div>
                <div class="kf_leyu">
                    <div class="kf_close_1"></div>
                    <div class="kf_leyu_ico">
                        <ul>
                            @foreach($companys as $company)
                            <li><a href="tencent://message/?uin={{$company->qq}}&Site=uemo&Menu=yes" target="_blank">{{$company->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
          <!--   <li style="position:relative;">
                <div class="sidebox side2"></div>
                <div class="kf_tel" style="background-image: url({{$base->url.'uploads/'.$base->qrcode}});">
                    <div class="kf_close_2"></div>
                </div>
            </li> -->
            <li style="position:relative;">
                <div class="sidebox side3"></div>
                <div class="kf_ewm" style="background-image: url({{$base->url.'uploads/'.$base->qrcode}});">
                    <div class="kf_close_3"></div>
                </div>
            </li>
            <li>
                <div onClick="goTop()" class="sidebox side5" id="back-to-top"></div>
            </li>
        </ul>
    </div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/{{$base->url}}js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{$base->url}}js/jquery.min.js"></script>
<!--<![endif]-->
<script src="{{$base->url}}js/amazeui.min.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/kefu.js"></script>

</html>
