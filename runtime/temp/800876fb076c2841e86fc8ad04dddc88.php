<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"../template/default/index_article.htm";i:1533892208;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit" />
<meta name="robots" content="index, follow" />
<title>{dede:field.title/}_{dede:global.cfg_webname/}</title>
<meta name="keywords" content="{dede:field name='keywords'/}" />
<meta name="description" content="{dede:field name='description' function='html2text(@me)'/}" />
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/font-awesome.min.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/ionicons.min.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/style.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/animate.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/core.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/layout.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/vendor.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/index.css"/>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/tk.css"/>
<script src="/template/default/skin/js/jquery-1.11.2.min.js"></script>
<script src="/template/default/skin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/template/default/skin/js/bootstrap.min.js"></script>
<script src="/template/default/skin/js/bootstrap-hover-dropdown.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="/skin/js/html5.js"></script>
<script src="/skin/js/respond.min.js"></script>
<style>
	article,aside,dialog,footer,header,section,nav,figure,menu{display:block;padding:0;margin:0;}
</style>
<link rel="stylesheet" href="/skin/css/ie.css" type="text/css" media="screen"/>
<![endif]-->

<!--[if lte IE 9]>
<script src="/skin/js/jquery.placeholder.js"></script>
<script>
jQuery(document).ready(function($){
	$('input, textarea').placeholder();
});
</script>
<script type="text/javascript" src="/skin/js/pie.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.indexci img').each(function() {
		PIE.attach(this);  
	});  
});
</script>
<![endif]-->

<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="/skin/js/selectivizr.js"></script>
  <script type="text/javascript" src="/skin/js/excanvas.compiled.js"></script>
<![endif]-->
</head>
<body>
<!--[if lt IE 8]>
	<div class="lt-ie8-bg">
		<p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
		<p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<p class="browsehappy">对不起，您正在使用的是 <strong>过时</strong> 的浏览器.</p>
		<p>请升级您的浏览器（IE8+，或者是火狐、谷歌、Opera、Safari等现代浏览器），以改进您的用户体验！</p>
	</div>
	<style>
	.lt-ie8-bg{z-index:11111;position:absolute;top:0;left:0;right:0;bottom:0;background-color:#333;color:#999;padding:100px 20px;text-align:center;font-size:26px}
	.lt-ie8-bg a{color:#f5f5f5;border-bottom:2px solid #fff}
	.lt-ie8-bg a:hover{text-decoration:none}
	#wrapper{display:none;}
	</style>
<![endif]--> 
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<div id="wrapper"> {dede:include filename="head.htm"/}
  <div class="header-bg-wrapper">
    <div id="header-bg" style="background-image:url(/skin/images/inner-bg.jpg);">
      <div class="container">
        <div class="header-bg-content">
          <h2 class="title">{dede:field name='typeid' function="GetTopTypename(@me)"/}</h2>
          <div class="desc"><i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： {dede:field name='position'/}</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-container" id="innerpage-wrap">
    <div class="container">
      <div class="row">
        <div class="main col-md-9 inner-left" role="main">
          <div class="about-page-wrap">
            <div class="com-cnt page-content"> {dede:field.content/}
              <div id="pages" class="page"></div>
            </div>
          </div>
        </div>
        {dede:include filename="left.htm"/} </div>
    </div>
  </div>
  <div class="for-bottom-padding"></div>
  {dede:include filename="footer.htm"/} </div>
<script src="/skin/js/layout.js"></script> 
<script src="/skin/js/jquery.appear.js"></script> 
<script src="/skin/js/index.js"></script> 
<script src="/skin/js/main.js"></script> 
<script src="/skin/js/layout.js"></script> 
{dede:include filename="waphead.htm"/}
</body>
</html>