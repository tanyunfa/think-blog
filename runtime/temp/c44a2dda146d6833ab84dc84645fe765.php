<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp64\www\webthink\public/../application/index\view\index\index.html";i:1496733971;s:65:"D:\wamp64\www\webthink\public/../application/index\view\base.html";i:1496733989;}*/ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $headTitle['title']; ?></title>
    <link rel='stylesheet' id='contact-form-7-css'  href='__STATIC__/blog/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='roboto_google_font-css'  href='__STATIC__/blog/css/cf8515a48c4b461d9e43991a884dfc80.css' type='text/css' media='all' />
    <link rel='stylesheet' id='materialcss-css'  href='__STATIC__/blog/css/material.indigo-pink.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='materialicons-css'  href='__STATIC__/blog/css/e38e022d241e4f218d54e74cdcafeb98.css' type='text/css' media='all' />
    <link rel='stylesheet' id='material-style-css'  href='__STATIC__/blog/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fonticons-css'  href='__STATIC__/blog/css/fontello.css' type='text/css' media='all' />
    <script type='text/javascript' src='__STATIC__/blog/js/jquery.js'></script>
    <script type='text/javascript' src='__STATIC__/blog/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='__STATIC__/blog/js/material.min.js'></script>
    <meta name="generator" content="WordPress 4.7.3" />
    <script type="text/javascript">
        jQuery(document).ready(function() {

            // Buttons
            jQuery('button, html input[type="button"], input[type="reset"], input[type="submit"], .next_prev_post a').addClass('mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored');
            jQuery('.search-submit, .post-actions').removeClass('mdl-button--raised mdl-js-ripple-effect mdl-button--colored');

            //Textfields
            jQuery('input[type="text"], input[type="password"],textarea').addClass('mdl-textfield__input');

            // Extracting main & accent colors & dynamically set the background-color/color style for some elements.
            var mainColor = jQuery('header').css( "background-color" );
            jQuery(".featured").css("background-color", mainColor );
            jQuery(".widget .thin-bar").css("border-color", mainColor );

            jQuery(".main-navigation li ul li").mouseenter(function() {
                jQuery(this).css("background-color", mainColor );
            }).mouseleave(function() {
                jQuery(this).css("background-color", "transparent" );
            });

            // Adding MDL buttons classes to nav-links and its links.
            jQuery('.nav-links a').addClass('mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect');
            jQuery('.page-numbers.dots').addClass('mdl-button mdl-js-button mdl-button--raised');
            jQuery('.nav-links .current').addClass('mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect');
        });
    </script>
    <style type="text/css">
        body { background: #f7f7f7;}			</style>
</head>

<body class="home blog">

<div id="page" class="hfeed mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header id="masthead" class="site-header mdl-layout__header" role="banner">
        <div class="site-branding mdl-layout__header-row">
			<span class="site-title mdl-layout-title">
								<a href="<?php echo url('index/index/index'); ?>" rel="home"><?php echo $_webset['title']; ?></a>
					</span>


            <div class="mdl-layout-spacer"></div>

            <nav id="site-navigation" class="main-navigation mdl-navigation mdl-layout--large-screen-only" role="navigation">
                <ul id="primary-menu" class="menu">
                    <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4">
                        <a href="<?php echo url('index/index/index'); ?>">首页</a>
                    </li>
                    <?php if(is_array($_cateData) || $_cateData instanceof \think\Collection || $_cateData instanceof \think\Paginator): if( count($_cateData)==0 ) : echo "" ;else: foreach($_cateData as $key=>$vo): ?>
                        <li id="menu-item-1815" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1815">
                            <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<li id="menu-item-1800" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1800"><a href="#">Menu Depth</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1801" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1801"><a href="#">Level 01</a></li>
                            <li id="menu-item-1802" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1802"><a href="#">Level 01</a></li>
                            <li id="menu-item-1803" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1803"><a href="#">Level 01</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1819"><a href="">About Us</a></li>-->
                </ul>
            </nav>

            <form role="search" method="get" class="search-form" action="<?php echo url('system/component/search'); ?>">
                <div class="search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width is-upgraded">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="search-form mdl-textfield__expandable-holder">
                        <input class="search-field mdl-textfield__input" type="search" id="search-field" name="s" value="">
                    </div>
                </div>
            </form>

        </div>
    </header>

    <div class="mdl-layout__drawer">
        <nav id="site-navigation" class="mobile-navigation mdl-navigation" role="navigation">
            <ul id="mobile-menu" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4"><a href="//demo.themient.com/realistic/">Home</a></li>
                <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4">
                    <a href="<?php echo url('index/index/index'); ?>">首页</a>
                </li>
                <?php if(is_array($_cateData) || $_cateData instanceof \think\Collection || $_cateData instanceof \think\Paginator): if( count($_cateData)==0 ) : echo "" ;else: foreach($_cateData as $key=>$vo): ?>
                <li id="menu-item-1815" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1815">
                    <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>		</nav><!-- #site-navigation -->
    </div>
    <div id="content" class="site-content mdl-layout__content mdl-grid">
        

<div id="primary" class="content-area mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
	<main id="main" class="site-main" role="main">

		<?php if(is_array($articleData) || $articleData instanceof \think\Collection || $articleData instanceof \think\Paginator): if( count($articleData)==0 ) : echo "" ;else: foreach($articleData as $key=>$vo): ?>

		<article id="post-1824" class="post-box mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col post-1824 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-template-2" style="min-height: 204px;max-height: 245px;">
			<?php if($vo['is_hot']): ?>
				<div class="featured"><i class="icon icon-star"></i></div>
			<?php endif; ?>
			<div class="post-img mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
				<a href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>" title="<?php echo $vo['arc_title']; ?>">
					<img width="218" height="181" src="<?php echo $vo['arc_thumb']; ?>" class="attachment-featured wp-post-image" alt="<?php echo $vo['arc_title']; ?>" style="width: 218px;height: 181px;">
					<div class="post-format"><i class="material-icons">description</i></div>
				</a>
				<div class="floated-cat"><a href="#" title="View all posts in World" style="background-color:rgb(63,81,181);position: absolute; top: 0; left: 0; padding: 5px 8px; color: #fff5d4;"><?php echo $vo['cate_name']; ?></a></div>

			</div>
			<div class="post-data  mdl-cell mdl-cell--8-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">

				<h2 class="entry-title post-title mdl-card__title-text"><a href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>" rel="bookmark"><?php echo $vo['arc_title']; ?></a></h2>
				<div class="entry-meta post-info">
					<span class="theauthor"><i class="icon icon-user"></i><span class="author vcard"><span class="url fn"><a href="#"><?php echo $vo['arc_author']; ?></a></span></span></span><span class="posted"><?php echo date('Y年m月d日',$vo['sendtime']); ?></span><span class="views"><i class="fa fa-eye"></i><?php echo $vo['arc_click']; ?> views</span>		</div><!-- .entry-meta -->
				<div class="entry-content post-excerpt" style="overflow: hidden;max-height: 67px;">
								<span class="mdl-typography--font-light mdl-typography--subhead">
					<?php echo $vo['arc_digest']; ?>&nbsp;&hellip;				</span>
				</div><!-- .entry-content -->
				<div class="moretag">
					<a class="mdl-button mdl-js-button" href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>">阅读文章...</a>
				</div>
			</div><!-- .post-data -->
		</article><!-- #post-## -->

		<?php endforeach; endif; else: echo "" ;endif; ?>

		<!--<nav class="navigation pagination" role="navigation">
            <h2 class="screen-reader-text">Posts navigation</h2>
            <div class="nav-links"><span class='page-numbers current'>1</span>
                <a class='page-numbers' href='http://demo.themient.com/realistic/page/2/'>2</a>
                <a class='page-numbers' href='http://demo.themient.com/realistic/page/3/'>3</a>
                <a class="next page-numbers" href="http://demo.themient.com/realistic/page/2/">Next &#8250;</a></div>
        </nav>-->


	</main><!-- #main -->
</div><!-- #primary -->
<div id="secondary" class="widget-area mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone" role="complementary">

	<style>
		.tagcloud a {
			font-size: 15px!important;
			padding: 7px 13px;
			margin-bottom: 7px;
			float: left;
			border-radius: 0;
			border: 1px solid #444;
			margin-right: 7px;
			color: #444;
			-webkit-transition: all 0.25s linear;
			-moz-transition: all 0.25s linear;
			transition: all 0.25s linear;
		}
	</style>
	<aside id="social-icons-2" class="widget sidebar-widget mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col realistic_social_icons_widget">
		<div class="widget-title">
			<h3>分类列表</h3>
			<div class="thin-bar" style="border-color: rgb(63, 81, 181);">

			</div>
		</div>
		<div class="tagcloud">
			<?php if(is_array($_allCateData) || $_allCateData instanceof \think\Collection || $_allCateData instanceof \think\Paginator): if( count($_allCateData)==0 ) : echo "" ;else: foreach($_allCateData as $key=>$vo): ?>
			<a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>" class="tag-link-197 tag-link-position-2"
			   title="<?php echo $vo['cate_name']; ?>" style="font-size: 8pt;"><?php echo $vo['cate_name']; ?></a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</aside>
	<aside id="tag_cloud-3" class="widget sidebar-widget mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col widget_realistic_recent_posts_widget"><h3 class="widget-title">标签列表</h3>
		<div class="tagcloud">
			<?php if(is_array($_allTagData) || $_allTagData instanceof \think\Collection || $_allTagData instanceof \think\Paginator): if( count($_allTagData)==0 ) : echo "" ;else: foreach($_allTagData as $key=>$vo): ?>
			<a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>" class="tag-link-197 tag-link-position-2"
			   title="<?php echo $vo['tag_name']; ?>" style="font-size: 8pt;"><?php echo $vo['tag_name']; ?></a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</aside>
	<aside id="realistic_recent_posts_widget-3" class="widget sidebar-widget mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col widget_realistic_recent_posts_widget"><div class="widget-title"><h3>最新文章</h3><div class="thin-bar" style="border-color: rgb(63, 81, 181);"></div></div><div class="widget-container recent-posts-wrap" style="
    width: 100%;"><ul style="width: 100%">
		<?php if(is_array($_newArticle) || $_newArticle instanceof \think\Collection || $_newArticle instanceof \think\Paginator): if( count($_newArticle)==0 ) : echo "" ;else: foreach($_newArticle as $key=>$vo): ?>
		<li class="post-box horizontal-container">								<div class="widget-post-img">
			<a rel="nofollow" href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>" title="<?php echo $vo['arc_title']; ?>">
				<img width="70" height="70" src="<?php echo $vo['arc_thumb']; ?>" style="width: 70px;height: 70px;" class="attachment-featured wp-post-image" alt="Featured Post (Sticky Post)">
				<div class="post-format"><i class="material-icons">description</i></div>					</a>
		</div>

			<div class="widget-post-data">
				<h4 style="overflow: hidden;height: 40px; width: 100%;"><a rel="nofollow" href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>" title="<?php echo $vo['arc_title']; ?>"><?php echo $vo['arc_title']; ?></a></h4>
				<div class="widget-post-info">
					<span class="posted"><?php echo date('Y-m-d',$vo['sendtime']); ?></span>								<span class="comments"><?php echo $vo['arc_click']; ?> views</span>
				</div><!--end .widget-post-info-->
			</div>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul></div>
	</aside>
	<aside id="realistic_popular_posts_widget-3" class="widget sidebar-widget mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col widget_realistic_popular_posts_widget">
		<div class="widget-title">
			<h3>友情链接</h3>
			<div class="thin-bar">

			</div>
		</div>
		<div class="widget-container recent-posts-wrap">
			<ul>
				<?php if(is_array($_allLinkData) || $_allLinkData instanceof \think\Collection || $_allLinkData instanceof \think\Paginator): if( count($_allLinkData)==0 ) : echo "" ;else: foreach($_allLinkData as $key=>$vo): ?>
				<li class="post-box horizontal-container">
					<div class="widget-post-data" style="width: 100%;">
						<h4>
							<a rel="nofollow" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_url']; ?>" style="display: block;"><?php echo $vo['link_url']; ?></a>
							<span><?php echo $vo['link_name']; ?></span>
						</h4>
					</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</aside>
</div><!-- #secondary -->




    </div>

    <footer id="colophon" class="site-footer mdl-mega-footer" role="contentinfo">
        <div class="site-info mdl-mega-footer--bottom-section">
            <div id="copyright-note">
                <div class="left">
                    © 2017     update by <a href="#" rel="generator"><?php echo $_webset['copyright']; ?></a>					</div>
                <div class="right">
                    Contact me <a href="#"><?php echo $_webset['email']; ?></a>					</div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- .mdl-layout -->
<link rel='stylesheet' id='mediaelement-css'  href='__STATIC__/blog/css/mediaelementplayer.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='__STATIC__/blog/css/wp-mediaelement.min.css' type='text/css' media='all' />
<script type='text/javascript' src='__STATIC__/blog/js/jquery.form.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='__STATIC__/blog/js/scripts.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/navigation.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/skip-link-focus-fix.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/custom_scripts.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/wp-embed.min.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='__STATIC__/blog/js/wp-mediaelement.min.js'></script>



</body>
</html>

<!-- Dynamic page generated in 0.377 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-05-21 10:57:49 -->

<!-- Compression = gzip -->
<!-- super cache -->