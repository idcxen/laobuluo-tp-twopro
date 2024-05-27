<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', ' - '); ?><?php $this->options->title(); ?>
<?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>
    <?php if($this->is('index')): ?>
    <meta name="keywords" content="<?php $this->options->keyswords() ?>" />
    <meta name="description" content="<?php $this->options->descriptions() ?>" />	
<?php else: ?>
<?php $this->header(); ?><?php endif; ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>src/css/layui.css" />
        <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>src/css/index.css" />
        <script src="<?php $this->options->themeUrl(); ?>src/layui.js"></script>
        <script src="<?php $this->options->themeUrl(); ?>src/js/main.js"></script>
</head>
<body>

        <!-- 内容 -->
        <div class="layui-container mt10">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md3">
                    <div class="laobuluo-panel">
                        <div class="laobuluo-profile text-center">
                            <span class="vertical"><i class="layui-icon layui-icon-more-vertical"></i></span>
                            <a class="avatar" href="<?php $this->options->siteUrl(); ?>"><img class="img-circle" src="<?php $this->options->logoUrl() ?>"></a>
                            <h2 class="name"><?php $this->options->title() ?></h2>
                            <h3 class="title"><?php $this->options->description() ?></h3>
							<div class="laobuluo-search mt20">
									<i class="layui-icon layui-icon-search"></i>
									<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
										<input class="layui-input" type="text" id="s" name="s" placeholder="<?php _e('按回车搜索'); ?>" />
									</form>
							</div>
                        </div>
                        <div class="laobuluo-nav-tree">
                            <ul class="layui-nav layui-nav-tree layui-nav-row" lay-filter="test">
                                <li class="layui-nav-item <?php if($this->is('index')): ?> current<?php endif; ?>"><a href="<?php $this->options->siteUrl(); ?>">网站首页</a></li>
                         <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                           <?php while($category->next()): ?>
                                <li class="layui-nav-item <?php if($this->is('category', $category->slug)): ?>current<?php endif; ?>">
									<a href="<?php $category->permalink(); ?>" 
									 title="<?php $category->name(); ?>">
									 <?php $category->name(); ?></a></li>
                           <?php endwhile; ?>
                            </ul>
                        </div>
						
                    </div>

                    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
					<div class="laobuluo-hots laobuluo-panel mt10">					
					<h5 class="widget-title"><?php _e('最新文章'); ?></h5>
						<ul class="widget-navcontent">
							            <li class="item item-01 active">
							                <ul>
                                                <?php
                                        $this->widget('Widget_Contents_Post_Recent','pageSize=6')->to($recent);
                                        if($recent->have()):
                                        while($recent->next()):
                                            ?>
							                    <li><time><?php $recent->date('Y-m-d');?></time><a href="<?php $recent->permalink();?>"><?php $recent->title(20, '...');?></a></li>
                                                <?php endwhile; endif;?>
							                    
							                </ul>
							            </li>
						</ul>
						
					</div>
                     <?php endif; ?>

                     <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
                    <div class="laobuluo-hots laobuluo-panel mt10">                 
                    <h5 class="widget-title"><?php _e('文章归档'); ?></h5>
                        <ul class="widget-navcontent">
                                        <li class="item item-01 active">
                                            <ul>
                                                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y-m')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
                                               
                                               
                                                
                                            </ul>
                                        </li>
                        </ul>
                        
                    </div>
                     <?php endif; ?>

                </div>
