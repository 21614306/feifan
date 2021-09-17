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
                <li class="nav_1"><a href="/" id="home" >首页</a></li>
                <li class="nav_2"><a href="/yanchang/" >
                        客户验厂
                    </a></li>
                <li class="nav_2"><a href="/tixi/" style="background-color: #00427a;" >
                        体系认证
                    </a></li>
                <li class="nav_2"><a href="/grs/" >
                        GRS认证
                        <img src="http://feifan.net/images/hit.gif">
                    </a></li>
                <li class="nav_2"><a href="/success/">
                        成功案例
                    </a></li>
              
                <li class="nav_2"><a href="/abouts/" >
                        About us
                    </a></li>
                <div style="clear:both">
                </div>
</ul>
@endsection

    </div>
@section('content')

    <script src="static/js/font-animate-min.js" type="text/javascript"></script>
    <div class="warp">
        <div class="curr">您当前的位置：<a href="/">首页</a> > <a href="/?list_2/">体系认证</a></div>
        <div class="item_box">
            <div class="item_box_left">
                <div class="item_box_left_A">
                    <table width="358" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="349" align="center"><img src="{{'http://feifan.net/uploads/'.$auth->cover}}" /></td>
                        </tr>
                    </table>
                </div>
                <div class="item_box_left_B">{{$auth->name}}</div>
            </div>
            <div class="item_box_right">
                <div class="item_name">{{$auth->name}}</div>
                <div class="item_desc"><strong style="color:#088eff">项目简介：</strong>
                    <p>{{$auth->introduction}}</p>
                </div>
                <div class="item_btn"><span><a href="tencent://message/?uin={{$base->qq}}&Site=uemo&Menu=yes" target="_blank">免费在线咨询</a></span></div>
                <div class="item_tel"><img src="http://feifan.net/images/1597159107937801.png" /></div>
                <div class="item_dl">
                    <ul>
                        <li>服务承诺：<span><img src="http://feifan.net/images/three_ico_3.png" align="absmiddle" /> 100%一次性通过&nbsp;&nbsp;<img src="http://feifan.net/images/three_ico_2.png" align="absmiddle" /> 专业辅导，专家审核&nbsp;&nbsp;<img src="http://feifan.net/images/three_ico_1.png" align="absmiddle" /> 不通过全额退款</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="fade"></div>
    <div class="body_item">
        <div class="warp">
            <div class="item_main">
                <div class="left">
                    <div class="item_tab">
                        <ul>
                            <li class="seld">相关知识</li>
                            <!--<li><a href="/?list_3/">客户案例</a></li>-->
                        </ul>
                    </div>
                    <div class="item_list">
                        <ul>
                        	 @foreach($articles as $article)
                            <li>
                                <div class="item_list_title"><a href="{{$base->url.'articleDetail?id='.$article->id}}" target="_blank">{{$article->title}}</a></div>
                                <div class="item_list_desc">{{$article->content}}</div>
                                <div class="item_list_more"><a href="{{$base->url.'articleDetail?id='.$article->id}}" target="_blank">阅读全文+</a></div>
                                <div class="item_list_look">阅读：{{$article->readNum}}</div>
                            </li>
                           @endforeach 
                            
                        </ul>
                    </div>
                    <div class="item_beizhu">
                        <div class="item_beizhu_l">欢迎拨打免费咨询电话：<font color="#147efb">{{$base->tel}}</font><br>详情请登录官方网站查询：{{$base->website}}</div>
                        <div class="item_beizhu_r"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="hot_coc">
                        <div class="MCT"><span>热门认证 <em>HOT PROJECT</em></span><label><a href="/?list_2/">更多+</a></label></div>
                        <div class="hot_coc_li">
                            <ul>
                                 @foreach($auths as $authOne )
                                <li><a href="{{'http://feifan.net/authDetails?id='.$authOne->id}}" target="_blank">
                                        <div class="hot_coc_li_dl"><span><img src="{{'http://feifan.net/uploads/'.$authOne->cover}}" alt="{{$authOne->name}}" /></span><label>{{$authOne->name}}</label></div>
                                    </a></li>
                                 @endforeach
                               
                                
                            </ul>
                        </div>
                    </div>
                    <div class="blank_10"></div>
                    <!--<div><a href="http://www.cocbang.com/soft/" target="_blank"><img src="http://feifan.net/images/easy.gif" /></a></div>-->
                    <div class="blank_10"></div>
                    <div class="hot_coc">
    <div class="MCT"><span>联系我们 <em>CONTACT US</em></span></div>
    <div class="blank_20"></div>
    <div align="center"><img src="{{'http://feifan.net/uploads/'.$base->qrcode}}" /></div>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection


</body>
</html>