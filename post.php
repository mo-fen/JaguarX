<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="content homepage"> 
    <div class="content-area container"> 
        <div class="site-content"> 
            <section class="post-content"> 
                <div class="single-post-inner grap"> 
                    <?php $this->content(''); ?>
                </div>
            </section>
        <div class="tag-list">
            <?php $this->category(','); ?>,<?php $this->tags(',', true, 'none'); ?>
        </div>
    <div class="author-field u-textAlignCenter">
        <?php $this->author->gravatar('64') ?>
        <h3><?php $this->author(); ?></h3>
    </div>
</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
