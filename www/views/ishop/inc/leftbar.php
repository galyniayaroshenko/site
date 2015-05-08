<?php defined('ISHOP') or die('Access denied');?>
<div id="left-bar">
          <div class="left-bar-cont">
			<h2><span>Каталог</span></h2>
			<h3 class="nav-new"><a href="?view=new">Новинки</a></h3>
			<h3 class="nav-lider"><a href="?view=hits">Лідери продажів</a></h3>
			<h3 class="nav-sale"><a href="?view=sale">Розпродаж</a></h3>
            <!-- Меню категорий -->
            <h4><span>- Комп'ютерна техніка</span></h4>
			<ul class="nav-catalog" id="accordion">
            <?php foreach($cat as $key => $item): ?>
                        <?php if(count($item) > 1): // если это родительская категория ?>
                        <h3><li><a href="#"><?=$item[0]?></a></li></h3>
                            <ul>
                                <li>- <a href="?view=cat&category=<?=$key?>">Все модели</a></li>
                                <?php foreach($item['sub'] as $key => $sub): ?>
                                <li>- <a href="?view=cat&category=<?=$key?>"><?=$sub?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php elseif($item[0]): // если самостоятельная категория ?>
                            <li><a href="?view=cat&category=<?=$key?>"><?=$item[0]?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
			</ul>
            <!-- Меню категорий -->
            <div class="bar-contact">
				<h3>Контакти:</h3>
				<p><strong>Телефон:</strong><br />
				<span>8 (800) 700-00-01</span></p>
			
				<p><strong>Режим работи:</strong><br />
				В будні дні: <br />
				з 9:00 до 18:00<br />
				Суббота, Неділя:<br />
			    вихідні</p>
			</div>
             <div class="news">
				<h3>Новини</h3>
				<?php if($news): ?>
                        <?php foreach($news as $item): ?>
                            <p>
					           <span><?=$item['data']?></span>
        					   <a href="?view=news&amp;news_id=<?=$item['news_id']?>"><?=$item['title']?></a>	
        					</p>   
                        <?php endforeach; ?>
                        <a href="?view=archive" class="news-arh">Архів новин</a>
                    <?php else: ?>
                        <p>Новин поки нема.</p>
                    <?php endif; ?>
			</div>
             <!-- Информеры -->
                <?php foreach($informers as $informer): ?>
                <div class="info">
                    <h3><?=$informer[0]?></h3>
                    <?php foreach($informer['sub'] as $key => $sub): ?>
                    <p>- <a href="?view=informer&amp;informer_id=<?=$key?>"><?=$sub?></a></p>
                    <?php endforeach; ?>
                </div> <!-- .info -->
                <?php endforeach; ?>
                <!-- Информеры -->
            <!--<div class="info">
				<h3>Способи оплати:</h3>
				<p>- <a href="#">Готівковий розрахунок</a></p>
				<p>- <a href="#">Пластиковою карткою</a></p>
				<p>- <a href="#">Кредит</a></p>
				<p>- <a href="#">Розрахувати кредит</a></p>
				<p>- <a href="#">Безготівковий розрахунок</a></p>
			</div>
             <div class="info">
				<h3>Доставка:</h3>
				<p>- <a href="#">Пошта України</a></p>
				<p>- <a href="#">Кур'єрська служба</a></p>
			</div>
			<div class="info">
				<h3>Інформація для вас:</h3>
				<p>- <a href="#">Гарантія</a></p>
				<p>- <a href="#">Як вибрати телефон</a></p>
				<p>- <a href="#">Ремонт і обслуговування</a></p>
				<p>- <a href="#">Акції та новинки</a></p>
				<p>- <a href="#">Условия доставки</a></p>
			</div> -->  
          </div>  
        </div>
        
        