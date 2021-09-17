@extends('public/base')
@section('head')
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>众维咨询 - GRS验厂|SLCP验厂认证|GOTS验厂|HIGG验厂|BSCI验厂|SMETA验厂|SEDEX验厂认证评估</title>
    <meta name="keywords" content="SLCP认证,GRS认证,GRS验厂,Gots验厂,higg验厂,SLCP验厂,SMETA验厂,SEDEX验厂,SLCP验厂认证,GRS验厂认证,GRS验厂认证,Gots验厂认证,higg验厂认证,SLCP验厂认证,SMETA验厂认证,SEDEX验厂认证,福建验厂认证审核评估,广东验厂认证审核评估,浙江验厂认证审核评估,江苏验厂认证审核评估,山东验厂认证审核评估">
    <meta name="description" content="众维咨询是国内规模较大的验厂认证服务机构,总部位于深圳,分点遍布福建、广东、浙江、江苏、山东等多个城市。帮助您快速通过GRS,SLCP,GOTS,HIGG,BSCI,SMETA,SEDEX,FSC,RCS,OCS等验厂认证评估。众维咨询验厂认证评估是国内较早从事验厂认证服务的机构，每年服务上千家各行业客户。">
    <meta property="og:image" content="{{$base->url}}images/1597649773778586.jpg" />
    <script type="text/javascript" src="{{$base->url}}javascript/jquery.min.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/jquery.slide.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/tab.js"></script>
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/css.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/skin.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/aos.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/item.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/2020.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/ab.css" />

    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript">
    < !--
    document.oncontextmenu = function(e) { return false; }
    //-->
    </script>
    <link rel="stylesheet" href="{{$base->url}}css/swiper.min.css">
    <style>
        .swiper-container {
      width: 100%;
      height: 100%;

    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
    <script type="text/javascript" src="{{$base->url}}javascript/jquery.min.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/koala.min.1.5.js"></script>
    <link type="text/css" rel="stylesheet" href="{{$base->url}}css/focus.css" />
    <style type="text/css">
    .moduletable-banner {
        width: 468px;
        overflow: hidden;
    }

    .flexslider {
        width: 468px;
        height: 200px;
        overflow: hidden;
    }

    .flexslider .slides>li {
        display: none;
    }

    .flexslider .slides img {
        max-width: 100%;
        display: block;
    }

    .slides:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0;
    }

    .no-js .slides>li:first-child {
        display: block;
    }

    .flexslider {
        position: relative;
        zoom: 1;
    }

    .flexslider .slides {
        zoom: 1;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .flexslider .slides>li {
        position: relative;
    }

    .flex-caption {
        background: none;
        -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
        zoom: 1;
    }

    .flex-caption {
        width: 96%;
        padding: 2%;
        position: absolute;
        left: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .3);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
        font-size: 14px;
        line-height: 18px;
    }

    .flex-direction-nav {
        height: 0;
        overflow: hidden;
    }

    .flex-direction-nav li a {
        display: none;
        width: 36px;
        height: 36px;
        position: absolute;
        top: 50%;
        margin-top: -40px;
        cursor: pointer;
        text-indent: -9999px;
    }

    .flex-direction-nav li a.next {
        right: 0;
        background: url("{{$base->url}}images/bg_direction_nav.png") no-repeat scroll -36px 0 transparent;
    }

    .flex-direction-nav li a.next:hover,
    .flex-direction-nav li a.next:active {
        background: url("{{$base->url}}images/bg_direction_nav.png") no-repeat scroll -36px -36px transparent;
    }

    .flex-direction-nav li a.prev {
        left: 0;
        background: url("{{$base->url}}images/bg_direction_nav.png") no-repeat scroll 0 0 transparent;
    }

    .flex-direction-nav li a.prev:hover,
    .flex-direction-nav li a.prev:active {
        background: url("{{$base->url}}images/bg_direction_nav.png") no-repeat scroll 0 -36px transparent;
    }

    .flex-direction-nav li a.disabled {
        opacity: .3;
        filter: alpha(opacity=30);
        cursor: default;
    }

    .flex-control-nav {
        width: 66px;
        position: absolute;
        top: 178px;
        left: 200px;
        margin: 0;
        padding: 0;
    }

    .flex-control-nav li {
        display: inline-block;
        zoom: 1;
        *display: inline;
        margin-right: 10px;
    }

    .flex-control-nav li a {
        display: block;
        width: 12px;
        height: 12px;
        background: url("{{$base->url}}images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        cursor: pointer;
        text-indent: -9999px;
    }

    .flex-control-nav li a:hover {
        background: url("{{$base->url}}images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
    }

    .flex-control-nav li a.active {
        background: url("{{$base->url}}images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        cursor: default;
    }
    </style>
@endsection
@section('nav')

 <ul>
                <li class="nav_1"><a href="/" id="home" >首页</a></li>
                <li class="nav_2"><a href="/yanchang/" style="background-color: #00427a;">
                        客户验厂
                    </a></li>
                <li class="nav_2"><a href="/tixi/">
                        体系认证
                    </a></li>
                <li class="nav_2"><a href="/grs/">
                        GRS认证
                        <img src="{{$base->url}}images/hit.gif">
                    </a></li>
                <li class="nav_2"><a href="/success/">
                        成功案例
                    </a></li>
               
                <li class="nav_2"><a href="/abouts/">
                        About us
                    </a></li>
                <div style="clear:both">
                </div>
</ul>
@endsection


@section('swiper')
<div class="swiper-container">
            <div class="swiper-wrapper">
                @for($i=1;$i<=3;$i++)
                    @if($base['customer_banner_'.$i])
                <div class="swiper-slide">
                    <img src="{{$base->url.'uploads/'.$base['customer_banner_'.$i]}}" alt="" width="100%" />
                </div>
                    @endif
                @endfor
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <!--<div class="swiper-button-next"></div>-->
            <!--<div class="swiper-button-prev"></div>-->
</div>
        <!-- Swiper JS -->
        <script src="javascript/swiper.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        </script>
@endsection

@section('ban_num')

 <div class="body_5">
        <div class="warp">
            <div class="curr">您当前的位置：<a href="/">首页</a> > <a href="/?list_1/">客户验厂</a></div>
        </div>
        <div class="vc_T">热门验厂服务</div>
        <div class="bc_search">
            <script type="text/javascript">
            function check_d() {
                if (document.getElementById("keys").value == "" || document.getElementById("keys").value == "请输入项目简称，如：Sedex，BSCI，WCA") {
                    alert("请输入项目简称，如：Sedex，BSCI，WCA！");
                    document.getElementById("keys").focus();
                    return false;
                }
            }
            </script>
            <form id="my_b" method="post" action="/authSearch" onSubmit="return check_d();">
                {{csrf_field()}}
                <div class="bang_search_r_1"><input type="text" class="nn_input" name="keyword" id="keys" value="请输入项目简称，如：Sedex，BSCI，WCA" onFocus="if(this.value=='请输入项目简称，如：Sedex，BSCI，WCA')this.value='';this.style.color='#333333';" onBlur="if(this.value=='')this.value='请输入项目简称，如：Sedex，BSCI，WCA';this.style.color='#b2b2b2';" /></div>
                <div class="bang_search_r_2"><input type="image" src="{{$base->url}}images/bc_btn.png" /></div>
            </form>
        </div>
        <div class="partner_vlide">
            <div class="ohbox">
                <ul class="piclist">
                    @foreach($auths as $auth)
                    <li><a href="{{'http://feifan.net/authDetail?id='.$auth->id}}" target="_blank"><img src="{{'http://feifan.net/uploads/'.$auth->cover}}" alt="{{$auth->title}}" /><span>{{$auth->title}}</span></a></li>
                   @endforeach
                </ul>
            </div>
            <div class="pageBtn">
                <span class="prev">
                    <</span> <span class="next">>
                </span>
            </div>
        </div>
    <script type="text/javascript" src="{{$base->url}}javascript/jquery.slide.js"></script>

        <script type="text/javascript">
        jQuery(".partner_vlide").slide({ mainCell: ".ohbox ul", effect: "leftLoop", delayTime: 800, vis: 6, scroll: 1, easing: "easeOutCubic", autoPlay: true });
        </script>
    </div>

@endsection


@section('content')

 <div class="body_6">
        <div class="warp_item">
            <div class="item_coc">
                <ul>
                    <li class="item_coc_main"><img src="{{$base->url}}images/1597649773778586.jpg" /></li>
                    @foreach($auths as $auth)
                    <li>
                        <div class="item_coc_li"><a href="{{'http://feifan.net/authDetail?id='.$auth->id}}" target="_blank">

                                <div class="item_coc_li_A"><img src="{{'http://feifan.net/uploads/'.$auth->cover}}" alt="沃尔玛验厂" /></div>
                                <div class="item_coc_li_B">{{$auth->title}}<img src="{{$base->url}}images/hit.gif" /></div>
                                <div class="item_coc_li_C">了解更多+</div>
                            </a></div>
                    </li>
                 @endforeach
                </ul>
            </div>
            <div class="blank_20"></div>
            <div><a href="tencent://message/?uin={{$base->qq}}&Site=uemo&Menu=yes" target="_blank"><img src="{{$base->url}}images/1597158420399712.jpg" /></a></div>
        </div>
    </div>

@endsection
