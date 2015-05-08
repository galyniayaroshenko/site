<?php defined('ISHOP') or die('Access denied');?>
 
    <div class="content-txt">
    <?php if($news_text): ?>
        <h1><?=$news_text['title']?></h1>
        <span class="news_date"><?=$news_text['data']?></span>
        <br /><br />
        <?=$news_text['text']?>
    <?php else: ?>
        <p>Такої новини нема!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->