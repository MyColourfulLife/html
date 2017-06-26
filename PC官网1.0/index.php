<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>谷熊科技</title>
    <meta name="keywords" content="人工智能,图像识别,logo识别,机器学习,深度学习">
    <link rel="shortcut icon" href="pcimages/logoico.ico">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

</head>
<body>
<!--导航-->
<header>
    <div id="nav">
        <!--<img src="pcimages/logo.png">-->
        <a href="index.html">
            <div class="logo"></div>
        </a>

        <div class="nav-links">
            <a href="pages/coretechnology.html" >核心技术</a>
            <a href="pages/trademarkcertification.html" >商标认证</a>
            <a href="pages/aboutus.html">关于我们</a>
            <a href="pages/joinus.html">加入我们</a>
            <a target="_blank" href="http://browser.id-bear.com/">谷熊浏览器</a>
        </div>
    </div>
</header>

<!--内容-->
<div class="contents">

    <div class="flexslider">
        <ul class="slides">
            <li style="background:url(pcimages/banner.jpg) 50% 0 no-repeat;"><div>基于人工智能的商标识别互动系统</div></li>
            <li style="background:url(pcimages/banner2.jpg) 50% 0 no-repeat;"><div>商标识别，建立一种链接信息和服务的新方式</div></li>
            <li style="background:url(pcimages/banner3.jpg) 50% 0 no-repeat;"><div>商标即入口，商标即域名</div></li>
        </ul>
    </div>

    <!--description-->
    <div >
        <div  class="table section1"></div>
        <div  class="table section2"></div>
        <div  class="table section3"></div>
        <div  class="table section4"></div>
        <div  class="table section5"></div>
    </div>

</div>


<!--结束-->
<footer>

<div class="bottom-nav">
    <!--左边-->
    <div class="bottom-nav-left">

        <ul class="nav-bottom-links">

            <li class="nav-bottom-link-list">
                <ul>
                    <li class="nav-bottom-link bold">关于公司</li>
                    <li class="nav-bottom-link"><a href="pages/aboutus.html">关于我们</a></li>
                    <li class="nav-bottom-link"><a href="pages/joinus.html">加入我们</a></li>
                </ul>
            </li>

            <li class="nav-bottom-link-list">
                <ul >
                    <li class="nav-bottom-link bold">关注我们</li>
                    <!--<li class="nav-bottom-link"><a target="_blank" href="http://weibo.com/p/1006065419610634/home?from=page_100606&mod=TAB&is_hot=1#place">新浪微博</a></li>-->
                    <!--<li class="nav-bottom-link"><a href="javascript:void(0);" onclick="showWechatDialog()">微信公众号</a></li>-->
                    <li class="nav-bottom-link"><a target="_blank" href="http://browser.id-bear.com/">谷熊浏览器</a></li>
                </ul>
            </li>

        </ul>

    </div>
    <!--右边-->
    <div class="nav-bottom-right">
        <p class="corp-info">商务合作</p>
        <p class="corp-phone">0755-82556291</p>
        <p class="corp-time">周一到周五 9:30-18:30 (北京时间)</p>
    </div>

</div>

    <div class="bottom-copyright">
        <div id="bottom-copyright-left">
            <p>© 2013-2017 id-bear</p>
        </div>
        <div id="bottom-copyright-right">
            <p>谷熊科技有限公司 粤 ICP 备 13080041</p>
        </div>
    </div>

</footer>
<div id="wechat-diglog" >

    <div class="dialog">
        <img id="wechat-close" src="pcimages/cancel.png" onclick="closeWechatDialog()">
    </div>
    <div class="wechatbg"  onclick="closeWechatDialog()"></div>

</div>

<script>
    function showWechatDialog(){
        $("#wechat-diglog").fadeIn();
        $("#wechat-diglog .dialog").slideDown();
    }
    function closeWechatDialog(){
        $("#wechat-diglog .dialog").slideUp();
        $("#wechat-diglog").fadeOut();
    }

        $(document).ready(function(){

            $('.flexslider').flexslider({
                directionNav: true,
                pauseOnAction: false
            });
        });


    var client = {
        versions: function() {
            var u = navigator.userAgent;
            return {
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
            }
        }()
    }

    if (client.versions.ios || client.versions.android) {

        console.log('iOS or android')
        $(".slides li div").setAttribute("font-size","24px");

    }else{
        $(".slides li div").setAttribute("font-size","48px");
    }

</script>


<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262489578'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1262489578' type='text/javascript'%3E%3C/script%3E"));document.getElementById("cnzz_stat_icon_1262489578").style.display = "none";</script>
</body>
</html>