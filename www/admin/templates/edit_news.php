<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	
<h2>Редагування новини</h2>
<?php
if(isset($_SESSION['edit_news']['res'])){
    echo $_SESSION['edit_news']['res'];
    unset($_SESSION['edit_news']['res']);
}
?>
<form action="" method="post">
	
	<table class="add_edit_page" cellspacing="0" cellpadding="0">
	  <tr>
		<td class="add-edit-txt">Назва новини:</td>
		<td><input class="head-text" type="text" name="title" value="<?=htmlspecialchars($get_news['title'])?>" /></td>
	  </tr>
	  <tr>
		<td>Ключові слова:</td>
		<td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($get_news['keywords'])?>" /></td>
	  </tr>
      <tr>
		<td>Опис:</td>
		<td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($get_news['description'])?>" /></td>
	  </tr>
      <tr>
		<td>Дата новини:</td>
		<td><input class="date-text" type="text" name="data" value="<?=$get_news['data']?>" /></td>
	  </tr>
      <tr>
		<td>Анонс новини:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor1" class="full-text" name="anons"><?=$get_news['anons']?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
		</td>
	  </tr>
	   <tr>
		<td>Текст новини:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor2" class="full-text" name="text"><?=$get_news['text']?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor2' );
</script>
		</td>
	  </tr>
	</table>
	
	<input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" /> 

</form>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>