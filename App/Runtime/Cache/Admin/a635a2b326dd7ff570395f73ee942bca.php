<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo ($current['title']); ?>-<?php echo (C("sitename")); ?></title>

    <meta name="keywords" content="<?php echo (C("keywords")); ?>" />
    <meta name="description" content="<?php echo (C("description")); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<<<<<<< HEAD
    <link rel="stylesheet" href="/cloud/Public/Admin/css/box.css" />
    <link rel="stylesheet" href="/cloud/Public/Admin/css/style.css" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/cloud/Public/Admin/css/bootstrap.css" />
    <link rel="stylesheet" href="/cloud/Public/Admin/css/font-awesome.css" />
    <link rel="stylesheet" href="/cloud/Public/Admin/css/jquery-ui.css" />
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/cloud/Public/Admin/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/cloud/Public/Admin/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="icon" href="https://static.jianshukeji.com/highcharts/images/favicon.ico">

    <!--ads add and show styles-->
    <link rel="stylesheet" href="/cloud/Public/Admin/css/newLayout.css" />
    <link rel="stylesheet" href="/cloud/Public/Admin/css/newLayout1.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/cloud/Public/Admin/css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/cloud/Public/Admin/css/ace-ie.css"/>
=======
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/box.css" />
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/style.css" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/bootstrap.css" />

    <link rel="stylesheet" href="/Cloud/Public/Admin/css/font-awesome.css" />
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/jquery-ui.css" />
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="icon" href="https://static.jianshukeji.com/highcharts/images/favicon.ico">

    <!--ads add and show styles-->
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/newLayout.css" />
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/newLayout1.css" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/Cloud/Public/Admin/css/ace-ie.css"/>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8

    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
<<<<<<< HEAD
    <script src="/cloud/Public/Admin/js/ace-extra.js"></script>
=======
    <script src="/Cloud/Public/Admin/js/ace-extra.js"></script>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
<<<<<<< HEAD
    <script src="/cloud/Public/Admin/js/html5shiv.js"></script>
    <script src="/cloud/Public/Admin/js/respond.js"></script>
    <![endif]-->
</head>
<link rel="stylesheet" href="/cloud/Public/Admin/css/module.css" />

<body class="no-skin">
	<!-- #section:basics/navbar.layout -->
=======
    <script src="/Cloud/Public/Admin/js/html5shiv.js"></script>
    <script src="/Cloud/Public/Admin/js/respond.js"></script>
    <![endif]-->
</head>
<link rel="stylesheet" href="/Cloud/Public/Admin/css/module.css" />

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
<div id="navbar" class="navbar navbar-default">
  <script type="text/javascript">
    try {
      ace.settings.check('navbar', 'fixed')
    } catch (e) {}
  </script>

  <div class="navbar-container" id="navbar-container">
    <!-- #section:basics/sidebar.mobile.toggle -->
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

    <!-- /section:basics/sidebar.mobile.toggle -->
    <div class="navbar-header pull-left">
      <!-- #section:basics/navbar.layout.brand -->
      <a href="<?php echo U('index/index');?>" class="navbar-brand">
        <small>
                        <i class="fa fa-home"></i>
                        <?php echo (C("sitename")); ?>
                    </small>
      </a>

      <!-- /section:basics/navbar.layout.brand -->

      <!-- #section:basics/navbar.toggle -->

      <!-- /section:basics/navbar.toggle -->
    </div>

    <!-- #section:basics/navbar.dropdown -->
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        <!-- #section:basics/navbar.user_menu -->
        <li class="red">
          <a href="<?php echo U('cache/clear');?>" title="清除缓存" target="_self">
            <i class="ace-icon fa glyphicon-trash"></i>
          </a>
        </li>
        <li class="red">
          <a href="/" title="前台首页" target="_blank">
            <i class="ace-icon fa fa-home"></i>
          </a>
        </li>
        <li class="light-blue">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
<<<<<<< HEAD
                            <img class="nav-user-photo" src="<?php if( $user["head"] == '' ): ?>/cloud/Public/Admin/avatars/avatar2.png
=======
                            <img class="nav-user-photo" src="<?php if( $user["head"] == '' ): ?>/Cloud/Public/Admin/avatars/avatar2.png
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
                            <?php else: ?>
                            <?php echo ($user["head"]); endif; ?>" alt="<?php echo ($user["user"]); ?>" />
                            <span class="user-info">
                                <small><?php echo ($user["role"]); ?></small>
                                <?php echo ($user["user"]); ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li>
              <a href="<?php echo U('Setting/Setting');?>">
                <i class="ace-icon fa fa-cog"></i> 设置
              </a>
            </li>

            <li>
              <a href="<?php echo U('Personal/profile');?>">
                <i class="ace-icon fa fa-user"></i> 个人资料
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="<?php echo U('logout/index');?>">
                <i class="ace-icon fa fa-power-off"></i> 退出
              </a>
            </li>
          </ul>
        </li>

        <!-- /section:basics/navbar.user_menu -->
      </ul>
    </div>

    <!-- /section:basics/navbar.dropdown -->
  </div>
  <!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->

