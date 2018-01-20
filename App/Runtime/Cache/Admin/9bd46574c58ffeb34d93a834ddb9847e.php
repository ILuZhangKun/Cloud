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
=======
    <script src="/Cloud/Public/Admin/js/html5shiv.js"></script>
    <script src="/Cloud/Public/Admin/js/respond.js"></script>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
    <![endif]-->
</head>

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
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

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>

            <!-- #section:basics/sidebar -->
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
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                    <div class="breadcrumbs" id="breadcrumbs">
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

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                        <!-- #section:settings.box -->
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
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="row">
                                <form id="addInforForm" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <!-- <form>-->
                                    <div class="form-item">
                                        <!-- <label class="item-label">广告ID<span class="check-tips"></span></label> -->
                                        <div class="controls">
                                            <input type="hidden" class="text input-mid" name="adnum" value="" />
                                        </div>
                                        <label class="item-label">公司名称<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="text" id="adname" onchange="adnametest()" class="text input-mid" name="adname" value="" />
                                        <span id="adnameres" style="color: red;"></span><br />
                                        <!--</div>-->
                                        <label class="item-label">开始时间<span class="check-tips"></span></label>

                                        <!--<div class="controls">-->
                                        <input type="date" id="starttime" onchange="timetest()" class="text input-mid" name="starttime" value="" />
                                        <br />

                                        <!--</div>-->
                                        <label class="item-label">结束时间<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="date" id="endtime" onchange="timetest()" class="text input-mid" name="endtime" value="" />
                                        <span id="timeres" style="color: red;"></span><br />
                                        <!--</div>-->
                                        <label class="item-label">广告内容<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <!-- <input type="textarea" class="text input-mid" name="adtext" value="" />
										 --><textarea name="adtext" id="adtext" onchange="texttest()" placeholder="这里输入内容,不超过20个字符" style="width:300px;height:80px;vertical-align: text-top;"></textarea>
                                        <span id="adtextres" style="color:red"></span><br />

                                        <!--</div>-->
                                        <label class="item-label">广告备注<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="text" id="adremark" class="text input-mid" name="adremark" value="" /><br />
                                        <!--</div>-->

                                        <table border="0" cellspacing="" cellpadding="">
                                            <th><label class="item-label">广告图片　<span class="check-tips"></span></label></th>
                                            <td><input type="file" id="file" onchange="filetest()" name="file" /></td>
                                            <td><span id="fileres" style="color: red; "></span></td>
                                            </tr>
                                        </table>

                                        <label class="item-label">广告链接<span class="check-tips"></span></label>
                                        <!-- <div class="controls">-->
                                        <input type="text" id="adhref" class="text input-mid" name="adhref" value="" />
                                        <span id="adhrefres" style="color: red;"></span>
                                        <!--<button type="button" id="adhreftest" class="btn hrefbtn" onclick="hrefTest()">测试连接</button>-->
                                        <br />
                                        <!--</div>-->
                                        <label class="item-label">广告标题<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="text" id="adtitle" onchange="adtitletest()" class="text input-mid" name="adtitle" value="" />
                                        <span id="adtitleres" style="color: red;"></span><br />
                                        <!--</div>-->
                                        <label class="item-label">广告类型 <span class="check-tips"></span></label>
                                        <!--<div class="controls">-->

                                        <!--<select ame="Ads_type" item="v"><?php echo ($v["typename"]); ?></select>-->
                                        <select id="adtype" name="adtype">
											<?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["typenum"]); ?>"><?php echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
                                        <br />
                                        <label class="item-label">店铺介绍<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <textarea name="introduction" id="adintro" onchange="adintrotest()" placeholder="这里输入内容,不超过20个字符" style="width:300px;height:80px;vertical-align: text-top;"></textarea>
                                        <span id="adintrores" style="color: red;"></span><br />
                                        <!--</div>-->
                                        <label class="item-label">最新活动<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="text" id="activity" class="text input-mid" name="activity" value="" />
                                        <span id="activityres" style="color: red;"></span><br />
                                        <!--</div>-->
                                        <table border="0" cellspacing="" cellpadding="">
                                            <tr>
                                                <th><label class="item-label">推广餐厅<span class="check-tips"></span></label></th>
                                                <td>
                                                    <select style="margin-left:9px;" id="orgChooseBtn" name="orgChooseBtn">
                                                        <option id="allorg">全部连锁机构</option>
                                                        <option id="psnorg">自选连锁机构</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <!-- <div class="areaChoose"> -->
                                                    <!-- <label class="item-label" style="float:left">选择区域<span class="check-tips"></span></label> -->
                                                    <!-- <div id="areas"> -->
                                                    <select name="province" id="province" style="margin-left:9px;"></select>
                                                    <select name="city" id="city"></select>
                                                    <select name="area" id="district"></select>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </td>
                                                <td>

                                                    <button class="btn submit-button mybtn" type="button" id="chooseHotelBtn">查询餐厅</button>
                                                </td>
                                            </tr>
                                        </table>
                                        <div id="hotel">
                                            <div class="" id="orgDisplayChoose">
                                                <div id="orgShow">
                                                    <div id="selectAll">
                                                        <input type="checkbox" id="orgAllChoose" name="orgAllChoose">全选
                                                    </div>
                                                    <ul id="orgShowList">
                                                    </ul>
                                                </div>

                                                <div class="btnDiv">
                                                    <button type="button" class="btn mybtn2" id="cancelBtn1">取消</button>
                                                    <button class="btn mybtn2" type="button" id="confirmOrgChoose">确定</button>
                                                </div>
                                            </div>

                                            <div class="" id="hotelDisplayChoose">
                                                <div id="hotelShow">
                                                    <div id="selectAll">
                                                        <input type="checkbox" id="hotelAllChoose" name="hotelAllChoose">全选
                                                    </div>
                                                    <ul id="hotelShowList">
                                                    </ul>
                                                </div>
                                                <!-- <div class="btnDiv"> -->
                                                <!-- <button class="btn mybtn" type="button" id="confirmBtn">确定</button> -->
                                                <!-- <button type="button" class="btn mybtn2" id="cancelBtn2">取消</button> -->
                                                <!-- </div> -->
                                            </div>
                                            <div class="" id="selectedHotel">
                                                <p>已选餐厅</p>
                                                <div id="slHotelShow">
                                                    <ol id="slHotelShowList">
                                                    </ol>
                                                </div>
                                                <div class="btnDiv">
                                                    <button type="button" class="btn mybtn2" id="cancelBtn3">取消</button>
                                                    <button class="btn mybtn2" type="button" id="confirmBtn">确定</button>
                                                </div>
                                            </div>
                                        </div>

                                        <input id="storeOrgId" name="storeOrgId" style="display:none;" />
                                        <input id="storeHotelId" name="storeHotelId" style="display:none;" />
                                        <input id="is_submit" name="is_submit" style="display:none" />
                                        <label class="item-label">联系电话<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <input type="text" id="phone" onchange="phonetest()" class="text input-mid" name="phone" value="" />
                                        <span id="phoneres" style="color: red;"></span><br />
                                        <!-- </div>-->

                                        <label class="item-label">滚动条广告　<span class="check-tips"></span></label>
                                        <!--<div class="controls">-->
                                        <!--  <input type="radio" name="vehicle" value="0">轮播广告-->
                                        <input type="checkbox" id="vehicle" name="vehicle" value="1">是
                                        <input type="checkbox" id="vehicle" name="vehicle" value="0">否<br />
                                        <!--</div>-->

                                        <label class="item-label">详情页展示　<span class="check-tips"></span></label>
                                        <!-- <div class="controls">-->
                                        <input type="checkbox" id="detail" name="detail" value="0">是
                                        <!--</div>-->

                                    </div>

                                    <div class="form-item">
                                        <button class="btn submit-btn" type="submit" id="confirmAdsSave">保 存</button>
                                        <button class="btn submit-btn" type="button" id="confirmAdsAdd">提 交</button>
                                        <button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.page-content -->
                    <div class="footer">
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
                <!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
<<<<<<< HEAD
    window.jQuery || document.write("<script src='/cloud/Public/Admin/js/jquery.js'>" + "<" + "/script>");
=======
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
                </script>
                <script type="text/javascript" src="/cloud/Public/Admin/js/pdjQuery/PCASClass.js"></script>
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
                </script>
                <script type="text/javascript" src="/Cloud/Public/Admin/js/pdjQuery/PCASClass.js"></script>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8

                <script language="javascript" defer>
                    // new PCAS("province", "city", "area");
                    new PCAS("province", "city", "area")
                </script>
<<<<<<< HEAD
                <script src="/cloud/Public/Admin/js/addinput.js"></script>
                <script src="/cloud/Public/Admin/js/hotelchoose.js"></script>
=======
                <script src="/Cloud/Public/Admin/js/addinput.js"></script>
                <script src="/Cloud/Public/Admin/js/hotelchoose.js"></script>
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8

</body>

</html>