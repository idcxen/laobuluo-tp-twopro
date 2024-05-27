<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

                  <div class="layui-col-md9">
                      <div class="laobuluo-panel laobuluo-detali">
                          <h1 class="detali-title text-center"><?php $this->title() ?></h1>
                          <div class="laobuluo-date text-center"><?php $this->date('Y-m-d'); ?><span> · </span><?php get_post_view($this) ?>次浏览</div>
                          <div class="laobuluo-detali-cont">
                               <?php $this->content(); ?>
                          </div>
                          <div class="laobuluo-share">
                               <div class="laobuluo-share-lf">
                                    <a><i class="layui-icon layui-icon-login-weibo"></i></a>
                                    <a><i class="layui-icon layui-icon-login-wechat"></i></a>
                                    <a><i class="layui-icon layui-icon-login-qq"></i></a>
                               </div>
                               <div class="laobuluo-share-lr">
                                    <a><b class="reply-bg"><i class="layui-icon layui-icon-reply-fill"></i></b><span><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span></a>
                               </div>
                          </div>
                        
                          <!-- 评论 -->
                         <?php $this->need('comments.php'); ?>
                          
                          <!-- 评论 -->
                      </div>
                      
                  </div>
             </div>
        </div>
        
    <?php $this->need('footer.php'); ?>