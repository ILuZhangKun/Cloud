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
<body class="login-layout">
<div class="main-container login-main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        <b><?php echo (C("sitename")); ?></b>
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="<?php echo U('login/login');?>" method="post">
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="user"
                                                                   placeholder="用户名"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password"
                                                                   placeholder="密码"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>
                                            <label class="block clearfix">
														<span class="block input-icon ">
															<span class="inline"><input type="text" class="form-control"
                                                                                        name="verify" placeholder="验证码"
                                                                                        id="code" required/></span>
															<img style="cursor:pointer;" src="<?php echo U('login/verify');?>"
                                                                 width="100" height="30" title="看不清楚？点击刷新"
                                                                 onclick="this.src = '<?php echo U('login/verify');?>?'+new Date().getTime()">
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" name="remember"/>
                                                    <span class="lbl"> 记住我</span>
                                                </label>

                                                <button type="submit"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">登录</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->
                    </div><!-- /.position-relative -->

                    <div class="navbar-fixed-top align-right">
                        <br/>
                        &nbsp;
                        <a id="btn-login-dark" href="#">Dark</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-blur" href="#">Blur</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-light" href="#">Light</a>
                        &nbsp; &nbsp; &nbsp;
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

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
=======
    window.jQuery || document.write("<script src='/Cloud/Public/Admin/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/Cloud/Public/Admin/js/jquery.mobile.custom.js'>" + "<" + "/script>");
>>>>>>> 4ca55cbe52cb50d97a834758c67f69e9739becf8
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        $(document).on('click', '.toolbar a[data-target]', function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });


    //you don't need this, just used for changing background
    jQuery(function ($) {
        $('#btn-login-dark').on('click', function (e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function (e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function (e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>
</body>
</html>