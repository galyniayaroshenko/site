<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
<h2>Інформери</h2>
<a href="?view=add_informer"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_inf.jpg" alt="додати інформер" /></a>
<?php foreach($informers as $informer): ?>
<div class="inf-down">
    <p class="toggle"></p>
	<h3><?=$informer[0]?></h3>
    <p class="inf-link"><a href="?view=edit_informer&amp;informer_id=<?=$informer['informer_id']?>" class="edit">змінити</a>&nbsp; | &nbsp;<a href="?view=del_informer&amp;informer_id=<?=$informer['informer_id']?>" class="del">видалити</a></p>
</div> <!-- .inf-down -->  
<div class="inf-page">
	<table class="inf-tabl" cellspacing="1">
	  <tr>
		<th class="number">№</th>
		<th class="str_name">Назва сторінки</th>
		<th class="str_sort">Сортування</th>
		<th class="str_action">Дія</th>
	  </tr>
<?php if($informer['sub']): ?>
<?php $i = 1; ?>
<?php foreach($informer['sub'] as $key => $value): ?>
	  <tr>
		<td><?=$i?></td>
		<td class="name_page"><?=$value;?></td>
		<td><?=$i?></td>
		<td><a href="?view=edit_link&amp;link_id=<?=$key?>" class="edit">змінити</a>&nbsp; | &nbsp;<a href="?view=del_link&amp;link_id=<?=$key?>" class="del">видалити</a></td>
	  </tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="4"><h3>У цьому інформері сторінок немає</h3></td>
    </tr>
<?php endif; ?>
	</table>
	<a href="?view=add_link&amp;informer_id=<?=$informer['informer_id']?>"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page_inf.jpg" alt="додати сторінку" /></a>
</div> <!-- .inf-page -->
<?php endforeach; ?>
<a href="?view=add_informer"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_inf.jpg" alt="додати інформер" /></a>

		</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>