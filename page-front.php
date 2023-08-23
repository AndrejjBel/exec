<?php
/**
 * Template Name: Front
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Exec
 */

get_header();
?>

	<main id="primary" class="site-main container front">
		<div class="services__items">
            <div class="services__items__item">
            	<div class="services__items__item__title fs44 ff-mediator"><?php echo $post->services_title_item1;?></div>
				<div class="services__items__item__subtitle fs20">
					<?php echo $post->services_subtitle_item1;?>
				</div>
				<div class="services__items__item__description fs20"><?php echo $post->services_description_item1;?></div>
            </div>

			<div class="services__items__item">
            	<div class="services__items__item__title fs44 ff-mediator"><?php echo $post->services_title_item2;?></div>
				<div class="services__items__item__subtitle fs20">
					<?php echo $post->services_subtitle_item2;?>
				</div>
				<div class="services__items__item__description fs20"><?php echo $post->services_description_item2;?></div>
            </div>

			<div class="services__items__item">
            	<div class="services__items__item__title fs44 ff-mediator"><?php echo $post->services_title_item3;?></div>
				<div class="services__items__item__subtitle fs20">
					<?php echo $post->services_subtitle_item3;?>
				</div>
				<div class="services__items__item__description fs20"><?php echo $post->services_description_item3;?></div>
            </div>
        </div>

		<div class="industries">
			<div class="industries__title exec-title ff-mediator"><?php echo $post->industries_title;?></div>
			<div class="industries__items">
				<?php for ($i = 1; $i < 13; $i++) { $industries = 'industries' . $i; ?>
					<div class="industries__items__item"><?php echo $post->$industries;?></div>
				<?php } ?>
			</div>
		</div>

		<div id="management" class="management">
			<div class="management__title exec-title ff-mediator">Менеджмент</div>
			<div class="management__items">
				<div class="management__items__item">
					<div class="management__items__item__foto">
						<div class="management__items__item__foto__img"
						style="background: linear-gradient(180deg, rgba(47, 63, 74, 0.00) 50%, rgba(45, 62, 74, 0.70) 100%),  url(<?php echo get_template_directory_uri(); ?>/src/img/managers/yutanova.jpg) lightgray 50% / cover no-repeat;">
							<!-- <img src="<?php //echo get_template_directory_uri(); ?>/src/img/managers/yutanova.jpg" alt=""> -->
						</div>
						<div class="management__items__item__foto__text">
							<div class="management__items__item__foto__text__name fs44 ff-mediator">Наталья Ютанова</div>
							<div class="management__items__item__foto__text__job fs20">Основатель и управляющий партнер</div>
						</div>
					</div>
					<div class="management__items__item__description">
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Опыт</div>
							<div class="management__items__item__description__item__text fs20">Курирует поиски первых лиц и проекты по корпоративному управлению. Наталья – доктор медицины, топ-менеджер с международной карьерой в крупнейших публичных глобальных компаниях и опытом CEO. В индустрии развития корпоративного лидерства более 15 лет. Наталья занимала должность медицинского директора в  Merck и  Abbott в России и Швейцарии, руководила Американским медицинским центром и была партнером крупной Executive Search компании в России и СНГ.</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Образование</div>
							<div class="management__items__item__description__item__text fs20">
								<ul>
									<li>M.D. Cardilogy, M.B.A, General Management;</li>
									<li>Harvard University, Cornell University, USA; DeBaak Management Center, NL;</li>
									<li>Приволжский исследовательский медицинский университет.</li>
								</ul>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Владение языками</div>
							<div class="management__items__item__description__item__text">
								<span class="languages fs20">Русский</span>
								<span class="languages fs20">Английский</span>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Электронная почта</div>
							<div class="management__items__item__description__item__text">
								<a href="mailto:n.yutanova@execfourzero.com" class="fs20">n.yutanova@execfourzero.com</a>
							</div>
						</div>
					</div>
				</div>

				<div class="management__items__item">
					<div class="management__items__item__foto">
						<div class="management__items__item__foto__img"
						style="background: linear-gradient(180deg, rgba(47, 63, 74, 0.00) 50%, rgba(45, 62, 74, 0.70) 100%),  url(<?php echo get_template_directory_uri(); ?>/src/img/managers/vilarinho.jpg) lightgray 50% / cover no-repeat;">
							<!-- <img src="<?php //echo get_template_directory_uri(); ?>/src/img/managers/yutanova.jpg" alt=""> -->
						</div>
						<div class="management__items__item__foto__text">
							<div class="management__items__item__foto__text__name fs44 ff-mediator">Дарья Вилариньо</div>
							<div class="management__items__item__foto__text__job fs20">Партнер, сооснователь</div>
						</div>
					</div>
					<div class="management__items__item__description">
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Опыт</div>
							<div class="management__items__item__description__item__text fs20">Курирует направление executive search, ведет международные поиски и занимается развитием новых продуктов. Сертифицированный эксперт по методологии оценки руководителей высшего звена Hogan Assessments. 10 лет в индустрии executive search и HR консалтинга. Карьера Дарьи развивалась в крупнейших международных executive search компаниях в России, Европе и на развивающихся рынках.</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Образование</div>
							<div class="management__items__item__description__item__text fs20">
								<ul>
									<li>Всероссийская академия внешней торговли Минэкономразвития;</li>
									<li>Salford University, Manchester, UK.</li>
								</ul>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Владение языками</div>
							<div class="management__items__item__description__item__text">
								<span class="languages fs20">Русский</span>
								<span class="languages fs20">Английский</span>
								<span class="languages fs20">Португальский</span>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title">Электронная почта</div>
							<div class="management__items__item__description__item__text">
								<a href="mailto:d.vilarinho@execfourzero.com" class="fs20">d.vilarinho@execfourzero.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="platform">
			<div class="platform__title exec-title ff-mediator">Платформа EXEC 4.0</div>
			<div class="platform__subtitle fs20">Объединяйтесь с лучшими управленцами со всего мира для решения бизнес-задач проектного формата</div>
			<div class="platform__text fs20">Мы создали решение EXEC 4.0 для того, чтобы  лучшая экспертиза в любом направлении стала доступна для бизнеса в необходимом объеме строго на необходимый срок. Ваш проект будут реализовывать партнеры платформы – верифицированные и специально отобранные под запрос топ-менеджеры - признанные эксперты своей индустрии.</div>
			<a href="#" class="prymary fs20">Перейти на платформу</a>
		</div>

		<div id="contacts" class="contacts">
			<div class="contacts__item">
				<div class="contacts__item__title fs44 ff-mediator">АО «Институт Лидерства»</div>
				<div class="contacts__item__contacts">
					<div class="contacts__item__contacts__title">Контакты</div>
					<div class="contacts__item__contacts__phone">
						<a class="fs44 ff-mediator" href="tel:+74993010235">+7 499 301 02 35</a>
					</div>
					<div class="contacts__item__contacts__email">
						<a class="fs44 ff-mediator" href="mailto:info@execfourzero.com">info@execfourzero.com</a>
					</div>
				</div>
			</div>
			<div class="contacts__item">
				<div class="contacts__item__form">
					<form id="exec-contacts">
						<input class="exec-input exec-placeholder width100" type="text" name="name" value="" placeholder="Имя" required />
						<input class="exec-input exec-placeholder width100" type="text" name="email" value="" placeholder="Email" required />
						<input class="exec-input exec-placeholder width100" type="text" name="phone" value="" placeholder="Телефон" />
						<textarea class="exec-textarea exec-placeholder width100" name="message" rows="12" cols="80" placeholder="Сообщение"></textarea>
						<div class="exec-checkbox">
							<input type="checkbox" name="agree-policy" id="agree-policy" required />
							<label for="agree-policy">
								<span class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
										<path class="bg" fill-rule="evenodd" clip-rule="evenodd" d="M18.6667 22.1666H2.66667C1.19333 22.1666 0 20.9733 0 19.5V3.49998C0 2.02665 1.19333 0.833313 2.66667 0.833313H18.6667C20.14 0.833313 21.3333 2.02665 21.3333 3.49998V19.5C21.3333 20.9733 20.14 22.1666 18.6667 22.1666Z" fill="#FFF"/>
										<path d="M15.9999 8.83331L9.33325 15.5L5.33325 11.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<span class="fs20">Я соглашаюсь с <a href="#" class="fs20">политикой работы с данными</a></span>
							</label>
						</div>
						<button class="prymary fs20 width100" type="submit" form="exec-contacts" name="button" id="submit">Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</main>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
