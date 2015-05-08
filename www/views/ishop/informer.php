<?php defined('ISHOP') or die('Access denied');?>
 
    <div class="content-txt">
    <?php if($text_informer): ?>
        <h1><?=$text_informer['link_name']?></h1>
        <?=$text_informer['text']?>
    <?php else: ?>
        <p>такої сторінки нема!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->