<<<<<<< HEAD
	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.check('main-container', 'fixed')
			} catch(e) {}
		</script>

		    <!-- #section:basics/sidebar -->
=======
    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>

            <!-- #section:basics/sidebar -->
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li
                <?php if(($v['id'] == $current['id']) OR ($v['id'] == $current['pid']) OR ($v['id'] == $current['ppid'])): ?>class="active
                    <?php if($current['pid'] != '0'): ?>open<?php endif; ?>
                    "<?php endif; ?>
                >
                <a href="<?php if(empty($v["name"])): ?>#
                <?php else: ?>
                <?php echo U($v['name']); endif; ?>"
                <?php if(!empty($v["children"])): ?>class="dropdown-toggle"<?php endif; ?>
                >
                <i class="<?php echo ($v["icon"]); ?>"></i>
                <span class="menu-text">
                                    <?php echo ($v["title"]); ?>
                                </span>
                <?php if(!empty($v["children"])): ?><b class="arrow fa fa-angle-down"></b><?php endif; ?>
                </a>

                <b class="arrow"></b>
                <?php if(!empty($v["children"])): ?><ul class="submenu">
                        <?php if(is_array($v["children"])): $i = 0; $__LIST__ = $v["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li
                            <?php if(($vv['id'] == $current['id']) OR ($vv['id'] == $current['pid'])): ?>class="active
                                <?php if($current['ppid'] != '0'): ?>open<?php endif; ?>
                                "<?php endif; ?>
                            >
                            <a href="<?php if(empty($vv["children"])): echo U($vv['name']);?>
                            <?php else: ?>
                            #<?php endif; ?>"
                            <?php if(!empty($vv["children"])): ?>class="dropdown-toggle"<?php endif; ?>
                            >
                            <i class="<?php echo ($vv["icon"]); ?>"></i>
                            <?php echo ($vv["title"]); ?>
                            <?php if(!empty($vv["children"])): ?><b class="arrow fa fa-angle-down"></b><?php endif; ?>
                            </a>

                            <b class="arrow"></b>
                            <?php if(!empty($vv["children"])): ?><ul class="submenu">
                                    <?php if(is_array($vv["children"])): $i = 0; $__LIST__ = $vv["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?><li
                                        <?php if($vvv['id'] == $current['id']): ?>class="active"<?php endif; ?>
                                        >
                                        <a href="<?php echo U($vvv['name']);?>">
                                            <i class="<?php echo ($vvv["icon"]); ?>"></i>
                                            <?php echo ($vvv["title"]); ?>
                                        </a>
                                        <b class="arrow"></b>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul><?php endif; ?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>

    <!-- /section:basics/sidebar -->
<<<<<<< HEAD
		<div class="main-content">
			<div class="main-content-inner">
				<!-- #section:basics/content.breadcrumbs -->
				    <div class="breadcrumbs" id="breadcrumbs">
=======
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                    <div class="breadcrumbs" id="breadcrumbs">
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?php echo U('index/index');?>">首页</a>
            </li>
            <?php if(isset($current['ptitle'])): ?><li>
                    <a href="#"><?php echo ($current['ptitle']); ?></a>
                </li><?php endif; ?>
            <li class="active"><?php echo ($current['title']); ?></li>
        </ul><!-- /.breadcrumb -->
    </div>

<<<<<<< HEAD
				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					    <!-- #section:settings.box -->
=======
                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                        <!-- #section:settings.box -->
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
    <!--<?php if($current["tips"] != ''): ?><div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <!--i class="ace-icon fa fa-check green"></i-->
            <!--<?php echo ($current["tips"]); ?>
        </div><?php endif; ?>-->
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <!-- #section:settings.skins -->
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl"> 切换至左边</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        切换宽窄度
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                    <label class="lbl" for="ace-settings-hover"> 子菜单收起</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                    <label class="lbl" for="ace-settings-compact"> 侧边栏紧凑</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                    <label class="lbl" for="ace-settings-highlight"> 当前位置</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->
<<<<<<< HEAD
					<div class="row" style="overflow:hidden">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<div class="row" style="overflow:hidden">
								<div class="data-table tableScroll">
									<table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
										<thead>
											<tr>
												<th>ID(未提交)</th>
												<th>审核状态</th>
												<th>发布时间</th>
												<th>结束时间</th>
												<th>公司名称</th>
												<th>广告类型</th>
												<th>广告标题</th>
												<!--轮播还是顶部滚动-->
												<th>播放位置</th>
												<th>详情页</th>
												<!--<th>轮播次数</th>-->
												<th>店铺介绍</th>
												<th>电话</th>
												<th>更多详情</td>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 0): if($v["is_delete"] == 0): ?><tr>
															<td><?php echo ($v["adnum"]); ?></td>
															<td>
																<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">编辑</a>
																<a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>
																<!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->

															</td>
															<td><?php echo ($v["starttime"]); ?></td>
															<td><?php echo ($v["endtime"]); ?></td>
															<td><?php echo ($v["adname"]); ?></td>
															<!--<td><?php echo ($v["adtype"]); ?></td>-->
															<td>
																<!--console.log(<?php echo ($v["adtype"]); ?>);-->
																<!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
=======
                    <div class="row" style="overflow:hidden">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="row" style="overflow:hidden">
                                <div class="data-table tableScroll">
                                    <table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
                                        <thead>
                                            <tr>
                                                <th>ID(未提交)</th>
                                                <th>审核状态</th>
                                                <th>发布时间</th>
                                                <th>结束时间</th>
                                                <th>公司名称</th>
                                                <th>广告类型</th>
                                                <th>广告标题</th>
                                                <!--轮播还是顶部滚动-->
                                                <th>播放位置</th>
                                                <th>详情页</th>
                                                <!--<th>轮播次数</th>-->
                                                <th>店铺介绍</th>
                                                <th>电话</th>
                                                <th>更多详情</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 0): if($v["is_delete"] == 0): ?><tr>
                                                            <td><?php echo ($v["adnum"]); ?></td>
                                                            <td>
                                                                <a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">编辑</a>
                                                                <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>
                                                                <!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->

                                                            </td>
                                                            <td><?php echo ($v["starttime"]); ?></td>
                                                            <td><?php echo ($v["endtime"]); ?></td>
                                                            <td><?php echo ($v["adname"]); ?></td>
                                                            <!--<td><?php echo ($v["adtype"]); ?></td>-->
                                                            <td>
                                                                <!--console.log(<?php echo ($v["adtype"]); ?>);-->
                                                                <!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
                                                            <?php case "2": ?>养生<?php break;?>
                                                            <?php case "3": ?>交通<?php break;?>
                                                            <?php case "4": ?>购物<?php break;?>
                                                            <?php case "5": ?>健身<?php break;?>
                                                            <?php case "6": ?>银行<?php break;?>
                                                            <?php default: ?>餐饮<?php endswitch;?>-->
