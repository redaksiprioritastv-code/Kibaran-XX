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
<?php if ( has_nav_menu( 'menu_tag_terkini' ) ) { if( wp_is_mobile() && get_theme_mod( 'hidelatesttopics', 0) == 0 ) { ?>
				<div class="homepage-category-name">
<div class="homepage-category topik-terkini">
		<?php $texttopikterkini = get_theme_mod( 'texttopikterkini' ); 
		if ( $texttopikterkini ) :
			/* sanitize html output */
			echo esc_html( $texttopikterkini );
		else :
			echo esc_html__( 'Latest Topics', 'kibaran' );
		endif; ?>
	</div></div>
<?php wp_nav_menu( array( 'theme_location' => 'menu_tag_terkini', 'menu_class' => 'menu-tag-terkini-mobile') ); ?>
	
<?php } } ?>
	




<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>

<?php get_sidebar('banner-bawah-headline'); ?>

<?php 
			if ( is_home() && ! is_front_page() ) :
				?>
					<h1 class="page-title sub-title screen-reader-text"><?php single_post_title(); ?></h1>
				<?php
			endif;
			if ( is_front_page() && is_home() ) :
				?>
					<h1 class="page-title sub-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
				<?php
			endif;
?>

<?php if( get_theme_mod( 'modelhomepage') == "1" ) { ?>

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
            <?php do_action( 'kibaran_banner_between_posts' ); do_action( 'kibaran_banner_between_posts2' ); do_action( 'kibaran_banner_between_posts3' );
            } ?>
		<div class="next-wrap">

	 <div class="prev"><?php $textsebelumnya = get_theme_mod( 'textsebelumnya' ); 
		if ( $textsebelumnya ) :
			/* sanitize html output */
			previous_posts_link($textsebelumnya,$post_query->max_num_pages);
		else :
			$textsebelumnya = __( 'Previous', 'kibaran' );
			previous_posts_link($textsebelumnya,$post_query->max_num_pages);
		endif;?></div>
    <div class="next"><?php $textselanjutnya = get_theme_mod( 'textselanjutnya' ); 
		if ( $textselanjutnya ) :
			/* sanitize html output */
			next_posts_link($textselanjutnya,$post_query->max_num_pages);
		else :
			$textselanjutnya = __( 'Next', 'kibaran' );
			next_posts_link($textselanjutnya,$post_query->max_num_pages);
		endif;?></div>
	</div>
	




<?php } ?>
					</div>
	<?php get_sidebar('custom-homepage'); ?>
</div><!-- akhir block-newsfeed -->

<?php } else { ?>


<!--- BLOCK 1 -->
<?php if( get_theme_mod('block1') != "" && get_theme_mod('block1') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block1 = get_theme_mod('block1');
	$category_link_block1 = get_category_link( $block1 );
	$nama_block1 = get_cat_name($block1);
												  
	
	$query = new WP_Query( array( 'cat' => $block1, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	
					

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block1 ); ?>" title="<?php echo get_cat_name($block1); ?>"><?php echo ucwords(strtolower($nama_block1)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block1 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else {  echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>

	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php echo $nama_block1; ?>					
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); 
												$zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											};
											?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block1, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block1)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block1)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block1, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); 
		$zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;
		?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block1)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block1)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block1jadi = get_terms( 'category', array( 'search' => '$block1' ) );
	$trending_block1 = get_theme_mod("trending-1-id");
$args = array(
    'cat' => $block1,
	     'range' => $trending_block1,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block1'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock1')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock1') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 1 -->





<!-- BLOCK 2 -->
<?php if( get_theme_mod('block2') != "" && get_theme_mod('block2') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block2 = get_theme_mod('block2');
	$category_link_block2 = get_category_link( $block2 );
	$nama_block2 = get_cat_name($block2);
												  
	
	$query = new WP_Query( array( 'cat' => $block2, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	
 
<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block2 ); ?>" title="<?php echo $nama_block2 ?>"><?php echo ucwords(strtolower($nama_block2)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block2 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php echo $nama_block2; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); 	
											$zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ; ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block2, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block2)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block2)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block2, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block2)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block2)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block2jadi = get_terms( 'category', array( 'search' => '$block2' ) );
