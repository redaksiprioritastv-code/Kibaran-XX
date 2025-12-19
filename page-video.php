<?php
/**
* Template Name: Template Video
*
*/
get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="page-fullwidth">
              
					<div class="video-wrap">
	<h1>
		Video
						</h1>
	
				<div class="deskripsi-kategori">
	<p>
		Berita video hari ini
					</p>
</div>
				 <?php 		
						 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$query = new WP_Query( array( 'category_name' => 'video', 'paged' => $paged)); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="video-box">
	<a href="<?php the_permalink(); ?>">
	<?php $youtubeUrl = get_post_meta($post->ID, '_embed', true); 
	if ( has_post_format('video') ) { ?>
 <?php the_post_thumbnail('foto-samping');
	};
	?>
		<img src="<?php echo esc_url(get_template_directory_uri()).'/images/video-play-icon.svg'; ?>" class="video-play-icon" />
	<h3>
		<?php the_title(); ?>
		</h3></a></div>	
	
<?php endwhile; ?>
						<div class="next-wrap">
	 <div class="prev"><?php previous_posts_link('Sebelumnya',$query->max_num_pages); ?></div>
    <div class="next"><?php next_posts_link('Selanjutnya',$query->max_num_pages); ?></div>
	</div>
						<div class="clr"></div>
				
						
<?php		
        // Reset Query
        wp_reset_query();
						?>
<?php else: ?>
		 
<?php endif; ?>
	</div><!-- akhir video wrap -->
		
</div><!-- akhir page-fullwidth -->

<?php get_footer(); ?>