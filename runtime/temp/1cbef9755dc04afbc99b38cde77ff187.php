<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp64\www\webthink\public/../application/admin\view\article\edit.html";i:1496719438;s:65:"D:\wamp64\www\webthink\public/../application/admin\view\base.html";i:1496372119;}*/ ?>
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

    
<link rel="stylesheet" href="__STATIC__/admin/plugins/iCheck/all.css">

<style>
    @media (min-width: 1200px){
        .row {
            margin-left: -15px;
        }
    }
    @media (max-width: 767px){
        body {
            padding-left: 0;
            padding-right: 0;
        }
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
                    
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">编辑文章</h3>
    </div>
    <form role="form" action="" method="post">
        <div class="box-body">
            <div class="form-group">
                <label>文章标题</label>
                <input type="text" class="form-control" name="arc_title" value="<?php echo $oldData['arc_title']; ?>" placeholder="文章标题">
            </div>
            <div class="form-group">
                <label>文章作者</label>
                <input type="text" class="form-control" name="arc_author" value="<?php echo $oldData['arc_author']; ?>" placeholder="文章作者">
            </div>
            <div class="form-group">
                <label>文章排序</label>
                <input type="number" class="form-control" value="<?php echo $oldData['arc_sort']; ?>" name="arc_sort" placeholder="文章作者">
            </div>
            <div class="form-group">
                <label>所属分类</label>
                <select class="form-control select2 select2-hidden-accessible" name="cate_id" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" value="0">请选择分类</option>
                    <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): if( count($cateData)==0 ) : echo "" ;else: foreach($cateData as $key=>$vo): ?>
                    <option value="<?php echo $vo['cate_id']; ?>"<?php if($oldData['cate_id'] == $vo['cate_id']): ?> selected <?php endif; ?>><?php echo $vo['cate_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label style="display: block;">选择标签</label>
                <?php if(is_array($tagData) || $tagData instanceof \think\Collection || $tagData instanceof \think\Paginator): if( count($tagData)==0 ) : echo "" ;else: foreach($tagData as $key=>$vo): ?>
                <label>
                    <input <?php if(in_array($vo['tag_id'],$tag_ids)): ?> checked <?php endif; ?>type="checkbox" name="tag[]" class="minimal" value="<?php echo $vo['tag_id']; ?>">
                    <?php echo $vo['tag_name']; ?>
                </label>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="form-group">

                <label style="display: block;">选择热门</label>

                <label>
                    <input type="radio" name="is_hot" class="minimal" value="1" <?php if($oldData['is_hot'] == 1): ?> checked <?php endif; ?>>热门
                </label>
                <label>
                    <input type="radio" name="is_hot" class="minimal" value="0" <?php if($oldData['is_hot'] != 1): ?> checked <?php endif; ?>>不热门
                </label>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="arc_thumb" readonly="" value="<?php echo $oldData['arc_thumb']; ?>">
                    <div class="input-group-btn">
                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="input-group" style="margin-top:5px;">
                    <img src="<?php echo $oldData['arc_thumb']; ?>" class="img-responsive img-thumbnail" width="150">
                    <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                </div>
            </div>
            <div class="form-group">
                <label>文章摘要</label>
                <input class="form-control input-lg" name="arc_digest" type="text" value="<?php echo $oldData['arc_digest']; ?>" placeholder="文章摘要">
            </div>
            <div class="form-group">
                <textarea id="container" name="arc_content" style="height:300px;width:100%;">
                    <?php echo $oldData['arc_content']; ?>
                </textarea>
            </div>
        </div>
        <!-- /.box-body -->
        <input type="hidden" value="<?php echo input('param.arc_id'); ?>" name="arc_id">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

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

<!-- iCheck 1.0.1 -->
<script>

    var hdjs = {
        //框架目录
        'base': '__STATIC__/admin/plugins/hdjs',
        //上传文件后台地址
        'uploader': "<?php echo url('system/component/uploader'); ?>",
        //获取文件列表的后台地址
        'filesLists': "<?php echo url('system/component/filesLists'); ?>?",
    };
</script>
<script src="__STATIC__/admin/plugins/hdjs/app/util.js"></script>
<script src="__STATIC__/admin/plugins/hdjs/require.js"></script>
<script src="__STATIC__/admin/plugins/hdjs/config.js"></script>
<script src="__STATIC__/admin/plugins/iCheck/icheck.min.js"></script>
<script>
    //模块配置项
    util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
    //上传图片
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
                data:{name:'后盾人',year:2099},
            };
            util.image(function (images) {          //上传成功的图片，数组类型 
                $("[name='arc_thumb']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片
    function removeImg(obj) {
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>
<script>

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
</script>

</body>
</html>
