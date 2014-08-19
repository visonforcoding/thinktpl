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
        
    <h1 class="page-title">管理员管理</h1>
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li><a href="users.html">Users</a> </li>
        <li class="active">jsmith</li>
    </ul>

    </div>
    <div class="main-content">
        
    <div class="btn-toolbar list-toolbar">
        <a class="btn btn-primary" href="<?php echo U('Admin/user/add');?>"><i class="fa fa-plus"></i>添加管理员</a>
        <button class="btn btn-default">导入</button>
        <button class="btn btn-default">导出</button>
        <div class="btn-group">
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>用户名</th>
                <th>昵称</th>
                <th>上次登录时间</th>
                <th>上次登录ip</th>
                <th>创建时间</th>
                <th style="width: 3.5em;">操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($admin)): $k = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
                <td><?php echo ($k); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo ($v["nickname"]); ?></td>
                <td><?php echo ($v["lastlogintime"]); ?></td>
                <td><?php echo ($v["lastloginip"]); ?></td>
                <td><?php echo ($v["ctime"]); ?></td>
                <td>
                    <a href="/sb-admin.php/user/add/action/edit/id/<?php echo ($v["id"]); ?>.html"><i class="fa fa-pencil"></i></a>
                    <a  role="button" onclick='del("Admin","<?php echo ($v["id"]); ?>")' oid="<?php echo ($v["id"]); ?>"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <ul class="pagination">
        <?php echo ($show); ?>
    </ul>

    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text"><i class="fa fa-warning modal-icon"></i>你确定你要删除么？</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
                    <button class="btn btn-danger" id="del-btn" onclick="del()">删除</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            
        });
        function del(classname,id){
            $('#myModal').modal('show');
        };
    </script>

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