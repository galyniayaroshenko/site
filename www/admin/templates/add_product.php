<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Додавання товару</h2>
<?php
if(isset($_SESSION['add_product']['res'])){
    echo $_SESSION['add_product']['res'];
}
?>

<form action="" method="post" enctype="multipart/form-data">
				
	<table class="add_edit_page" cellspacing="0" cellpadding="0">
	  <tr>
		<td class="add-edit-txt">Назва товару:</td>
		<td><input class="head-text" type="text" name="name" /></td>
	  </tr>
      <tr>
		<td class="add-edit-txt">Ціна:</td>
		<td><input class="head-text" type="text" name="price" value="<?=$_SESSION['add_product']['price']?>"/></td>
	  </tr>
       <tr>
		<td class="add-edit-txt">Ключові слова</td>
		<td><input class="head-text" type="text" name="keywords" value="<?=$_SESSION['add_product']['keywords']?>"/></td>
	  </tr>
       <tr>
		<td class="add-edit-txt">Описання:</td>
		<td><input class="head-text" type="text" name="description" value="<?=$_SESSION['add_product']['description']?>"/></td>
	  </tr>
      <tr>
		<td>Батьківська категорія:</td>
		<td>
        <select class="select-inf" name="category" multiple="" size="10" style="height: auto;">
        	<?php foreach($cat as $key_parent => $item): ?>
                <?php if(count($item) > 1): // если это родительская категория ?>
                <option disabled=""><?=$item[0]?></option>
                <?php $i = 0; ?>
                <?php foreach($item['sub'] as $key => $sub): // цикл дочерних категорий ?>
                <option <?php if($key == $brand_id OR $key_parent == $brand_id AND $i == 0) {echo "selected"; $i = 1;} ?> value="<?=$key?>">&nbsp;&nbsp;- <?=$sub?></option>
                <?php endforeach; // конец цикла дочерних категорий ?>
                <?php elseif($item[0]): // если самостоятельная категория ?>
                <option <?php if($key_parent == $brand_id) echo "selected" ?> value="<?=$key_parent?>"><?=$item[0]?></option>
                <?php endif; // конец условия родительская категория ?>
            <?php endforeach; ?>
        </select>
        </td>
	  </tr>
       <tr>
		<td>Картинка товару:</td>
		<td><input type="file" name="baseimg" /></td>
	  </tr>
      <tr>
		<td>Короткий опис:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor1" class="anons-text" name="anons"><?=$_SESSION['add_product']['anons']?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
		</td>
	  </tr>
      <tr>
		<td>Детальніший опис:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor2" class="anons-text" name="content"><?=$_SESSION['add_product']['content']?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor2' );
</script>
		</td>
	  </tr>
      <tr>
        <td>Картинки галереї:</td>
        <td></td>
      </tr> 
      <tr>
        <td id="btnimg">
            <div><input type="file" name="galleryimg[]" /></div>
        </td>
      </tr>
      <tr>
        <td>
            <input type="button" id="add" value="Додати поле" />
            <input type="button" id="del" value="Видалити поле" />
        </td>
      </tr>
      <tr>
        <td>Відмітити як:</td>
        <td><input type="checkbox" name="new" value="1" /> Новинка <br />
        	<input type="checkbox" name="hits" value="1" /> Лідер продажів <br />
            <input type="checkbox" name="sale" value="1" /> Розпродаж <br /></td>
      </tr>
      </tr>
      <tr>
        <td>Показувати:</td>
        <td><input type="radio" name="visible" value="1" checked="" /> Так <br />
        <input type="radio" name="visible" value="0" /> Ні</td>
      </tr>  
	</table>
	
	<input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" /> 
</form>
<?php unset($_SESSION['add_product']); ?>	
	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>