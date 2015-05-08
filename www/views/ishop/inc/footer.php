<?php defined('ISHOP') or die('Access denied');?>

    <div class="footer">
  
	   <div class="menu_footer">
       <hr>
        <ul class="menu_footer">
    	<li><a href="<?=PATH?>">Главная</a></li>
        <?php if($pages): ?>
            <?php foreach($pages as $item): ?>
                <li><a href="?view=page&amp;page_id=<?=$item['page_id']?>"><?=$item['title']?></a></li>
            <?php endforeach; ?>
        <?php endif; ?> 			       			         		           
    </ul>
    
    </div>	
</div>