<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>客户案例</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="{{$base->url.'uploads/'.$base->logo}}" href="{{$base->url.'uploads/'.$base->logo}}">
  <link rel="stylesheet" href="{{$base->url}}css/amazeui.css"/>
  <link rel="stylesheet" href="{{$base->url}}css/style.css"/>
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
      <li><a href="{{$base->url}}solutions">验厂服务</a></li>
      <li><a href="{{$base->url}}product-show">GRS认证</a></li>
      <li  class="hw-menu-active"><a href="{{$base->url}}customer-case">客户案例</a></li>
      <li><a href="{{$base->url}}news">新闻动态 </a></li>
      <li><a href="{{$base->url}}about-us">关于我们</a></li>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	<div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-briefcase toppic-title-i"></i>
			<span class="toppic-title-span">客户案例</span>
			<p>Customer Case</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="/" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="{{$base->url}}customer-case" class="w-white">客户案例</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	 <ul data-am-widget="gallery" class="am-gallery am-avg-sm-1
  am-avg-md-3 am-avg-lg-4 am-gallery-bordered customer-case-ul" data-am-gallery="{  }" >
  @foreach($cases as $case)
      <li>
        <div class="am-gallery-item">
            <a href="{{$base->url.'case-inform?id='.$case->id}}" class="">
            	<div class="customer-case-img">
              <img src="{{$base->url.'uploads/'.$case->cover}}" />
             </div>
                <h3 class="am-gallery-title">{{$case->title}}</h3>
                <div class="am-gallery-desc gallery-words">{{$case->desc}}</div>
            </a>
        </div>
      </li>
    @endforeach
  </ul>
	
</div>
<div class="part-all gray-li">
<div class="customer  am-container-1">
		<div class="part-title">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">服务客户</span>
			<p>Serve Customers</p>
		</div>
		
		<div class="am-slider am-slider-default am-slider-carousel part-all" data-am-flexslider="{itemWidth:150, itemMargin: 5, slideshow: false}" style="  background-color: #f0eeed; box-shadow:none;">
		  <ul class="am-slides">
		    <li><img src="{{$base->url}}img/ptn4.png"/></li>
		    <li><img src="{{$base->url}}img/ptn5.png"/></li>
		    <li><img src="{{$base->url}}img/ptn6.png"/></li>
		    <li><img src="{{$base->url}}img/ptn7.png"/></li>
		    <li><img src="{{$base->url}}img/ptn8.png"/></li>
		    <li><img src="{{$base->url}}img/ptn4.png"/></li>
		    <li><img src="{{$base->url}}img/ptn5.png"/></li>
		    <li><img src="{{$base->url}}img/ptn6.png"/></li>
		    <li><img src="{{$base->url}}img/ptn7.png"/></li>
		    <li><img src="{{$base->url}}img/ptn8.png"/></li>
		  </ul>
		</div>
</div>
</div>

<footer class="footer ">
	
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
                <span>地址:XXX</span>
                <span>电话:18238765101</span>
                <span>传真:(123) 456-7890</span>
                <span>邮箱:support@vectorlab.com</span>
                <span><i class="am-icon-phone"></i><em >027-82671661</em></span>
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}solutions">验厂服务</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}product-show">产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}customer-case">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}about-us">关于我们</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="{{$base->url}}recruit">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>


</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{$base->url}}js/jquery.min.js"></script>
<script src="{{$base->url}}js/amazeui.min.js"></script>

</html>
