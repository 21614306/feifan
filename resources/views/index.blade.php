@extends('public/base')
@section('head')
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>非凡咨询</title>
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
@section('swiper')
<div class="swiper-container">
            <div class="swiper-wrapper">
                @for($i=1;$i<=3;$i++)
                    @if($base['index_banner_'.$i])
                <div class="swiper-slide">
                    <img src="{{$base->url.'uploads/'.$base['index_banner_'.$i]}}" alt="" width="100%" />
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

@section('nav')
 <ul>
                <li class="nav_1"><a href="/" id="home" style="background-color: #00427a;">首页</a></li>
                <li class="nav_2"><a href="/yanchang/">
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

@section('ban_num')
      <div class="bang_num">
            <ul>
                <li>
                    <div class="bang_num_li">
                        <div class="bang_num_li_A nsm_1 timer" id="count-number" data-to="10" data-speed="1500">10</div>
                        <div class="bang_num_li_B nkm_1" style="font-size:14px; font-weight:bold;">年</div>
                        <div class="bang_num_li_C">专注验厂认证</div>
                    </div>
                </li>
                <li>
                    <div class="bang_num_li">
                        <div class="bang_num_li_A nsm_1 timer" id="count-number" data-to="28" data-speed="1500">28</div>
                        <div class="bang_num_li_B nkm_1">+</div>
                        <div class="bang_num_li_C">覆盖全国省份/地区</div>
                    </div>
                </li>
                <li>
                    <div class="bang_num_li">
                        <div class="bang_num_li_A nsm_3 timer" id="count-number" data-to="1000" data-speed="1500" style="left:75px">1000
                        </div>
                        <div class="bang_num_li_B nkm_3" style="left:230px">+</div>
                        <div class="bang_num_li_C">每年服务企业</div>
                    </div>
                </li>
                <li>
                    <div class="bang_num_li">
                        <div class="bang_num_li_A nsm_4 timer" id="count-number" data-to="3500" data-speed="1500" style="left:80px">3500
                        </div>
                        <div class="bang_num_li_B nkm_4">+</div>
                        <div class="bang_num_li_C">累计服务企业 </div>
                    </div>
                </li>
            </ul>
        </div> 
@endsection

