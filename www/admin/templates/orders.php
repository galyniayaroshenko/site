<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Замовлення <span class="small">(необроблені замовлення підсвічені)</span></h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
<?php if($orders): ?>
<table class="tabl" cellspacing="1">
    <tr>
        <th class="number">№ замовлення</th>
        <th class="str_name" style="width:280px;">Покупець</th>
        <th class="str_sort">Дата</th>
        <th class="str_action">Перегляд</th>
    </tr>
<?php foreach($orders as $item): ?>
<tr <?php if($item['status'] == 0) echo "class='highlight'"; ?> >
    <td><?=$item['order_id']?></td>
    <td class="name_page"><?=htmlspecialchars($item['name'])?></td>
    <td><?=$item['date']?></td>
    <td><a href="?view=show_order&amp;order_id=<?=$item['order_id']?>" class="edit">Просмотреть</a></td>
</tr>
<?php endforeach; ?>
</table>
<?php if($pages_count > 1) pagination($page, $pages_count); ?>
<?php else: ?>
<div class="error">Нема необроблених замовлень</div>
<?php endif; ?>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>