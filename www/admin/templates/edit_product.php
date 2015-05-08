<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Редагування товару</h2>
<?php
if(isset($_SESSION['edit_product']['res'])){
    echo $_SESSION['edit_product']['res'];
    unset($_SESSION['edit_product']);
}
?>
<div id="goods_id" style="display: none;"><?=$get_product['goods_id']?></div>
<form action="" method="post" enctype="multipart/form-data">
				
	<table class="add_edit_page" cellspacing="0" cellpadding="0">
	  <tr>
		<td class="add-edit-txt">Назва товару:</td>
		<td><input class="head-text" type="text" name="name" value="<?=htmlspecialchars($get_product['name'])?>" /></td>
	  </tr>
      <tr>
		<td class="add-edit-txt">Ціна:</td>
		<td><input class="head-text" type="text" name="price" value="<?=$get_product['price']?>" /></td>
	  </tr>
       <tr>
		<td class="add-edit-txt">Ключові слова</td>
		<td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($get_product['keywords'])?>" /></td>
	  </tr>
       <tr>
		<td class="add-edit-txt">Описування:</td>
		<td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($get_product['description'])?>" /></td>
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
		<td>Картинка товару: <br />
        <span class="small">Для видалення картинки натисніть на неї</span></td>
		<td class="baseimg"><?=$baseimg?></td>
	  </tr>
      <tr>
		<td>Короткий опис:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor1" class="anons-text" name="anons"><?=htmlspecialchars($get_product['anons'])?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
		</td>
	  </tr>
      <tr>
		<td>Детальний опис:</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor2" class="anons-text" name="content"><?=htmlspecialchars($get_product['content'])?></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor2' );
</script>
		</td>
	  </tr>
      <tr>
        <td>Картинки галереї: <br />
        <span class="small">Для видалення картинки натисніть на неї</span></td>
        <td class="slideimg"><?=$imgslide?></td>
      </tr> 
      <tr>
        <td>
            <div id="butUpload">Вибрати файл</div>
        </td>
        <td>
            <div id="filesUpload"></div>
        </td>
      </tr>
      <tr>
        <td>Відмітити як:</td>
        <td><input type="checkbox" name="new" value="1" <?php if($get_product['new']) echo 'checked=""'; ?> /> Новинка <br />
        	<input type="checkbox" name="hits" value="1" <?php if($get_product['hits']) echo 'checked=""'; ?> /> Лідер продажів<br />
            <input type="checkbox" name="sale" value="1" <?php if($get_product['sale']) echo 'checked=""'; ?> /> Разпродаж <br /></td>
      </tr>
      </tr>
      <tr>
        <td>Показувати:</td>
        <td><input type="radio" name="visible" value="1" <?php if($get_product['visible']) echo 'checked=""'; ?> /> Так <br />
        <input type="radio" name="visible" value="0" <?php if(!$get_product['visible']) echo 'checked=""'; ?> /> Ні </td>
      </tr>  
	</table>
	
	<input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" /> 
</form>	
	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
<script type="text/javascript">
// загрузка картинок
var button = $("#butUpload"), interval; // кнопка загрузки + интервал ожидания
var path = '<?=GALLERYIMG?>thumbs/'; // путь к папке превью
var id = $("#goods_id").text(); // ID товара

new AjaxUpload(button, {
    action: './',
    name: 'userfile',
    data: {id: id},
    onSubmit: function(file, ext){
        if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
            alert('Заборонений тип файлу');
            // cancel upload
            return false;
        }
        button.text("Загруження");
        this.disable();
        
        interval = window.setInterval(function(){
            var text = button.text();
            if(text.length < 14){
                button.text(text + '.');
            }else{
                button.text("Загруження");
            }
        },300);
    },
    onComplete: function(file, response){
        button.text("Загрузити ще?");
        window.clearInterval(interval);
        this.enable();
        var res = JSON.parse(response);
        if(res.answer == "OK"){
             $("#filesUpload").append("<img src='" + path + res.file + "' />");
        }else{
            alert(res.answer);
        }
    }
});
</script>
</body>
</html>