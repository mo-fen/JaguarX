<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="content homepage">
    <div class="content-area container">
        <div class="site-content">   
            <section class="post-content"> 
                <div class="single-post-inner grap"> 
                    <p>
                    <?php $this->content(''); ?>
                    </p>
                    <br/> 
               </div> 
            </section>
        </div>
    
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
