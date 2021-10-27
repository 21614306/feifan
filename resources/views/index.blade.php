<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>首页</title>
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
      <li class="hw-menu-active"><a href="/">首页</a></li>
      <li><a href="{{$base->url}}solutions">验厂服务</a></li>
      <li><a href="{{$base->url}}product-show">GRS认证</a></li>
      <li><a href="{{$base->url}}customer-case">客户案例</a></li>
      <li><a href="{{$base->url}}news">新闻动态 </a></li>
      <li ><a href="{{$base->url}}about-us">关于我们</a></li>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="rollpic">
     <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
      <ul class="am-slides">
                @for($i=1;$i<=3;$i++)
                    @if($base['index_banner_'.$i])

          <li><img src="{{$base->url.'uploads/'.$base['index_banner_'.$i]}}"/></li>
          @endif
          @endfor
      </ul>
    </div>
</div>
<div class="am-container-1">
    <div class="solutions part-all">
        <div class="part-title">
            <a href="{{$base->url}}solutions">
            <i class="am-icon-lightbulb-o part-title-i"></i>
            <span class="part-title-span">服务承诺</span>
            <p>Solutions</p>
            </a>
        </div>
        <ul class="am-g part-content solutions-content">
          <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
            <i class="am-icon-safari solution-circle"></i>
            <span class="solutions-title">100%一次性通过</span>
            <p class="solutions-way"></p>
          </li>
          <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
            <i class="am-icon-magic solution-circle"></i>
            <span class="solutions-title">专业辅导，专家审核</span>
            <p class="solutions-way"></p>
          </li>
          <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
            <i class="am-icon-phone solution-circle"></i>
            <span class="solutions-title">360个工作日包通过</span>
            <p class="solutions-way"></p>
          </li>
          <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
            <i class="am-icon-hacker-news solution-circle"></i>
            <span class="solutions-title">不通过退全款</span>
            <p class="solutions-way"></p>
          </li>
          
        </ul>
        
    </div>
    </div>
    <div class="gray-li">
    <div class="customer-case part-all ">
        <div class="part-title">
            <a href="{{$base->url}}customer-case">
            <i class=" am-icon-briefcase part-title-i"></i>
            <span class="part-title-span">客户案例</span>
            <p>Customer Case</p>
            </a>
        </div>
    
    
         <ul data-am-widget="gallery" class=" am-avg-sm-1
  am-avg-md-4 am-avg-lg-4 am-gallery-bordered customer-case-content" >
@foreach($cases as $case)
  @if($loop->index>=0)
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="{{$base->url.'news-inform?id='.$case->id}}" >
              <img src="{{$base->url.'uploads/'.$case->cover}}"  />
            </a>
        </div>
        <div class="case-li-mengban">
            <div class=" case-word">
              <h3 class="am-gallery-title">{{$case->title}}</h3>
              <p>{{$case->created_at}}</p>
              <a href="{{$base->url.'news-inform?id='.$case->id}}"><span><i class="am-icon-eye"></i>查看更多</span></a>
           </div>
        </div>
      </li>
        @endif
@endforeach
  </ul>
        <div class="lan-bott">
            <div class="left"><span>全方位解决方案,为您轻松解决不同问题</span>
                <p>A full range of solutions for you to solve different problems</p>
            </div>
            <div class="right">
                <a href="{{$base->url}}customer-case">
                    <span class="see-more">查看更多<i class="am-icon-angle-double-right"></i></span>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="part-title">
                
        </div>
        </div>
</div>  
        
<div class=" news-all">
    <div class="am-container-1">
<div class="news part-all">
        <div class="part-title">
            <a href="{{$base->url}}news">
            <i class="am-icon-newspaper-o part-title-i"></i>
            <span class="part-title-span">新闻动态</span>
            <p>FeiFan News</p>
            </a>
        </div>
        <div class="news-content ">
                <ul class="news-content-ul">
                    @foreach($news as $new) 
                     @if($loop->index>=0)
                    <li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <a href="{{$base->url.'news-inform?id='.$case->id}}">
                            <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                <div class="news-img">
                                <img src="{{$base->url.'uploads/'.$new->cover}}"></img>
                                </div>
                            </div>
                            <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
                                        <span class="news-right-title">{{$new->title}}</span>
                                        <p class="news-right-time">{{$new->created_at}}</p>
                                        <p class="news-right-words"> {{$new->desc}}</p>
                                        <a href="{{$base->url.'news'}}"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
                                 </div> 
                        <div class="clear"></div>
                        </a>
                    </li>
                    @endif
                   @endforeach
                    <div class="clear"></div>
                </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
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

<style>
.copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
</style>

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
<script src="{{$base->url}}js/scroll.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/kefu.js"></script>

<script type="text/javascript">

</script>
</html>
