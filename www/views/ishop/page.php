<?php defined('ISHOP') or die('Access denied');?>
 
    <div class="content-txt">
    <?php if($get_page): ?>
        <h1><?=$get_page['title']?></h1>
        <?=$get_page['text']?>
    <?php else: ?>
        <p>Такої сторінки нема!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->