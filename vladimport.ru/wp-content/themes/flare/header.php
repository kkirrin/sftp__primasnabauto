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



<head>

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

<body <?php body_class(); ?>>
	
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
do_action( 'flare_action_before' );

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
do_action( 'flare_action_before_content' );
?>
