<!DOCTYPE HTML>
<html>
<head>

@yield('head')
</head>

<body onselectstart="return false">
  <div class="warp">
        <div class="header">
            <div class="logo" data-aos="fade-right"><a href="/" id="home"><img src="{{$base->url}}images/1597398918717115.jpg" alt="众维咨询" width="615" height="60" /></a></div>
            <div class="meta" data-aos="fade-left">
                <div class="cd-headline letters scale">
                    <u></u>
                    <span class="cd-words-wrapper" style="width:232px;">
                        <b class="is-visible" id="phone1"></b>
                        <b id="phone2"></b>
                        <script>
                        var phone = '{{$base->tel}}';

                        var arr = phone.split('');

                        arr.forEach(function(value, index) {

                            var html1 = `<i class="in">${value}</i>`;

                            var html2 = `<i class="out">${value}</i>`;

                            $('#phone1').append(html1);

                            $('#phone2').append(html2);

                        })
                        </script>
                    </span>
                </div>
            </div>
        </div>
        <div class="nav">
           @yield('nav')
        </div>
    </div>
    <script src="{{$base->url}}javascript/font-animate-min.js" type="text/javascript"></script>
    <div style="width:100%;">
        @yield('swiper')
    </div>
    <div class="warp">
        @yield('ban_num')
    </div>

    <div>
        @yield('content')
    </div>
    <div class="footer" style="height:560px">
        <div class="warp">
            <div class="koot" style="height:500px">
                <div class="koot_T"><span>全国各地提供本地化服务</span></div>
                <div class="koot_addr">
                    <ul>
                        @foreach($companys as $company)
                        <li>
                            <div class="koot_addr_T">{{$company->name}}</div>
                            <div class="koot_addr_Desc">
                                <strong>网址：</strong><a href="{{$company->website}}" target="_blank">{{$company->website}}</a><br>
                                <strong>地址：</strong>{{$company->add}}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--<div class="koot_line"></div>-->
                <div class="koot_nav" style="top:300px">
                    <a href="/yanchang/" style="padding-left:0;" target="_blank">服务项目</a>|
                    <a href="/success/" target="_blank">成功案例</a>|
                    <a href="/abouts/" target="_blank">联系我们</a>
                </div>
                <!--<div class="koot_tel" style="top:350px"></div>-->
                <div class="koot_copy" style="top:380px">本网站一切文字及图文版权归众维咨询所有， 禁止模仿或无授权使用，违者必究<br>Copyright © 2015-2025 All Rights Reserved. <a href="http://beian.miit.gov.cn/" target="_blank"></a></div>
                <div class="koot_wx" style="top:300px">
                    <ul>
                        <li><span><img src="{{$base->url.'uploads/'.$base->qrcode}}" /></span><label>微信公众号</label></li>
                        <li><span><img src="{{$base->url.'uploads/'.$base->ewm}}"  /></span><label>扫码咨询</label></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="all_link">
        <div class="warp">
            <div class="links_powers">
                <div class="links"><strong>友情链接：</strong>
                    <a href="{{$base->url}}admin" target="_blank">登录后台</a>&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="{{$base->url}}javascript/kefu.js"></script>
    <script type="text/javascript" src="{{$base->url}}javascript/aos.js"></script>
    <script type="text/javascript">
    AOS.init({

        easing: 'ease-out-back',

        duration: 1000

    });
    </script>
    <script language="javascript" src="{{$base->url}}javascript/lsjs.js"></script>
    <script>
    (function() {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    </script>
</body>

</html>
@show
