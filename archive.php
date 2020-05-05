<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

        <?php if ($this->have()): ?>
<div id="main" class="content homepage">
    <div class="content-area container"> 
        <div class="site-content">
        <?php while($this->next()): ?>
            <article class="post-item"> 
                    <div class="post-image rcorners" style="background-image: url(<?php $this->options->themeUrl(''); ?><?php echo thumb($this->cid); ?>);">
                        <div class="info-mask"> 
                            <div class="mask-wrapper"> 
                                <h2 class="post-title"> <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a> </h2> 
                                    <div class="post-info">
                                        <span class="post-time"><time><?php $this->date(); ?></time></span>
                                        <span class="middotDivider"></span>
                                        <span class="post-tags"><?php $this->category(','); ?></span>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </article> 
<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>
