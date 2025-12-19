<?php get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="single-wrap">
		<div class="single-article" id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
<p class="single-kategori">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $term_list = wp_get_post_terms($post->ID, 'category', ['fields' => 'all']);
	foreach($term_list as $term) {
   		if( get_post_meta($post->ID, '_yoast_wpseo_primary_category',true) == $term->term_id ) {
     		$primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_category',true);
     		$primary_cat = get_term($primary_cat_id);
   		}
	}
    if(isset($primary_cat->name)) {
        echo $primary_cat->name; 
    } else {
       	$category = get_the_category(); 
   		echo $category[0]->cat_name;
    }
?></p>
<h1><?php the_title(); ?></h1>
<div class="info-post">
	<div class="info-box">
		<div class="author-box">
			<div class="author-flex">		
				<div class="author-avatar">
					<?php $user = wp_get_current_user();
						echo get_avatar( get_the_author_meta( 'ID' )); ?><img src="<?php echo esc_url( get_template_directory_uri().'/images/badge-check-verify.png'); ?>" class="badge-check-author" alt="badge-check">
				</div>
				<div class="author-name-box">
					<div class="author-name-flex">
						<div class="author-name">
							<?php the_author_posts_link(); ?>
						</div>			
					</div>
					<div class="prop-pos">
						<time class="timepost">
		                		<?php if( get_theme_mod( 'tanggalpost', 0) != 1 ) { ?>
									<?php the_time('j M Y ');?>
								<?php } ?>
							    <?php if( get_theme_mod( 'tanggalpost', 0) != 1 && get_theme_mod( 'waktupost', 0) != 1 ) { echo " - "; } ?>
								<?php if( get_theme_mod( 'waktupost', 0) != 1 ) { ?>
									<?php the_time(' H:i'); ?></span>
									<?php $zonawaktu = get_theme_mod('zonawaktu');
										if( get_theme_mod( 'zonawaktu') != "" ) { 
											echo " ".$zonawaktu; } }; ?>
						</time>
					</div>
				</div>
			</div>
<div class="post-views-info" style="margin:10px 0; font-size:15px; font-weight:600;">
    👁️ Dibaca : 
    <?php 
    if(function_exists('the_views')) { 
        echo absint( get_post_meta(get_the_ID(), 'views', true) );
    } 
    ?> 
    Kali
</div>
		</div>
		<div class="share-box">
			<div class="pjs-content-share list-right">
				<?php if( get_theme_mod( 'jumlahpembaca', 0) != 1 ) { ?>
				<div class="pjs-iconnotif"><div class="pjs-iconnotif-wrap"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg><span class="notif-number"> <?php do_action( 'kibaran_number_format' ); ?></span></div></div><?php }; ?>
			<?php if( get_theme_mod( 'commenticon', 0) != 1 ) { do_action( 'kibaran_comment_icon' ); } ?>
			<?php do_action( 'kibaran_social_popup' ); ?>
			</div>
		</div>
	</div>
	<div class="clr"></div>
</div>
	<?php if ( !has_post_format('video') ) { 
			if( get_theme_mod( 'gambarpost', 0) != 1 ) { if ( has_post_thumbnail() ) {?>
                <p class="single-photo-wrap"> <a href="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>"><img class="foto-utama" width="1200" height="675" loading="eager" src="<?php echo get_the_post_thumbnail_url($post->ID, 'single-foto'); ?>" alt="
					<img class="foto-utama" src="<?php echo get_the_post_thumbnail_url($post->ID, 'single-foto'); ?>" alt="
					<?php $captionfoto = get_the_post_thumbnail_caption($post->ID); 
			if (!empty($captionfoto)) {
				echo get_the_post_thumbnail_caption(); } else {
					echo get_the_title();
			} ?>">
			<?php //the_post_thumbnail( 'foto-besar', [ 'alt' => esc_html ( get_the_post_thumbnail_caption() ) ] ); ?><span class="perbesar">Perbesar</span></a></p>
			<?php if (!empty($captionfoto)) { ?>
	 			<p class="caption-photo"><a href="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>"><?php echo get_the_post_thumbnail_caption() ?></a></p><?php } else {
			} 
	} } }; ?>	
<div class="sidebar-banner-bawah-tombol-share-post-wrap"><?php if (get_theme_mod('adsbeforecontent')!="") { 
	echo get_theme_mod('adsbeforecontent'); } ?></div>
<div class="single-article-text">
	<?php the_content(); ?>
</div>
<?php
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
		
<div class="clr"></div>
<?php if(has_tag()) {; ?>
	<div class="tagname">
		<?php the_tags( '',' ' ); ?>
	</div>
<?php }; ?> 

