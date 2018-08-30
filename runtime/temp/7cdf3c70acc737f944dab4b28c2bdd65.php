<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:29:"../template/default/index.htm";i:1534475270;s:28:"../template/default\head.htm";i:1534241531;s:30:"../template/default\footer.htm";i:1534472238;s:31:"../template/default\waphead.htm";i:1534474857;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>新乡市残联康复医院</title>
<meta name="description" content="<?php echo $confs['desc']; ?>" />
<meta name="keywords" content="<?php echo $confs['keywords']; ?>" />
<meta name="author" content="order by dzc" />
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
<div id="wrapper"> 
  <header class="header-wrapper">
  <div id="header">
    <div class="container">
      <div class="logo"><a href="/"><img src="/template/default/skin/images/logo.png" alt="<?php echo $confs['sitename']; ?>" class="img-responsive" /></a></div>
      <nav class="menu" id="navigation">
        <ul class="list-unstyled list-inline">
          <li <?php if($topcid == 'index'): ?> class='Lev1 dropdown active' <?php endif; ?>> <a class="menu1 data-toggle" data-hover="dropdown" href="/">网站首页</a></li>
           <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
          <li class="Lev1 <?php if($cate['id'] == $topcid): ?>active<?php endif; ?>"> <a href="<?php if($cate['cate_attr'] == 1): ?><?php echo url('Cate/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 2): ?><?php echo url('Page/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 3): ?><?php echo $cate['link']; endif; ?>" class="menu1 data-toggle" data-hover="dropdown"><?php echo $cate['cate_name']; ?></a>
            <ul class="dropdown-menu multi-level sub-menu2">
              <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sonCate): $mod = ($i % 2 );++$i;?>
              <li class="Lev2"> <a href="<?php if($sonCate['cate_attr'] == 1): ?><?php echo url('Cate/index',array('cid'=>$sonCate['id'])); endif; if($sonCate['cate_attr'] == 2): ?><?php echo url('Page/index',array('cid'=>$sonCate['id'])); endif; if($sonCate['cate_attr'] == 3): ?><?php echo $sonCate['link']; endif; ?>" class="menu2"><i class="fa fa-plus text-danger mrm"></i><?php echo $sonCate['cate_name']; ?></a> </li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          <li class="nav-social"> <a href="" class="btn btn-success btn-14" target="_blank"><i class="fa fa-weibo mrm"></i> 官方微博</a> </li>
        </ul>
      </nav>
      <div class="menu-responsive"><a class="mmenu-btn" href="#mmenu"><i class="fa fa-bars"></i></a></div>
      <div class="clearfix"></div>
    </div>
  </div>
