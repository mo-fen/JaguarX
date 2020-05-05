<?php
/**
 * 这是 Jaguar 主题的重构版。
 * 
 * @package JaguarX 
 * @author slientwind
 * @version 1.0
 * @link http://mofeng.xyz
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div id="main" class="content homepage">
<div class="container"> 
<div class="site-content"> 
<?php while($this->next()): ?>
<article class="post-item"> 
<div class="post-image rcorners" style="background-image: url(<?php $this->options->themeUrl(''); ?><?php echo thumb($this->cid); ?>);">
<div class="mask-wrapper"> 
<h2 class="post-title"> <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a> </h2> 
<div class="post-info">
<span class="post-time"><time><?php $this->date(); ?></time></span>
<span class="middotDivider"></span>
<span class="post-tags"><?php $this->category(','); ?></span>
</div> 
</div> 
</div> 
</article> 
<?php endwhile; ?>


    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
