<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
    <h1>Вибір по параметрах</h1>
    <?php if($products['notfound']): // если ничего не найдено ?>
        <?php echo $products['notfound'] ?>
    <?php else: // если есть результаты поиска ?>
<?php foreach($products as $product): ?>
<!-- Табличный вид продуктов -->				
<div class="product-table">
	<h2><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
	<div class="product-table-img-main">
    <div class="product-table-img">
		<a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="64" /></a>
		<div> <!-- Иконки -->
            <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-cat-lider.png" alt="лидери продажів" />'; ?>
            <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-cat-new.png" alt="новинка" />'; ?>
            <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-cat-sale.png" alt="розпродажа" />'; ?>							
		</div> <!-- Иконки -->
	</div>
    </div>
	<p class="cat-table-more"><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>">детальніше...</a></p>
	<p>Цена :  <span><?=$product['price']?></span></p>
	<a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-index.jpg" alt="Добавити в корзину" /></a>
</div> <!-- .product-table -->
<!-- Табличный вид продуктов -->
<?php endforeach; ?>
    <?php endif; ?>
</div> <!-- .catalog-index -->