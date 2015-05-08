<?php defined('ISHOP') or die('Access denied');?>


<div class="catalog-index">

            <div class="vid-sort">
					Вид: 
						<a href="#" id="grid" class="grid_list"><img src="<?=TEMPLATE?>images/vid-tabl.gif" title="табличний вигляд" alt="табличний вигляд" /></a> 
						<a href="#" id="list" class="grid_list"><img src="<?=TEMPLATE?>images/vid-line.gif" alt="лінійний вигляд" /></a>  
						&nbsp;&nbsp;           
					Сортувати по:&nbsp; 
                    <a id="param_order" class="sort-top"><?=$order?></a>
                <div class="sort-wrap">
                    <?php foreach($order_p as $key => $value): ?>
                        <?php if($value[0] == $order) continue; ?>
                            <a href="?view=cat&amp;category=<?=$category?>&amp;order=<?=$key?>&amp;page=<?=$page?>" class="sort-bot"><?=$value[0]?></a>                        
                    <?php endforeach; ?>
                </div>    
						
	       </div><!--vid-sort -->
<?php if($pages_count > 1)pagination($page, $pages_count);?>           
     <?php if($products): // если получены товары категории ?>
<?php foreach($products as $product): ?> 
<?php if(!isset($_COOKIE['display']) OR $_COOKIE['display'] == 'grid'): // если вид - сетка ?>
<!--табличний вигляд продуктів -->     
           <div class="product-table">
					<h2><a href="?view=product&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
                    <div class="product-table-img-main">
                        <div class="product-table-img">                 
                            <a href="?view=product&goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="200" /></a>                     
                            <div> <!-- Иконки -->
                                <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-cat-lider.png" alt="лидери продаж" />'; ?>
                                <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-cat-new.png" alt="новинка" />'; ?>
                                <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-cat-sale.png" alt="распродажа" />'; ?>							
                    		</div> <!-- Иконки -->
                        </div>
                    </div>    
					<p class="cat-table-more"><a href="?view=product&goods_id=<?=$product['goods_id']?>">детальніше...</a></p>
					<p>Цена :  <span><?=$product['price']?></span></p>
					<a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-index.jpg" alt="Добавити в корзину" /></a>
				</div> <!-- .product-table -->
                <!--табличний вигляд продуктів -->
                <?php else: // если линейный вид ?> 
                <!--лінійний  вигляд продуктів --> 
                <div class="product-line">					
					<div class="product-line-img">
						<a href="?view=product&goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>"  width="150px" alt="" /></a>
					</div>
					<div class="product-line-price">
						<p>Ціна :  <span><b><?=$product['price']?> </b></span></p>
						<a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-index.jpg" alt="Добавити в корзину" /></a>
					<div> <!-- Иконки -->
                        <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-line-lider.jpg" alt="лидеры продаж" />'; ?>
                        <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-line-new.jpg" alt="новинка" />'; ?>
                        <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-line-sale.jpg" alt="распродажа" />'; ?>							
            		</div> <!-- Иконки -->
						<p class="cat-line-more"><a href="?view=product&goods_id=<?=$product['goods_id']?>">детальніше ...</a></p>
					</div>	
					<div class="product-line-opis">
						<h2><a href="?view=product&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
						<p><?=$product['anons']?></p>                  
					</div>
                   </div> 
                <!--лінійний  вигляд продуктів -->
<?php endif; // конец условия переключателя видов  ?>
<?php endforeach; ?>
<div class="clr"></div>
<?php if($pages_count > 1) pagination($page, $pages_count);?>
<?php else: ?>
    <p>Здесь товаров пока нет!</p>
<?php endif; ?>	
<a name="nav"></a>			
</div> <!-- .catalog-index -->