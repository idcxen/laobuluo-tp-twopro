<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="layui-col-md9">
                    <div class="laobuluo-panel">
                        <div class="laobuluo-content">

                             <?php if ($this->have()): ?>
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
                           <?php else: ?>

                            <div class="content-list-entry">
                                    <?php _e('没有找到任何内容，请重试。'); ?>
                                </div>

<?php endif; ?>
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