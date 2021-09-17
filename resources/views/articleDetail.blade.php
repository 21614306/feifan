@extends('public/base')

@section('head')

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="http://feifan.net/javascript/jquery.slide.js"></script>
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/css.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/item.css" />
    <link type="text/css" rel="stylesheet" href="http://feifan.net/css/aos.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <script type="text/javascript">
    < !--
    document.oncontextmenu = function(e) { return false; }
    //-->
    </script>
    <!--[if lt IE 9]>  
  <script src="http://feifan.net/javascript/html5shiv.js"></script>
  <script src="http://feifan.net/javascript/respond.min.js"></script>
<![endif]-->
    <title>恭贺福建柒牌集团有限公司2020年8月顺利通过CE认证-成功案例-众维咨询 - GRS验厂|SLCP验厂认证|GOTS验厂|HIGG验厂|BSCI验厂|SMETA验厂|SEDEX验厂认证评估</title>
    <meta name="keywords" content="SLCP认证,GRS认证,GRS验厂,Gots验厂,higg验厂,SLCP验厂,SMETA验厂,SEDEX验厂,SLCP验厂认证,GRS验厂认证,GRS验厂认证,Gots验厂认证,higg验厂认证,SLCP验厂认证,SMETA验厂认证,SEDEX验厂认证,福建验厂认证审核评估,广东验厂认证审核评估,浙江验厂认证审核评估,江苏验厂认证审核评估,山东验厂认证审核评估">
    <meta name="description" content="经营范围：服装和服饰的销售；物业管理；计算机软硬件研发；企业管理咨询服务；货物或技术进出口（国家禁止或涉及行政审批的货物和技术进出口除外）。（依法须经批准的项目，经相关部门批准后方可开展经营活动）">
</head>
@endsection
@section('nav')

 <ul>
                <li class="nav_1"><a href="/" id="home" >首页</a></li>
                <li class="nav_2"><a href="/yanchang/" >
                        客户验厂
                    </a></li>
                <li class="nav_2"><a href="/tixi/" style="background-color: #00427a;">
                        体系认证
                    </a></li>
                <li class="nav_2"><a href="/grs/">
                        GRS认证
                        <img src="http://feifan.net/images/hit.gif">
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

@section('content')


    <div class="body_goods">
        <div class="warp">
            <div class="curr">您当前的位置：<a href="/">首页</a> > <a href="/?list_3/">成功案例</a></div>
            <div class="item_main">
                <div class="goods_left">
                    <div class="bk_article_box">
                        <div class="bk_article_title">{{$article->title}}</div>
                        <div class="bk_article_desc"><img src="http://feifan.net/images/ly_ico.png" />
                            来源：本站&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://feifan.net/images/eye_ico.png" /> 阅读：<span>
                                {{$article->readNum}}
                            </span></div>
                        <div class="bk_article_content">
                            @markdown{{$article->content}}@endmarkdown

                            
                          
                        </div>
                        <div class="bk_article_PN">
                            @if($article_pre)
                            上一篇：<a href="{{'http://feifan.net/articleDetail?id='.($article_pre->id)}}">{{$article_pre->title}}</a><br>
                            @endif
                            @if($article_next)
                            下一篇：<a href="{{'http://feifan.net/articleDetail?id='.($article_next->id)}}">{{$article_next->title}}</a>
                            @endif
                        </div>
                        <div class="bk_article_tag">
                            <div class="bk_article_tag_l"><span>相关标签：</span>
                                
                                <a href="">{{$article->type}}</a>
                                
                            </div>
                        </div>
                        <div class="bk_article_tool">
                            <div class="bk_article_tool_left"><img src="http://feifan.net/images/copy_ico.png" align="absmiddle" /> <a href="javascript:copyToClipBoard();">复制链接</a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://feifan.net/images/print_ico.png" align="absmiddle" /> <a href="javascript:window.print();">打印</a></div>
                            <div class="bk_article_tool_right">
                                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                                <script>
                                window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "24" }, "share": {}, "image": { "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"], "viewText": "分享到：", "viewSize": "16" }, "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"] } };
                                with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="blank_20"></div>
                    <div class="coc_tip">
    <div class="coc_tip_T">友情提示：</div>
    <div class="coc_tip_D">
        众维企业自成立以来始终本着“服务只有起点，满意没有终点”的服务宗旨，服务过上千家企业，并深受广大客户的肯定与好评。以客户的业务和实际需求为本，顺应客户的要求作妥善安排。秉承坦诚、尊重、团队合作和专业的精神，构筑起无与伦比的企业直奔，为国内外客户提供更专业的服务。<br>众维咨询专业提供BSCI验厂咨询_WRAP验厂咨询_ICTI验厂咨询_沃尔玛验厂咨询_迪斯尼验厂咨询_BV验厂咨询_COC验厂咨询_target验厂咨询_tesco验厂咨询_guess验厂咨询_costco验厂咨询_玛莎验厂咨询_家乐福验厂咨询_耐克验厂咨询_肯德基验厂咨询_CK验厂咨询等，已为广东、福建、浙江等全国多家公司验厂，诚信经营，积累了良好的信誉。
    </div>
    <div class="coc_tip_C">欢迎拨打免费咨询电话：<font color="#ff0000">4007778961</font><br>详情请登录官方网站查询：<a href="http://">http://</a></div>
    <div class="coc_tip_M"><a href="/?list_3/">返回列表></a></div>
</div>
                </div>
                <div class="right">
                    <div class="hot_coc">
                        <div class="MCT"><span>知名案例 <em>WELL-KNOWN CASE</em></span><label><a href="/?list_3/">更多+</a></label></div>
                        <div class="hot_ci">
                             
                            <a href="/?list_3/371.html" title="恭贺福建柒牌集团有限公司2020年8月顺利通过CE认证" target="_blank"><img src="http://feifan.net/images/1597672243319846.jpg" data-bd-imgshare-binded="1"></a>
                            
                        </div>
                        <div class="wel_cases">
                            <ul>
                                @foreach($articles as $article)
                                <li>
                                    <div class="wel_cases_title"><a href="{{'http://feifan.net/uploads/'}}" title="{{$article->title}}" target="_blank">{{$article->title}}</a></div>
                                    <div class="wel_cases_data">{{$article->update_at}}</div>
                                </li>
                                @endforeach
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