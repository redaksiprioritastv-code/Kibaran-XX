<?php

get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="page-fullwidth">


  <?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
            <h1 class="judul-timeline-umum">Hasil Pencarian</h1><p class="menemukan"> "<?php echo esc_html( get_search_query( false ) ); ?>" menemukan <?php echo $total_results ?> berita</p> 
	<?php
if ( have_posts() ) : ?>
	<div class="kotak-pencarian">
    <?php while ( have_posts() ) : the_post();
        // Your loop code
	?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><div class="related-post-text-wrap">
		
		<h2><?php the_title();?></h2>
		<p class="tanggal-related-post"><?php the_time('j F Y '); echo "- "; the_time(' H:i'); $zonawaktu = get_theme_mod('zonawaktu');
											if( get_theme_mod( 'zonawaktu') != "" ) { 
												echo " ".$zonawaktu;
											}; ?></p></div>
		<?php the_post_thumbnail('foto-samping-kecil'); ?><div class="clr"></div></a><?php
    endwhile; ?></div><!-- akhir kotak-terbaru -->
		<div class="next-wrap">
		<div class="prev"><?php previous_posts_link( 'Sebelumnya' ); ?></div>
	<div class="next"><?php next_posts_link( 'Selanjutnya' ); ?></div>
	</div>
	<?php
else :
   
endif;
?>




		
</div><!-- akhir page-fullwidth -->

<?php get_footer(); ?>