<div class="clr"></div>
<div id="single-social-share-wrap">
	<a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( esc_url( get_the_permalink() ) ); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar');return false;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facebook.png" title="Facebook" /></a>
	<a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( esc_url( get_the_permalink() ) ) . '&amp;text=' . rawurlencode( wp_strip_all_tags( get_the_title() ) ); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/twitter-x-white.png" title="Twitter" /></a>
	<a class="telegram" href="https://t.me/share/url?url=<?php echo rawurlencode( esc_url( get_the_permalink() ) ) . '&amp;text=' . rawurlencode( wp_strip_all_tags( get_the_title() ) ); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/telegram.png" title="Telegram" /></a>
	<a class="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo rawurlencode( esc_url( get_the_permalink() ) ) . '&amp;desciption=' . rawurlencode( wp_strip_all_tags( get_the_title() ) ) . '&amp;media=' . rawurlencode( esc_url( $img ) ); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pinterest.png" title="Pin" /></a>
	<a class="whatsapp" href="https://api.whatsapp.com/send?text=<?php echo rawurlencode( wp_strip_all_tags( get_the_title() ) ) . ' ' . rawurlencode( esc_url( get_permalink() ) ); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/whatsapp.png" title="WhatsApp" /></a>
	<a class="copas" data-clipboard-text="<?php echo get_permalink(); ?>" onclick="copaslink()"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/copas.png" title="Copy Link"/></a>
</div><!-- akhir single social share wrap -->
<div class="clr"></div>

<?php get_sidebar('banner-bawah-tombol-share-post'); ?>
<?php endwhile; ?><?php endif; ?>

<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'post__not_in' => array($post->ID) ) ); 
	$numberrelated = get_theme_mod('numberrelated', 5);
	$relatedpost = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => $numberrelated, 'post__not_in' => array($post->ID) ) ); ?>

<?php if( (get_theme_mod( 'commenttype', 'default') == "default" ) || !is_plugin_active('comments-from-facebook/facebook-comment.php') ) { ?> <div id="comments"> <?php comments_template(); ?></div><?php } else { ?>		
	
<div id="comments" class="komentar-fb">
	<div id="respond" class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="100%" data-numposts="10"></div>
</div>
<?php } if( $related ) { if ($numberrelated > 0) { ?>
	<div class="single-judul-related-post">
		<?php $textrelatedpost = get_theme_mod( 'textrelatedpost' ); 
			if ( $textrelatedpost ) :
			/* sanitize html output */
			echo esc_html( $textrelatedpost );
		else :
			echo esc_html__( 'Read More', 'kibaran' );
		endif;?>
	</div>
<div id="single-related-post-wrap">
<?php foreach( $relatedpost as $post ) {
	setup_postdata($post); ?>
<div><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">

<div class="related-post-text-wrap">
	<h2><?php the_title(); ?></h2>
	<p class="tanggal-related-post"><?php the_time('j F Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
		if( get_theme_mod( 'zonawaktu') != "" ) { 
			echo " ".$zonawaktu;
		}; ?>
	</p>
</div>

<?php if ( has_post_format('video') ) { ?>
	<img class="foto-related-post-video" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
	<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon-related-post" />
<?php } else { the_post_thumbnail('foto-samping-kecil'); }; ?> 
<div class="clr"></div></a>
<div class="clr"></div>
</div> 
<?php } ?></div><?php } ?>
<div class="sidebar-banner-bawah-tombol-share-post-wrap"><?php if (get_theme_mod('adsbeforetrendingpost')!="") { 
	echo get_theme_mod('adsbeforetrendingpost');
} ?></div>

<div class="single-judul-related-post">
<?php $texttrendingpostinpost = get_theme_mod( 'texttrendingpostinpost' ); 
	if ( $texttrendingpostinpost ) :
		/* sanitize html output */
		$category = get_the_category();
        echo get_theme_mod('texttrendingpostinpost') ." ".$category[0]->cat_name;
	else :
		$category = get_the_category(); echo esc_html__( 'Trending on', 'kibaran' ) .' '.$category[0]->cat_name; 
	endif;?>
</div>
<?php $numbertrending = get_theme_mod('numbertrending', 5);
	 $categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$args = array(
    'cat' => $category_id,
	'range' => 'last30days',
	'limit' => $numbertrending,
	'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	'stats_date_format' => 'j F Y',
	'stats_category' => 1, 
	'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

	wpp_get_mostpopular($args);
?>
<?php wp_reset_postdata(); }; ?>

</div><!-- akhir single-article -->
<?php get_sidebar('single'); ?>
</div><!-- akhir single-wrap -->

<?php get_footer(); ?>
<script>
    function copaslink() {
      alert("Link Copied");
    }
</script>