<<<<<<< HEAD
																<?php if($v["adtype"] == 1): ?>娱乐
																	<?php elseif($v["adtype"] == 2): ?>养生
																	<?php elseif($v["adtype"] == 3): ?>交通
																	<?php elseif($v["adtype"] == 4): ?>购物
																	<?php elseif($v["adtype"] == 5): ?>健身
																	<?php elseif($v["adtype"] == 6): ?>银行
																	<?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
															</td>
															<td><?php echo ($v["adtitle"]); ?></td>
															<td>
																<?php if($v["vehicle"] == 0): ?>轮播
																	<?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
															</td>
															<td>
																<?php if($v["detail"] == 0): ?>有
																	<?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
															</td>
															<!--<td><?php echo ($v["adshowcount"]); ?></td>-->
															<td><?php echo ($v["introduction"]); ?></td>
															<td><?php echo ($v["phone"]); ?></td>
															<td class="checkMoreDetail">点我查看
																<div class="moreDetailShow">
																	<p>广告编号:<?php echo ($v["adnum"]); ?></p>
																	<p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
																	<p>广告内容:<?php echo ($v["adtext"]); ?></p>
																	<p>推广区域:
																		<?php if(is_array($v["ad_hotel"])): $i = 0; $__LIST__ = $v["ad_hotel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i; echo ($p["h_name"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
																	</p>
																	<p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
																	<p>店铺地址:<?php echo ($v["address"]); ?> </p>
																	<p>最新活动:<?php echo ($v["activity"]); ?></p>
																	<p>广告备注:<?php echo ($v["adremark"]); ?></p>

																</div>
															</td>
														</tr><?php endif; endif; endforeach; endif; ?>
										</tbody>
									</table>
									
									<table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
										<thead>
											<tr>
												<th>ID(未审核)</th>
												<th>审核状态</th>
												<th>发布时间</th>
												<th>结束时间</th>
												<th>公司名称</th>
												<th>广告类型</th>
												<th>广告标题</th>
												<!--轮播还是顶部滚动-->
												<th>播放位置</th>
												<th>详情页</th>
												<!--<th>轮播次数</th>-->
												<th>店铺介绍</th>
												<th>电话</th>
												<th>更多详情</td>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 1): if($v["is_delete"] == 0): if($v["adverify"] == 0): ?><tr>
															<td><?php echo ($v["adnum"]); ?></td>
															<td>未审核
																<!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->

															</td>
															<td><?php echo ($v["starttime"]); ?></td>
															<td><?php echo ($v["endtime"]); ?></td>
															<td><?php echo ($v["adname"]); ?></td>
															<!--<td><?php echo ($v["adtype"]); ?></td>-->
															<td>
																<!--console.log(<?php echo ($v["adtype"]); ?>);-->
																<!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
