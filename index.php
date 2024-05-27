<?php
/**
 * 1. 这是老部落团队制作的第一款Typecho主题，你可以在 <a href="https://www.laobuluo.com/" target="_blank">老部落网站</a> 获得更多网站主题、插件和教程信息。
 * 2. 主题采用LAYUI前端、参考TP官方评论布局、参考网上TP调用代码和其他样式调用。
 * 3. 官方网站：<a href="https://www.laobuluo.com/" target="_blank">老部落网站</a> / 公众号：<font color="red">QQ69377078 (获取更多资源信息) </font>
 * @package TwoPro
 * @author 老部落团队
 * @version 1.0
 * @link https://www.laobuluo.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="layui-col-md9">
                    <div class="laobuluo-panel">
                        <div class="laobuluo-content">

                            <?php while($this->next()): ?> 
                            <div class="laobuluo-content-list">
                                <div class="content-list-header">
                                    <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                                </div>
                                <div class="content-list-entry">
                                    <?php $this->excerpt(180, '[...]'); ?>
                                </div>
                                <p class="content-list-meta">
                                    <span><i class="layui-icon layui-icon-note"></i><?php $this->category(','); ?></span>
                                    <span><i class="layui-icon layui-icon-date"></i><?php $this->date('Y-m-d'); ?></span>
                                </p>
                            </div>
                           <?php endwhile; ?>
                        </div>
                        <!-- 分页 -->
                        <div class="laobuluo-page">
                           <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                        </div>
                        <!-- 分页 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 内容 -->

        <?php $this->need('footer.php'); ?>