<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HDU Library</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/icomoon-social.css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/css/leaflet.ie.css" />
    <![endif]-->
    <link rel="stylesheet" href="/css/main.css">

    <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <ul style="margin-top: 50px">
                @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">登录</a></li>
                    <li><a href="{{ url('register') }}">注册</a></li>
                @elseif(Auth::user()->role == 0)
                    <li><a href="{{ url('/student_detail') }}">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            注销
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/admin/admin_detail') }}">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            注销
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="{{ url('/') }}"><img src="/img/HDU.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li>
                    <a href="{{ url('/') }}">杭电在线图书管理系统</a>
                </li>

                <!-- <li>
                    <a href="credits.html">联系我们</a>
                </li> -->
            </ul>
        </nav>
    </div>
</div>

@yield('page_title')

@yield('content')


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>小组成员</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li>李娉</li>
                    <li>曹思逸</li>
                    <li>曹伟波</li>
                    <li>韩坚豪</li>
                </ul>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
                <h3>友情链接</h3>
                <ul class="no-list-style footer-navigate-section">
                    {{--<li><a href="http://www.wanfangdata.com.cn/">万方</a></li>--}}
                    {{--<li><a href="http://library.koolearn.com/index.jsp">新东方</a></li>--}}
                    <li><a href="http://www.cnki.net/">中国知网</a></li>
                    <li><a href="http://opac.nlc.gov.cn/F">国家图书馆</a></li>
                    <li><a href="http://210.32.33.190/licence.html">维普</a></li>
                    <li><a href="http://ieeexplore.ieee.org/Xplore/home.jsp">IEEE</a></li>
                </ul>
            </div>

            <div class="col-footer col-md-4 col-xs-6">
                <h3>我们的地址</h3>
                <p class="contact-us-details">
                    <b>地址:</b> 杭州电子科技大学<br/>
                    <b>电话:</b> 0571-86878550<br/>
                    <b>传真:</b> 0571-86915026<br/>
                    <b>Email:</b> <a href="mailto:tsg@hdu.edu.cn ">tsg@hdu.edu.cn </a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>联系我们</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li><p>微信号：hdulib</p></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/"></a></div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/leaflet.js"></script>
<script src="/js/jquery.fitvids.js"></script>
<script src="/js/jquery.sequence-min.js"></script>
<script src="/js/jquery.bxslider.js"></script>
<script src="/js/main-menu.js"></script>
<script src="/js/template.js"></script>

</body>
</html>