@section('content')
    <script type="text/javascript" src="javascript/index_step.js"></script>
    <div class="all_xm">
        <div class="warp">
            <div class="xm_main">
                <div class="xm_enter"><span>热门验厂项目</span><label>10年来专注于验厂服务</label>
                    <script type="text/javascript">
                    function frmSub() {
                        if (document.getElementById("keys").value == "" || document.getElementById("keys").value == "请输入项目关键词") {
                            alert("请输入项目关键词");
                            document.getElementById("keys").focus();
                            return false;
                        }
                        document.myCey.submit();
                    }
                    </script>
                    <form id="myKey" name="myCey" method="post" action="/?search/">
                        <div class="search">
                            <div class="search_input"><input type="text" value="请输入项目关键词" class="sinput" name="keyword" id="keys" onFocus="if(this.value=='请输入项目关键词')this.value='';this.style.color='#333333';" onBlur="if(this.value=='')this.value='请输入项目关键词';this.style.color='#c2c2c2';" />
                            </div>
                            <div class="search_btn"><a href="javascript:void(0)" onClick="frmSub();"></a></div>
                        </div>
                    </form>
                </div>
                @foreach($auths as $auth)
                <div class="{{'xm_'.(($loop->index)+1)}}">
                    <div class="xm_in">
                        <div class="xm_in_A"><a href="{{$base->url.'authDetail?id='.$auth->id}}" title="BSCI认证" target="_blank"><img src="{{$base->url.'uploads/'.$auth->cover}}" /></a></div>
                        <div class="xm_in_B"><img src="{{$base->url}}images/nopic.png" /></div>
                    </div>
                </div>
              @endforeach
                <div class="xm_10">
                    <script type="text/javascript" src="javascript/jquery.flexslider.min.js"></script>
                    <script type="text/javascript">
                    $(window).load(function() {
                        $('.flexslider').flexslider();
                    });

                    $(document).ready(function() {
                        $('.flexslider').hover(function() {
                            $('.flex-direction-nav li a.prev').css('display', 'block');
                            $('.flex-direction-nav li a.next').css('display', 'block');
                        }, function() {
                            $('.flex-direction-nav li a.prev').css('display', 'none');
                            $('.flex-direction-nav li a.next').css('display', 'none');
                        });

                    });
                    </script>
                    <div class="moduletable-banner">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><a href="" target="_blank"><img src="{{$base->url}}images/1597649196298066.png" width="468" height="200" /></a></li>
                                <li><a href="" target="_blank"><img src="{{$base->url}}images/1597649267211244.jpg" width="468" height="200" /></a></li>
                                <li><a href="" target="_blank"><img src="{{$base->url}}images/rm_3.png" width="468" height="200" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="xm_11"><a href="/yanchang/" target="_blank">更多+</a></div>
            </div>
        </div>
    </div>
    <div class="all_casenew">
        <div class="warp">
            <div class="cases_main">
                <div class="cases_hot" data-aos="fade-right">
                    <div id="fsD1" class="focus">
                        <div id="D1pic1" class="fPic">
                            @foreach($cases as $case)
                            @if($loop->index <4)
                            <div class="fcon" style="display: none;">
                                <a href="{{$base->url.'articleDetail/'.$case->id }}" title="{{$case->title}}" target="_blank"><img src="{{$case->content}}" /></a>
                                <span class="shadow"><a href="/articleDetail/article_1364.html" title="{{$case->title}}" target="_blank">{{$case->title}}</a></span> 
                            </div>
                            @endif
                           @endforeach
                        </div>
                        <div class="fbg">
                            <div class="D1fBt" id="D1fBt">
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                            </div>
                        </div>
                        <span class="prev"></span>
                        <span class="next"></span>
                    </div>
                    <script type="text/javascript">
                    Qfast.add('widgets', { path: "javascript/terminator2.2.min.js", type: "js", requires: ['fx'] });
                    Qfast(false, 'widgets', function() {
                        K.tabs({
                            id: 'fsD1', //焦点图包裹id  
                            conId: "D1pic1", //** 大图域包裹id  
                            tabId: "D1fBt",
                            tabTn: "a",
                            conCn: '.fcon', //** 大图域配置class       
                            auto: 1, //自动播放 1或0
                            effect: 'fade', //效果配置
                            eType: 'click', //** 鼠标事件
                            pageBt: true, //是否有按钮切换页码
                            bns: ['.prev', '.next'], //** 前后按钮配置class                          
                            interval: 3000 //** 停顿时间  
                        })
                    })
                    </script>
                </div>
                <div class="cases_box" data-aos="fade-left">
                    <div class="casenew_T">
                        <div class="casenew_T_l">
                            <ul>
                                <li class="selected">案例动态</li>
                                <li>公司动态</li>
                            </ul>
                        </div>
                        <div class="casenew_T_r"><a href="{{$base->url.'success/'}}" target="_blank">了解更多</a></div>
                    </div>
                    <div class="cases_win">
                        <div>
                            <div class="cases_new">
                                    @foreach($cases as $case)
                                    @if($loop->index == 0 )
                                <div class="cases_new_title"><a href="{{$base->url.'articleDetail?id='.$case->id }}" title="{{$case->title}}" target="_blank">{{$case->title}}</a></div>
                                <div class="cases_new_desc">
                                    {{

                                        substr($case->desc,1,80
                                        ).'...'}}
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="cases">
                                <ul>
                                    @foreach($cases as $case)
                                    @if($loop->index>0)
                                    <li><span><a href="{{$base->url.'articleDetail?id='.$case->id}}" title="{{$case->title}}" target="_blank">{{$case->title}}</a></span><label>{{$case->created_at}}</label>
                                    </li>
                                   @endif
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="hide">
                            <div class="cases_new">
                                @foreach($news as $new)
                                    @if($loop->index == 0 )
                                <div class="cases_new_title"><a href="{{$base->url.'articleDetail?id='.$new->id }}" title="{{$new->title}}" target="_blank">{{$new->title}}</a></div>
                                <div class="cases_new_desc">
                                    {{

                                        substr($new->desc,1,40
                                        ).'...'}}
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="cases">
                                <ul>
                                @foreach($news as $new)
                                    @if($loop->index>0)

                                    <li><span><a href="{{$base->url.'articleDetail?id='.$new->id}}" title="{{$new->title}}" target="_blank">{{$new->title}}</a></span><label>{{$new->created_at}}</label>
                                    </li>
                                    @endif
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fade"></div>
    <div class="all_china" style="padding-top:10px">
        <div style="width:1200px;margin:0 auto">
            <div style="font-size: 42px;color: #1a1a1a; text-align: center;height: 103px; line-height: 103px;color:white">
                服务流程
            </div>
            <img src="{{$base->url}}images/1597677468509617.png" alt="" style="border-radius: 20px;" />
        </div>
    </div>
    <div class="all_brand">
        <div class="warp">
            <div class="nTT" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="50" style="padding-top:19px; height:103px; line-height:103px;">品牌客户</div>
            <div class="kk_brand" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="50">
                <table width="1200" border="0" cellspacing="1" cellpadding="0" bgcolor="#e5e5e5">
                    <tr>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597675737864295.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597675864411461.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676008738503.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676820313698.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676906180882.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676920127720.png" /></td>
                    </tr>
                    <tr>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676932513646.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597676946598145.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597677287268133.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597677261638634.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597677230196829.png" /></td>
                        <td width="200" height="98" bgcolor="#FFFFFF" align="center" class="kk_img"><img src="{{$base->url}}images/1597677104675644.png" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection