<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Замовлення № <?=$order_id?> (<?=$state?>)</h2>

<?php if($show_order): ?>

<p>
<?php if($show_order[0]['status'] == 0): ?>
<a class="edit" href="?view=orders&amp;confirm=<?=$order_id?>">Підтвердити замовлення</a> |
<?php endif; ?> 
<a class="del" href="?view=orders&amp;del_order=<?=$order_id?>">Видалити замовлення</a>
</p>

<br />
<table class="tabl" cellspacing="1">
    <tr>
        <th class="number">№</th>
        <th class="str_name" style="width:280px;">Назва товару</th>
        <th class="str_sort">Ціна</th>
        <th class="str_action">Кількість</th>
    </tr>
<?php $i = 1; $total_sum = 0; ?>
<?php foreach($show_order as $item): ?>
    <tr>
        <td><?=$i?></td>
        <td class="name_page"><?=$item['name']?></td>
        <td><?=$item['price']?></td>
        <td><?=$item['quantity']?></td>
    </tr>
<?php $i++; $total_sum += $item['price'] * $item['quantity']; ?>
<?php endforeach; ?>
</table>

<h2>Загальна вартість замовлення: <span style="color:#e35a0f;"><?=$total_sum?></span></h2>
<h2>Дата замовлення: <span style="color:#e35a0f;"><?=$item['date']?></span></h2>
<h2>Спосіб доставки: <span style="color:#e35a0f;"><?=$item['sposob']?></span></h2>

<h2>Дані покупця:</h2>
            
<table class="tabl" cellspacing="1">
    <tr>
        <th class="number" style="width:140px;">ПІБ</th>
        <th class="str_name" style="width:200px;">Адреса</th>
        <th class="str_sort">Для зв'язку</th>
        <th class="str_action">Примітка</th>
    </tr>
    <tr>
        <td><?=htmlspecialchars($item['customer'])?></td>
        <td class="name_page"><?=htmlspecialchars($item['address'])?></td>
        <td>Email: <?=htmlspecialchars($item['email'])?><br />Телефон: <?=htmlspecialchars($item['phone'])?></td>
        <td style="text-align:left;"><?=htmlspecialchars($item['prim'])?></td>
    </tr>
</table>

<p>
<?php if($show_order[0]['status'] == 0): ?>
<a class="edit" href="?view=orders&amp;confirm=<?=$order_id?>">Підтвердити замовлення</a> |
<?php endif; ?> 
<a class="del" href="?view=orders&amp;del_order=<?=$order_id?>">Видалити замовлення</a>
</p>
<?php if($pages_count > 1) pagination($page, $pages_count); ?>
<?php else: ?>
<div class="error">Замовлення з тиким номером нема</div>
<?php endif; ?>
	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>