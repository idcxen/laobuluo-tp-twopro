<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

                  <div class="layui-col-md9">
                      <div class="laobuluo-panel laobuluo-detali">
                          <h1 class="detali-title text-center"><?php $this->title() ?></h1>
                          <div class="laobuluo-date text-center"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a><span> · </span><?php _e('分类: '); ?><?php $this->category(','); ?><span> · </span><?php _e('时间: '); ?><?php $this->date('Y-m-d'); ?><span> · </span><?php get_post_view($this) ?>次浏览</div>
                          <div class="laobuluo-detali-cont">
                               <?php $this->content(); ?>
                          </div>
                          <div class="laobuluo-share">
                               
                               <div class="laobuluo-share-lr">
                                    <a><b class="reply-bg"><i class="layui-icon layui-icon-reply-fill"></i></b><span><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span></a>
                               </div>
                          </div>
                          <!-- 翻页 -->
                          <div class="del-pag">
                               <div class="layui-row">
                                    <div class="layui-col-md4">
                                         <div class="del-pag-lf">
                                             <h3 class="del-pag-title"><?php $this->thePrev('%s','没有了'); ?></h3>
                                             <a class="del-pag-link"><i class="layui-icon layui-icon-prev"></i>上一篇</a>
                                         </div>
                                    </div>
                                    <div class="layui-col-md4 layui-col-md-offset4">
                                        <div class="del-pag-lr">
                                            <h3 class="del-pag-title"><?php $this->theNext('%s','没有了'); ?></h3>
                                            <a class="del-pag-link">下一篇<i class="layui-icon layui-icon-next"></i></a>
                                        </div>
                                    </div>
                               </div>
                          </div>
                          <!-- 翻页 -->
                          <!-- 评论 -->
						 
                           <?php $this->need('comments.php'); ?>
                   
                          <!-- 评论 -->
						  </div>
                      </div>
                      
                  </div>
             </div>
        </div>
        
    <?php $this->need('footer.php'); ?>