<?php defined('ISHOP') or die('Access denied');?>

<div class="header">
        <div class="head-logo">
            <a hreaf="/"><img class="logo" src="<?=TEMPLATE?>images/logo1.jpg" alt="Інтернет магазин комп'ютерної техніки" /></a>  </br></br>
            <p>Час роботи ПН - ПТ<br>
            з 8-00 до 20-00</p>
            <p>В вихідні дні<br>
            з 9-00 до 17-00</p>
        </div>
        <div class="search">
            <form method="get" action="">
                <ul class="search-head">
                    <input type="hidden" name="view" value="search"/>
                    <li><input type="text" name="search" id="quickquery" placeholder="Пошук"/>
                    <script type="text/javascript">
			             placeholderSetup('quickquery');
                    </script></li>
                    <li><input type="image" src="<?=TEMPLATE?>images/searc-btn1.jpg" class="serch-btn1"  /></li>
                </ul>
            </form>
            <p>8  (800) 700-00-01</br>
                8  (800) 700-00-01</p>
        </div>
        <div class="korzuna">
            <a href="?view=cart"><img class="korzuna_" src="<?=TEMPLATE?>images/korzuna.jpg" alt="Корзина"></a> 
                <p><span>Корзина</span></br>
                        <?php if($_SESSION['total_quantity']): ?>
                            товари<span> <?=$_SESSION['total_quantity']?> </span></br>
                            сума <span><?=$_SESSION['total_sum']?> </span>грн</p>
                            <?php else: ?>
                                Корзина пуста                           
                        <?php endif; ?>
        </div><!-- корзина -->
</div><br>
<div class="menu">
     <ul class="menu">
		<li><a href="<?=PATH?>">Главная</a></li>
        <?php if($pages): ?>
            <?php foreach($pages as $item): ?>
                <li><a href="?view=page&amp;page_id=<?=$item['page_id']?>"><?=$item['title']?></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
	</ul>
    <hr>
</div>
<div class="kroshka">
<?php if(count($brand_name) > 1): // если подкатегория (слайдер, моноблок...) ?>
    <a href="<?=PATH?>">Мобильні телефони</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <span><?=$brand_name[1]['brand_name']?></span>
<?php elseif(count($brand_name) == 1): // если не дочерняя категория ?>
    <a href="<?=PATH?>">Мобильні телефони</a> / <span><?=$brand_name[0]['brand_name']?></span>

<?php elseif(count($brand_name1) > 1): // если подкатегория (слайдер, моноблок...) ?>
    <a href="<?=PATH?>">Мобильні телефони</a> / <a href="?view=cat&amp;category=<?=$brand_name1[0]['brand_id']?>"><?=$brand_name1[0]['brand_name']?></a> / <a href="?view=cat&amp;category=<?=$brand_name1[1]['brand_id']?>"><?=$brand_name1[1]['brand_name']?></a> / <span><?=$goods['name']?></span>
<?php elseif(count($brand_name1) == 1): // если не дочерняя категория ?>
    <a href="<?=PATH?>">Мобильні телефони</a> / <a href="?view=cat&amp;category=<?=$brand_name1[0]['brand_id']?>"><?=$brand_name1[0]['brand_name']?></a> / <span><?=$goods['name']?></span>

<?php else: ?>
        <a href="<?=PATH?>">Головна</a> /<span><?=$get_page['title']?> </span> <span><?=$news_text['title']?> </span> <span> <?=$text_informer['informer_name']?> </span> <a href="<?=PATH?>?view=archive">Архів новин</a> <span> / <?=$text_informer['link_name']?> </span> <span> </span>
    <?php endif; ?>
    </div>