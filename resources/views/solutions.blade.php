        
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>验厂服务</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="{{$base->url}}img/hengwang.png" href="{{$base->url}}img/hengwang.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="{{$base->url}}css/kefu.css"/>
  
</head>
<body>
<header class="am-topbar header">
    <div class="am-container-1">
        <div class="left hw-logo">
          <img class="logo" src="{{$base->url.'uploads/'.$base->logo}}"></img>
          <!-- <img class="word" src="{{$base->url}}img/hw-word.png"></img> -->
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li><a href="/">首页</a></li>
      <li class="hw-menu-active" ><a href="{{$base->url}}solutions">验厂服务</a></li>
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
			<span class="toppic-title-span">验厂服务</span>
			<p>Solutions</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="/" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="{{$base->url}}solutions" class="w-white">验厂服务</a></span>
		</div>
	</div>
</div>

		

  
   <div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul ">
         <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-icon-desktop"></i><span>客户验厂</span></a></li>
          <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>体系验厂</span></a></li>
      </ul>

      <div class="am-tabs-bd solutions-tabs-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<ul class=" solutions-content-ul">
                @foreach($cusAuths as $cusAuth)
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="{{$base->url.'solutions-inform?id='.$cusAuth->id}}">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="{{$base->url.'uploads/'.$cusAuth->cover}}" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>{{$cusAuth->name}}</h5>
            			<p>{{$cusAuth->introduction}}</p>
            		</div>
            		</a>
            	</li>
                @endforeach
            	<div class="clear"></div>
            </ul>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <ul class="am-container-1 solutions-content-ul">
                @foreach($sysAuths as $sysAuth)

            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="{{$base->url.'solutions-inform?id='.$sysAuth->id}}">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="{{$base->url.'uploads/'.$sysAuth->cover}}" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>{{$sysAuth->name}}</h5>
            			<p>{{$sysAuth->introduction}}</p>
            		</div>
            		</a>
            	</li>
                @endforeach
            
            </ul>
          </div>
        
      </div>
  </div>
		
</div>

<footer class="footer ">
    
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
                <span>地址:福建公司公司</span>
                <span>电话:18238765101</span>
                <span>邮箱:support@vectorlab.com</span>
                <span><i class="am-icon-phone"></i><em >027-82671661</em></span>
            </div>

        </li>
         <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title"></div>
          
            <div class="part-5-words2">
                <span>地址:江西公司</span>
                <span>电话:{{$base->phone}}</span>
                <span>邮箱:{{$base->email}}</span>
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
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/jquery.min.js"></script>
<!--<![endif]-->
<script src="js/amazeui.min.js"></script>

</html>
