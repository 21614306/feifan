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
                <li class="nav_2"><a href="/yanchang/" >
                        客户验厂
                    </a></li>
                <li class="nav_2"><a href="/tixi/" >
                        体系认证
                    </a></li>
                <li class="nav_2"><a href="/grs/" >
                        GRS认证
                        <img src="{{$base->url}}images/hit.gif">
                    </a></li>
                <li class="nav_2"><a href="/success/" style="background-color: #00427a;">
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
                    @if($base['success_banner_'.$i])
                <div class="swiper-slide">
                    <img src="{{$base->url.'uploads/'.$base['success_banner_'.$i]}}" alt="" width="100%" />
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
        <script src="{{$base->url}}javascript/swiper.min.js"></script>
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

@section('content')
<div class="bodya_cases">
        <div class="warp">
            <div class="curr">您当前的位置：<a href="/">首页</a> > <a href="/?list_3/">成功案例</a></div>
            <div class="anli_main">
                <div class="cases_left">
                    <div class="cases_list">
                        <ul>
                            @foreach($articles as $article)
                            <li>
                                <div class="cases_list_Pic"><a href="{{$base->url.'articleDetail?id='.$article->id}}" target="_blank"><img src="{{$base->url.'uploads/'.$article->cover}}" /></a></div>
                                <div class="cases_list_title"><a href="{{$base->url.'articleDetail?id='.$article->id}}" target="_blank">{{$article->title}}</a></div>
                                <div class="cases_list_desc">  {{

                                        substr($article->desc,1,300
                                        ).'...'}}
                                </div>
                                <div class="cases_list_tag">发布时间：{{$article->created_at}}
                                </div>
                                <div class="cases_list_date"><a href="{{$base->url.'articleDetail?id='.$article->id}}" target="_blank">【阅读全文】</a></div>
                            </li>
                            @endforeach
                        </ul>
                        @if($args['lastPage'] != 1)
                        <div class="bk_yellow" style="border:none;width:850px;padding-left:30px;padding-right:30px;">
                          <a href="{{$base->url.'suceess?page=1'}}">&nbsp;首 页&nbsp;</a>
                            @if($args['currentPage'] != 1)
                            <a href="{{$base->url.'suceess?page=' .($args['currentPage']-1)}}">&nbsp;上一页&nbsp;</a>
                            @endif

                            @for($i=1;$i<=$args['lastPage'];$i++)
                            <a href="{{$base->url.'suceess?page='.$i}}" class="page-num ">{{$i}}</a>
                            @endfor
                            @if($args['currentPage'] != $args['lastPage'])
                            <a href="{{$base->url.'suceess?page=' .($args['currentPage']+1)}}">&nbsp;下一页&nbsp;</a>
                            @endif
                            <a href="{{$base->url.'suceess?page='.$args['lastPage']}}">&nbsp;末页&nbsp;</a>
                        </div>
                        @endif
                        </div>
                    </div>

                               <div class="cases_right">
                    <div class="ca_info">
                        <ul>
                            <li><a href="/?list_1/" target="_blank">服务项目</a></li>
                            <li><a href="/?news_8/" target="_blank">验厂动态</a></li>
                            <li><a href="/?pages_13/" target="_blank">About us</a></li>
                            <li><a href="/?list_5/" target="_blank">资源合作</a></li>
                        </ul>
                    </div>
                    <div class="xc_cases">
                        <div class="xc_cases_T"><span>新闻动态</span><label></label></div>
                        <div class="xc_cases_li" id="xc_cases_li">
                            <ul>
                                        @foreach($industry_news as $news)

                                <li><a href="{{$base->url.'articleDetail?id='.$news->id}}" title="{{$news->title}}" target="_blank">{{$news->title}}</a></li>
                                        @endforeach
                            </ul>
                        </div>
                        <script>
                        new Marquee("xc_cases_li", 0, 1, 418, 560, 30, 0, 0)
                        </script>
                    </div>
                    <div class="blank_20"></div>
                    <div id="xxkmenu">
                        <div class="xc_zases">
                            <div class="xc_zases_T">热门服务</div>
                            <div class="xc_zases_li">
                                <ul>
                                    @foreach($auths as $auth)
                                    <li>
                                        <a href="{{$base->url.'authDetails?id='.$auth->id}}">
                                            <div class="xc_zases_li_in">
                                                <div class="xc_zases_li_ina"><img src="{{$base->url.'uploads/'.$auth->cover}}" style="width: 100%" />
                                                </div>
                                                <div class="xc_zases_li_inb">{{$auth->name}}</div>
                                                <div class="xc_zases_li_inc">查看详情+</div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blank_20"></div>
                        <div class="xc_ewm"><img src="{{$base->url}}images/1597157620533929.jpg" /></div>
                        <div class="xc_wwx"><img src="{{$base->url}}images/1597157783644221.gif" /></div>
                    </div>
                </div>

                
                    <div class="bang_box">
                        <div class="bang_T"><span>众维推荐 <em>RECOMMENDATIONS</em></span><label><a href="/?news_8/">MORE
                                    +</a></label></div>
                        <div class="bang_li">
                            <div class="bang_li_left">
                                <div class="bang_li_T">行业新闻</div>
                                <div class="bang_li_ol">
                                    <ul>
                                        @foreach($industry_news as $news)
                                        <li><a href="{{$base->url.'articleDetail?id='.$news->id}}" title="{{$news->title}}" target="_blank">{{$news->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="bang_li_right">
                                <div class="bang_li_T" style="background:url(http://feifan.net/images/ico_2.png) left center no-repeat;">最新案例</div>
                                <div class="bang_li_ol">
                                    <ul>
                                        @foreach($cases as $cases)

                                        <li><a href="{{$base->url.'articleDetail?id='.$cases->id}}" title="{{$cases->title}}" target="_blank">{{$cases->title}}</a></li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
            </div>
        </div>
    </div>
@endsection