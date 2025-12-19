<?php get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="single-wrap">
	<div id="single-share-wrap">
		<a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar');return false;"></a>
		<a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
		<a class="google" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
		<a class="whatsapp" href="whatsapp://send?text=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
	</div>	<div class="single-article">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="single-share-wrap-mobile">
		<a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar');return false;"></a>
		<a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
		<a class="google" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
		<a class="whatsapp" href="whatsapp://send?text=<?php echo get_permalink(); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"></a>
	</div>
<div class="clr"></div>
             	<?php		if ( has_post_format('video') ) { ?>

	<?php } else { ?>
		<?php if( get_theme_mod( 'gambarpage', 0) != 1 ) { if ( has_post_thumbnail() ) {?> 
                <p class="single-photo-wrap"> <img class="foto-utama" src="<?php echo get_the_post_thumbnail_url($post->ID, 'page-foto'); ?>" alt="
					<?php $captionfoto = get_the_post_thumbnail_caption($post->ID); 
				if (!empty($captionfoto)) {
	echo get_the_post_thumbnail_caption(); } else {
					echo get_the_title();
				} ?>">
					<?php //the_post_thumbnail( 'foto-besar', [ 'alt' => esc_html ( get_the_post_thumbnail_caption() ) ] ); ?></p>
			<?php if (!empty($captionfoto)) { ?>
	 <p class="caption-photo"><?php echo get_the_post_thumbnail_caption() ?></p><?php } else {
					
				} ?>
				<?php }; ?>	
               
		
<?php } }; ?>	<h1><?php the_title(); ?></h1>
                <div class="single-article-text">
					<?php the_content(); ?>
			
		</div>
<?php if( (get_theme_mod( 'commenttype', 'default') == "default" ) || !is_plugin_active('comments-from-facebook/facebook-comment.php') ) {  comments_template(); } else { ?>		
	
	<div class="komentar-fb">
<div id="comments" class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="100%" data-numposts="10"></div>
	</div>
	<?php };
$args = array (
    'before'            => '<div class="page-links-kibaran"><span class="page-link-text">' . __( 'Page ', 'kibaran' ) . ':</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="page-link">',
    'link_after'        => '</span>',
    'next_or_number'    => 'number',
    'nextpagelink'      => __( 'Selanjutnya &raquo', 'kibaran' ),
    'previouspagelink'  => __( '&laquo Sebelumnya', 'kibaran' ),
);
 
wp_link_pages( $args );
?>

            <?php endwhile; ?><?php endif; ?>
	

		</div><!-- akhir single-article -->

</div><!-- akhir single-wrap -->

<?php get_footer(); ?>