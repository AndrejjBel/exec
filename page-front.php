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
					<div class="industries__items__item fs20"><?php echo $post->$industries;?></div>
				<?php } ?>
			</div>
		</div>

		<div id="management" class="management">
			<div class="management__title exec-title ff-mediator"><?php echo $post->management_title;?></div>
			<div class="management__items">
				<div class="management__items__item">
					<div class="management__items__item__foto">
						<div class="management__items__item__foto__img"
						style="background: linear-gradient(180deg, rgba(47, 63, 74, 0.00) 50%, rgba(45, 62, 74, 0.70) 100%),  url(<?php echo get_template_directory_uri(); ?>/src/img/managers/yutanova.jpg) lightgray 50% / cover no-repeat;">
							<!-- <img src="<?php //echo get_template_directory_uri(); ?>/src/img/managers/yutanova.jpg" alt=""> -->
						</div>
						<div class="management__items__item__foto__text">
							<div class="management__items__item__foto__text__name fs44 ff-mediator"><?php echo $post->management_item_name1;?></div>
							<div class="management__items__item__foto__text__job fs20"><?php echo $post->management_item_job1;?></div>
						</div>
					</div>
					<div class="management__items__item__description">
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Опыт');?></div>
							<div class="management__items__item__description__item__text fs20"><?php echo $post->management_item_experience1;?></div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Образование');?></div>
							<div class="management__items__item__description__item__text fs20">
								<?php echo $post->management_item_education1;?>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Владение языками');?></div>
							<div class="management__items__item__description__item__text">
								<?php $langs1 = explode(",", $post->management_item_langs1);
									foreach ($langs1 as $lang1) { ?>
										<span class="languages fs20"><?php echo $lang1;?></span>
								<?php }	?>
								<!-- <span class="languages fs20">Русский</span>
								<span class="languages fs20">Английский</span> -->
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Электронная почта');?></div>
							<div class="management__items__item__description__item__text">
								<a href="mailto:<?php echo $post->management_item_email1;?>" class="fs20"><?php echo $post->management_item_email1;?></a>
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
							<div class="management__items__item__foto__text__name fs44 ff-mediator"><?php echo $post->management_item_name2;?></div>
							<div class="management__items__item__foto__text__job fs20"><?php echo $post->management_item_job2;?></div>
						</div>
					</div>
					<div class="management__items__item__description">
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Опыт');?></div>
							<div class="management__items__item__description__item__text fs20"><?php echo $post->management_item_experience2;?></div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Образование');?></div>
							<div class="management__items__item__description__item__text fs20">
								<?php echo $post->management_item_education2;?>
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Владение языками');?></div>
							<div class="management__items__item__description__item__text">
								<?php $langs2 = explode(",", $post->management_item_langs2);
									foreach ($langs2 as $lang2) { ?>
										<span class="languages fs20"><?php echo $lang2;?></span>
								<?php }	?>
								<!-- <span class="languages fs20">Русский</span>
								<span class="languages fs20">Английский</span>
								<span class="languages fs20">Португальский</span> -->
							</div>
						</div>
						<div class="management__items__item__description__item">
							<div class="management__items__item__description__item__title"><?php echo exec_language_words('Электронная почта');?></div>
							<div class="management__items__item__description__item__text">
								<a href="mailto:<?php echo $post->management_item_email2;?>" class="fs20"><?php echo $post->management_item_email2;?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="platform">
			<div class="platform__title exec-title ff-mediator"><?php echo $post->platform_title;?></div>
			<div class="platform__subtitle fs20"><?php echo $post->platform_subtitle;?></div>
			<div class="platform__text fs20"><?php echo $post->platform_description;?></div>
			<a href="<?php echo exec_get_options('platform_link');?>" class="prymary fs20"><?php echo exec_language_words('Перейти на платформу');?></a>
		</div>

		<div id="contacts" class="contacts">
			<div class="contacts__item">
				<div class="contacts__item__title fs44 ff-mediator"><?php echo exec_language_words('АО «Институт Лидерства»');?></div>
				<div class="contacts__item__contacts">
					<div class="contacts__item__contacts__title"><?php echo exec_language_words('Контакты');?></div>
					<div class="contacts__item__contacts__phone">
						<a class="fs44 ff-mediator" href="tel:<?php echo str_replace(" ", "", exec_get_options('phone_contact'));?>">
							<?php echo exec_get_options('phone_contact');?>
						</a>
					</div>
					<div class="contacts__item__contacts__email">
						<a class="fs44 ff-mediator" href="mailto:<?php echo exec_get_options('email_message');?>">
							<?php echo exec_get_options('email_message');?>
						</a>
					</div>
				</div>
			</div>
			<div class="contacts__item">
				<div class="contacts__item__form">
					<form id="exec-contacts">
						<div class="group-input">
							<input class="exec-input exec-placeholder width100" type="text" name="name" id="name" placeholder=" " required />
							<label for="name"><?php echo exec_language_words('Имя');?> *</label>
							<span class="input-warning"><?php echo exec_language_words('Заполните Имя');?></span>
						</div>
						<div class="group-input">
							<input class="exec-input exec-placeholder width100" type="text" name="email" id="email" value="" placeholder=" " />
							<label for="email">Email</label>
						</div>
						<div class="group-input">
							<input class="exec-input exec-placeholder width100" type="text" name="phone" id="phone" placeholder=" " required  />
							<label for="phone"><?php echo exec_language_words('Телефон');?> *</label>
							<span class="input-warning"><?php echo exec_language_words('Заполните телефон');?></span>
						</div>
						<textarea class="exec-textarea exec-placeholder width100" name="message" rows="12" cols="80" placeholder="<?php echo exec_language_words('Сообщение');?>"></textarea>
						<div class="exec-checkbox">
							<input type="checkbox" name="agree-policy" id="agree-policy" required />
							<label for="agree-policy">
								<span class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
										<path class="bg" fill-rule="evenodd" clip-rule="evenodd" d="M18.6667 22.1666H2.66667C1.19333 22.1666 0 20.9733 0 19.5V3.49998C0 2.02665 1.19333 0.833313 2.66667 0.833313H18.6667C20.14 0.833313 21.3333 2.02665 21.3333 3.49998V19.5C21.3333 20.9733 20.14 22.1666 18.6667 22.1666Z" fill="#FFF"/>
										<path d="M15.9999 8.83331L9.33325 15.5L5.33325 11.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<span class="label-text fs20"><?php echo exec_language_words('Я соглашаюсь с');?> <a href="#" class="fs20 js-open-modal" data-modal="data-police"><?php echo exec_language_words('политикой работы с данными');?></a></span>
							</label>
							<span class="input-warning"><?php echo exec_language_words('Необходимо согласие');?></span>
						</div>
						<button class="prymary fs20 width100" type="submit" form="exec-contacts" name="button" id="submit"><?php echo exec_language_words('Отправить');?></button>
					</form>
				</div>
			</div>
		</div>
	</main>

	</main><!-- #main -->

	<div class="modal exec" data-modal="form-success">
		<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51" fill="none">
			<g opacity="0.5">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M33 19.1114L31.3886 17.5L25 23.8886L18.6114 17.5L17 19.1114L23.3886 25.5L17 31.8886L18.6114 33.5L25 27.1114L31.3886 33.5L33 31.8886L26.6114 25.5L33 19.1114Z" fill="#6B6B6B"/>
			</g>
		</svg>
		<div class="modal__img">
			<svg width="319" height="281" viewBox="0 0 319 281" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_656_474)">
					<path d="M316.272 276.496C315.715 277.274 315.153 278.046 314.596 278.813C312.996 279.915 311.098 280.504 309.155 280.5H9.84487C7.98858 280.501 6.17164 279.965 4.61404 278.955C4.09711 278.273 3.58602 277.586 3.06909 276.899L3.58602 276.615L155.11 192.626C156.454 191.883 157.965 191.492 159.501 191.49C161.038 191.488 162.55 191.875 163.896 192.615L315.76 276.212L316.272 276.496Z" fill="#A62B22"/>
					<path d="M309.155 99.8917L177.834 24.0529C172.311 20.8632 166.046 19.1823 159.668 19.1792C153.289 19.1761 147.023 20.8507 141.496 24.035L9.84487 99.8917C7.28527 99.8953 4.83155 100.914 3.02164 102.724C1.21173 104.534 0.193318 106.987 0.189697 109.547V270.845C0.192679 273.405 1.21088 275.859 3.02093 277.669C4.83098 279.479 7.28507 280.497 9.84487 280.5H309.155C311.715 280.496 314.168 279.477 315.978 277.667C317.787 275.858 318.806 273.404 318.81 270.845V109.547C318.807 106.987 317.788 104.534 315.978 102.724C314.169 100.914 311.715 99.8953 309.155 99.8917ZM317.674 270.845C317.669 273.103 316.77 275.267 315.173 276.863C313.577 278.46 311.413 279.359 309.155 279.364H9.84487C7.58667 279.36 5.42212 278.461 3.82533 276.865C2.22853 275.268 1.32966 273.103 1.3256 270.845V109.547C1.32835 107.288 2.22679 105.123 3.82387 103.526C5.42095 101.929 7.58626 101.03 9.84487 101.028L141.496 25.1709C147.023 21.9866 153.289 20.312 159.668 20.3151C166.046 20.3182 172.311 21.9991 177.834 25.1888L309.155 101.028C311.414 101.03 313.579 101.929 315.176 103.526C316.773 105.123 317.672 107.288 317.674 109.547V270.845Z" fill="#3F3D56"/>
					<path d="M159.67 191.15C158.681 191.154 157.699 190.989 156.765 190.663L156.593 190.602L156.558 190.22C156.451 190.273 156.343 190.323 156.235 190.371L156.121 190.421L156.006 190.371C155.767 190.266 155.529 190.147 155.3 190.017L50.7373 131.261V11.2913C50.7404 8.50558 51.8484 5.83488 53.8182 3.86509C55.788 1.89531 58.4587 0.787306 61.2444 0.78418H257.756C260.541 0.787306 263.212 1.89531 265.182 3.86509C267.152 5.83488 268.26 8.50558 268.263 11.2913V131.414L268.118 131.496L164.041 190.018C162.705 190.762 161.2 191.152 159.67 191.15Z" fill="white"/>
					<path d="M159.67 191.434C158.649 191.437 157.635 191.267 156.67 190.93L156.327 190.809L156.312 190.647L156.12 190.731L155.892 190.631C155.644 190.522 155.398 190.398 155.161 190.265L50.4534 131.427V11.2911C50.4566 8.4301 51.5946 5.68723 53.6176 3.66421C55.6406 1.64119 58.3835 0.503238 61.2444 0.5H257.756C260.617 0.50325 263.359 1.64121 265.382 3.66422C267.405 5.68724 268.543 8.4301 268.547 11.2911V131.58L164.18 190.265C162.801 191.034 161.249 191.436 159.67 191.434ZM157.391 189.971C159.479 190.57 161.719 190.32 163.624 189.274L267.411 130.916V11.2911C267.408 8.73125 266.39 6.27709 264.58 4.46702C262.77 2.65695 260.315 1.63878 257.756 1.6359H61.2444C58.6846 1.63877 56.2305 2.65694 54.4204 4.46701C52.6103 6.27708 51.5921 8.73125 51.5893 11.2911V130.762L58.3988 134.586L155.718 189.275C155.85 189.349 155.984 189.42 156.121 189.485C156.257 189.42 156.391 189.349 156.524 189.275L157.288 188.844L157.391 189.971Z" fill="#3F3D56"/>
					<path d="M316.294 104.083L275.078 127.255L267.979 131.248L163.902 189.77C162.608 190.491 161.151 190.868 159.67 190.866C158.713 190.869 157.763 190.709 156.859 190.394C156.608 190.314 156.361 190.219 156.121 190.11C155.888 190.008 155.661 189.895 155.439 189.77L58.1208 135.082L51.0214 131.095L2.79106 103.992C2.65991 103.917 2.56371 103.793 2.52332 103.647C2.48293 103.502 2.5016 103.346 2.5753 103.214C2.6492 103.083 2.77204 102.987 2.91684 102.946C3.06164 102.906 3.21657 102.924 3.34764 102.998L51.0214 129.788L58.1208 133.775L155.996 188.776C156.321 188.958 156.658 189.116 157.007 189.247C157.155 189.304 157.308 189.355 157.461 189.4C158.433 189.699 159.456 189.797 160.467 189.69C161.478 189.583 162.457 189.272 163.345 188.776L267.979 129.947L275.078 125.955L315.738 103.095C315.803 103.058 315.874 103.035 315.948 103.026C316.022 103.017 316.097 103.023 316.169 103.043C316.24 103.063 316.307 103.097 316.366 103.143C316.425 103.189 316.474 103.246 316.51 103.31C316.547 103.375 316.57 103.447 316.579 103.521C316.588 103.595 316.582 103.67 316.562 103.741C316.542 103.813 316.508 103.88 316.462 103.939C316.416 103.997 316.359 104.046 316.294 104.083Z" fill="#3F3D56"/>
					<path d="M93.3762 37.9847H77.4735C76.2685 37.9847 75.1128 37.506 74.2607 36.6539C73.4086 35.8018 72.9299 34.6461 72.9299 33.4411C72.9299 32.236 73.4086 31.0803 74.2607 30.2283C75.1128 29.3762 76.2685 28.8975 77.4735 28.8975H93.3762C94.5812 28.8975 95.7369 29.3762 96.589 30.2283C97.4411 31.0803 97.9198 32.236 97.9198 33.4411C97.9198 34.6461 97.4411 35.8018 96.589 36.6539C95.7369 37.506 94.5812 37.9847 93.3762 37.9847Z" fill="#A62B22"/>
					<path d="M112.119 53.3196H77.4735C76.2685 53.3196 75.1128 52.8409 74.2607 51.9889C73.4086 51.1368 72.9299 49.9811 72.9299 48.776C72.9299 47.571 73.4086 46.4153 74.2607 45.5632C75.1128 44.7111 76.2685 44.2324 77.4735 44.2324H112.119C113.324 44.2324 114.479 44.7111 115.331 45.5632C116.183 46.4153 116.662 47.571 116.662 48.776C116.662 49.9811 116.183 51.1368 115.331 51.9889C114.479 52.8409 113.324 53.3196 112.119 53.3196Z" fill="#E6E6E6"/>
					<path d="M208.912 94.2117H110.656C109.451 94.2117 108.295 93.733 107.443 92.8809C106.591 92.0289 106.113 90.8732 106.113 89.6681C106.113 88.4631 106.591 87.3074 107.443 86.4553C108.295 85.6032 109.451 85.1245 110.656 85.1245H208.912C210.117 85.1245 211.272 85.6032 212.125 86.4553C212.977 87.3074 213.455 88.4631 213.455 89.6681C213.455 90.8732 212.977 92.0289 212.125 92.8809C211.272 93.733 210.117 94.2117 208.912 94.2117Z" fill="#A62B22"/>
					<path d="M217.999 111.819H101.001C99.7961 111.819 98.6404 111.34 97.7883 110.488C96.9362 109.636 96.4575 108.48 96.4575 107.275C96.4575 106.07 96.9362 104.914 97.7883 104.062C98.6404 103.21 99.7961 102.731 101.001 102.731H217.999C219.204 102.731 220.36 103.21 221.212 104.062C222.064 104.914 222.543 106.07 222.543 107.275C222.543 108.48 222.064 109.636 221.212 110.488C220.36 111.34 219.204 111.819 217.999 111.819Z" fill="#E6E6E6"/>
					<path d="M217.999 128.857H101.001C99.7961 128.857 98.6404 128.378 97.7883 127.526C96.9362 126.674 96.4575 125.518 96.4575 124.313C96.4575 123.108 96.9362 121.952 97.7883 121.1C98.6404 120.248 99.7961 119.77 101.001 119.77H217.999C219.204 119.77 220.36 120.248 221.212 121.1C222.064 121.952 222.543 123.108 222.543 124.313C222.543 125.518 222.064 126.674 221.212 127.526C220.36 128.378 219.204 128.857 217.999 128.857Z" fill="#E6E6E6"/>
				</g>
				<defs>
					<clipPath id="clip0_656_474">
						<rect width="318.621" height="280" fill="white" transform="translate(0.189697 0.5)"/>
					</clipPath>
				</defs>
			</svg>
		</div>
	    <h3 class="modal__title ff-mediator"><?php echo exec_language_words('Ваша форма отправлена');?></h3>
		<span class="modal__subtitle fs20"><?php echo exec_language_words('Мы свяжемся с вами в ближайшее время');?></span>
	    <div class="modal-content">
	        <button class="prymary fs20 width100 js-modal-close btn-modal" type="button" name="button"><?php echo exec_language_words('Хорошо');?></button>
			<a href="#" id="open-modal-fs" class="js-open-modal" data-modal="form-success"></a>
	    </div>
	</div>

	<div class="modal exec-data-police" data-modal="data-police">
		<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51" fill="none">
			<g opacity="0.5">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M33 19.1114L31.3886 17.5L25 23.8886L18.6114 17.5L17 19.1114L23.3886 25.5L17 31.8886L18.6114 33.5L25 27.1114L31.3886 33.5L33 31.8886L26.6114 25.5L33 19.1114Z" fill="#6B6B6B"/>
			</g>
		</svg>
		<div class="modal__wrap">
			<?php exec_language_police();?>
		</div>
	</div>

<?php
get_footer();
// var_dump($meta);
