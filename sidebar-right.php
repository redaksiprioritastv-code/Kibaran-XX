<?php $active_headline = get_theme_mod('active-headline'); 
if ($active_headline!= null && $active_headline == 1){ ?>
<div id="sidebar-right">
	<div class="sidebar-right-wrap">
<?php if (get_theme_mod('active-sidebar-headline', 0) == 1){ 
		if ( is_active_sidebar( 'sidebar-right' ) ) : 
			dynamic_sidebar( 'sidebar-right' ); 
		endif;
} else {
		 $textpopularposts = get_theme_mod( 'textpopularposts' ); 
		if ( $textpopularposts ) :
			/* sanitize html output */
			$textpopularposts = $textpopularposts;
		else :
			$textpopularposts = esc_html__( 'Popular Post', 'kibaran' ); 
		endif;		
		echo do_shortcode('[wpp header_start=\'<h2 class="judul-sidebar-right">\' header=\'' . $textpopularposts . '\' header_end=\'</h2>\' range=\'all\' limit=5 thumbnail_width=320 thumbnail_height=160 stats_category=1 wpp_start=\'<ul class="wpp-list wpp-tiles">\' post_html=\'<li class="{current_class}">{thumb}<div class="wpp-post-data">{taxonomy} {title}</div></li>\' wpp_end=\'</ul>\']'); 
} ?>
		
		<!--?php endif; ?-->

<!-- <h2 class="judul-sidebar-right">Berita Pilihan</h2> -->
	
<?php
/*
	$queryObject = new  Wp_Query( array(
    'showposts' => 5,
    'post_type' => array('post'),
    'category_name' => viral,
    'orderby' => 1,
    ));

// The Loop
if ( $queryObject->have_posts() ) :
    $i = 0;
    while ( $queryObject->have_posts() ) :
        $queryObject->the_post();
        if ( $i == 0 ) : ?>
            <div class="first-post">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('foto-samping'); ?>
				</a>
				
        <?php endif;
        if ( $i != 0 ) : ?>
            <div class="secondary-post">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('foto-samping-kecil'); ?>
				</a>
        <?php endif; ?>
				<div class="text-wrap">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?></a>
			<p class="waktu"><?php the_time('j F Y '); echo "- "; the_time(' H:i'); echo " WIB"; ?></p>
        </div>
        </div>
        <?php $i++;
    endwhile;
endif; */
				?></div></div><!-- AKHIR SIDEBAR KANAN -->
<?php }  ?>