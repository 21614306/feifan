@extends('public/base')
@section('head')
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.slide.js"></script>
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/css.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/aos.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/item.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/2020.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/ab.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <script type="text/javascript">
    <!--    
    document.oncontextmenu = function(e) { return false; }
    //-->
    </script>
    <!--[if lt IE 9]>  
  <script src=http://feifan.net/javascript/html5shiv.js"></script>
  <script src=http://feifan.net/javascript/respond.min.js"></script>
<![endif]-->
    <title>搜索结果-众维咨询 - GRS验厂|SLCP验厂认证|GOTS验厂|HIGG验厂|BSCI验厂|SMETA验厂|SEDEX验厂认证评估</title>
    <meta name="keywords" content="SLCP认证,GRS认证,GRS验厂,Gots验厂,higg验厂,SLCP验厂,SMETA验厂,SEDEX验厂,SLCP验厂认证,GRS验厂认证,GRS验厂认证,Gots验厂认证,higg验厂认证,SLCP验厂认证,SMETA验厂认证,SEDEX验厂认证,福建验厂认证审核评估,广东验厂认证审核评估,浙江验厂认证审核评估,江苏验厂认证审核评估,山东验厂认证审核评估">
    <meta name="description" content="众维咨询是国内规模较大的验厂认证服务机构,总部位于深圳,分点遍布福建、广东、浙江、江苏、山东等多个城市。帮助您快速通过GRS,SLCP,GOTS,HIGG,BSCI,SMETA,SEDEX,FSC,RCS,OCS等验厂认证评估。众维咨询验厂认证评估是国内较早从事验厂认证服务的机构，每年服务上千家各行业客户。">
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
@section('swiper')

    <script src=http://feifan.net/javascript/font-animate-min.js" type="text/javascript"></script>
    
    <div class="in_banner_cocs" style="background-image: url(http://feifan.net/images/in_banner_xms.jpg);">
    </div>
@endsection

    
@section('content')
    
    <div class="body_6">
        <div class="warp_item">
            <div class="item_coc">
                <ul>
                    <li class="item_coc_main"><img src="http://feifan.net/images/1597649773778586.jpg" /></li>
                     @foreach($auths as $auth)
                    <li>
                        <div class="item_coc_li"><a href="{{'http://feifan.net/authDetail?id='.$auth->id}}" target="_blank">
                                <div class="item_coc_li_A"><img src="{{'http://feifan.net/uploads/'.$auth->cover}}" alt="{{$auth->name}}" /></div>
                                <div class="item_coc_li_B">{{$auth->name}}<img src="http://feifan.net/images/hit.gif" /></div>
                                <div class="item_coc_li_C">了解更多+</div>
                            </a></div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="blank_20"></div>
            <div><a href="tencent://message/?uin={{$base->qq}}&Site=uemo&Menu=yes" target="_blank"><img src="http://feifan.net/upload/image/1597158420399712.jpg" /></a></div>
        </div>
    </div>
@endsection
