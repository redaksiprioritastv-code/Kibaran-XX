<?php get_header(); ?>

<?php $active_headline = get_theme_mod('active-headline-category-mobile'); $default_headline = get_theme_mod('disable-headline-setting'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');  
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>
<?php if( get_theme_mod( 'headlinemobile') == "model1" ) { ?>
<!-- MOBILE SLIDER INDOZONE-->
<div class="headline-indozone">
<ul id="imageGallery">
 <?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug; $query = new WP_Query( array( 'posts_per_page' => '9' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
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
<?php } elseif ($active_headline!= null && $active_headline == 1 && $default_headline!= null && $default_headline == 1){ ?>
<?php if( get_theme_mod( 'headlinemobile') == "model1" ) { ?>
<!-- MOBILE SLIDER INDOZONE-->
<div class="headline-indozone">
<ul id="imageGallery">
 <?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug; $query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '9' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
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
<?php } elseif ($active_headline!= null && $active_headline == 1) { ?>
<?php if( get_theme_mod( 'headlinemobile') == "model1" ) { ?>
<!-- MOBILE SLIDER INDOZONE-->
<div class="headline-indozone">
<ul id="imageGallery">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '9' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
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

<div id="category-wrap">
<div class="wrap-category">
<?php $active_headline = get_theme_mod('active-headline-category-mobile'); $default_headline = get_theme_mod('disable-headline-setting'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');    
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>	
	<?php if( get_theme_mod( 'headlinemobile') == "model2" || get_theme_mod( 'headlinemobile') != "model1"  ) { ?>
		<!-- MOBILE SLIDER -->
	<div class="hidden">
<div class="owl-carousel">
 <?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug; $query = new WP_Query( array( 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div><a href="<?php the_permalink(); ?>">
			<img class="foto-samping" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="headline-mobile"><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap-->
			</a></div>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</div></div><!-- akhir hidden -->
	<!-- end mobile slider -->
<?php } ?>
<?php } elseif ($active_headline!= null && $active_headline == 1 && $default_headline!= null && $default_headline == 1){ ?>	
	<?php if( get_theme_mod( 'headlinemobile') == "model2" || get_theme_mod( 'headlinemobile') != "model1"  ) { ?>
		<!-- MOBILE SLIDER -->
	<div class="hidden">
<div class="owl-carousel">
 <?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug; $query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div><a href="<?php the_permalink(); ?>">
			<img class="foto-samping" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="headline-mobile"><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap-->
			</a></div>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</div></div><!-- akhir hidden -->
	<!-- end mobile slider -->
<?php } ?>
<?php } elseif ($active_headline!= null && $active_headline == 1) { ?>
	<?php if( get_theme_mod( 'headlinemobile') == "model2" || get_theme_mod( 'headlinemobile') != "model1"  ) { ?>
		<!-- MOBILE SLIDER -->
	<div class="hidden">
<div class="owl-carousel">
 <?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug; $query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div><a href="<?php the_permalink(); ?>">
			<img class="foto-samping" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-samping'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			<div class="headline-mobile"><h2><?php the_title(); ?></h2><p class="tanggal-headline-mobile"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap-->
			</a></div>
			<?php endwhile; ?><?php wp_reset_postdata();
else: ?>
<?php endif; ?>
</div></div><!-- akhir hidden -->
	<!-- end mobile slider -->
<?php } ?>	
<?php } ?>	
	
<?php $active_headline = get_theme_mod('active-headline-category');  $default_headline = get_theme_mod('disable-headline-setting'); $headlinefromlatestpost = get_theme_mod('headline-setting-basedon-latestpost');     
if ($active_headline!= null && $active_headline == 1 && $headlinefromlatestpost!= null && $headlinefromlatestpost == 1){ ?>
	<!-- SLIDER HEADLINE -->
   <div class="demo">
    <ul id="lightSlider">
			<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'posts_per_page' => '1' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap--><img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			</a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
				<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'posts_per_page' => '2', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap --><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		
		<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'posts_per_page' => '1', 'offset' => 3 ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap -->
			<img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
  
			<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'posts_per_page' => '2', 'offset' => 4) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		</ul>
</div><!-- akhir demo -->
	<!-- AKHIR SLIDER HEADLINE -->
<?php } elseif ($active_headline!= null && $active_headline == 1 && $default_headline!= null && $default_headline == 1){ ?>
	<!-- SLIDER HEADLINE -->
   <div class="demo">
    <ul id="lightSlider">
			<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '1' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline-title-wrap--><img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
			</a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
				<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '2', 'offset' => 1) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
				</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap --><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		
		<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '1', 'offset' => 3 ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><!-- akhir headline title wrap -->
			<img class="foto-slide-besar" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-besar'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
		<?php endwhile; wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
  
			<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->slug;
$query = new WP_Query( array( 'category_name' => $cat_id, 'posts_per_page' => '2', 'offset' => 4) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
			<a href="<?php the_permalink(); ?>" class="slide-medium"><div class="headline-title-wrap"><p class="headline">
			Headline
			</p><h2><?php the_title(); ?></h2><p class="tanggal-headline"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'kibaran' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></p></div><img class="foto-slide-medium" src="<?php echo get_the_post_thumbnail_url($post->ID, 'foto-slide-medium'); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>"></a>
<?php endwhile; ?></li><?php wp_reset_postdata();
else: ?>
		  
<?php endif; ?>
		</ul>
</div><!-- akhir demo -->
	<!-- AKHIR SLIDER HEADLINE -->
<?php } elseif ($active_headline!= null && $active_headline == 1) { ?>
	<!-- SLIDER HEADLINE -->
   <div class="demo">
    <ul id="lightSlider">
			<?php $headlineid = get_term(get_theme_mod('headlinesetting')); $headlineid = $headlineid->slug;
$query = new WP_Query( array( 'tag' => $headlineid, 'posts_per_page' => '1' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
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
	
	
	<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
	
<?php

if ( have_posts() ) : ?>
	<div class="wrap-feed">
		 <h3 class="judul-timeline-umum box-umum">	
<p><?php echo single_cat_title(); ?></p></h3>
<?php if( get_theme_mod( 'deskripsikategori', 0) != 0 ) { ?>
<div class="deskripsi-kategori">
	<?php echo category_description(); ?>
</div>
<?php }  ?>
	<!--div class="terbaru">
		Feed
	</div--><div class="kotak-terbaru">

	<?php // $cat = new WP_Query( array(
		// 'cat' => get_query_var('cat'), 
    		// 'offset'  => 6,
// ) );
	while ( have_posts() ) : the_post(); 
// output posts ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
	
<div class="related-post-text-wrap">
	<h2><?php the_title(); ?></h2>
	<p class="tanggal-related-post"><?php the_time('j F Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											}; ?></p>
			</div>
	<?php the_post_thumbnail('foto-samping-kecil'); ?><?php $youtubeUrl = get_post_meta($post->ID, '_embed', true); 

	?> <div class="clr"></div>
		</a>
       <div class="clr"></div>


<?php do_action( 'kibaran_banner_between_posts' );  do_action( 'kibaran_banner_between_posts2' ); do_action( 'kibaran_banner_between_posts3' ); endwhile; ?></div><!-- akhir kotak-terbaru -->
	<div class="next-wrap">
		<div class="prev"><?php previous_posts_link( 'Sebelumnya' ); ?></div>
	<div class="next"><?php next_posts_link( 'Selanjutnya' ); ?></div>
	</div>

<?php else : ?>
<div class="wrap-feed">
<h3 class="judul-timeline-umum box-umum">	
<p><?php echo single_cat_title(); ?></p></h3>
<?php if( get_theme_mod( 'deskripsikategori', 0) != 0 ) { ?>
<div class="deskripsi-kategori">
	<?php echo category_description(); ?>
</div>
<?php } ?>
		<div class="notfound-box">
			<div class="notfound-wrap">
				<div class="notfound-image">
					<div class="img-404"></div>
				</div>
				<div class="notfound-title">
					<h1>Maaf, tidak ada konten di kategori ini</h1>
				</div>
				<div class="notfound-desc">
					<p>Tapi tenang, masih banyak konten menarik lainnya</p>
				</div>
				<div class="notfound-button">
					<a href="<?php echo get_home_url(); ?>">Lihat konten lain</a>
				</div>

			</div>
		</div>
<?php endif; ?>
</div><!-- akhir wrap-category -->

</div><!-- akhir wrap-homepage -->
<?php get_sidebar('category'); ?>
	<div class="clr"></div>
</div><!-- akhir content-wrap -->


<?php get_footer(); ?>