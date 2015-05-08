<?php defined('ISHOP') or die('Access denied'); ?>
<?php if($goods): // если есть запрошенный товар ?>
 
<div class="catalog-detail">
<h1><?=$goods['name']?></h1>


<img src="<?=PRODUCTIMG?><?=$goods['img']?>" style="float: left;" />

<div class="short-opais">
    <?=$goods['anons']?>
    <p class="price-detail">Ціна :  <span><?=$goods['price']?></span></p>
    <a href="?view=addtocart&amp;goods_id=<?=$goods['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-index.jpg" alt="Додати в корзину" /></a>
</div> <!-- .short-opais -->

<div class="clr"></div>

<?php if($goods['img_slide']): // если есть картинки галереи ?>
<div class="item_gallery">
   <!--<div class="item_img">
       <img src="" />
   </div>  .item_img -->
   <div class="item_thumbs">
   <?php foreach($goods['img_slide'] as $item): ?>
       <a rel="gallery" title="<?=$goods['name']?>" href="<?=GALLERYIMG?>photos/<?=$item?>"><img src="<?=GALLERYIMG?>thumbs/<?=$item?>" /></a>
   <?php endforeach; ?>
   </div> <!-- .item_thumbs -->
</div> <!-- .item_gallery -->
<?php endif; ?>


<div class="long-opais">
<?=$goods['content']?>				
</div> <!-- .long-opais -->
   
</div> <!-- .catalog-detail -->

<?php else: ?>
    <div class="error">Такого товара нет</div>
<?php endif; ?>
