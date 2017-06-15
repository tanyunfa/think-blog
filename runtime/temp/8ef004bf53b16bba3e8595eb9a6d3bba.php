<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\wamp64\www\webthink\public/../application/admin\view\article\reqycle.html";i:1496299927;s:65:"D:\wamp64\www\webthink\public/../application/admin\view\base.html";i:1496372119;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="__STATIC__/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="__STATIC__/admin/dist/font/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="__STATIC__/admin/dist/font/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="__STATIC__/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="__STATIC__/admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="__STATIC__/admin/plugins/layer/mobile/need/layer.css">
    <link rel="stylesheet" href="__STATIC__/admin/plugins/pace/pace.css">

    
<style>
    .layui-layer-btn .layui-layer-btn0 {
        border-color: #dedede !important;
        background-color: #f1f1f1 !important;
        color: #222 !important;
    }

    .layui-layer-btn .layui-layer-btn1 {
        border-color: #dd4b39 !important;
        background-color: #dd4b39 !important;
        color: #fff !important;
    }
</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo url('admin/entry/index'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <img src="__STATIC__/admin/images/user_529px_1201409_easyicon.net.png" class="user-image" alt="User Image">

                            <span class="hidden-xs"><?php echo session('admin.admin_username'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <img src="__STATIC__/admin/images/user_529px_1201409_easyicon.net.png" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo session('admin.admin_username'); ?>
                                    <small>欢迎您，管理员</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('admin/entry/pass'); ?>" class="btn btn-default btn-flat">个人设置</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('admin/login/loginout'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="__STATIC__/admin/images/user_529px_1201409_easyicon.net.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo session('admin.admin_username'); ?></p>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder-open"></i><span>栏目管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('admin/category/index'); ?>"><i class="fa fa-circle-o"></i>栏目列表</a></li>
                        <li><a href="<?php echo url('admin/category/add'); ?>"><i class="fa fa-circle-o"></i>栏目添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-magic"></i><span>标签管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('admin/tag/index'); ?>"><i class="fa fa-circle-o"></i>标签列表</a></li>
                        <li><a href="<?php echo url('admin/tag/store'); ?>"><i class="fa fa-circle-o"></i>添加标签</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i><span>文章管理</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('admin/article/index'); ?>"><i class="fa fa-circle-o"></i>文章列表</a></li>
                        <li><a href="<?php echo url('admin/article/store'); ?>"><i class="fa fa-circle-o"></i>添加文章</a></li>
                        <li><a href="<?php echo url('admin/article/reqycle'); ?>"><i class="fa fa-circle-o"></i>回收站</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-external-link"></i><span>友链管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('admin/link/index'); ?>"><i class="fa fa-circle-o"></i>友链列表</a></li>
                        <li><a href="<?php echo url('admin/link/store'); ?>"><i class="fa fa-circle-o"></i>添加友链</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-contao"></i><span>站点管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('admin/webset/index'); ?>"><i class="fa fa-circle-o"></i>网站配置</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    
<div class="box">
    <div class="box-header">
        <h3 class="box-title">回收站</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>编号</th>
                <th>文章名称</th>
                <th>文章作者</th>
                <th>排序</th>
                <th>所属分类</th>
                <th class="text-center">添加时间</th>
                <th class="text-right">操作</th>

            </tr>
            </thead>
            <tbody>
            <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
            <tr>
                <td><?php echo $vo['arc_id']; ?></td>
                <td><?php echo $vo['arc_title']; ?></td>
                <td><?php echo $vo['arc_author']; ?></td>
                <td>
                    <input type="text" value="<?php echo $vo['arc_sort']; ?>" onblur="changeSort(this,<?php echo $vo['arc_id']; ?>)"
                           style="width: 50px">
                </td>
                <td><?php echo $vo['cate_name']; ?></td>
                <td class="text-center"><?php echo date('Y-m-d',$vo['sendtime']); ?></td>
                <td class="text-right">
                    <!--<a href="<?php echo url('edit',['arc_id'=>$vo['arc_id']]); ?>" class="btn btn-primary">修改</a>-->
                    <a href="#" class="btn btn-primary" onclick="recovery(<?php echo $vo['arc_id']; ?>)">恢复数据</a>
                    <a href="#" class="btn btn-danger" onclick="del(<?php echo $vo['arc_id']; ?>)">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>

        </table>

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="__STATIC__/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="__STATIC__/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<!-- AdminLTE App -->
<script src="__STATIC__/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="__STATIC__/admin/dist/js/demo.js"></script>
<!-- page script -->
<script src="__STATIC__/admin/plugins/layer/layer.js"></script>
<script src="__STATIC__/admin/plugins/pace/pace.js"></script>
<script>
    $(document).ajaxStart(function() { Pace.restart(); });
</script>

<script>
    var hdjs = {
        //框架目录
        'base': '__STATIC__/admin/plugins/hdjs'
    };
</script>
<script src="__STATIC__/admin/plugins/hdjs/app/util.js"></script>
<script src="__STATIC__/admin/plugins/hdjs/require.js"></script>
<script src="__STATIC__/admin/plugins/hdjs/config.js"></script>
<script>

    function changeSort(obj, arc_id) {
        var arc_sort = $(obj).val();

        $.post("<?php echo url('changeSort'); ?>", {arc_sort: arc_sort, arc_id: arc_id}, function (res) {
            if (res.code) {
                util.message(res.msg, 'refresh', 'success');
            } else {
                util.message(res.msg, 'back', 'error');
            }
        }, 'json')
    }

    function del(arc_id) {
        layer.confirm('确认删除？', {
            title:"删除栏目",
            btn: ['取消','确认'] //按钮
        }, function(){

        }, function(){
            location.href = "<?php echo url('del'); ?>" + '?arc_id=' + arc_id;
        });
    }

    function recovery(arc_id) {
        layer.confirm('确认恢复？', {
            title:"恢复文章",
            btn: ['取消','确认'] //按钮
        }, function(){

        }, function(){
            location.href = "<?php echo url('recovery'); ?>" + '?arc_id=' + arc_id;
        });
    }
</script>

</body>
</html>