</header>

  <div class="slider-wrapper">
    <div id="slider">
      <div id="banner-sliders" data-ride="carousel" class="carousel slide">
        <div class="carousel-inner"> 
          <?php if(is_array($imgRes) || $imgRes instanceof \think\Collection || $imgRes instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($imgRes) ? array_slice($imgRes,0,1, true) : $imgRes->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <div class="item active"> <a href="<?php echo $vo['flink']; ?>" target="_black"> <img src="__INDEX__/ad/<?php echo $vo['fimg_src']; ?>" alt="" /></a>
            <!-- <div class="carousel-caption">
               <div class="heading animated fadeIn delay-2">[field:title/]</div>
              <div class="sub-heading animated fadeIn delay-3">[field:description/]</div>
              <a href="#1" class="btn btn-more animated fadeIn delay-4 btn-18">查看更多<i class="fa fa-plus"></i></a>  
                
              </div> -->
          </div>
          <?php endforeach; endif; else: echo "" ;endif; if(is_array($imgRes) || $imgRes instanceof \think\Collection || $imgRes instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($imgRes) ? array_slice($imgRes,1,null, true) : $imgRes->slice(1,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <div class="item"> <a href="<?php echo $vo['flink']; ?>" target="_black"> <img src="__INDEX__/ad/<?php echo $vo['fimg_src']; ?>" alt="" /> </a>
            <!-- <div class="carousel-caption">
              <div class="heading animated fadeIn delay-2">[field:title/]</div>
              <div class="sub-heading animated fadeIn delay-3">[field:description/]</div>
              <a href="#[field:global name=autoindex runphp="yes"]@me=@me+1;[/field:global]" class="btn btn-more animated fadeIn delay-4 btn-18">查看更多<i class="fa fa-plus"></i></a> </div>  -->
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?> </div>
        <a href="#banner-sliders" data-slide="prev" class="left carousel-control"><span class="fa fa-arrow-left"></span></a> <a href="#banner-sliders" data-slide="next" class="right carousel-control"><span class="fa fa-arrow-right"></span></a> </div>
    </div>
  </div>
  <div id="main">
    <div id="content">
      <div id="section-features" class="section">
        <div class="container text-center"> {dede:type typeid='21'}
          <div class="section-heading">
            <div class="info">[field:typename/]</div>
            <div class="sub-title mbm">[field:description/]</div>
            <div class="line"></div>
          </div>
          {/dede:type}
          <div class="section-content">
            <div class="list-features">
              <div class="row"> {dede:type typeid='23'}
                <div class="col-md-3 col-sm-6 col-xs-6 committed-item"> <a> <span class="icons med-xray"></span> <span class="title">[field:typename/]</span> <span class="info">[field:description/]</span> </a> </div>
                {/dede:type} 
                {dede:type typeid='24'}
                <div class="col-md-3 col-sm-6 col-xs-6 committed-item"> <a> <span class="icons med-medical2"></span> <span class="title">[field:typename/]</span> <span class="info">[field:description/]</span> </a> </div>
                {/dede:type} 
                {dede:type typeid='25'}
                <div class="col-md-3 col-sm-6 col-xs-6 committed-item"> <a> <span class="icons med-heart2"></span> <span class="title">[field:typename/]</span> <span class="info">[field:description/]</span> </a> </div>
                {/dede:type}
                {dede:type typeid='26'}
                <div class="col-md-3 col-sm-6 col-xs-6 committed-item"> <a> <span class="icons med-vehicle"></span> <span class="title">[field:typename/]</span> <span class="info">[field:description/]</span> </a> </div>
                {/dede:type} </div>
            </div>
          </div>
        </div>
      </div>
      {dede:channelartlist typeid='1,1'}
      <div id="section-what-we-do" class="section section-background">
        <div class="container text-center">
          <div class="section-heading">
            <div class="title white-title"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></div>
            <div class="line"></div>
          </div>
          <div class="section-content">
            <div class="list-departments">
              <div class="row mbxxl0"> {dede:arclist row='8' titlelen='50' orderby='pubdate'}
                <div class="col-md-3 col-sm-3 col-xs-6 iport-item"> <a href="[field:arcurl/]"> <img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/>
                  <p class="iport-title" title="[field:title/]">[field:title/]</p>
                  </a> </div>
                {/dede:arclist} </div>
            </div>
            <a href="{dede:field name='typeurl'/}" class="btn-our-departments btn btn-success btn-outlined btn-18"> 查看更多产品 <i class="fa fa-plus mll"></i> </a> </div>
        </div>
      </div>
      {/dede:channelartlist}
      <div id="section-meet-our-doctor" class="section"> {dede:channelartlist typeid='27,27'}
        <div class="container text-center">
          <div class="section-heading">
            <div class="title"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></div>
            <div class="line"></div>
            <div class="sub-title mbxxl">{dede:field name='description'/}</div>
          </div>
          <div class="row section-content">
            <div id="doctor-carousel" data-ride="carousel" class="carousel slide" data-interval="false">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="man"> {dede:arclist limit='0,4' titlelen='50' orderby='pubdate'}
                    <div class="col-md-3 col-sm-3 col-xs-6 igal-item">
                      <div class="thumb"> <a href="[field:arcurl/]"><img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/></a>
                        <div class="caption">
                          <div class="name"><a href="[field:arcurl/]">[field:title/]</a></div>
                        </div>
                      </div>
                    </div>
                    {/dede:arclist} </div>
                </div>
                <div class="item">
                  <div class="man"> {dede:arclist limit='4,4' titlelen='50' orderby='pubdate'}
                    <div class="col-md-3 col-sm-3 col-xs-6 igal-item">
                      <div class="thumb"> <a href="[field:arcurl/]"><img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/></a>
                        <div class="caption">
                          <div class="name"><a href="[field:arcurl/]">[field:title/]</a></div>
                        </div>
                      </div>
                    </div>
                    {/dede:arclist} </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/dede:channelartlist} <a href="#doctor-carousel" data-slide="prev" class="left carousel-control"><span class="fa fa-arrow-left"></span></a> <a href="#doctor-carousel" data-slide="next" class="right carousel-control"><span class="fa fa-arrow-right"></span></a> </div>
      <div id="section-patients-saying" class="section section-background">
        <div class="container text-center">
          <div class="section-heading"> {dede:type typeid='28'}
            <div class="title">[field:typename/]</div>
            {/dede:type}
            <div class="line"></div>
          </div>
          <div class="section-content">
            <div id="patient-sliders" data-ride="carousel" class="carousel slide" data-interval="false">
              <div class="carousel-inner"> {dede:arclist typeid='28' limit='0,1' titlelen='50' orderby='pubdate'}
                <div class="item active">
                  <div class="avatar"><img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/></div>
                  <div class="name">[field:title/]</div>
                  <div class="pos">[field:shorttitle/]</div>
                  <div class="desc">[field:description/]</div>
                </div>
                {/dede:arclist}
                
                {dede:arclist typeid='28' limit='1,3' titlelen='50' orderby='pubdate'}
                <div class="item">
                  <div class="avatar"><img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/></div>
                  <div class="name">[field:title/]</div>
                  <div class="pos">[field:shorttitle/]</div>
                  <div class="desc">[field:description/]</div>
                </div>
                {/dede:arclist} </div>
            </div>
          </div>
        </div>
        <a href="#patient-sliders" data-slide="prev" class="left carousel-control"><span class="fa fa-arrow-left"></span></a> <a href="#patient-sliders" data-slide="next" class="right carousel-control"><span class="fa fa-arrow-right"></span></a> </div>
      {dede:channelartlist typeid='16,16'}
      <div id="section-latest-news" class="section">
        <div class="container text-center">
          <div class="section-heading">
            <div class="title"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></div>
            <div class="line"></div>
          </div>
          <div class="section-content">
            <div class="row"> {dede:arclist row='4' titlelen='50' orderby='pubdate'}
              <div class="col-md-6 col-sm-12 col-xs-12 inews-item">
                <div class="box">
                  <div class="thumb"> <a href="[field:arcurl/]" class="thumb-link"><img src="[field:picname/]" alt="[field:title/]" class="img-responsive"/></a>
                    <div class="ribbon"> <span>[field:pubdate function="MyDate('d',@me)"/]</span> <span>[field:pubdate function="MyDate('Y-m',@me)"/]</span> </div>
                  </div>
                  <div class="info">
                    <div class="title"><a href="[field:arcurl/]" title="[field:title/]">[field:title/]</a></div>
                    <div class="desc">[field:description function="cn_substr(@me,200)"/]...</div>
                    <div class="author"><a href="[field:typeurl/]"><i class="fa fa-list-alt mrs"></i> [field:typename/]</a></div>
                    <div class="views"><a href="[field:arcurl/]"><i class="fa fa-eye mrs"></i></a></div>
                  </div>
                </div>
              </div>
              {/dede:arclist} </div>
          </div>
        </div>
      </div>
      {/dede:channelartlist}
      <div id="section-about-us" class="section section-background">
        <div class="container text-center">
          <div class="section-content">
            <div class="list-about">
              <div class="row">
                <div data-value="702" class="col-md-3 fact col-sm-3 col-xs-3 fact-item">
                  <div class="number factor">702</div>
                  <div class="name">我们现有设备数</div>
                  <div class="line"></div>
                </div>
                <div data-value="627" class="col-md-3 fact col-sm-3 col-xs-3 fact-item">
                  <div class="number factor">627</div>
                  <div class="name">我们的员工数</div>
                  <div class="line"></div>
                </div>
                <div data-value="64" class="col-md-3 fact col-sm-3 col-xs-3 fact-item">
                  <div class="number factor">64</div>
                  <div class="name">技术专利</div>
                  <div class="line"></div>
                </div>
                <div data-value="3000" class="col-md-3 fact col-sm-3 col-xs-3 fact-item">
                  <div class="number factor">3000</div>
                  <div class="name">十万级洁净车间(平米)</div>
                  <div class="line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
  <div id="section-footer" class="section">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-3 prl col-sm-6 foot-about">
            <div class="logo"> <a href="/"><img src="/template/default/skin/images/logo.png" alt="<?php echo $confs['sitename']; ?>" class="img-responsive" /></a> </div>
            <div class="about-us"> <?php echo $confs['desc']; ?> </div>
            <div class="newsletter foot-social">
              <div class="content">
                <form  class="b-search-form" name="formsearch" action="<?php echo url('Cate/search'); ?>" method="POST">
                  <input type="hidden" name="kwtype" value="0" />
                  <div class="input-group input-newsletter">
                    <input type="text" placeholder="" value="" name="q" class="form-control keyword" />
                    <span class="input-group-addon btn-subscribe">
                    <input type="submit" value="搜索" class="btn" />
                    </span> </div>
                </form>
                <div class="clearfix"></div>
                <div class="mbl"></div>
                <div class="block-info"> <a href="https://weibo.com/" target="_blank" class="icons"><i class="fa fa-weibo"></i></a> <a href="http://t.qq.com" target="_blank" class="icons"><i class="fa fa-tencent-weibo"></i></a> <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $confs['qq']; ?>&asite=qq&menu=yes" target="_blank" class="icons"><i class="fa fa-qq"></i></a> <a href="{dede:global.cfg_shop/}" target="_blank" class="icons"><i class="fa fa-shopping-cart"></i></a> </div>
              </div>
            </div>
          </div>
          
           <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($cateRes) ? array_slice($cateRes,1,1, true) : $cateRes->slice(1,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
          <div class="col-md-3 pll prl col-sm-6 hidden-sm hidden-xs foot-news">
            <h3 class="heading dark-title"> <i class="fa fa-newspaper-o"></i> <a href="<?php if($cate['cate_attr'] == 1): ?><?php echo url('Cate/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 2): ?><?php echo url('Page/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 3): ?><?php echo $cate['link']; endif; ?>"><?php echo $cate['cate_name']; ?></a> </h3>
            <div class="recent-twitter f-news">
              <div class="content">
                <nav class="list-recent-twitter">
                  <ul class="list-unstyled mbn">
                    <?php if(is_array($xinwen) || $xinwen instanceof \think\Collection || $xinwen instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($xinwen) ? array_slice($xinwen,0,4, true) : $xinwen->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li> <a href="<?php echo url('Article/index',array('aid'=>$vo['id'])); ?>"> <strong class="mrs fn-icon"><i class="fa fa-caret-right"></i></strong> <span class="fn-title"><?php echo mb_substr($vo['title'],0,20,'utf-8'); ?> <small><i class="fa fa-calendar" ></i>&nbsp; <?php echo date("Y-m-d",$vo['time']); ?></small></span> </a> </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="col-md-3 prl col-sm-6 hidden-xs foot-contact">
            <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($cateRes) ? array_slice($cateRes,0,1, true) : $cateRes->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
            <h3 class="heading dark-title"> <i class="fa fa-user"></i>  <a href="<?php if($cate['cate_attr'] == 1): ?><?php echo url('Cate/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 2): ?><?php echo url('Page/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 3): ?><?php echo $cate['link']; endif; ?>"><?php echo $cate['cate_name']; ?></a> </h3>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="contact-info">
              <ul class="list-unstyled mbn">
                <li> <i class="fa fa-map-marker fa-fw"></i> 公司地址：河南省新乡市金穗大道与文化路交叉口东30米路北  </li>
                <li> <i class="fa fa-phone fa-fw"></i> 电话：<?php echo $confs['contact']; ?> </li>
                <!-- <li> <i class="fa fa-heart-o fa-fw"></i> 手机：{dede:global.cfg_phone/} </li> -->
                <li> <i class="fa fa-envelope fa-fw"></i> E-mail：<?php echo $confs['email']; ?> </li>
                <!-- <li> <i class="fa fa-home fa-fw"></i> 网址：{dede:global.cfg_basehost/} </li> -->
                <!-- <li> <i class="fa fa-wechat fa-fw"></i> 传真：{dede:global.cfg_fax/} </li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-3 pll col-sm-6 hidden-sm hidden-xs foot-qrcode">
            <h3 class="heading">扫描二维码</h3>
            <div class="content f-qrcode"> <img src="__ADMIN__/uploads/<?php echo $confs['ewm']; ?>"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="section-copyright">
    <div class="container">
      <p class="text-center mbn"> Copyright © 2018-2020 新誉佳教育集团科技有限公司 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $confs['beian']; ?></a> &nbsp;</p>
    </div>
  </div>
</div>
 
</div>
<script src="/template/default/skin/js/jquery.appear.js"></script> 
<script src="/template/default/skin/js/index.js"></script> 
<script src="/template/default/skin/js/main.js"></script> 
<script src="/template/default/skin/js/layout.js"></script> 
<nav id="mmenu" class="noDis">
  <div class="mmDiv">
    <div class="MMhead"> <a href="#mm-0" class="closemenu noblock">x</a> <a href="{dede:global.cfg_weibo/}" target="_blank" class="noblock"><i class="fa fa-weibo"></i></a> <a href="{dede:global.cfg_qqweibo/}" target="_blank" class="noblock"><i class="fa fa-tencent-weibo"></i></a> <!--<a href="" target="_blank" class="noblock">English</a>--> </div>
    <div class="mm-search">
      <form  class="mm-search-form" name="formsearch" action="{dede:global.cfg_cmsurl/}/plus/search.php">
        <input type="hidden" name="kwtype" value="0" />
        <input type="text" autocomplete="off" value="" name="q" class="side-mm-keyword" placeholder="输入关键字..."/>
      </form>
    </div>
    <ul>
      <li class="m-Lev1 m-nav_0"><a href="/">网站首页</a></li>
      {dede:channelartlist typeid='top'}
      <li class="m-Lev1"> <a href="{dede:field name='typeurl'/}" class="m-menu1">{dede:field name='typename'/}</a>
        <ul class="m-submenu">
          {dede:channel type='son' noself='yes'}
          <li class="Lev2"> <a href="[field:typeurl/]" class="m-menu2">[field:typename/]</a> </li>
          {/dede:channel}
        </ul>
      </li>
      {/dede:channelartlist}
    </ul>
  </div>
</nav>
<link type="text/css" rel="stylesheet" href="/template/default/skin/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="/template/default/skin/js/jquery.mmenu.all.min.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function($) {
	var mmenu=$('nav#mmenu').mmenu({
		slidingSubmenus: true,
		classes		: 'mm-white', //mm-fullscreen mm-light
		extensions	: [ "theme-white" ],
		offCanvas	: {
			position: "right", //left, top, right, bottom
			zposition: "front" //back, front,next
			//modal		: true
		},
		searchfield		: false,
		counters		: false,
		//navbars		: {
			//content : [ "prev", "title", "next" ]
		//},
		navbar 		: {
			title : "网站导航"
		},
		header			: {
			add		: true,
			update	: true,
			title	: "网站导航"
		}
	});
	$(".closemenu").click(function() {
		var mmenuAPI = $("#mmenu").data( "mmenu" );
		mmenuAPI.close();
	});
});
</script>
</body>
</html>