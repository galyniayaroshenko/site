<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Список сторінок</h2>
    <?php
        if(isset($_SESSION['answer'])){
            echo $_SESSION['answer'];
            unset($_SESSION['answer']);
        }
    ?>
	<a href="?view=add_page"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавити сторінку" /></a>
	<table class="tabl" cellspacing="1">
	  <tr>
		<th class="number">№</th>
		<th class="str_name">Назва сторінки</th>
		<th class="str_sort">Сортування</th>
		<th class="str_action">Дія</th>
	  </tr>
<?php $i = 1; ?>
<?php foreach($pages as $item): ?>
<tr>
	<td><?=$i?></td>
	<td class="name_page"><?=$item['title']?></td>
	<td><?=$item['position']?></td>
	<td><a href="?view=edit_page&amp;page_id=<?=$item['page_id']?>" class="edit">змінити</a>&nbsp; | &nbsp;<a href="?view=del_page&amp;page_id=<?=$item['page_id']?>" class="del">видалити</a></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>      
	</table>
	<a href="?view=add_page"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавити сторінку" /></a>

</div> <!-- .content -->
	