=======
                                                                <?php if($v["adtype"] == 1): ?>娱乐
                                                                    <?php elseif($v["adtype"] == 2): ?>养生
                                                                    <?php elseif($v["adtype"] == 3): ?>交通
                                                                    <?php elseif($v["adtype"] == 4): ?>购物
                                                                    <?php elseif($v["adtype"] == 5): ?>健身
                                                                    <?php elseif($v["adtype"] == 6): ?>银行
                                                                    <?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
                                                            </td>
                                                            <td><?php echo ($v["adtitle"]); ?></td>
                                                            <td>
                                                                <?php if($v["vehicle"] == 0): ?>无
                                                                    <?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($v["detail"] == 0): ?>有
                                                                    <?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
                                                            </td>
                                                            <!--<td><?php echo ($v["adshowcount"]); ?></td>-->
                                                            <td><?php echo ($v["introduction"]); ?></td>
                                                            <td><?php echo ($v["phone"]); ?></td>
                                                            <td class="checkMoreDetail">点我查看
                                                                <div class="moreDetailShow">
                                                                    <p>广告编号:<?php echo ($v["adnum"]); ?></p>
                                                                    <p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
                                                                    <p>广告内容:<?php echo ($v["adtext"]); ?></p>
                                                                    <p>推广区域:
                                                                        <?php if(is_array($v["ad_hotel"])): $i = 0; $__LIST__ = $v["ad_hotel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i; echo ($p["h_name"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </p>
                                                                    <p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
                                                                    <p>店铺地址:<?php echo ($v["address"]); ?> </p>
                                                                    <p>最新活动:<?php echo ($v["activity"]); ?></p>
                                                                    <p>广告备注:<?php echo ($v["adremark"]); ?></p>

                                                                </div>
                                                            </td>
                                                        </tr><?php endif; endif; endforeach; endif; ?>
                                        </tbody>
                                    </table>

                                    <table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
                                        <thead>
                                            <tr>
                                                <th>ID(未审核)</th>
                                                <th>审核状态</th>
                                                <th>发布时间</th>
                                                <th>结束时间</th>
                                                <th>公司名称</th>
                                                <th>广告类型</th>
                                                <th>广告标题</th>
                                                <!--轮播还是顶部滚动-->
                                                <th>播放位置</th>
                                                <th>详情页</th>
                                                <!--<th>轮播次数</th>-->
                                                <th>店铺介绍</th>
                                                <th>电话</th>
                                                <th>更多详情</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 1): if($v["is_delete"] == 0): if($v["adverify"] == 0): ?><tr>
                                                                <td><?php echo ($v["adnum"]); ?></td>
                                                                <td>未审核
                                                                    <!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->

                                                                </td>
                                                                <td><?php echo ($v["starttime"]); ?></td>
                                                                <td><?php echo ($v["endtime"]); ?></td>
                                                                <td><?php echo ($v["adname"]); ?></td>
                                                                <!--<td><?php echo ($v["adtype"]); ?></td>-->
                                                                <td>
                                                                    <!--console.log(<?php echo ($v["adtype"]); ?>);-->
                                                                    <!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
                                                            <?php case "2": ?>养生<?php break;?>
                                                            <?php case "3": ?>交通<?php break;?>
                                                            <?php case "4": ?>购物<?php break;?>
                                                            <?php case "5": ?>健身<?php break;?>
                                                            <?php case "6": ?>银行<?php break;?>
                                                            <?php default: ?>餐饮<?php endswitch;?>-->
<<<<<<< HEAD
																<?php if($v["adtype"] == 1): ?>娱乐
																	<?php elseif($v["adtype"] == 2): ?>养生
																	<?php elseif($v["adtype"] == 3): ?>交通
																	<?php elseif($v["adtype"] == 4): ?>购物
																	<?php elseif($v["adtype"] == 5): ?>健身
																	<?php elseif($v["adtype"] == 6): ?>银行
																	<?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
															</td>
															<td><?php echo ($v["adtitle"]); ?></td>
															<td>
																<?php if($v["vehicle"] == 0): ?>轮播
																	<?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
															</td>
															<td>
																<?php if($v["detail"] == 0): ?>有
																	<?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
															</td>
															<!--<td><?php echo ($v["adshowcount"]); ?></td>-->
															<td><?php echo ($v["introduction"]); ?></td>
															<td><?php echo ($v["phone"]); ?></td>
															<td class="checkMoreDetail">点我查看
																<div class="moreDetailShow">
																	<p>广告编号:<?php echo ($v["adnum"]); ?></p>
																	<p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
																	<p>广告内容:<?php echo ($v["adtext"]); ?></p>
																	<p>推广区域:</p>
																	<p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
																	<p>店铺地址:<?php echo ($v["address"]); ?> </p>
																	<p>最新活动:<?php echo ($v["activity"]); ?></p>
																	<p>广告备注:<?php echo ($v["adremark"]); ?></p>

																</div>
															</td>
														</tr><?php endif; endif; endif; endforeach; endif; ?>
										</tbody>
									</table>

									<table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
										<thead>
											<tr>
												<th>ID(已审核)</th>
												<th>审核状态</th>
												<th>发布时间</th>
												<th>结束时间</th>
												<th>公司名称</th>
												<th>广告类型</th>
												<th>广告标题</th>
												<!--轮播还是顶部滚动-->
												<th>播放位置</th>
												<th>详情页</th>
												<!--<th>轮播次数</th>-->
												<th>店铺介绍</th>
												<th>电话</th>
												<th>更多详情</td>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 1): if($v["is_delete"] == 0): if($v["adverify"] != 0): ?><tr>
															<td><?php echo ($v["adnum"]); ?></td>
															<td>
																<!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->
																<?php if($v["adverify"] == 1): ?><p style="color: darkgreen;">已通过</p>
																	<?php elseif($v["adverify"] == 2): ?>
																	<p style="color: red;">未通过</p><?php endif; ?>
															</td>
															<td><?php echo ($v["starttime"]); ?></td>
															<td><?php echo ($v["endtime"]); ?></td>
															<td><?php echo ($v["adname"]); ?></td>
															<!--<td><?php echo ($v["adtype"]); ?></td>-->
															<td>
																<!--console.log(<?php echo ($v["adtype"]); ?>);-->
																<!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
