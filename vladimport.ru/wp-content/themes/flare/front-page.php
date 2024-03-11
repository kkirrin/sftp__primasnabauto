<?php
/**
 * Template Name: Front page
 * The template for displaying home page.
 * @package Flare
 */
get_header();


if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
    }
else{	
	/**
	 * flare_homepage hook
	 * @since Charitize 1.0.0
	 *
	 * @hooked flare_homepage -  10
	 * @sub_hooked flare_homepage -  30
	 */
	do_action( 'flare_homepage' );
	$flare_static_page = absint($flare_customizer_all_values['flare-enable-static-page']);
	if ($flare_static_page == 1) { ?>

	<div id="content" class="site-content main__page__style">

	
		<div class="container tb-post-content">
			
			<div id="primary--main" class="content-area">
				<main id="main" class="site-main" role="main">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'single'  );


							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?> 
				</main><!-- #main -->
				
			</div><!-- #primary -->
			
			<?php
				get_sidebar();
			?>
			
	</div>


	<section class="news">
		<div class="container relative">
				
			<h2 class="">Новости и акции </h2>
		

			<div class="arrows__slider">
				
				<div>
					<button class="prev-new--item-1">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_prev.svg"
							alt="влево" />
					</button>
				</div>

				<div>
					<button class="next-new--item-1">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_next.svg"
						alt="вправо" />
					</button>
				</div>
				
			</div>

			<div class="new-items-section">
                <div class="swiper new-items-1">
					<div class="swiper-wrapper">			
						<div class="swiper-slide">
							<li class="do__list__item">
								<a href="https://primasnabauto.ru/krotchajshie-sroki/">
									<img class="do__list__item__img" src="<?php echo get_template_directory_uri() . '/assets/img/new_2.png';?> " alt="">
									<p class="do__list__item__title">Кротчайшие сроки</p>
									<p class="do__list__item__desc">Кротчайшие сроки Таможенного оформления: Выдача ПТС на транспортное средство в течение 3-5...</p>
								</a>
               				 </li>
						</div>
						<div class="swiper-slide">
							<li class="do__list__item">
								<a href="https://primasnabauto.ru/podklyuchite-polnotsennyj-glonass-monitoring-transporta/">
									<img class="do__list__item__img" src="<?php echo get_template_directory_uri() . '/assets/img/new_3.png';?> " alt="">
									<p class="do__list__item__title">Подключите полноценный ГЛОНАСС-мониторинг трансорта</p>
									<p class="do__list__item__desc">Предоставляем услуги по активации аппаратуры вызова экстренных оперативных служб...</p>
								</a>							
               				 </li>
						</div>
						<div class="swiper-slide">
							<li class="do__list__item">
								<a href="https://primasnabauto.ru/predostavlyaem-uslugi-po-aktivatsii-ustrojstv-era-glonass-ranee-priobretennyh-u-stroronnih-kompanij/">
									<img class="do__list__item__img" src="<?php echo get_template_directory_uri() . '/assets/img/new_1.png';?> " alt="">
									<p class="do__list__item__title">Услуги по активации устройств ЭРА ГЛОНАСС</p>
									<p class="do__list__item__desc">Предоставляем услуги по активации аппаратуры вызова экстренных оперативных служб...</p>
								</a>
               				 </li>
						</div>
						<div class="swiper-slide">
							<li class="do__list__item">
								<a href="https://primasnabauto.ru/podklyuchite-polnotsennyj-glonass-monitoring-transporta/">
									<img class="do__list__item__img" src="<?php echo get_template_directory_uri() . '/assets/img/new_3.png';?> " alt="">
									<p class="do__list__item__title">Подключите полноценный ГЛОНАСС-мониторинг трансорта</p>
									<p class="do__list__item__desc">Предоставляем услуги по активации аппаратуры вызова экстренных оперативных служб...</p>
								</a>							
               				 </li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="auto__in__stock">
		<div class="container">
			<h2>Автомобили в наличии</h2>
			<?php echo do_shortcode('[pt_view id="e0305583a5"]'); ?>
		</div>
	</section>

	<section class="company">
		<div class="container">
			<div class="company__container relative">
				<img class="company__car" src="<?php echo get_template_directory_uri() .'/assets/img/company__car.png'; ?>" alt="">
				<h2 class="company__title">О компании</h2>
				<p class="company__desc">
					Компания ПримаСнаб Авто работает на рынке транспортного экспедирования и внешнеэкономической деятельности с 2012 года и оказывает услуги по организации международных и внутренних грузоперевозок, таможенному оформлению во Владивостоке.
				</p>
				<p class="company__desc">
					Специалисты компании ПримаСнаб Авто, разрабатывают для клиентов эксклюзивные схемы доставки товаров, находят решения логистических и таможенных задач, работают со всеми видами грузов.
				</p>

				<ul class="company__list counter-list">
					<li class="company__list__item">
						<span>10+</span>
						<p>Лет на рынке</p>
					</li>
					<li class="company__list__item">
						<span>1500+</span>
						<p>Привезенных машин</p>
					</li>
					<li class="company__list__item">
						<span>1000+</span>
						<p>Довольных клиентов</p>
					</li>
				</ul>

				<div class="div__link">
					<a class="btn-more" href="https://primasnabauto.ru/o-kompanii/">
						Подробнее о компании
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php }
}
get_footer();