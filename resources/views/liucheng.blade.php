@extends('public/base')
@section('head')
   <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>众维咨询 - GRS验厂|SLCP验厂认证|GOTS验厂|HIGG验厂|BSCI验厂|SMETA验厂|SEDEX验厂认证评估</title>
    <meta name="keywords" content="SLCP认证,GRS认证,GRS验厂,Gots验厂,higg验厂,SLCP验厂,SMETA验厂,SEDEX验厂,SLCP验厂认证,GRS验厂认证,GRS验厂认证,Gots验厂认证,higg验厂认证,SLCP验厂认证,SMETA验厂认证,SEDEX验厂认证,福建验厂认证审核评估,广东验厂认证审核评估,浙江验厂认证审核评估,江苏验厂认证审核评估,山东验厂认证审核评估">
    <meta name="description" content="众维咨询是国内规模较大的验厂认证服务机构,总部位于深圳,分点遍布福建、广东、浙江、江苏、山东等多个城市。帮助您快速通过GRS,SLCP,GOTS,HIGG,BSCI,SMETA,SEDEX,FSC,RCS,OCS等验厂认证评估。众维咨询验厂认证评估是国内较早从事验厂认证服务的机构，每年服务上千家各行业客户。">
    <meta property="og:image" content="http://feifan.net/images/1597649773778586.jpg" />
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.slide.js"></script>
    <script type="text/javascript" src="http://feifan.net/javascript/tab.js"></script>
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/css.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/aos.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/item.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/2020.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/ab.css" />

    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript">
    < !--
    document.oncontextmenu = function(e) { return false; }
    //-->
    </script>
    <link rel="stylesheet" href="http://feifan.net/css/swiper.min.css">
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
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="http://feifan.net/javascript/koala.min.1.5.js"></script>
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/focus.css" />
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
        background: url("http://feifan.net/images/bg_direction_nav.png") no-repeat scroll -36px 0 transparent;
    }

    .flex-direction-nav li a.next:hover,
    .flex-direction-nav li a.next:active {
        background: url("http://feifan.net/images/bg_direction_nav.png") no-repeat scroll -36px -36px transparent;
    }

    .flex-direction-nav li a.prev {
        left: 0;
        background: url("http://feifan.net/images/bg_direction_nav.png") no-repeat scroll 0 0 transparent;
    }

    .flex-direction-nav li a.prev:hover,
    .flex-direction-nav li a.prev:active {
        background: url("http://feifan.net/images/bg_direction_nav.png") no-repeat scroll 0 -36px transparent;
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
        background: url("http://feifan.net/images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        _background: url("http://feifan.net/images/xm_ico_b.png") no-repeat scroll 0 0 transparent;
        cursor: pointer;
        text-indent: -9999px;
    }

    .flex-control-nav li a:hover {
        background: url("http://feifan.net/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("http://feifan.net/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
    }

    .flex-control-nav li a.active {
        background: url("http://feifan.net/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        _background: url("http://feifan.net/images/xm_ico_a.png") no-repeat scroll 0 0 transparent;
        cursor: default;
    }
    </style>
</head>
@endsection
@section('nav')
<ul>
    <li class="nav_1"><a href="/" id="home">首页</a></li>
    <li class="nav_2"><a href="/yanchang/">
            客户验厂
        </a></li>
    <li class="nav_2"><a href="/tixi/">
            体系认证
        </a></li>
    <li class="nav_2"><a href="/grs/">
            GRS认证
            <img src="http://feifan.net/images/hit.gif">
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
<div class="in_banner_about" style="background-image: url(http://feifan.net/images/in_banner_about.jpg);">
    <div class="warp">
        <div class="in_banner_about_txt" data-aos="fade-left" data-aos-delay="100"><img src="http://feifan.net/images/20200818/1597740685395030.png" /></div>
    </div>
</div>
@endsection
@section('swiper')
<div class="in_banner_about" style="background-image: url(http://feifan.net/images/in_banner_about.jpg);">
    <div class="warp">
        <div class="in_banner_about_txt" data-aos="fade-left" data-aos-delay="100"><img src="http://feifan.net/images/1597740685395030.png" /></div>
    </div>
</div>
@endsection
@section('content')
<div class="body_1">
    <div class="warp">
        <div class="column_location">
            <div class="column">
                <ul>
                    <li><a href="/abouts">企业简介</a></li>
                    <li class="cur"><a href="/liucheng/">合作流程</a></li>
              
                </ul>
            </div>
            <div class="location">您当前的位置：<a href="/">首页</a> > <a href="/abouts">About us</a> > <a href="/liucheng">合作流程</a></div>
        </div>
        <div style="height:40px;"></div>
        <div class="Process_main">
            <div class="Process_T">合作流程 <span>COOPERATION PROCESS</span></div>
            <div class="Process_Tx" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="50">示意图：</div>
            <div class="Process_box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="50">
                <ul>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_1"></span>
                            <label>在线申请</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_2"></span>
                            <label>初步诊断</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_3"></span>
                            <label>合同签订</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_4"></span>
                            <label>硬件指导</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_5"></span>
                            <label>资料编写</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_10"></span>
                            <label>验厂结束</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_9"></span>
                            <label>陪同验厂</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_8"></span>
                            <label>模拟验厂</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_7"></span>
                            <label>整改跟踪</label>
                        </div>
                    </li>
                    <li>
                        <div class="Process_li">
                            <span class="lc_ico_6"></span>
                            <label>现场整改</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="150">
                <table width="1140" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td width="178" rowspan="2">
                                <div class="lx_name_num"><span class="lx_num">1</span>
                                    <div class="lx_name">前期咨询</div>
                                </div>
                            </td>
                            <td width="962">
                                <div class="lx_desc">客户提出辅导需求</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">客户通过400电话、电子邮件、在线客服等沟通方式，提出各类验厂辅导需求。</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="5">
                                <div class="lx_name_num"><span class="lx_num">2</span>
                                    <div class="lx_name">方案/报价</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc"><strong>报价依据如下：</strong></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">1、工厂名称、地址、工厂规模、人数、产品类型；</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">2、本次验厂初审、跟进还是复审；</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">3、近期是否做过其他客户的验厂；</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">4、本次验厂的审核机构以及审核日期。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_name_num"><span class="lx_num">3</span>
                                    <div class="lx_name">确定合作意向</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">双方通过电话、邮件、在线沟通等方式，针对验厂内容及具体需求进行沟通，产生合同主体及细节。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_name_num"><span class="lx_num">4</span>
                                    <div class="lx_name">签署合同</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">双方达成一致后，签署&quot;验厂辅导合同&quot;。合同中注明双方利害冲突及解决方案，客户支付合同首付款（50%），双方开始履行合同义务。</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <div class="lx_name_num"><span class="lx_num">5</span>
                                    <div class="lx_name">首次辅导<br />(1~2天)</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">收到首付款后，安排咨询顾问师首次到厂辅导(一周内)，如遇加急1天后到厂指导。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">现场诊断。调查工厂实际情况，针对工厂软硬件缺失情况出具整改方案，与工厂共同改善问题点。</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                <div class="lx_name_num"><span class="lx_num">6</span>
                                    <div class="lx_name">二次辅导<br />(2~3天)</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">根据工厂改善进度，合理安排咨询顾问师再次到厂时间。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">模拟验厂。再次到厂按照验厂标准检查核对整改效果，模拟验厂。现场查看硬件、生产资料及各类官方文件，抽取一定比例员工进行员工访谈。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">查漏补缺。针对模拟验厂出现问题进行改善，进一步加强员工培训。</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                <div class="lx_name_num"><span class="lx_num">7</span>
                                    <div class="lx_name">陪同验厂<br />(1~3天)</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">于验厂前1-2天抵达工厂做好验厂前准备工作。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">陪同验厂。验厂当天咨询顾问师陪同审核，应对突发状况。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">验厂结束。审核员出具现场报告，工厂相关负责人签字确认，审核员离厂。</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <div class="lx_name_num"><span class="lx_num">8</span>
                                    <div class="lx_name">支付尾款</div>
                                </div>
                            </td>
                            <td>
                                <div class="lx_desc">工厂确认验厂通过后，支付合同尾款(50%)。注：不通过，全额退款。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lx_desc">收到尾款后众维开具相关发票，以邮寄方式递出，至此合同结束。</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