=======
                                                                    <?php if($v["adtype"] == 1): ?>娱乐
                                                                        <?php elseif($v["adtype"] == 2): ?>养生
                                                                        <?php elseif($v["adtype"] == 3): ?>交通
                                                                        <?php elseif($v["adtype"] == 4): ?>购物
                                                                        <?php elseif($v["adtype"] == 5): ?>健身
                                                                        <?php elseif($v["adtype"] == 6): ?>银行
                                                                        <?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
                                                                </td>
                                                                <td><?php echo ($v["adtitle"]); ?></td>
                                                                <td>
                                                                    <?php if($v["vehicle"] == 0): ?>无
                                                                        <?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <?php if($v["detail"] == 0): ?>有
                                                                        <?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
                                                                </td>
                                                                <!--<td><?php echo ($v["adshowcount"]); ?></td>-->
                                                                <td><?php echo ($v["introduction"]); ?></td>
                                                                <td><?php echo ($v["phone"]); ?></td>
                                                                <td class="checkMoreDetail">点我查看
                                                                    <div class="moreDetailShow">
                                                                        <p>广告编号:<?php echo ($v["adnum"]); ?></p>
                                                                        <p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
                                                                        <p>广告内容:<?php echo ($v["adtext"]); ?></p>
                                                                        <p>推广区域:
                                                                            <?php if(is_array($v["ad_hotel"])): $i = 0; $__LIST__ = $v["ad_hotel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i; echo ($p["h_name"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                                                        </p>
                                                                        <p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
                                                                        <p>店铺地址:<?php echo ($v["address"]); ?> </p>
                                                                        <p>最新活动:<?php echo ($v["activity"]); ?></p>
                                                                        <p>广告备注:<?php echo ($v["adremark"]); ?></p>

                                                                    </div>
                                                                </td>
                                                            </tr><?php endif; endif; endif; endforeach; endif; ?>
                                        </tbody>
                                    </table>

                                    <table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
                                        <thead>
                                            <tr>
                                                <th>ID(已审核)</th>
                                                <th>审核状态</th>
                                                <th>发布时间</th>
                                                <th>结束时间</th>
                                                <th>公司名称</th>
                                                <th>广告类型</th>
                                                <th>广告标题</th>
                                                <!--轮播还是顶部滚动-->
                                                <th>播放位置</th>
                                                <th>详情页</th>
                                                <!--<th>轮播次数</th>-->
                                                <th>店铺介绍</th>
                                                <th>电话</th>
                                                <th>更多详情</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_submit"] == 1): if($v["is_delete"] == 0): if($v["adverify"] != 0): ?><tr>
                                                                <td><?php echo ($v["adnum"]); ?></td>
                                                                <td>
                                                                    <!--<a href="<?php echo U('adsedit');?>?adnum=<?php echo ($v["adnum"]); ?>">修改</a> |
                                                        <a href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>-->
                                                                    <?php if($v["adverify"] == 1): ?><p style="color: darkgreen;">已通过</p>
                                                                        <?php elseif($v["adverify"] == 2): ?>
                                                                        <p style="color: red;">未通过</p><?php endif; ?>
                                                                </td>
                                                                <td><?php echo ($v["starttime"]); ?></td>
                                                                <td><?php echo ($v["endtime"]); ?></td>
                                                                <td><?php echo ($v["adname"]); ?></td>
                                                                <!--<td><?php echo ($v["adtype"]); ?></td>-->
                                                                <td>
                                                                    <!--console.log(<?php echo ($v["adtype"]); ?>);-->
                                                                    <!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
                                                            <?php case "2": ?>养生<?php break;?>
                                                            <?php case "3": ?>交通<?php break;?>
                                                            <?php case "4": ?>购物<?php break;?>
                                                            <?php case "5": ?>健身<?php break;?>
                                                            <?php case "6": ?>银行<?php break;?>
                                                            <?php default: ?>餐饮<?php endswitch;?>-->
<<<<<<< HEAD
																<?php if($v["adtype"] == 1): ?>娱乐
																	<?php elseif($v["adtype"] == 2): ?>养生
																	<?php elseif($v["adtype"] == 3): ?>交通
																	<?php elseif($v["adtype"] == 4): ?>购物
																	<?php elseif($v["adtype"] == 5): ?>健身
																	<?php elseif($v["adtype"] == 6): ?>银行
																	<?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
															</td>
															<td><?php echo ($v["adtitle"]); ?></td>
															<td>
																<?php if($v["vehicle"] == 0): ?>轮播
																	<?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
															</td>
															<td>
																<?php if($v["detail"] == 0): ?>有
																	<?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
															</td>
															<!--<td><?php echo ($v["adshowcount"]); ?></td>-->
															<td><?php echo ($v["introduction"]); ?></td>
															<td><?php echo ($v["phone"]); ?></td>
															<td class="checkMoreDetail">点我查看
																<div class="moreDetailShow">
																	<p>广告编号:<?php echo ($v["adnum"]); ?></p>
																	<p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
																	<p>广告内容:<?php echo ($v["adtext"]); ?></p>
																	<p>推广区域:</p>
																	<p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
																	<p>店铺地址:<?php echo ($v["address"]); ?> </p>
																	<p>最新活动:<?php echo ($v["activity"]); ?></p>
																	<p>广告备注:<?php echo ($v["adremark"]); ?></p>

																</div>
															</td>
														</tr><?php endif; endif; endif; endforeach; endif; ?>
										</tbody>
									</table>

									<table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
										<thead>
											<tr>
												<th>ID(已过期)</th>
												<th>审核状态</th>
												<th>发布时间</th>
												<th>结束时间</th>
												<th>公司名称</th>
												<th>广告类型</th>
												<th>广告标题</th>
												<!--轮播还是顶部滚动-->
												<th>播放位置</th>
												<th>详情页</th>
												<!--<th>轮播次数</th>-->
												<th>店铺介绍</th>
												<th>电话</th>
												<th>更多详情</td>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_delete"] == 1): ?><tr>
														<td><?php echo ($v["adnum"]); ?></td>
														<td>
															<button class="activation" name="activation" onclick="show_Div()">
																激活
															</button>
															<span> </span>
															<a id="del_ads" href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>
															<div id="actbutton" class="actbuttondiv">
																<div id="mydiv" class="actcontent">
																	<span>开始时间</span>
																	<input type="date" id="stime" name="starttime" />
																	<span>结束时间</span>
																	<input type="date" id="etime" name="endtime" />
																	<br />
																	<div class="closebutton">
																		<a href="" onclick="submit_Div()">确定</a>
																		<span>　</span>
																		<a onclick="close_Div()">关闭</a>
																	</div>
																</div>

															</div>
														</td>
														<td><?php echo ($v["starttime"]); ?></td>
														<td><?php echo ($v["endtime"]); ?></td>
														<td><?php echo ($v["adname"]); ?></td>
														<!--<td><?php echo ($v["adtype"]); ?></td>-->
														<td>
															<!--console.log(<?php echo ($v["adtype"]); ?>);-->
															<!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
=======
                                                                    <?php if($v["adtype"] == 1): ?>娱乐
                                                                        <?php elseif($v["adtype"] == 2): ?>养生
                                                                        <?php elseif($v["adtype"] == 3): ?>交通
                                                                        <?php elseif($v["adtype"] == 4): ?>购物
                                                                        <?php elseif($v["adtype"] == 5): ?>健身
                                                                        <?php elseif($v["adtype"] == 6): ?>银行
                                                                        <?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
                                                                </td>
                                                                <td><?php echo ($v["adtitle"]); ?></td>
                                                                <td>
                                                                    <?php if($v["vehicle"] == 0): ?>无
                                                                        <?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <?php if($v["detail"] == 0): ?>有
                                                                        <?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
                                                                </td>
                                                                <!--<td><?php echo ($v["adshowcount"]); ?></td>-->
                                                                <td><?php echo ($v["introduction"]); ?></td>
                                                                <td><?php echo ($v["phone"]); ?></td>
                                                                <td class="checkMoreDetail">点我查看
                                                                    <div class="moreDetailShow">
                                                                        <p>广告编号:<?php echo ($v["adnum"]); ?></p>
                                                                        <p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
                                                                        <p>广告内容:<?php echo ($v["adtext"]); ?></p>
                                                                        <p>推广区域:</p>
                                                                        <p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
                                                                        <p>店铺地址:<?php echo ($v["address"]); ?> </p>
                                                                        <p>最新活动:<?php echo ($v["activity"]); ?></p>
                                                                        <p>广告备注:<?php echo ($v["adremark"]); ?></p>

                                                                    </div>
                                                                </td>
                                                            </tr><?php endif; endif; endif; endforeach; endif; ?>
                                        </tbody>
                                    </table>

                                    <table cellspacing="0" class="adsListShow  table-striped " style="height:auto">
                                        <thead>
                                            <tr>
                                                <th>ID(已过期)</th>
                                                <th>审核状态</th>
                                                <th>发布时间</th>
                                                <th>结束时间</th>
                                                <th>公司名称</th>
                                                <th>广告类型</th>
                                                <th>广告标题</th>
                                                <!--轮播还是顶部滚动-->
                                                <th>播放位置</th>
                                                <th>详情页</th>
                                                <!--<th>轮播次数</th>-->
                                                <th>店铺介绍</th>
                                                <th>电话</th>
                                                <th>更多详情</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($list)): foreach($list as $key=>$v): if($v["is_delete"] == 1): ?><tr>
                                                        <td><?php echo ($v["adnum"]); ?></td>
                                                        <td>

                                                            <button class="activation" name="activation" onclick="show_Div(<?php echo ($v["adnum"]); ?>)">
																激活
															</button>
                                                            <span> </span>

                                                            <a id="del_ads" href="<?php echo U('adsdel');?>?adnum=<?php echo ($v["adnum"]); ?>">删除</a>
                                                            <!--<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                                            <div id="actbutton" class="actbuttondiv">
                                                                <div id="mydiv" class="actcontent">
                                                                    <span>开始时间</span>
                                                                    <input type="date" id="stime" name="starttime" />
                                                                    <span>结束时间</span>
                                                                    <input type="date" id="etime" name="endtime" />
                                                                    <br />
                                                                    <div class="closebutton">
                                                                        <a href="" onclick="submit_Div()">确定</a>
                                                                        <span>　</span>
                                                                        <a onclick="close_Div()">关闭</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                        </td>
                                                        <td><?php echo ($v["starttime"]); ?></td>
                                                        <td><?php echo ($v["endtime"]); ?></td>
                                                        <td><?php echo ($v["adname"]); ?></td>
                                                        <!--<td><?php echo ($v["adtype"]); ?></td>-->
                                                        <td>
                                                            <!--console.log(<?php echo ($v["adtype"]); ?>);-->
                                                            <!--<?php switch($$v["adtype"]): case "1": ?>娱乐<?php break;?>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
                                                            <?php case "2": ?>养生<?php break;?>
                                                            <?php case "3": ?>交通<?php break;?>
                                                            <?php case "4": ?>购物<?php break;?>
                                                            <?php case "5": ?>健身<?php break;?>
                                                            <?php case "6": ?>银行<?php break;?>
                                                            <?php default: ?>餐饮<?php endswitch;?>-->
