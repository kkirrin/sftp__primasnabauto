<?php
/**
 * The default template for displaying header
 *
 * @package salient themes
 * @subpackage Flare
 * @since Flare 1.0.0
 */

/**
 * flare_action_before_head hook
 * @since Flare 1.0.0
 *
 * @hooked flare_set_global -  0
 * @hooked flare_doctype -  10
 */
do_action( 'flare_action_before_head' );?>


<?php
	/**
	 * flare_action_before_wp_head hook
	 * @since Flare 1.0.0
	 *
	 * @hooked flare_before_wp_head -  10
	 */
	do_action( 'flare_action_before_wp_head' );

	wp_head();

	/**
	 * flare_action_after_wp_head hook
	 * @since Flare 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'flare_action_after_wp_head' );
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>
	
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94266442, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94266442" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->

 <?php
/**
 * flare_action_before hook
 * @since Flare 1.0.0
 *
 * @hooked flare_page_start - 15
 */
// do_action( 'flare_action_before' );

/**
 * flare_action_before_header hook
 * @since Flare 1.0.0
 *
 * @hooked flare_skip_to_content - 10
 */
do_action( 'flare_action_before_header' );

/**
 * flare_action_header hook
 * @since Flare 1.0.0
 *
 * @hooked flare_after_header - 10
 */
do_action( 'flare_action_header' );

/**
 * flare_action_before_content hook
 * @since Flare 1.0.0
 *
 * @hooked null
 */
// do_action( 'flare_action_before_content' );


?>



<div class="container">
	<header class="header">
	   <div class="header-left">

		
			<?php wp_nav_menu([
				'theme_location' => 'top-left',
				'container' => 'ul',
				'menu_class' => 'header-left--ul', 
				]); 
			?>
	   </div>
	   <img class="header-logo" src="<?php echo get_template_directory_uri() .'/assets/img/header__logo.svg';?>" alt="лого">

	   <div class="header-center">
			<img class="header-logo--big" src="<?php echo get_template_directory_uri() .'/assets/img/header__logo.svg';?> " alt="Центральное лого">
		</div>

	   <div class="header-right">

		   <?php wp_nav_menu([
				'theme_location' => 'top-right',
				'container' => 'ul',
				'menu_class' => 'header-right--ul', 
				]); 
			?>

		   <button class="header--btn">
			   Оставить заявку
		   </button>
	   </div>
   
	   <div class="btn__menu--mobile">
			<svg class="h-3 w-3" viewBox="0 0 64 48">
				<path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
				<path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
				<path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
			</svg>
	   </div>
   
   
	   <div class="mobile-menu ">
		   <div class="container">
		   <img class="header-logo--small" src="<?php echo get_template_directory_uri() .'/assets/img/footer__logo--mobile.svg';?> " alt="мобильное меню">
		   <?php wp_nav_menu([
				'theme_location' => 'mobile-menu',
				'container' => 'ul',
				'menu_class' => 'mobile-menu--nav', 
				]); 
			?>
			<button class="header--btn header--btn__mobile">
			   Оставить заявку
		   </button>

		   <ul class="footer__item">
				<li class="pb-2">
					<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M17.2039 15.4651C17.0908 15.5778 16.9544 15.722 16.8098 15.8745C16.449 16.2575 15.9982 16.7336 15.7157 16.9266C14.2291 17.9425 12.2404 17.4564 10.8337 16.8702C8.97804 16.097 6.9577 14.6718 5.14365 12.8574C3.32791 11.0429 1.90287 9.02179 1.12968 7.16707C0.544263 5.75998 0.0571978 3.77077 1.07314 2.28385C1.26606 2.0011 1.74321 1.551 2.12567 1.18945C2.27868 1.04528 2.42171 0.909062 2.5348 0.796329C2.73558 0.596535 3.0073 0.484375 3.29054 0.484375C3.57379 0.484375 3.8455 0.596535 4.04629 0.796329L6.78141 3.5308C6.98108 3.73158 7.09316 4.00324 7.09316 4.28642C7.09316 4.56959 6.98108 4.84125 6.78141 5.04204L6.03632 5.78566C5.78749 6.03269 5.62507 6.35346 5.57323 6.70024C5.5214 7.04703 5.58292 7.40128 5.74863 7.71028C6.77345 9.64462 8.35557 11.2266 10.29 12.2511C10.5989 12.4168 10.9531 12.4782 11.2997 12.4263C11.6464 12.3744 11.967 12.2118 12.2138 11.9629L12.9571 11.2193C13.1579 11.0195 13.4296 10.9073 13.7128 10.9073C13.9961 10.9073 14.2678 11.0195 14.4686 11.2193L17.2039 13.9542C17.4035 14.1549 17.5156 14.4265 17.5156 14.7097C17.5156 14.9928 17.4035 15.2644 17.2039 15.4651Z" fill="white"/>
					</svg>
					<a class="contact--email" href="tel:+78002010888">8 800 20 10 888</a>
				</li>

				<li class="pb-2">
					<svg width="20.000000" height="14.979492" viewBox="0 0 20 14.9795" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<path id="Vector" d="M9.01953 7.38672C9.54199 7.73535 10.458 7.73535 10.9805 7.38672L10.981 7.38672L19.8818 1.45312C19.5898 0.608398 18.7876 0 17.8452 0L2.15479 0C1.2124 0 0.410156 0.608398 0.118164 1.45312L9.01953 7.38672L9.01953 7.38672Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
						<path id="Vector" d="M11.6309 8.36133L11.6304 8.3623C11.1733 8.66699 10.5864 8.81934 10 8.81934C9.41309 8.81934 8.82666 8.66699 8.36963 8.3623L8.36914 8.36133L0 2.78223L0 12.8242C0 14.0127 0.966797 14.9785 2.15479 14.9785L17.8452 14.9785C19.0332 14.9785 20 14.0127 20 12.8242L20 2.78223L11.6309 8.36133Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
					</svg>

					<a class="contact--phone" href="mail:primsnab@inbox.ru">primsnab@inbox.ru</a>
				</li>

				<li class="pb-2">
					<svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<clipPath id="clip62_1440">
							<rect id="Frame" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
						</clipPath>

						<rect id="Frame" width="20.000000" height="20.000000" fill="#FFFFFF" fill-opacity="0"/>
						<g clip-path="url(#clip62_1440)">
							<path id="Vector" d="M9.99951 0.820312C6.10498 0.820312 2.93652 3.98926 2.93652 7.88379C2.93652 11.5645 8.79932 16.9023 9.46729 17.6143L9.99951 18.1797L10.5317 17.6143C11.2002 16.9033 17.063 11.5645 17.063 7.88379C17.063 3.98926 13.8945 0.820312 9.99951 0.820312ZM9.99951 10.8066C8.38818 10.8066 7.07715 9.49512 7.07715 7.88379C7.07715 6.27246 8.38818 4.96094 9.99951 4.96094C11.6113 4.96094 12.9224 6.27246 12.9224 7.88379C12.9224 9.49512 11.6113 10.8066 9.99951 10.8066Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
						</g>
					</svg>

					<a class="contact--geo">Владивосток, ул. Нижнепортовая, 1 </a>
				</li>
			</ul>
		   </div>
	   </div>
   </header>
</div>