$trending_block2 = get_theme_mod("trending-2-id");
$args = array(
    'cat' => $block2,
	     'range' => $trending_block2,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block2'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock2')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock2') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 2 -->



<!-- BLOCK 3 -->
<?php if( get_theme_mod('block3') != "" && get_theme_mod('block3') != 0 ) { ?>

<?php 
	$block3 = get_theme_mod('block3');
	$category_link_block3 = get_category_link( $block3 );
	$nama_block3 = get_cat_name($block3);
												  
	
	$query = new WP_Query( array( 'cat' => $block3, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block3 ); ?>" title="<?php echo $nama_block3; ?>"><?php echo ucwords(strtolower($nama_block3)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block3 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block3, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock3')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock3') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 3 -->





<!-- BLOCK 4 -->
<?php if( get_theme_mod('block4') != "" && get_theme_mod('block4') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block4 = get_theme_mod('block4');
	$category_link_block4 = get_category_link( $block4 );
	$nama_block4 = get_cat_name($block4);
												  
	
	$query = new WP_Query( array( 'cat' => $block4, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block4 ); ?>" title="<?php echo $nama_block4; ?>"><?php echo ucwords(strtolower($nama_block4)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block4 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block4; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block4, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block4)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block4)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block4, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block4)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block4)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block4jadi = get_terms( 'category', array( 'search' => '$block4' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block4,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock4')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock4') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 4 -->






<!-- BLOCK 5 -->

<?php if( get_theme_mod('block5') != "" && get_theme_mod('block5') != 0 ) { ?>

<?php 
	$block5 = get_theme_mod('block5');
	$category_link_block5 = get_category_link( $block5 );
	$nama_block5 = get_cat_name($block5);
												  
	
	$query = new WP_Query( array( 'cat' => $block5, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block5 ); ?>" title="<?php echo $nama_block5; ?>"><?php echo ucwords(strtolower($nama_block5)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block5 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block5, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock5')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock5') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 5 -->



<!-- BLOCK 6 -->
<?php if( get_theme_mod('block6') != "" && get_theme_mod('block6') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block6 = get_theme_mod('block6');
	$category_link_block6 = get_category_link( $block6 );
	$nama_block6 = get_cat_name($block6);
												  
	
	$query = new WP_Query( array( 'cat' => $block6, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block6 ); ?>" title="<?php echo $nama_block6; ?>"><?php echo ucwords(strtolower($nama_block6)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block6 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block6; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block6, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block6)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block6)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block6, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block6)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block6)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block6jadi = get_terms( 'category', array( 'search' => '$block6' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block6,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock6')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock6') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 6 -->



<!-- BLOCK 7 -->
<?php if( get_theme_mod('block7') != "" && get_theme_mod('block7') != 0 ) { ?>

<?php 
	$block7 = get_theme_mod('block7');
	$category_link_block7 = get_category_link( $block7 );
	$nama_block7 = get_cat_name($block7);
												  
	
	$query = new WP_Query( array( 'cat' => $block7, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block7 ); ?>" title="<?php echo $nama_block7; ?>"><?php echo ucwords(strtolower($nama_block7)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block7 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block7, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock7')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock7') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 7 -->



<!-- BLOCK 8 -->
<?php if( get_theme_mod('block8') != "" && get_theme_mod('block8') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block8 = get_theme_mod('block8');
	$category_link_block8 = get_category_link( $block8 );
	$nama_block8 = get_cat_name($block8);
												  
	
	$query = new WP_Query( array( 'cat' => $block8, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block8 ); ?>" title="<?php echo $nama_block8; ?>"><?php echo ucwords(strtolower($nama_block8)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block8 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block8; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block8, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block8)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block8)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block8, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block8)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block8)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block8jadi = get_terms( 'category', array( 'search' => '$block8' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block8,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock8')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock8') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 8 -->



<!-- BLOCK 9 -->
<?php if( get_theme_mod('block9') != "" && get_theme_mod('block9') != 0 ) { ?>

<?php 
	$block9 = get_theme_mod('block9');
	$category_link_block9 = get_category_link( $block9 );
	$nama_block9 = get_cat_name($block9);
												  
	
	$query = new WP_Query( array( 'cat' => $block9, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block9 ); ?>" title="<?php echo $nama_block9; ?>"><?php echo ucwords(strtolower($nama_block9)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block9 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block9, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock9')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock9') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 9 -->





<!-- BLOCK 10 -->
<?php if( get_theme_mod('block10') != "" && get_theme_mod('block10') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block10 = get_theme_mod('block10');
	$category_link_block10 = get_category_link( $block10 );
	$nama_block10 = get_cat_name($block10);
												  
	
	$query = new WP_Query( array( 'cat' => $block10, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block10 ); ?>" title="<?php echo $nama_block10; ?>"><?php echo ucwords(strtolower($nama_block10)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block10 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block10; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block10, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block10)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block10)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block10, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block10)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block10)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block10jadi = get_terms( 'category', array( 'search' => '$block10' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block10,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock10')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock10') . '</div></div>'; } ?> 
<?php } else {
    
} ?><!-- akhir BLOCK 10 -->





<!-- BLOCK 11 -->
<?php if( get_theme_mod('block11') != "" && get_theme_mod('block11') != 0 ) { ?>

<?php 
	$block11 = get_theme_mod('block11');
	$category_link_block11 = get_category_link( $block11 );
	$nama_block11 = get_cat_name($block11);
												  
	
	$query = new WP_Query( array( 'cat' => $block11, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block11 ); ?>" title="<?php echo $nama_block11; ?>"><?php echo ucwords(strtolower($nama_block11)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block11 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block11, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock11')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock11') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 11 -->




<!-- BLOCK 12 -->
<?php if( get_theme_mod('block12') != "" && get_theme_mod('block12') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block12 = get_theme_mod('block12');
	$category_link_block12 = get_category_link( $block12 );
	$nama_block12 = get_cat_name($block12);
												  
	
	$query = new WP_Query( array( 'cat' => $block12, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block12 ); ?>" title="<?php echo $nama_block12; ?>"><?php echo ucwords(strtolower($nama_block12)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block12 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block12; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block12, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block12)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block12)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block12, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block12)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block12)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block12jadi = get_terms( 'category', array( 'search' => '$block12' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block12,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock12')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock12') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 12 -->



<!-- BLOCK 13 -->
<?php if( get_theme_mod('block13') != "" && get_theme_mod('block13') != 0 ) { ?>

<?php 
	$block13 = get_theme_mod('block13');
	$category_link_block13 = get_category_link( $block13 );
	$nama_block13 = get_cat_name($block13);
												  
	
	$query = new WP_Query( array( 'cat' => $block13, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block13 ); ?>" title="<?php echo $nama_block13; ?>"><?php echo ucwords(strtolower($nama_block13)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block13 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block13, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock13')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock13') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 13 -->



<!-- BLOCK 14 -->
<?php if( get_theme_mod('block14') != "" && get_theme_mod('block14') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block14 = get_theme_mod('block14');
	$category_link_block14 = get_category_link( $block14 );
	$nama_block14 = get_cat_name($block14);
												  
	
	$query = new WP_Query( array( 'cat' => $block14, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block14 ); ?>" title="<?php echo $nama_block14; ?>"><?php echo ucwords(strtolower($nama_block14)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block14 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block14; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block14, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block14)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block14)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block14, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block14)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block14)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block14jadi = get_terms( 'category', array( 'search' => '$block14' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block14,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock14')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock14') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 14 -->



<!-- BLOCK 15 -->
<?php if( get_theme_mod('block15') != "" && get_theme_mod('block15') != 0 ) { ?>

<?php 
	$block15 = get_theme_mod('block15');
	$category_link_block15 = get_category_link( $block15 );
	$nama_block15 = get_cat_name($block15);
												  
	
	$query = new WP_Query( array( 'cat' => $block15, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block15 ); ?>" title="<?php echo $nama_block15; ?>"><?php echo ucwords(strtolower($nama_block15)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block15 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block15, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock15')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock15') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 15 -->



<!-- BLOCK 16 -->
<?php if( get_theme_mod('block16') != "" && get_theme_mod('block16') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block16 = get_theme_mod('block16');
	$category_link_block16 = get_category_link( $block16 );
	$nama_block16 = get_cat_name($block16);
												  
	
	$query = new WP_Query( array( 'cat' => $block16, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block16 ); ?>" title="<?php echo $nama_block16; ?>"><?php echo ucwords(strtolower($nama_block16)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block16 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block16; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block16, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block16)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block16)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block16, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block16)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block16)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block16jadi = get_terms( 'category', array( 'search' => '$block16' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block16,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock16')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock16') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 16 -->



<!-- BLOCK 17 -->
<?php if( get_theme_mod('block17') != "" && get_theme_mod('block17') != 0 ) { ?>

<?php 
	$block17 = get_theme_mod('block17');
	$category_link_block17 = get_category_link( $block17 );
	$nama_block17 = get_cat_name($block17);
												  
	
	$query = new WP_Query( array( 'cat' => $block17, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block17 ); ?>" title="<?php echo $nama_block17; ?>"><?php echo ucwords(strtolower($nama_block17)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block17 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block17, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock17')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock17') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 17 -->



<!-- BLOCK 18 -->
<?php if( get_theme_mod('block18') != "" && get_theme_mod('block18') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block18 = get_theme_mod('block18');
	$category_link_block18 = get_category_link( $block18 );
	$nama_block18 = get_cat_name($block18);
												  
	
	$query = new WP_Query( array( 'cat' => $block18, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block18 ); ?>" title="<?php echo $nama_block18; ?>"><?php echo ucwords(strtolower($nama_block18)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block18 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block18; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block18, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block18)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block18)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block18, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block18)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block18)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block18jadi = get_terms( 'category', array( 'search' => '$block18' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block18,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock18')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock18') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 18 -->



<!-- BLOCK 19 -->
<?php if( get_theme_mod('block19') != "" && get_theme_mod('block19') != 0 ) { ?>

<?php 
	$block19 = get_theme_mod('block19');
	$category_link_block19 = get_category_link( $block19 );
	$nama_block19 = get_cat_name($block19);
												  
	
	$query = new WP_Query( array( 'cat' => $block19, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block19 ); ?>" title="<?php echo $nama_block19; ?>"><?php echo ucwords(strtolower($nama_block19)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block19 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block19, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock19')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock19') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 19 -->



<!-- BLOCK 20 -->
<?php if( get_theme_mod('block20') != "" && get_theme_mod('block20') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block20 = get_theme_mod('block20');
	$category_link_block20 = get_category_link( $block20 );
	$nama_block20 = get_cat_name($block20);
												  
	
	$query = new WP_Query( array( 'cat' => $block20, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block20 ); ?>" title="<?php echo $nama_block20; ?>"><?php echo ucwords(strtolower($nama_block20)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block20 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block20; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block20, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block20)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block20)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block20, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block20)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block20)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block20jadi = get_terms( 'category', array( 'search' => '$block20' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block20,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock20')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock20') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 20 -->



<!-- BLOCK 21 -->
<?php if( get_theme_mod('block21') != "" && get_theme_mod('block21') != 0 ) { ?>

<?php 
	$block21 = get_theme_mod('block21');
	$category_link_block21 = get_category_link( $block21 );
	$nama_block21 = get_cat_name($block21);
												  
	
	$query = new WP_Query( array( 'cat' => $block21, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block21 ); ?>" title="<?php echo $nama_block21; ?>"><?php echo ucwords(strtolower($nama_block21)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block21 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block21, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock21')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock21') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 21 -->



<!-- BLOCK 22 -->
<?php if( get_theme_mod('block22') != "" && get_theme_mod('block22') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block22 = get_theme_mod('block22');
	$category_link_block22 = get_category_link( $block22 );
	$nama_block22 = get_cat_name($block22);
												  
	
	$query = new WP_Query( array( 'cat' => $block22, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block22 ); ?>" title="<?php echo $nama_block22; ?>"><?php echo ucwords(strtolower($nama_block22)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block22 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block22; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block22, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block22)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block22)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block22, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block22)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block22)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block22jadi = get_terms( 'category', array( 'search' => '$block22' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block22,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock22')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock22') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 22 -->



<!-- BLOCK 23 -->
<?php if( get_theme_mod('block23') != "" && get_theme_mod('block23') != 0 ) { ?>

<?php 
	$block23 = get_theme_mod('block23');
	$category_link_block23 = get_category_link( $block23 );
	$nama_block23 = get_cat_name($block23);
												  
	
	$query = new WP_Query( array( 'cat' => $block23, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block23 ); ?>" title="<?php echo $nama_block23; ?>"><?php echo ucwords(strtolower($nama_block23)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block23 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block23, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock23')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock23') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 23 -->



<!-- BLOCK 24 -->
<?php if( get_theme_mod('block24') != "" && get_theme_mod('block24') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block24 = get_theme_mod('block24');
	$category_link_block24 = get_category_link( $block24 );
	$nama_block24 = get_cat_name($block24);
												  
	
	$query = new WP_Query( array( 'cat' => $block24, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block24 ); ?>" title="<?php echo $nama_block24; ?>"><?php echo ucwords(strtolower($nama_block24)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block24 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block24; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block24, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block24)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block24)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block24, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block24)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block24)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block24jadi = get_terms( 'category', array( 'search' => '$block24' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block24,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock24')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock24') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 24 -->



<!-- BLOCK 25 -->
<?php if( get_theme_mod('block25') != "" && get_theme_mod('block25') != 0 ) { ?>

<?php 
	$block25 = get_theme_mod('block25');
	$category_link_block25 = get_category_link( $block25 );
	$nama_block25 = get_cat_name($block25);
												  
	
	$query = new WP_Query( array( 'cat' => $block25, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block25 ); ?>" title="<?php echo $nama_block25; ?>"><?php echo ucwords(strtolower($nama_block25)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block25 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block25, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock25')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock25') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 25 -->



<!-- BLOCK 26 -->
<?php if( get_theme_mod('block26') != "" && get_theme_mod('block26') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block26 = get_theme_mod('block26');
	$category_link_block26 = get_category_link( $block26 );
	$nama_block26 = get_cat_name($block26);
												  
	
	$query = new WP_Query( array( 'cat' => $block26, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block26 ); ?>" title="<?php echo $nama_block26; ?>"><?php echo ucwords(strtolower($nama_block26)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block26 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block26; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block26, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block26)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block26)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block26, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block26)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block26)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block26jadi = get_terms( 'category', array( 'search' => '$block26' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block26,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock26')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock26') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 26 -->



<!-- BLOCK 27 -->
<?php if( get_theme_mod('block27') != "" && get_theme_mod('block27') != 0 ) { ?>

<?php 
	$block27 = get_theme_mod('block27');
	$category_link_block27 = get_category_link( $block27 );
	$nama_block27 = get_cat_name($block27);
												  
	
	$query = new WP_Query( array( 'cat' => $block27, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block27 ); ?>" title="<?php echo $nama_block27; ?>"><?php echo ucwords(strtolower($nama_block27)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block27 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block27, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock27')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock27') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 27 -->



<!-- BLOCK 28 -->
<?php if( get_theme_mod('block28') != "" && get_theme_mod('block28') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block28 = get_theme_mod('block28');
	$category_link_block28 = get_category_link( $block28 );
	$nama_block28 = get_cat_name($block28);
												  
	
	$query = new WP_Query( array( 'cat' => $block28, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block28 ); ?>" title="<?php echo $nama_block28; ?>"><?php echo ucwords(strtolower($nama_block28)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block28 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block28; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block28, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block28)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block28)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block28, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block28)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block28)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block28jadi = get_terms( 'category', array( 'search' => '$block28' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block28,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock28')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock28') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 28 -->



<!-- BLOCK 29 -->
<?php if( get_theme_mod('block29') != "" && get_theme_mod('block29') != 0 ) { ?>

<?php 
	$block29 = get_theme_mod('block29');
	$category_link_block29 = get_category_link( $block29 );
	$nama_block29 = get_cat_name($block29);
												  
	
	$query = new WP_Query( array( 'cat' => $block29, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category video-block">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block29 ); ?>" title="<?php echo $nama_block29; ?>"><?php echo ucwords(strtolower($nama_block29)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block29 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>

				<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
				
		  
<?php endif; ?>
				
				<?php $query = new WP_Query( array( 'cat' => $block29, 'posts_per_page' => '4') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	
	<?php 
	if ( has_post_format('video') ) { ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('foto-samping'); ?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
									 <?php
	} else { ?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('foto-samping'); ?>
		
	<h3>
		<?php the_title(); ?>
		</h3><p class="video-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p></a>
	<?php	
	}
	?>
		</div>	
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->
<?php if (get_theme_mod('bawahblock29')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock29') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 29 -->



<!-- BLOCK 30 -->
<?php if( get_theme_mod('block30') != "" && get_theme_mod('block30') != 0 ) { ?>

<div class="block-kibaran">
<?php get_sidebar('header'); ?>
	<?php 
	$block30 = get_theme_mod('block30');
	$category_link_block30 = get_category_link( $block30 );
	$nama_block30 = get_cat_name($block30);
												  
	
	$query = new WP_Query( array( 'cat' => $block30, 'posts_per_page' => '1') ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

			<div class="homepage-category">
				<div class="homepage-category-name">	

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link_block30 ); ?>" title="<?php echo $nama_block30; ?>"><?php echo ucwords(strtolower($nama_block30)); ?></a><a class="lihat" href="<?php echo esc_url( $category_link_block30 ); ?>"><span><?php if( get_theme_mod( 'textlihatlainnya') != "" ) { 
        echo get_theme_mod('textlihatlainnya'); } else { echo esc_html__( 'See More', 'kibaran' ); } ?></span> <img src="<?php echo esc_url(get_template_directory_uri()).'/images/chevron-right.svg'; ?>" class="chevron-right" alt="chevron right icon" /></a>
	
</div><!-- akhir homepage-category-name -->
				<div class="clr"></div>
				<a class="homepage-category-headline" href="<?php the_permalink(); ?>" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'foto-headline-category'); ?>'); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
					<div class="homepage-category-text-block">
						<p class="homepage-category-inside"><?php  echo $nama_block30; ?>
					</p>
				
					<h3 class="homepage-category-headline-judul"><?php the_title(); ?></h3><p class="homepage-category-tanggal"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p>
					</div><!-- akhir homepage category text block -->
					</a><!-- akhir homepage-category-headline -->
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></div><!-- akhir homepage-category-->

<div class="homepage-category-block">
<?php $query = new WP_Query( array( 'cat' => $block30, 'posts_per_page' => '1' )); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="terbaru"><?php if( get_theme_mod( 'textterbarudi') != "" ) { 
        echo get_theme_mod('textterbarudi'). " <span>".ucwords($nama_block30)."</span>"; } else { echo esc_html__( 'Latest in', 'kibaran' ); 
   //echo $category[0]->cat_name;
   echo " <span>".ucwords($nama_block30)."</span>"; }
?>
</div>
<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>


<ul class="berita-terkini">
	<?php $query = new WP_Query( array( 'cat' => $block30, 'posts_per_page' => '5', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<img class="foto-berita-terkini" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping-kecil'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?><p class="tanggal-related-post"><?php the_time('j M Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											} ;  ?></p> </a><div class="clr">
		</div>
		</li>	

<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?></ul></div><!-- akhir homepage-category-block -->
	
	<div class="trending-homepage">
	<div class="terbaru"><?php if( get_theme_mod( 'texttrendingdi') != "" ) { 
        echo get_theme_mod('texttrendingdi'). " <span>".ucwords($nama_block30)."</span>"; } else { echo esc_html__( 'Trending on', 'kibaran' );  echo " <span>".ucwords($nama_block30)."</span>"; } ?>
			</div>
				<?php
				// Get terms whose name contains "my_name"
//$block30jadi = get_terms( 'category', array( 'search' => '$block30' ) );
$trending_block4 = get_theme_mod("trending-4-id");
$args = array(
    'cat' => $block30,
	     'range' => $trending_block4,
	'limit' => 5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"></div><p class="wpp-date-custom"> {date} </p></li>'
);

wpp_get_mostpopular($args );
?>
	</div><!-- akhir trending-homepage -->
<?php //get_sidebar('block4'); ?>
	<div class="clr"></div>
		</div><!-- akhir block-kibaran -->
<?php if (get_theme_mod('bawahblock30')!="") { echo '<div id="sidebar-banner-bawah-block1"><div class="sidebar-banner-bawah-block1-wrap">' . get_theme_mod('bawahblock30') . '</div></div>'; } ?>
<?php } else {
    
} ?><!-- akhir BLOCK 30 -->

<?php } ?>

<?php get_footer(); ?>