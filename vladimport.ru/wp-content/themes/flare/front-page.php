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
		<div class="container">
			<div class="flex">
				<div>
					<h2 class="">Новости и акции </h2>
				</div>


				<!-- <div class="">
					<div class="swiper-pagination"></div>
					<div>
						<button class="prev-new--item-1 bg-white rounded-lg shadow-md shadow-main-black -z-0 mr-5">
							<img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow_prev.svg"
								alt="влево" />
						</button>
						<button class="next-new--item-1 bg-white rounded-lg shadow-md shadow-main-black -z-0 mr-5">
							<img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow_next.svg"
								alt="вправо" />
						</button>
					</div>
				</div> -->

			</div>

			<div class="new-items-section">
				<div class="swiper news-item">
					<div class="swiper-wrapper" style="align-items: stretch; width: 0; min-width: 100%;">			
						<div class="swiper-slide" style="height:auto;">
							1
						</div>
						<div class="swiper-slide" style="height:auto;">
							2
						</div>
						<div class="swiper-slide" style="height:auto;">
							3
						</div>
						<div class="swiper-slide" style="height:auto;">
							4
						</div>
						<div class="swiper-slide" style="height:auto;">
							5
						</div>
					</div>
				</div>
			</div>
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
									<span>10</span>+
									<p>Лет на рынке</p>
								</li>
								<li class="company__list__item">
									<span>1500</span>+
									<p>Привезенных машин</p>
								</li>
								<li class="company__list__item">
									<span>1000</span>+
									<p>Довольных клиентов</p>
								</li>
							</ul>
				
							<button class="btn-more">
								Подробнее о компании
							</button>
						</div>
					</div>
				</section>
	<?php }
}
get_footer();