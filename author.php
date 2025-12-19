<?php get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="page-fullwidth">


	
	<div class="writer">
					<?php
				//$user = wp_get_current_user();
				the_post();
echo get_avatar( get_the_author_meta( 'ID' ), 128 ); 
				?> 
				
				<p class="writer-name">
					 <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <?php  echo $curauth->display_name;
					// echo get_the_author_meta('display_name'); ?>
					<?php //the_author_posts_link();		
			?>			<img src="<?php echo esc_url( get_template_directory_uri().'/images/badge-check-verify.png'); ?>" class="badge-check" alt="badge-check"><span><?php $writer = get_theme_mod('writer');
											if( get_theme_mod( 'writer') != "" ) { 
												echo $writer;
											} else { echo "Writer"; }; ?></span>
				</p><p class="jumlahtulisan"><?php echo 'Total Artikel ' . count_user_posts( get_the_author_meta('ID') ); ?></p>
		<div class="clr"></div>
			</div><!-- akhir writer -->
<?php rewind_posts(); // rewind the loop ?>
<div class="wrap-author">


<?php
if ( have_posts() ) : ?>
	<div class="kotak-terbaru">
    <?php while ( have_posts() ) : the_post();
        // Your loop code
	?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
	
<div class="related-post-text-wrap">
	<h2><?php the_title(); ?></h2>
	<p class="tanggal-related-post"><?php the_time('j F Y '); echo "- "; the_time(' H:i'); echo " WIB"; ?></p>
			</div>
	<?php the_post_thumbnail('foto-samping-kecil'); ?> <div class="clr"></div>
		</a>
       <div class="clr"></div>
	
	<?php
    endwhile; ?></div><!-- akhir kotak-terbaru -->
	<div class="next-wrap">
		<div class="prev"><?php previous_posts_link( 'Sebelumnya' ); ?></div>
	<div class="next"><?php next_posts_link( 'Selanjutnya' ); ?></div>
	</div>
	<?php
else :
    esc_html_e( 'Sorry, no posts were found.', 'kibaran' );
endif;
?>

</div><!-- akhir wrap-author -->
<?php // get_sidebar('category'); ?>


</div><!-- akhir page-fullwidth -->
<?php get_footer(); ?>