<?php
		/**
		* Template name: Home
		 */
?>
<?php get_header(); ?>
<?php if ( has_nav_menu( 'menu_tag_terkini' ) ) {
	wp_nav_menu( array( 'theme_location' => 'menu_tag_terkini', 'menu_class' => 'menu-tag-terkini') );
} ?>

<?php $active_headline = get_theme_mod('active-headline-mobile'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');  
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>
<?php if( get_theme_mod( 'headlinemobile') == "model1" ) { ?>
<!-- MOBILE SLIDER INDOZONE-->
<div class="headline-indozone">

<ul id="imageGallery">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '9' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li data-thumb="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone-thumb'); ?>" data-src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone'); ?>"><a href="<?php the_permalink(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="indozone-text"><p class="headline-text">
				Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir indozone-text-->
			</a></li>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</ul><!-- akhir imageGallery -->
	</div><!-- akhir headline indozone -->
	<!-- end mobile slider INDOZONE-->
<?php } ?>
<?php } elseif ($active_headline!= null && $active_headline == 1){ ?>
<?php if( get_theme_mod( 'headlinemobile') == "model1" ) { ?>
<!-- MOBILE SLIDER INDOZONE-->
<div class="headline-indozone">

<ul id="imageGallery">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid , 'posts_per_page' => '9' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li data-thumb="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone-thumb'); ?>" data-src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone'); ?>"><a href="<?php the_permalink(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-indozone'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="indozone-text"><p class="headline-text">
				Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir indozone-text-->
			</a></li>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</ul><!-- akhir imageGallery -->
	</div><!-- akhir headline indozone -->
	<!-- end mobile slider INDOZONE-->
<?php } ?>
<?php } ?>
<div id="content-wrap">
<div class="wrap-homepage">
<?php $active_headline = get_theme_mod('active-headline-mobile'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');  
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>	
	<?php if( get_theme_mod( 'headlinemobile') == "model2" || get_theme_mod( 'headlinemobile') != "model1"  ) { ?>
	<!-- MOBILE SLIDER -->
	<div class="hidden">
<div class="owl-carousel">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div><a href="<?php the_permalink(); ?>">
			<img class="foto-samping" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-mobile'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="headline-mobile"><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap-->
			</a></div>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</div></div><!-- akhir hidden -->
	<!-- end mobile slider -->
	
<?php } 
} elseif ($active_headline!= null && $active_headline == 1){ ?>	
	<?php if( get_theme_mod( 'headlinemobile') == "model2" || get_theme_mod( 'headlinemobile') != "model1"  ) { ?>
	<!-- MOBILE SLIDER -->
	<div class="hidden">
<div class="owl-carousel">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div><a href="<?php the_permalink(); ?>">
			<img class="foto-samping" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-mobile'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="headline-mobile"><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap-->
			</a></div>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</div></div><!-- akhir hidden -->
	<!-- end mobile slider -->
	
<?php }  
} ?>

<?php $active_headline = get_theme_mod('active-headline'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');  
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>
	<!-- SLIDER HEADLINE -->
   <div class="demo">
    <ul id="lightSlider">
			<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '1' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap--><img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			</a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
				<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '2', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap --><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		
		<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '1', 'offset' => 3 ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap -->
			<img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
  
			<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'posts_per_page' => '2', 'offset' => 4) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		</ul>
</div><!-- akhir demo -->
	<!-- AKHIR SLIDER HEADLINE -->
<?php } elseif ($active_headline!= null && $active_headline == 1){ ?>
	<!-- SLIDER HEADLINE -->
   <div class="demo">
    <ul id="lightSlider">
			<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '1' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap--><img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			</a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
				<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '2', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap --><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		
		<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '1', 'offset' => 3 ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap -->
			<img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
  
			<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '2', 'offset' => 4) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		</ul>
</div><!-- akhir demo -->
	<!-- AKHIR SLIDER HEADLINE -->
<?php } ?>
</div><!-- akhir wrap-homepage -->
<?php get_sidebar('right'); ?>
</div><!-- akhir content-wrap -->

<div class="clr"></div>
<?php if( get_theme_mod( 'hidelatesttopics', 0) != 1 ) { if ( has_nav_menu( 'menu_tag_terkini' ) ) { ?>
<div class="homepage-category topik-terkini">
				<div class="homepage-category-name">	
				<div class="homepage-category-name">
		<?php $texttopikterkini = get_theme_mod( 'texttopikterkini' ); 
		if ( $texttopikterkini ) :
			/* sanitize html output */
			echo esc_html( $texttopikterkini );
		else :
			echo esc_html__( 'Latest Topics', 'kibaran' );
		endif; ?>
	</div></div>
<?php wp_nav_menu( array( 'theme_location' => 'menu_tag_terkini', 'menu_class' => 'menu-tag-terkini-mobile') ); } ?>
	
<?php } ?>

<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>

<?php get_sidebar('banner-bawah-headline'); ?>


<div class="block-newsfeed">
	<div class="judul-block-newsfeed">
		<?php $textberitaterkini = get_theme_mod( 'textberitaterkini' ); 
		if ( $textberitaterkini ) :
			/* sanitize html output */
			echo esc_html( $textberitaterkini );
		else :
			echo esc_html__( 'Recent News', 'kibaran' );
		endif;?>
	</div>
<div class="block-newsfeed-wrap">
<?php
	 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'post',
		'paged' => $paged
    );

    $wp_query = new WP_Query($args);

    if($wp_query->have_posts() ) {
        while($wp_query->have_posts() ) {
            $wp_query->the_post();
            ?>


<a href="<?php the_permalink(); ?>"><div class="newsfeed-wrap">
	<p class="foto-newsfeed-wrap"><img class="foto-newsfeed" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-headline-mobile'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"><img class="foto-custom-homepage-mobile" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-custom-homepage-mobile'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></p>
	<?php   $category = get_the_category(); 
   echo "<p class='newsfeed-category'>".$category[0]->cat_name."</p>" ?><p class="newsfeed-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); 
												$zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											};
											?></p>
            <h2><?php the_title(); ?></h2>
	<div class="clr"></div>
	</div></a><!-- akhir newsfeed wrap -->

            <?php  do_action( 'kibaran_banner_between_posts' ); do_action( 'kibaran_banner_between_posts2' ); do_action( 'kibaran_banner_between_posts3' );
            } ?>
		<div class="next-wrap">
	 <div class="prev"><?php if( get_theme_mod( 'textsebelumnya') != "" ) { 
        $text = get_theme_mod('textsebelumnya');  previous_posts_link($text,$post_query->max_num_pages); } else { previous_posts_link('Sebelumnya',$post_query->max_num_pages); } ?></div>
    <div class="next"><?php if( get_theme_mod( 'textselanjutnya') != "" ) { 
        $text = get_theme_mod('textselanjutnya');  next_posts_link($text,$post_query->max_num_pages); } else { next_posts_link('Selanjutnya',$post_query->max_num_pages); } ?></div>
	</div>
		
<?php        }
?>
					</div>
	<?php get_sidebar('custom-homepage'); ?>
</div><!-- akhir block-newsfeed -->



<?php get_footer(); ?>