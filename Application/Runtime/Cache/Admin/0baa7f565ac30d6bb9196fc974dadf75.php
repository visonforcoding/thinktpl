<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
        <meta charset="utf-8">
        <title>Seven-baby 后台管理系统</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="/Public/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Public/lib/font-awesome/css/font-awesome.css">
        <script src="/Public/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="/Public/lib/bootstrap/js/jquery.bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/Public/css/admin/theme.css">
        <link rel="stylesheet" type="text/css" href="/Public/css/admin/premium.css">
        <link rel="stylesheet" type="text/css" href="/Public/css/admin/style.css">
        <script src="/Public/lib/ueditor/ueditor.config.js" ></script>
        <script src="/Public/lib/ueditor/ueditor.all.js" ></script>
        <script href="/Public/lib/ueditor/lang/zh-cn/zh-cn.js" ></script>
        <script type="text/javascript">
            document.domain = "sevenbaby.test";
        </script>
    
    
</head>
<body class=" theme-blue">
    <!-- Demo page code -->
    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if (match)
                var color = match[1];
            if (color) {
                $('body').removeClass(function(index, css) {
                    return (css.match(/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});

        });
    </script>
    <style type="text/css">
        .clear{
            clear:both;
        }
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <!--<![endif]-->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="" href="/index.php"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Seven-baby</span></a>
        </div>
        <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span><?php echo (session('LOGIN_NAME')); ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./">个人信息</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Admin Panel</li>
                        <li><a href="./">Users</a></li>
                        <li><a href="./">Security</a></li>
                        <li><a tabindex="-1" href="./">Payments</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="sign-in.html">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar-nav">
    <ul>
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> 管理面板<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dashboard-menu nav nav-list collapse">
                <li><a href="index.html"><span class="fa fa-caret-right"></span> Main</a></li>
            </ul></li>
        <li><a href="#" data-target=".user-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> 用户管理<i class="fa fa-collapse"></i></a></li>
        <li><ul class="user-menu nav nav-list collapse ">
                <li><a href="<?php echo U('Admin/user/adminList');?>"><span class="fa fa-caret-right"></span>管理员管理</a></li>
                <li ><a href="<?php echo U('Admin/user/add');?>"><span class="fa fa-caret-right"></span>添加管理员</a></li>
            </ul>
        </li>
        <li><a href="#" data-target=".content-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> 内容管理<i class="fa fa-collapse"></i></a></li>
        <li><ul class="content-menu nav nav-list collapse ">
                <li><a href="<?php echo U('Admin/blog/about');?>"><span class="fa fa-caret-right"></span>关于</a></li>
                <li ><a href="<?php echo U('Admin/app/appList');?>"><span class="fa fa-caret-right"></span>移动应用</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="content">
    <div class="header">
        
    <h1 class="page-title">关于</h1>
    <ul class="breadcrumb">
        <li><a href="index.html">首页</a> </li>
        <li><a href="users.html">内容管理</a> </li>
        <li class="active">关于</li>
    </ul>

    </div>
    <div class="main-content">
        
    <form id="tab" action="<?php echo U('Admin/submit/formSubmit');?>" method="post">
        <input type="hidden" name="action" value="edit"/>
        <input type="hidden" name="classname" value="About" />
        <input type="hidden" name="setreferer" value="<?php echo ($setreferer); ?>" />
        <input type="hidden" name="id" value="1" />
        <div class="form-group">
            <label>介绍:</label>
            <script class="editor" id="info" name="info" type="text/plain">
                <?php echo ($Rs['info']); ?>
            </script>
            <script type="text/javascript">
                var editor = UE.getEditor('info');
            </script>
        </div>
        <div class="form-group">
            <label>联系:</label>
            <script class="editor" id="contact" name="contact" type="text/plain">
                <?php echo ($Rs['contact']); ?>
            </script>
            <script type="text/javascript">
                var editor = UE.getEditor('contact');
            </script>
        </div>
        <div class="btn-toolbar list-toolbar" style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 确定</button>
            <a href="#myModal" data-toggle="modal" class="btn btn-danger">重置</a>
        </div>
    </form>

        <footer>
            <hr>
            <p class="pull-right"> <a href="http://www.phpone.cn" target="_blank">后会无期</a> by <a href="mailto:caowenpeng1990@126.com" target="_blank">vison allen</a></p>
            <p>© 2014 <a href="http://www.phpone.cn" target="_blank">phpone.cn</a></p>
        </footer>
    </div>
</div>
<script src="/Public/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function() {
                return false;
            });
        });
</script>
<script type="text/javascript" src="/Public/js/admin/lib.js" ></script>
</body>
</html>