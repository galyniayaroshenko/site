<?php defined('ISHOP') or die('Access denied'); ?>
<div id="content-zakaz">
	<h2>Оформлення замовлення</h2>
 <?php
 if(isset($_SESSION['order']['res'])){
    echo $_SESSION['order']['res'];
 }
 ?>
 <?php if($_SESSION['cart']): // проверка корзины, если в корзине есть товары ?>
	<table class="zakaz-maiin-table" border="0" cellspacing="0" cellpadding="0">
	<form method="post" action="">
	  <tr>
		<td class="z_top">&nbsp;&nbsp;&nbsp;&nbsp;найменування</td>
		<td class="z_top" align="center">кількість</td>
		<td class="z_top" align="center">вартість</td>
		<td class="z_top" align="center">&nbsp;</td>
	  </tr>
<?php foreach($_SESSION['cart'] as $key => $item): ?>
	  <tr>
		<td class="z_name">
			<a href="?view=product&amp;goods_id=<?=$key?>"><img src="<?=PRODUCTIMG?><?=$item['img']?>" width="150" title="" /></a> 
			<a href="?view=product&amp;goods_id=<?=$key?>"><?=$item['name']?></a>
		</td>
		<td class="z_kol"><input id="id<?=$key?>" class="kolvo" type="text" value="<?=$item['qty']?>" name="" /></td>
		<td class="z_price"><?=$item['price']?></td>
		<td class="z_del"><a href="?view=cart&amp;delete=<?=$key?>"><img src="<?=TEMPLATE?>images/delete.jpg" title="видалити товар із замовлення" /></a></td>
	  </tr>
<?php endforeach; ?>
	  <tr>
		<td class="z_bot">&nbsp;&nbsp;&nbsp;&nbsp;Разом:</td>
		<td class="z_bot" colspan="3" align="right"><?=$_SESSION['total_quantity']?> шт &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$_SESSION['total_sum']?> грн.</td>
	  </tr>
	  
	</table>
	
	<div class="sposob-dostavki">
		<h4>Способи доставки:</h4>
        <?php foreach($dostavka as $item): ?>
        <p><input type="radio" name="dostavka" value="<?=$item['dostavka_id']?>" /><?=$item['name']?></p>
        <?php endforeach; ?>
	</div>		
	
	
	<h3>Інформація для доставки:</h3>
<?php if(!$_SESSION['auth']['user']): // проверка авторизации ?>	
	<table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
	  <tr class="notauth">
		<td class="zakaz-txt">*ПІБ</td>
		<td class="zakaz-inpt"><input type="text" name="name" value="<?=htmlspecialchars($_SESSION['order']['name'])?>" /></td>
		<td class="zakaz-prim">Приклад: Ярошенко Галина Юріївна</td>
	  </tr>
	  <tr class="notauth">
		<td class="zakaz-txt">*Е-маіл</td>
		<td class="zakaz-inpt"><input type="text" name="email" value="<?=htmlspecialchars($_SESSION['order']['email'])?>" /></td>
		<td class="zakaz-prim">Приклад: test@mail.ru</td>
	  </tr>
	  <tr class="notauth">
		<td class="zakaz-txt">*Телефон</td>
		<td class="zakaz-inpt"><input type="text" name="phone" value="<?=htmlspecialchars($_SESSION['order']['phone'])?>" /></td>
		<td class="zakaz-prim">Приклад: 8 937 999 99 99</td>
	  </tr>
	  <tr class="notauth">
		<td class="zakaz-txt">*Адреса доставки</td>
		<td class="zakaz-inpt"><input type="text" name="address" value="<?=htmlspecialchars($_SESSION['order']['addres'])?>" /></td>
		<td class="zakaz-prim">Приклад: м. Львів, вул. Пасічна буд.62, кв.110.</td>
	  </tr>
	  <tr>
		<td class="zakaz-txt" style="vertical-align:top;">Примітка </td>
		<td class="zakaz-txtarea"><textarea name="prim"><?=htmlspecialchars($_SESSION['order']['prim'])?></textarea></td>
		<td class="zakaz-prim" style="vertical-align:top;">Приклад: Зателефонуйте будь ласка після 10 вечора,
до цього часу я на роботі </td>
	  </tr>
	</table>
    <?php else: // если пользователь авторизован ?>
    <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
        <tr>
    		<td class="zakaz-txt" style="vertical-align:top;">Примітка </td>
    		<td class="zakaz-txtarea"><textarea name="prim"></textarea></td>
    		<td class="zakaz-prim" style="vertical-align:top;">Приклад: Зателефонуйте будь ласка після 10 вечора,
до цього часу я на роботі </td>
        </tr>
	</table>
<?php endif; // конец условия проверки авторизации ?>		
		<input type="image" name="order" src="<?=TEMPLATE?>images/addcard-index.jpg" /> 
		
		<br /><br /><br /><br />	
	
	</form>
    <?php else: // если товаров нет ?>
        Корзина пуста
    <?php endif; // конец условия проверки корзины ?>
<?php
unset($_SESSION['order']);
?>    
</div> <!-- .content-zakaz -->