<<<<<<< HEAD
															<?php if($v["adtype"] == 1): ?>娱乐
																<?php elseif($v["adtype"] == 2): ?>养生
																<?php elseif($v["adtype"] == 3): ?>交通
																<?php elseif($v["adtype"] == 4): ?>购物
																<?php elseif($v["adtype"] == 5): ?>健身
																<?php elseif($v["adtype"] == 6): ?>银行
																<?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
														</td>
														<td><?php echo ($v["adtitle"]); ?></td>
														<td>
															<?php if($v["vehicle"] == 0): ?>轮播
																<?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
														</td>

														<td>
															<?php if($v["detail"] == 0): ?>有
																<?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
														</td>
														<!--<td><?php echo ($v["adshowcount"]); ?></td>-->
														<td><?php echo ($v["introduction"]); ?></td>
														<td><?php echo ($v["phone"]); ?></td>
														<td class="checkMoreDetail">点我查看
															<div class="moreDetailShow">
																<p>广告编号:<?php echo ($v["adnum"]); ?></p>
																<p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
																<p>广告内容:<?php echo ($v["adtext"]); ?></p>
																<p>推广区域:</p>
																<p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
																<p>店铺地址:<?php echo ($v["address"]); ?> </p>
																<p>最新活动:<?php echo ($v["activity"]); ?></p>
																<p>广告备注:<?php echo ($v["adremark"]); ?></p>
															</div>
														</td>
													</tr><?php endif; endforeach; endif; ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.page-content -->
	    <div class="footer">
