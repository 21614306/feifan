@extends('public/base')
@section('head')
    
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
                        <img src="http://feifan.net/images/hit.gif">
                    </a></li>
                <li class="nav_2"><a href="/success/">
                        成功案例
                    </a></li>
                <li class="nav_2"><a href="/news/" style="background-color: #00427a;">
                        新闻动态
                    </a></li>
                <li class="nav_2"><a href="/abouts/">
                        About us
                    </a></li>
                <div style="clear:both">
                </div>
</ul>
@endsection

@section('swiper')
  <div class="in_banner_cases" style="background-image: url(http://feifan.net/images/1597675002708200.jpg);">
        <div class="warp">
            <div class="in_banner_cases_txt" data-aos="fade-left" data-aos-delay="100"><img src="http://feifan.net/images/1597674155504775.png" /></div>
        </div>
    </div>
@endsection

@section('content')
 <div class="bodya_cases">
        <div class="warp">
            <div class="curr">您当前的位置：<a href="/">首页</a> > <a href="/news/">新闻动态</a></div>
            <div class="ZN_main">
                <div class="ZN_left">
                    <div class="ZN_list">
                        <ul>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/666.html" target="_blank">Target验厂新方案强调只接受8家审计项目的报告，并明确指定审核公司</a></div>
                                <div class="ZN_list_date">2020-05-02</div>
                                <div class="ZN_list_desc">2020年2月25日，美国大型连锁零售商Target (塔吉特) 正式通知其全球供应商，Target将从2020年5月1...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/23.html" target="_blank">Target(塔吉特)宣布将于2020年5月1日起正式接受第三方审核报告！</a></div>
                                <div class="ZN_list_date">2020-05-01</div>
                                <div class="ZN_list_desc"></div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/668.html" target="_blank">Higg Index FEM验证必然遇到的6个问题，众维为您解答</a></div>
                                <div class="ZN_list_date">2020-08-20</div>
                                <div class="ZN_list_desc">1、Higg Index FEM审核的主要内容包括哪几个方面?1) 管理系统2) 能源和温室气体3) 废气4) 用水5)...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/667.html" target="_blank">行业动态|沃尔玛要求供应商在2022年前完成Higg FEM自我评估和验证！</a></div>
                                <div class="ZN_list_date">2020-08-20</div>
                                <div class="ZN_list_desc">沃尔玛作为全球最大的连锁商超，每年都需要从中国市场采购大量商品，吸引了无数工厂想成为其供应商。沃尔玛每次供应商审核要求的...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/664.html" target="_blank">客户常常要求工厂申请的Higg Index验厂到底是什么？怎么样去申请？流程操作</a></div>
                                <div class="ZN_list_date">2020-08-20</div>
                                <div class="ZN_list_desc">&nbsp; Higg Index标准是由SAC根据现有的行业环保评定标准，经讨各成员论研究后制定的。SAC期望该标准能...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/619.html" target="_blank">对于火起来的GRS全球回收标准认证，你了解多少？</a></div>
                                <div class="ZN_list_date">2020-08-19</div>
                                <div class="ZN_list_desc">近段时间，全球回收标准GRS认证发展的越来越火，许多服装纺织企业都在热火朝天的进行验厂，因为很多客户都会询问他们有没有通...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/77.html" target="_blank">CSR行业新热点：HIGG/ FEM /SLCP</a></div>
                                <div class="ZN_list_date">2020-08-14</div>
                                <div class="ZN_list_desc">1.SAC说起这些要由一个机构说起：SAC。SAC全称是Sustainable Apparel Coalition，中文...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/92.html" target="_blank">大型验厂审核机构介绍</a></div>
                                <div class="ZN_list_date">2020-07-15</div>
                                <div class="ZN_list_desc">在验厂咨询辅导过程中，众维咨询建议大家要尽量选择大型的第三方验厂审核机构，这样既能节省时间，还能使验厂更加顺利。下面介绍...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/631.html" target="_blank">家乐福要求供应商必须通过GRS验厂认证！</a></div>
                                <div class="ZN_list_date">2020-06-19</div>
                                <div class="ZN_list_desc">近年来环保之风刮遍全球，各国政府对限制塑料和使用回收材料的重视达到一个前所未有的高度。纺织服装界最先开始尝试用回收材料制...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/633.html" target="_blank">突击验厂（不定时验厂）的应对工作</a></div>
                                <div class="ZN_list_date">2020-06-14</div>
                                <div class="ZN_list_desc">简单介绍一下验厂前的准备工作及如何应对突击验厂。客户验厂前怎样做好配合工作：1.做好员工访谈准备，记住问话表中的内容，并...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/673.html" target="_blank">申延3个月的amfori BSCI验厂报告已经无效，赶紧重新申请审核，避免错失订单</a></div>
                                <div class="ZN_list_date">2020-06-02</div>
                                <div class="ZN_list_desc">3个月前，全球经济受到疫情的影响，amfori BSCI决定让即将到期的验厂报告可申请延长有效期三个月。该决定不适用于没...</div>
                            </li>
                            <li>
                                <div class="ZN_list_title"><a href="/?news_8/665.html" target="_blank">验厂必须伴随着各种审核，如何理解这些审核的区别呢？</a></div>
                                <div class="ZN_list_date">2020-05-20</div>
                                <div class="ZN_list_desc">1、第一方、第二方、第三方验厂审核有何区别？答：区别如下：（1）审核的目的不同第一方审核是为了自查、自我完善而进行的，即...</div>
                            </li>
                        </ul>
                        <div class="bk_yellow" style="border:none;width:850px;padding-left:30px;padding-right:30px;">
                            <a href="/?news_8/">&nbsp;首 页&nbsp;</a>
                            <a href="javascript:;">&nbsp;上一页&nbsp;</a>
                            <a href="/?news_8/" class="page-num page-num-current">1</a><a href="/?news_8_2/" class="page-num">2</a><a href="/?news_8_3/" class="page-num">3</a><a href="/?news_8_4/" class="page-num">4</a>
                            <a href="/?news_8_2/">&nbsp;下一页&nbsp;</a>
                            <a href="/?news_8_4/">&nbsp;末页&nbsp;</a>
                        </div>
                    </div>
                    <div class="blank_30"></div>
                </div>
                <div class="right">
                    <div class="hot_coc">
                        <div class="MCT"><span>热点资讯 <em>HOT NEWS</em></span><label><a href="/?news_8/">更多+</a></label></div>
                        <div class="wel_cases">
                            <ul>
                                <li>
                                    <div class="wel_cases_title"><a href="http://feifan.net/images/1597905741107850.jpg" title="Target验厂新方案强调只接受8家审计项目的报告，并明确指定审核公司" target="_blank">Target验厂新方案强调只接受8家审计项目的报告，并明确指定审核公司</a></div>
                                    <div class="wel_cases_data">2020-05-02</div>
                                </li>
                                <li>
                                    <div class="wel_cases_title"><a href="http://feifan.net/images/nopic.png" title="Target(塔吉特)宣布将于2020年5月1日起正式接受第三方审核报告！" target="_blank">Target(塔吉特)宣布将于2020年5月1日起正式接受第三方审核报告！</a></div>
                                    <div class="wel_cases_data">2020-05-01</div>
                                </li>
                                <li>
                                    <div class="wel_cases_title"><a href="http://feifan.net/images/nopic.png" title="Higg Index FEM验证必然遇到的6个问题，众维为您解答" target="_blank">Higg Index FEM验证必然遇到的6个问题，众维为您解答</a></div>
                                    <div class="wel_cases_data">2020-08-20</div>
                                </li>
                                <li>
                                    <div class="wel_cases_title"><a href="http://feifan.net/images/1597905993196895.jpg" title="行业动态|沃尔玛要求供应商在2022年前完成Higg FEM自我评估和验证！" target="_blank">行业动态|沃尔玛要求供应商在2022年前完成Higg FEM自我评估和验证！</a></div>
                                    <div class="wel_cases_data">2020-08-20</div>
                                </li>
                                <li>
                                    <div class="wel_cases_title"><a href="http://feifan.net/images/nopic.png" title="客户常常要求工厂申请的Higg Index验厂到底是什么？怎么样去申请？流程操作" target="_blank">客户常常要求工厂申请的Higg Index验厂到底是什么？怎么样去申请？流程操作</a></div>
                                    <div class="wel_cases_data">2020-08-20</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blank_10"></div>
                    <div class="hot_coc">
                        <div class="MCT"><span>联系我们 <em>CONTACT US</em></span></div>
                        <div align="center"><img src="http://feifan.net/images/1597157937950827.jpg" /></div>
                        <div class="blank_20"></div>
                        <div align="center"><img src="http://feifan.net/images/1597158294737290.jpg" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection