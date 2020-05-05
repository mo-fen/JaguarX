<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;



//获取文章第一张图片
function thumb($cid) {
if (empty($imgurl)) {
$rand_num = 4; //随机图片数量，根据图片目录中图片实际数量设置
if ($rand_num == 0) {
$imgurl = "img/random/1.jpg";
//如果$rand_num = 0,则显示默认图片，须命名为"0.jpg"，注意是绝对地址
    }else{
$imgurl = "img/random/".rand(1,$rand_num).".jpg";
//随机图片，须按"1.jpg","2.jpg","3.jpg"...的顺序命名，注意是绝对地址
}
}
 $db = Typecho_Db::get();
 $rs = $db->fetchRow($db->select('table.contents.text')
    ->from('table.contents')
    ->where('table.contents.type = ?', 'attachment')
    ->where('table.contents.parent= ?', $cid)
    ->order('table.contents.cid', Typecho_Db::SORT_ASC)
    ->limit(1));
$img = unserialize($rs['text']);
if (empty($img)){
    echo $imgurl;
}
else{
    echo $imgurl;
    //echo $img['path'];
}
}
//评论添加回复@标记
function get_commentReply_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#" rel="nofollow" class="cute atreply">@' . $author . '</a> : ';
        echo $href;
    }
}
