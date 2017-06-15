<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\webthink\public/../application/index\view\content\index.html";i:1496760942;s:65:"D:\wamp64\www\webthink\public/../application/index\view\base.html";i:1496733989;}*/ ?>
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
        
<style>
    .post {
        padding: 20px 30px 30px 20px;
        margin-bottom: 30px;
    }
</style>
<main id="main" class="site-main" role="main">


    <article id="post-1148"
             class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col post-1148 post type-post status-publish format-standard has-post-thumbnail hentry category-chastening category-disinclination tag-comments-2 tag-template">

        <header class="entry-header">
            <h1 class="entry-title post-title"><?php echo $articleContent['arc_title']; ?></h1>
            <div class="entry-meta post-info">
                <span class="theauthor"><i class="icon icon-user"></i><span class="author vcard"><span class="url fn"><a
                        href="#"><?php echo $articleContent['arc_author']; ?></a></span></span></span><span
                    class="posted"><?php echo date('Y年m月d日',$articleContent['sendtime']); ?></span><span class="comments"><i
                    class="icon icon-comment"></i><?php echo $articleContent['arc_click']; ?> views</span><span class="thetags">
                <i class="icon icon-tags"></i>
                <?php if(is_array($articleContent['tags']) || $articleContent['tags'] instanceof \think\Collection || $articleContent['tags'] instanceof \think\Paginator): if( count($articleContent['tags'])==0 ) : echo "" ;else: foreach($articleContent['tags'] as $key=>$vo): ?>
                <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>" rel="tag"><?php echo $vo['tag_name']; ?></a>
                ,
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </span></div>
            <!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php echo $articleContent['arc_content']; ?>
        </div><!-- .entry-content -->
    </article><!-- #post-## -->
    <div id="related_posts" class="related-posts mdl-grid mdl-cell mdl-cell--12-col">
        <div class="related-item mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
            <?php if($pre_arc): ?>
            <div class="relatedthumb">
                <a href="<?php echo url('index/content/index',['arc_id'=>$pre_arc['arc_id']]); ?>"
                   title="<?php echo $pre_arc['arc_title']; ?>">
                    <img width="120" height="120" src="<?php echo $pre_arc['arc_thumb']; ?>"
                         class="attachment-featured wp-post-image" alt="<?php echo $pre_arc['arc_title']; ?>">
                    <div class="post-format"><i class="material-icons">description</i></div>
                </a>
            </div>
            <div class="post-data-container">
                <h4>
                    <a href="<?php echo url('index/content/index',['arc_id'=>$pre_arc['arc_id']]); ?>"
                       title="<?php echo $pre_arc['arc_title']; ?>"><?php echo $pre_arc['arc_title']; ?></a>
                </h4>
                <div class="post-info">
                    <div class="meta-info">
                        <span class="posted"><?php echo date('Y年m月d日',$pre_arc['sendtime']); ?></span><span class="comments"><i class="icon icon-views"></i><?php echo $pre_arc['arc_click']; ?> views</span>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <p style="text-align: center; line-height: 100px;">
                没有上一页了
            </p>
            <?php endif; ?>
        </div>

        <div class="related-item mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
            <?php if($next_arc): ?>
                <div class="relatedthumb">
                    <a href="<?php echo url('index/content/index',['arc_id'=>$next_arc['arc_id']]); ?>" title="<?php echo $next_arc['arc_title']; ?>">
                        <img width="120" height="120" src="<?php echo $next_arc['arc_thumb']; ?>"
                             class="attachment-featured wp-post-image" alt="<?php echo $next_arc['arc_title']; ?>">
                        <div class="post-format"><i class="material-icons">description</i></div>
                    </a>
                </div>
                <div class="post-data-container">
                    <h4>
                        <a href="<?php echo url('index/content/index',['arc_id'=>$next_arc['arc_id']]); ?>" title="<?php echo $next_arc['arc_title']; ?>"><?php echo $next_arc['arc_title']; ?></a>
                    </h4>
                    <div class="post-info">
                        <div class="meta-info">
                            <span class="posted"><?php echo date('Y年m月d日',$next_arc['sendtime']); ?></span><span class="comments"><i class="icon icon-comment"></i><?php echo $next_arc['arc_click']; ?> views</span>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <p style="text-align: center; line-height: 100px;">
                    没有下一页了
                </p>
            <?php endif; ?>
        </div>
    </div>

    <div class="next_prev_post mdl-grid mdl-cell mdl-cell--12-col">

        <?php if($pre_arc): ?>
            <div class="left-button"><a href="<?php echo url('index/content/index',['arc_id'=>$pre_arc['arc_id']]); ?>"
                                        rel="prev"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                                        data-upgraded=",MaterialButton,MaterialRipple">上一页<span
                    class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></div>
        <?php endif; ?>
        <div class="mdl-layout-spacer"></div>
        <?php if($next_arc): ?>
            <div class="right-button"><a href="<?php echo url('index/content/index',['arc_id'=>$next_arc['arc_id']]); ?>" rel="next"
                                         class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                                         data-upgraded=",MaterialButton,MaterialRipple">下一页<span
                    class="mdl-button__ripple-container"><span class="mdl-ripple is-animating"
                                                               style="width: 225.242px; height: 225.242px; transform: translate(-50%, -50%) translate(81px, 22px);"></span></span></a>
            </div>
        <?php endif; ?>
    </div>
</main><!-- #main -->




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