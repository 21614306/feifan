@extends('public/base')
@section('head')
   <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>众维咨询 - GRS验厂|SLCP验厂认证|GOTS验厂|HIGG验厂|BSCI验厂|SMETA验厂|SEDEX验厂认证评估</title>
    <meta name="keywords" content="SLCP认证,GRS认证,GRS验厂,Gots验厂,higg验厂,SLCP验厂,SMETA验厂,SEDEX验厂,SLCP验厂认证,GRS验厂认证,GRS验厂认证,Gots验厂认证,higg验厂认证,SLCP验厂认证,SMETA验厂认证,SEDEX验厂认证,福建验厂认证审核评估,广东验厂认证审核评估,浙江验厂认证审核评估,江苏验厂认证审核评估,山东验厂认证审核评估">
    <meta name="description" content="众维咨询是国内规模较大的验厂认证服务机构,总部位于深圳,分点遍布福建、广东、浙江、江苏、山东等多个城市。帮助您快速通过GRS,SLCP,GOTS,HIGG,BSCI,SMETA,SEDEX,FSC,RCS,OCS等验厂认证评估。众维咨询验厂认证评估是国内较早从事验厂认证服务的机构，每年服务上千家各行业客户。">
    <meta property="og:image" content="{{$base->url}}/images/1597649773778586.jpg" />
    <script type="text/javascript" src="{{$base->url}}/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="{{$base->url}}/javascript/jquery.slide.js"></script>
    <script type="text/javascript" src="{{$base->url}}/javascript/tab.js"></script>
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/css.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/aos.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/item.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/2020.css" />
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/ab.css" />

    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript">
    < !--
    document.oncontextmenu = function(e) { return false; }
    //-->
    </script>
    <link rel="stylesheet" href="{{$base->url}}/css/swiper.min.css">
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
    <script type="text/javascript" src="{{$base->url}}/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="{{$base->url}}/javascript/koala.min.1.5.js"></script>
    <link type="text/css" rel="stylesheet" href="{{$base->url}}/css/focus.css" />
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
        background: url("{{$base->url}}/images/bg_direction_nav.png") no-repeat scroll -36px 0 transparent;
    }

    .flex-direction-nav li a.next:hover,
    .flex-direction-nav li a.next:active {
        background: url("{{$base->url}}/images/bg_direction_nav.png") no-repeat scroll -36px -36px transparent;
    }

    .flex-direction-nav li a.prev {
        left: 0;
        background: url("{{$base->url}}/images/bg_direction_nav.png") no-repeat scroll 0 0 transparent;
    }

    .flex-direction-nav li a.prev:hover,
    .flex-direction-nav li a.prev:active {
        background: url("{{$base->url}}/images/bg_direction_nav.png") no-repeat scroll 0 -36px transparent;
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
        background: url("{{$base->url}}/images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}/images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        cursor: pointer;
        text-indent: -9999px;
    }

    .flex-control-nav li a:hover {
        background: url("{{$base->url}}/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
    }

    .flex-control-nav li a.active {
        background: url("{{$base->url}}/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("{{$base->url}}/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        cursor: default;
    }
    </style>
</head>
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
                        <img src="{{$base->url}}/images/hit.gif">
                    </a></li>
                <li class="nav_2"><a href="/success/">
                        成功案例
                    </a></li>
                
                <li class="nav_2"><a href="/abouts/" style="background-color: #00427a;">
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
                    @if($base['abouts_banner_'.$i])
                <div class="swiper-slide">
                    <img src="{{$base->url.'uploads/'.$base['abouts_banner_'.$i]}}" alt="" width="100%" />
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

@section('swiper')
  <div class="in_banner_about" style="background-image: url(http://feifan.net/images/in_banner_about.jpg);">
        <div class="warp">
            <div class="in_banner_about_txt" data-aos="fade-left" data-aos-delay="100"><img src="{{$base->url}}/images/1597740685395030.png" /></div>
        </div>
    </div>
@endsection
@section('content')
<div class="body_1">
        <div class="warp">
            <div class="column_location">
                <div class="column">
                    <ul>
                        
                        <li  class="cur" ><a href="/abouts/">企业简介</a></li>
                        
                        <li ><a href="/liucheng/">合作流程</a></li>
                        
                    </ul>
                </div>
                <div class="location">您当前的位置：<a href="/">首页</a> > <a href="/abouts">About us</a> > <a href="/abouts">企业简介</a></div>
            </div>
            <div class="about_A">
                <div class="about_A_L">
                    <script type="text/javascript" src="{{$base->url}}/javascript/jquery.flexslider.min.js"></script>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $('.flexslider').flexslider();
                        });

                        $(document).ready(function () {
                            $('.flexslider').hover(function () {
                                $('.flex-direction-nav li a.prev').css('display', 'none');
                                $('.flex-direction-nav li a.next').css('display', 'none');
                            }, function () {
                                $('.flex-direction-nav li a.prev').css('display', 'none');
                                $('.flex-direction-nav li a.next').css('display', 'none');
                            });

                        });         
                    </script>
                    <link type="text/css" rel="stylesheet" href="static/css/ab.css" />
                    <div class="moduletable-banner">
                        <div class="flexslider">
                            <ul class="slides">
                                
                                <li><img src="{{$base->url}}/images/1603886986415752.jpg" width="590" height="450" /></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="about_A_R">
                    <p><span style="font-size: 20px;"><br/></span></p><p><strong><span style="font-size: 20px;">众维咨询</span></strong><span style="font-size: 20px;">（深圳众维供应链管理有限公司），国内规模较大的验厂认证服务机构，每年服务上千家各行业企业，是中国知名度较高的验厂认证辅导品牌机构。</span></p><p><span style="font-size: 20px;">众维企业总部位于深圳，分点遍布厦门、泉州、福州、杭州等多个城市，为国内广大客户提供客户验厂，体系认证，产品检测，安全生产等咨询业务。公司拥有丰富的行业信息资源、良好的行业关系和一支高效率成熟的专家队伍，致力于提供一流周到的咨询服务。</span></p><p><span style="font-size: 20px;">众维企业自成立以来始终本着“服务只有起点，满意没有终点”的服务宗旨，累计服务过三千余家企业，并深受广大客户的肯定与好评。以客户的业务和实际需要为本，顺应客户的要求作妥善安排。秉承坦诚、尊重、团队合作和专业的精神，构筑起无与伦比的企业之本为国内外客户提供更优质更专业的服务。</span></p><p><br/></p>
                </div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_1" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_1').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:28px; color:#006ac5"><strong>山东总公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">QINGDAO
                        HEADQUARTERS</span><br><br>
                    <span style="font-size:16px;">地 址：青岛市市北区敦化路138号西王大厦2302</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">Xiwang
                        Building 2302, 138 Dunhua Road, North District, Qingdao City</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://www.cocbang.cn/" target="_blank">http://www.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_01.jpg" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_2" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_2').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>上海分公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SHANGHAI BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：上海市静安区南京西路1515号嘉里中心18楼</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">18th Floor,
                        Kerry Centre, 1515 Nanjing West Road,<br> Jing'an District, Shanghai</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">18301901935</font><br>网址：<a
                        href="http://sh.cocbang.cn/" target="_blank">http://sh.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_02.jpg" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_3" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_3').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>江苏子公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SUZHOU BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：江苏省苏州市虎丘区科普路58号苏州科技大厦1618</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">1618, Suzhou
                        science and technology building, No. 58, Kepu Road,
                        Huqiu District, Suzhou City, Jiangsu Province</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://js.cocbang.cn/" target="_blank">http://js.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_03.png" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_4" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_4').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>浙江子公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">HANGZHOU BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：浙江省杭州市萧山区市心北路盈丰民和路600号2305</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">2305, No. 600,
                        yingfengminhe Road, Shixin North Road, Xiaoshan
                        District, Hangzhou City, Zhejiang Province</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://zj.cocbang.cn/" target="_blank">http://zj.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_04.png" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_5" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_5').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>广东分公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SHENZHENG BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：广东省深圳市南山区高新南六道16泰邦科技大厦2009</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">16, Gaoxin
                        South 6th Road, Nanshan District, Shenzhen,
                        Guangdong Province</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://gd.cocbang.cn/" target="_blank">http://gd.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_05.png" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_6" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_6').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>辽宁分公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SHENZHENG BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：辽宁省大连市中山区人民路17号国际金融大厦17楼</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">17 / F,
                        international finance building, No. 17, Renmin Road, Zhongshan District, Dalian City, Liaoning
                        Province</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://ln.cocbang.cn/" target="_blank">http://ln.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_06.jpg" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_7" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_7').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>北京分公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SHENZHENG BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：北京朝阳区望京街合生麒麟社3号楼1602</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">1602, building
                        3, Hesheng Qilin society, Wangjing street, Chaoyang District, Beijing</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://bj.cocbang.cn/" target="_blank">http://bj.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_07.jpg" /></div>
            </div>
        </div>
    </div>

    <div id="tanchu_window_8" class="modal hide">
        <div class="modal_in">
            <a class="close" href="javascript:;"
                onClick="document.getElementById('tanchu_window_8').style.display='none';document.getElementById('fade').style.display='none';"><img
                    src="static/picture/clos.png" /></a>
            <div class="modal-body">
                <div class="modal-body_left">
                    <span style="font-size:32px; color:#006ac5"><strong>福建分公司</strong></span><br><span
                        style="font-size:16px; font-family:Arial, Helvetica, sans-serif">SHENZHENG BRANCH</span><br><br>
                    <span style="font-size:16px;">地 址：福建省泉州市丰泽区浦西万达广场写字楼B座18楼</span><br>
                    <span style="font-size:14px; color:#bfbfbf;font-family:Arial, Helvetica, sans-serif;">18 / F,
                        building B, Wanda Plaza, Puxi, Fengze District, Quanzhou City, Fujian Province</span><br><br>
                    电话：<font style="font-size:20px; color:#0067bf; font-weight:bold;">400-007-9355</font><br>网址：<a
                        href="http://fj.cocbang.cn/" target="_blank">http://fj.cocbang.cn/</a>
                </div>
                <div class="modal-body_right"><img src="static/picture/ing_08.jpg" /></div>
            </div>
        </div>
    </div>

    <div id="fade"></div>
    <div class="dengcai" style="padding-top: 50px;">
        <div class="dengcai_slide">
            <div class="dengcai_ohbox">
                <ul class="piclist">
                     
                    <li><img src="{{$base->url}}/images/1597674027915111.jpg" /><span>业务团队</span></li>
                     
                    <li><img src="{{$base->url}}/images/1597674731500335.jpg" /><span>顾问团队</span></li>
                     
                    <li><img src="{{$base->url}}/images/1603887154274238.jpg" /><span>商务中心</span></li>
                     
                    <li><img src="{{$base->url}}/images/1597674060915916.jpg" /><span>新人培训</span></li>
                     
                    <li><img src="{{$base->url}}/images/1597674092213023.jpg" /><span>团队精神</span></li>
                     
                    <li><img src="{{$base->url}}/images/1597674146132340.jpg" /><span>季度生日会</span></li>
                     
                    <li><img src="{{$base->url}}/images/1597674185928345.jpg" /><span>年度活动</span></li>
                    
                </ul>
            </div>
            <div class="pageBtn">
                <span class="prev">
                    << /span>
                        <span class="next">></span>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".dengcai_slide").slide({ mainCell: ".dengcai_ohbox ul", effect: "leftLoop", delayTime: 800, vis: 6, scroll: 1, easing: "easeOutCubic", autoPlay: true });
        </script>
    </div>
    <div class="body_why">
        <div class="warp">
            <div style="text-align:center; height:84px;" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-delay="50"><img src="{{$base->url}}/images/1597648598283734.png" /></div>
            <div align="center" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="150">
                <img src="{{$base->url}}/images/1597738280431673.jpg" /></div>
        </div>
    </div>

@endsection