=======
                                                            <?php if($v["adtype"] == 1): ?>娱乐
                                                                <?php elseif($v["adtype"] == 2): ?>养生
                                                                <?php elseif($v["adtype"] == 3): ?>交通
                                                                <?php elseif($v["adtype"] == 4): ?>购物
                                                                <?php elseif($v["adtype"] == 5): ?>健身
                                                                <?php elseif($v["adtype"] == 6): ?>银行
                                                                <?php elseif($v["adtype"] == 7): ?>餐饮<?php endif; ?>
                                                        </td>
                                                        <td><?php echo ($v["adtitle"]); ?></td>
                                                        <td>
                                                            <?php if($v["vehicle"] == 0): ?>无
                                                                <?php elseif($v["vehicle"] == 1): ?>顶部滚动<?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php if($v["detail"] == 0): ?>有
                                                                <?php elseif($v["detail"] == 1): ?>无<?php endif; ?>
                                                        </td>
                                                        <!--<td><?php echo ($v["adshowcount"]); ?></td>-->
                                                        <td><?php echo ($v["introduction"]); ?></td>
                                                        <td><?php echo ($v["phone"]); ?></td>
                                                        <td class="checkMoreDetail">点我查看
                                                            <div class="moreDetailShow">
                                                                <p>广告编号:<?php echo ($v["adnum"]); ?></p>
                                                                <p>广告标题:<?php echo ($v["adtitle"]); ?> </p>
                                                                <p>广告内容:<?php echo ($v["adtext"]); ?></p>
                                                                <p>推广区域:
                                                                    <?php if(is_array($v["ad_hotel"])): $i = 0; $__LIST__ = $v["ad_hotel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i; echo ($p["h_name"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </p>
                                                                <p>图片:<img src='<?php echo ($v["adpic"]); ?>' /> </p>
                                                                <p>店铺地址:<?php echo ($v["address"]); ?> </p>
                                                                <p>最新活动:<?php echo ($v["activity"]); ?></p>
                                                                <p>广告备注:<?php echo ($v["adremark"]); ?></p>
                                                            </div>
                                                        </td>
                                                    </tr><?php endif; endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-content -->
        <div class="footer">
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
        <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
                            <span class="bigger-120">
                                <small>Copyright &copy; <a href="http://www.baidu.com" target="_blank"><?php echo (C("footer")); ?></a> All Rights Reserved.</small>
                            </span>
            </div>

            <!-- /section:basics/footer -->
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
<<<<<<< HEAD
	<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/cloud/Public/Admin/js/jquery.js'>" + "<" + "/script>");
=======
    <!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/Cloud/Public/Admin/js/jquery.js'>" + "<" + "/script>");
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
<<<<<<< HEAD
    window.jQuery || document.write("<script src='/cloud/Public/Admin/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/cloud/Public/Admin/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="/cloud/Public/Admin/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->
<script charset="utf-8" src="/cloud/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/cloud/Public/kindeditor/lang/zh_CN.js"></script>
<script src="/cloud/Public/Admin/js/bootbox.js"></script>
<!-- ace scripts -->
<script src="/cloud/Public/Admin/js/ace/elements.scroller.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.colorpicker.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.fileinput.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.typeahead.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.wysiwyg.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.spinner.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.treeview.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.wizard.js"></script>
<script src="/cloud/Public/Admin/js/ace/elements.aside.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.ajax-content.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.touch-drag.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.sidebar.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.submenu-hover.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.widget-box.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.settings.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.settings-rtl.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.settings-skin.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.widget-on-reload.js"></script>
<script src="/cloud/Public/Admin/js/ace/ace.searchbox-autocomplete.js"></script>
<script src="/cloud/Public/Admin/js/jquery-ui.js"></script>

	<script>
		function show_Div() {
			document.getElementById("actbutton").style.display = "block";
			document.getElementById("mydiv").style.display = "block";

			//1.跳转到修改页面adsedit.html
			//2.给后台传广告id
			//将广告内容显示在修改页面中
		}

		function submit_Div() {
			document.getElementById("actbutton").style.display = "none";
			document.getElementById("mydiv").style.display = "none";
		
			var stime=$('#stime').val();
			var etime=$('#etime').val();
			var time=stime+" "+etime;
			
			var urltime="<?php echo U('active');?>?adnum=<?php echo ($v["adnum"]); ?>&starttime="+stime+"&endtime="+etime;
			console.log(urltime);
			$("a").attr("href",urltime);
			
		}

		function close_Div() {
			document.getElementById("actbutton").style.display = "none";
			document.getElementById("mydiv").style.display = "none";
		}
	</script>

	<!--<script type="text/javascript" src="/cloud/Public/Admin/js/pdjQuery/PCASClass.js"></script>
=======
    window.jQuery || document.write("<script src='/Cloud/Public/Admin/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/Cloud/Public/Admin/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="/Cloud/Public/Admin/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->
<script charset="utf-8" src="/Cloud/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Cloud/Public/kindeditor/lang/zh_CN.js"></script>
<script src="/Cloud/Public/Admin/js/bootbox.js"></script>
<!-- ace scripts -->
<script src="/Cloud/Public/Admin/js/ace/elements.scroller.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.colorpicker.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.fileinput.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.typeahead.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.wysiwyg.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.spinner.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.treeview.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.wizard.js"></script>
<script src="/Cloud/Public/Admin/js/ace/elements.aside.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.ajax-content.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.touch-drag.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.sidebar.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.submenu-hover.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.widget-box.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.settings.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.settings-rtl.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.settings-skin.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.widget-on-reload.js"></script>
<script src="/Cloud/Public/Admin/js/ace/ace.searchbox-autocomplete.js"></script>
<script src="/Cloud/Public/Admin/js/jquery-ui.js"></script>

    <script>
        function show_Div(obj) {
            document.getElementById("actbutton").style.display = "block";
            document.getElementById("mydiv").style.display = "block";

            adn = obj;

            //1.跳转到修改页面adsedit.html
            //2.给后台传广告id
            //将广告内容显示在修改页面中
        }

        function submit_Div() {
            document.getElementById("actbutton").style.display = "none";
            document.getElementById("mydiv").style.display = "none";


            var stime = $('#stime').val();
            var etime = $('#etime').val();
            var time = stime + " " + etime;
            var urltime = "<?php echo U('active');?>?adnum=" + adn + "&starttime=" + stime + "&endtime=" + etime;
            alert(urltime);
            $("a").attr("href", urltime);

        }

        function close_Div() {
            document.getElementById("actbutton").style.display = "none";
            document.getElementById("mydiv").style.display = "none";
        }
    </script>

    <!--<script type="text/javascript" src="/Cloud/Public/Admin/js/pdjQuery/PCASClass.js"></script>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
	<script language="javascript" defer>
		new PCAS("province", "city", "area");
	</script>-->
</body>

</html>