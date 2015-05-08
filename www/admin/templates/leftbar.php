<?php defined('ISHOP') or die('Access denied'); ?>
	<div class="content-main">
    <?php if($count_new_orders > 0): ?>
<p class="new_orders"><a href="?view=orders&amp;status=0"> Присутні нові закази(<?=$count_new_orders?>)</a></p>
<?php endif; ?>
		<div class="leftBar">
			<ul class="nav-left">
				<li><a <?=active_url()?> href="<?=PATH?>admin/">Основні сторінки</a></li>
				<li><a <?=active_url("view=informers")?> href="?view=informers">Інформери</a></li>
				<li><a <?=active_url("view=brands")?> href="?view=brands">Основні категорії</a></li>

<!-- Аккордеон -->
<ul class="nav-catalog" id="accordion">
    <?php foreach($cat as $key => $item): ?>
        <?php if(count($item) > 1): // если это родительская категория ?>
        <h3><li><a style="font-size: 13px;" href="#"><?=$item[0]?></a></li></h3>
            <ul>
                <li>- <a <?=active_url("category=$key")?> href="?view=cat&amp;category=<?=$key?>">Все модели</a></li>
                <?php foreach($item['sub'] as $key => $sub): ?>
                <li>- <a <?=active_url("category=$key")?> href="?view=cat&amp;category=<?=$key?>"><?=$sub?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php elseif($item[0]): // если самостоятельная категория ?>
            <li><a <?=active_url("category=$key")?> href="?view=cat&amp;category=<?=$key?>"><?=$item[0]?></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<!-- Аккордеон -->

				<li><a <?=active_url("view=news")?>Новини </a></li>
				<li><a <?=active_url("view=orders")?> href="?view=orders">Замовлення</a></li>
                <li><a <?=active_url("view=users")?> href="?view=users">Користувачі</a></li>
			</ul>
		</div> <!-- .leftBar -->