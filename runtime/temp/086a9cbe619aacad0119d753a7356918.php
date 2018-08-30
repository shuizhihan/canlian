<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp64\www\canlian\public/../application/admin\view\cate\edit.htm";i:1523086262;s:70:"D:\wamp64\www\canlian\public/../application/admin\view\Common\head.htm";i:1500202164;s:70:"D:\wamp64\www\canlian\public/../application/admin\view\Common\left.htm";i:1523088054;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>管理后台</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet"> 
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/plus/layer/layer.js"></script>
    <script src="__ADMIN__/plus/uploadify/jquery.uploadify.min.js"></script>
    <script src="__ADMIN__/plus/ueditor/ueditor.config.js"></script>
    <script src="__ADMIN__/plus/ueditor/ueditor.all.min.js"></script>
    <script src="__ADMIN__/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
    $(function () {
            $("#uploadify").uploadify({
                //指定swf文件
                'swf': "__ADMIN__/plus/uploadify/uploadify.swf",
                //后台处理的页面
                'uploader': "<?php echo url('cate/upimg'); ?>",
                'progressData' : 'speed',
                //按钮显示的文字
                'buttonText': '上传文件',
                //按钮样式
                'buttonClass': 'btn btn-azure',
                //显示的高度和宽度，默认 height 30；width 120
                //'height': 15,
                //'width': 80,
                //上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
                //在浏览窗口底部的文件类型下拉菜单中显示的文本
                'fileTypeDesc': 'Image Files',
                //设定发送数据的name值
                'fileObjName':'img',
                //允许上传的文件后缀   
                'onUploadSuccess' : function(file,data,response){
                	$("input[name='img']").val(data);
                	var cateimgsrc="__ADMIN__/uploads/cateimg/"+data;
                	var cateimg="<img height='100' src='"+cateimgsrc+"'>";
                	$("#cateimgdiv").show();
                	$("#cateimg").html(cateimg);

                }        
            });
            $("#uploadify-button").prepend("<i style='padding-right:4px;' class='fa fa-upload'></i>");
            $("#uploadify-button").removeAttr('style');
        });

    </script>
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__ADMIN__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Session::get('uname'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Session::get('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li <?php if($con == 'Conf'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-cog"></i>
                            <span class="menu-text">系统设置</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Conf/conflst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置管理                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li <?php if($con == 'Admin'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li <?php if($con == 'Cate'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/add'); ?>">
                                    <span class="menu-text">
                                        栏目添加                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>

                    <li <?php if($con == 'Content'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Content/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Content/addselect'); ?>">
                                    <span class="menu-text">
                                        文章添加                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <!--
                    <li <?php if($con == 'Model'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-maxcdn"></i>
                            <span class="menu-text">模型管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Model/add'); ?>">
                                    <span class="menu-text">
                                        添加模型                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Model/lst'); ?>">
                                    <span class="menu-text">
                                        模型列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    -->
                    <!--
                    <li <?php if($con == 'ModelFields'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-tasks"></i>
                            <span class="menu-text">自定义字段管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('ModelFields/add'); ?>">
                                    <span class="menu-text">
                                        添加字段                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('ModelFields/lst'); ?>">
                                    <span class="menu-text">
                                        字段列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    -->
                    <!--
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">会员管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    -->
                    <!--
                    <li <?php if($con == 'AuthRule' or $con == 'AuthGroup'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-lock"></i>
                            <span class="menu-text">权限配置</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('AuthRule/lst'); ?>">
                                    <span class="menu-text">
                                        规则管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AuthGroup/lst'); ?>">
                                    <span class="menu-text">
                                        用户组管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    -->
                    <li <?php if($con == 'Adpos' or $con == 'Ad'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-video-camera"></i>
                            <span class="menu-text">广告管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Adpos/lst'); ?>">
                                    <span class="menu-text">
                                        广告位管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Ad/lst'); ?>">
                                    <span class="menu-text">
                                        广告管理                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-sitemap"></i>
                            <span class="menu-text">数据库管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Db/bak'); ?>">
                                    <span class="menu-text">
                                        备份数据库                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <!--
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-dashboard "></i>
                            <span class="menu-text">模板管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    -->
                    <!--
                    <li  <?php if($con == 'Note'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bug"></i>
                            <span class="menu-text">采集管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Note/addListRules'); ?>">
                                    <span class="menu-text">
                                        添加采集节点                                </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Note/noteList'); ?>">
                                    <span class="menu-text">
                                        采集节点列表                              </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                            </li> 
                    -->
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('Cate/lst'); ?>">栏目管理</a>
                    </li>
                                        <li class="active">添加栏目</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $cates['id']; ?>">
                <div class="widget-body">
                    <div class="widget-main ">
                        <div class="tabbable">
                            <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                <li class="active">
                                    <a data-toggle="tab" href="#home11">
                                        基本信息
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#profile11">
                                        SEO信息
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#profile12">
                                        栏目内容
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat">
                                <div id="home11" class="tab-pane active">
                                   <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">所属模型</label>
                                        <div class="col-sm-6">
                                            <select name="model_id">
                                                <?php if(is_array($modelRes) || $modelRes instanceof \think\Collection || $modelRes instanceof \think\Paginator): $i = 0; $__LIST__ = $modelRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$model): $mod = ($i % 2 );++$i;?>
                                                <option <?php if($model['id'] == $cates['model_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $model['id']; ?>"><?php echo $model['model_name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                                        <div class="col-sm-6">
                                            <select name="pid">
                                                <option value="0">顶级栏目</option>
                                                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                <option <?php if($cates['pid'] == $cate['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-', $cate['level']*8);?><?php echo $cate['cate_name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                 

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" value="<?php echo $cates['cate_name']; ?>"  placeholder="" name="cate_name" required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">跳转到</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" <?php if($cates['id'] == 0): ?> value="0" <?php else: ?> value="<?php echo $cates['id']; ?>" <?php endif; ?>  placeholder="" name="id" required="" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">隐藏栏目</label>
                                        <div class="col-sm-6">
                                            <label>
                                                <input value="0" name="status" <?php if($cates['status'] != 1): ?> checked="checked" <?php endif; ?> class="checkbox-slider colored-blue" type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">否是设为底部导航</label>
                                        <div class="col-sm-6">

                                             <!-- 单选按钮 -->
                                            <div class="radio" style="float:left; padding-left:10px;">
                                                <label>
                                                    <input <?php if($cates['bottom_nav'] == 1): ?> checked="checked" <?php endif; ?> name="bottom_nav" value="1" class="colored-blue" type="radio">
                                                    <span class="text">是</span>
                                                </label>
                                            </div>
                                             <!-- 单选按钮 -->
                                            <div class="radio" style="float:left; padding-left:10px;">
                                                <label>
                                                    <input <?php if($cates['bottom_nav'] == 0): ?> checked="checked" <?php endif; ?> name="bottom_nav" value="0" class="colored-blue" type="radio">
                                                    <span class="text">否</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目图片</label>
                                        <div class="col-sm-6">
                                            <label>
                                                <span id="uploadify"></span>
                                                <span class="text"></span>
                                                <input name="img" value="<?php echo $cates['img']; ?>" type="hidden">
                                            </label>
                                            <label>
                                                <div id="cancel" style="float:left;" class="uploadify-button btn btn-azure"><span class="uploadify-button-text"><i style="padding-right:4px;" class="fa fa-rotate-left"></i>撤销上传</span></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group" id="cateimgdiv" <?php if($cates['img'] == ''): ?>style="display:none;"<?php endif; ?>>
                                        <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                        <div class="col-sm-6">
                                            <label id="cateimg">
                                            <?php if($cates['img'] != ''): ?><img src="__ADMIN__/uploads/cateimg/<?php echo $cates['img']; ?>" height="100"><?php endif; ?>
                                            </label>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目属性</label>
                                        <div class="col-sm-6">
                                                <div class="radio" style="float:left; padding-left:10px;">
                                                    <label>
                                                        <input name="cate_attr" value="1" <?php if($cates['cate_attr'] == 1): ?> checked="checked" <?php endif; ?> type="radio">
                                                        <span class="text">列表页栏目（可以发布文章）</span>
                                                    </label>
                                                </div>
                                                <div class="radio" style="float:left; padding-left:10px;">
                                                    <label>
                                                        <input name="cate_attr" value="2" <?php if($cates['cate_attr'] == 2): ?> checked="checked" <?php endif; ?>  class="inverted"  type="radio">
                                                        <span class="text">封面频道栏目</span>
                                                    </label>
                                                </div>
                                                <div class="radio" style="float:left; padding-left:10px;">
                                                    <label>
                                                        <input name="cate_attr" value="3" <?php if($cates['cate_attr'] == 3): ?> checked="checked" <?php endif; ?>  class="inverted"  type="radio">
                                                        <span class="text">外链栏目</span>
                                                    </label>
                                                </div>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">列表页模板</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['list_tmp']; ?>" placeholder="" name="list_tmp" required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">频道页模板</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['index_tmp']; ?>" placeholder="" name="index_tmp" required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">内容页模板</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['article_tmp']; ?>" placeholder="" name="article_tmp" required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">外链地址</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['link']; ?>" placeholder="" name="link"  type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 请以“http://”开头</p>
                                    </div>
                               
                            </div>
                                <div id="profile11" class="tab-pane">
                                    
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目标题</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['title']; ?>"   name="title"  type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  value="<?php echo $cates['keywords']; ?>"  name="keywords"  type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                        <div class="col-sm-6">
                                            <textarea name="desc" class="form-control"><?php echo $cates['desc']; ?></textarea>
                                        </div>
                                    </div>


                                </div>

                                <div id="profile12" class="tab-pane">
                                       <div class="col-lg-12 col-sm-12 col-xs-12">
                                        <div class="widget flat radius-bordered">
                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <textarea id="content" name="content"><?php echo $cates['content']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">保存信息</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例

    UE.getEditor('content',{toolbars:[
        [
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment'
        ]

        ],initialFrameWidth:1500,initialFrameHeight:400});
    
    $("#cancel").click(function(){
        var cateid=<?php echo $cates['id']; ?>;
        var imgurl=$("input[name='img']").val();
        if(!imgurl){
            layer.msg('请先上传图片！', {icon: 2});
            return false;
        }
        // if(!confirm('确定要撤销图片吗？')){
        //     return false;
        // }
        layer.confirm('确定要撤销图片吗？', {icon: 3, title:'提示'}, function(index){
          //do something
        $("#cateimgdiv").hide();
        $("input[name='img']").val('');
        $.ajax({
            type:"post",
            dataType:"json",
            data:{imgurl:imgurl,cateid:cateid},
            url:"<?php echo url('Cate/delimg'); ?>",
            success:function(data){
                if(data==1){
                    layer.msg('撤销成功！', {icon: 1});
                }else{
                    layer.msg('撤销失败！', {icon: 2});
                }
            }
        });
          layer.close(index);
        });
        
    });

    function changetmp(){
       var pcateid=$("select[name=pid]").find("option:selected").val();
        if(pcateid != 0){
            $.ajax({
                type:"post",
                dataType:"json",
                data:{cateid:pcateid},
                url:"<?php echo url('Cate/ajaxcateinfo'); ?>",
                success:function(data){
                    $("input[name=list_tmp]").val(data.list_tmp);
                    $("input[name=index_tmp]").val(data.index_tmp);
                    $("input[name=article_tmp]").val(data.article_tmp);
                    $("select[name=model_id]").val(data.model_id);
                }
            });
        } 
    }

    $("select[name=pid]").change(function(){
        changetmp();
    });
</script>


</body></html>