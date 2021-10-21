<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻动态</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="{{$base->url.'uploads/'.$base->logo}}" href="{{$base->url}}img/hengwang-1.png">
  <link rel="stylesheet" href="{{$base->url}}css/amazeui.css"/>
  <link rel="stylesheet" href="{{$base->url}}css/style.css"/>
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
		  <img class=" logo" src="{{$base->url.'uploads/'.$base->logo}}"></img>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li><a href="/">首页</a></li>
      <li><a href="{{$base->url}}solutions">验厂服务</a></li>
      <li><a href="{{$base->url}}product-show">GRS认证 </a></li>
      <li><a href="{{$base->url}}customer-case">客户案例</a></li>
      <li class="{{$base->url}}hw-menu-active"><a href="news">新闻动态 </a></li>
      <li><a href="{{$base->url}}about-us">关于我们</a></li>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-newspaper-o toppic-title-i"></i>
			<span class="toppic-title-span">新闻动态</span>
			<p>Hengwang News</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="news" class="w-white">新闻动态</a></span>
		</div>
	</div>
</div>


	
<div class="am-container-1 news-content-all">
<div class="left am-u-sm-12 am-u-md-8 am-u-lg-9 ">
	  <ul class="news-ul">
	  	@foreach($news as $new)
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="{{$base->url.'news-inform?id='.$new->id}}">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="{{$base->url.'uploads/'.$new->cover}}"/>		  	  		  	 
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>{{$new->updated_at}}</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：{{$new->readNum}}</div>
	  		  </div>		  
	  		  <span>{{$new->title}}</span>
	  		  <p>{{$new->desc}}</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>
	  	  </a>
	  	</li>
	  	@endforeach
	  	<div class="clear"></div>
		</ul>
		<ul class="am-pagination ">
                        @if($args['lastPage'] != 1)

	  	 <li ><a href="{{$base->url.'news?page=1'}}">&laquo;</a></li>
                           @if($args['currentPage'] != 1)

				  <li><a href="#">上一页</a></li> 
                            @endif
                            @for($i=1;$i<=$args['lastPage'];$i++)

				  <li><a class="current-page" href="{{$base->url.'news?page='.$i}}">{{$i}}</a></li>
				  @endfor
                            @if($args['currentPage'] != $args['lastPage'])
				  <li><a href="#">下一页</a></li>
                            @endif
				   <li ><a href="{{$base->url.'news?page='.$args['lastPage']}}">&raquo;</a></li>
	  	 @endif

		</ul>	  
</div>	  

<div class="left am-u-sm-12 am-u-md-4 am-u-lg-3">
	
	<section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
		<div class="hot-title"><i class="am-icon-thumbs-o-up"></i>热门新闻 / Hot 	News</div>
		@foreach($news as $new)
		@if($loop->index<5)
      <dl class="am-accordion-item am-active">
        <dt class="am-accordion-title">
          {{$new->title}}
        </dt>
        <dd class="am-accordion-bd am-collapse am-in">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            {{$new->desc}}
          </div>
        </dd>
      </dl>
      @endif
      @endforeach
  </section>
	
</div>

<div class="clear"></div>
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
<!--<![endif]-->
<script src="{{$base->url}}js/amazeui.min.js"></script>

</html>
