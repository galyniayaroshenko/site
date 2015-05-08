<?php defined('ISHOP') or die('Access denied');?>
<div id="right-bar">
           <div class="right-bar-cont">
			<div class="enter">
				<h2><span>Авторизація</span></h2>
				<div class="authform">
                <?php if(!$_SESSION['auth']['user']): ?>
                <form method="post" action="#">
                    <label for="login">Логин: </label><br />
                    <input type="text" name="login" id="login" /><br />
                    <label for="pass">Пароль: </label><br />
                    <input type="password" name="pass" id="pass" /><br /><br />
                    <input type="submit" name="auth" id="auth" value="Війти" />
                    <p class="link"><a href="?view=reg">Регістрація</a></p>
                </form>
                <?php
                    if(isset($_SESSION['auth']['error'])){
                        echo '<div class="error">' .$_SESSION['auth']['error']. '</div>';
                        unset($_SESSION['auth']);
                    }
                ?>
                <?php else: ?>
                    <p>Добро пожаловать, <?=htmlspecialchars($_SESSION['auth']['user'])?></p>
                    <a href="?do=logout">Вихід</a>
                <?php endif; ?>
                </div>
                	
			</div><!-- enter -->
           <div class="share-search">
				<h2><span>Вибір за параметрами</span></h2>
				<div>
					<form method="get">
                    <input type="hidden" name="view" value="filter" />
					<p>Вартість:</p>
					від <input class="podbor-price" type="text" name="startprice"  value="<?=$startprice?>"/>
					до <input class="podbor-price" type="text" name="endprice" value="<?=$endprice?>"/>
					 грн.
					 <br /><br />
					<p>Виробники:</p>
                    <?php foreach($cat as $key => $item): ?>
                        <?php if($item[0]): ?>
                        <input type="checkbox" name="brand[]" value="<?=$key?>" id="<?=$key?>" <?php if($key == $brand[$key]) echo "checked"?> />
                        <label for="<?=$key?>"><?=$item[0]?></label> <br />
                        <?php endif; ?>
                    <?php endforeach; ?>
					<!--<select>
						<option> ASUS</option>
						<option>Toshiba</option>
						<option>Lenovo</option>
						<option>Sony</option>
						<option>ACER</option>
						<option>HP</option>							
					</select>-->						
					<input class="podbor" type="image" src="<?=TEMPLATE?>images/podbor.jpg" />						
					</form>
				</div>
			</div>
            </div>
            </div>