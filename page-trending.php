<?php
/**
* Template Name: Template Trending
*
*/
get_header(); ?>
<?php get_sidebar('banner-160x600-kanan'); ?>

<?php get_sidebar('banner-160x600-kiri'); ?>
<div id="page-fullwidth">
	

<?php 

	if (have_posts()) : while (have_posts()) : the_post(); ?>
               <h1><?php the_title(); ?></h1>
					<div class="trending-wrap">

<!-- ************************

	BLOCK

********************** -->
						
<?php if( get_theme_mod('block1') != "" && get_theme_mod('block1') != 0 ) { 
	$block1 = get_cat_name(get_theme_mod('block1'));
	$idObj = get_category_by_slug($block1); 
//	$id1 = $idObj1->term_id; 	
	$id1 = get_theme_mod('block1'); 	
		} else {    
} ?>

<?php if( get_theme_mod('block2') != "" && get_theme_mod('block2') != 0 ) { 
	$block2 = get_theme_mod('block2');
	$idObj2 = get_category_by_slug($block2); 
//	$id2 = $idObj2->term_id; 	
	$id2 = get_theme_mod('block2'); 
		} else {    
} ?>
						
<?php if( get_theme_mod('block3') != "" && get_theme_mod('block3') != 0 ) { 						
	$block3 = get_theme_mod('block3'); 
	$idObj3 = get_category_by_slug($block3); 
	$id3 = get_theme_mod('block3');  
		} else {    
} ?>
						
<?php if( get_theme_mod('block4') != "" && get_theme_mod('block4') != 0 ) { 						
	$block4 = get_theme_mod('block4');
	$idObj4 = get_category_by_slug($block4); 
	$id4 = get_theme_mod('block4');  						
		} else {    
} ?>

<?php if( get_theme_mod('block5') != "" && get_theme_mod('block5') != 0 ) { 	
	$block5 = get_theme_mod('block5'); 
	$idObj5 = get_category_by_slug($block5); 
	$id5 = get_theme_mod('block5'); ; 		
		} else {    
} ?>
				
<?php if( get_theme_mod('block6') != "" && get_theme_mod('block6') != 0 ) { 	
	$block6 = get_theme_mod('block6'); 
	$idObj6 = get_category_by_slug($block6); 
	$id6 = get_theme_mod('block6'); 
		} else {    
} ?>
						
<?php if( get_theme_mod('block7') != "" && get_theme_mod('block7') != 0 ) { 	
	$block7 = get_theme_mod('block7');
	$idObj7 = get_category_by_slug($block7); 
	$id7 = get_theme_mod('block7'); 
		} else {    
} ?>
						
<?php if( get_theme_mod('block8') != "" && get_theme_mod('block8') != 0 ) { 	
	$block8 = get_theme_mod('block8');
	$idObj8 = get_category_by_slug($block8); 
	$id8 = get_theme_mod('block8');  
		} else {    
} ?>
						

<?php if( get_theme_mod('block9') != "" && get_theme_mod('block9') != 0 ) { 	
	$block9 = get_theme_mod('block9');
	$idObj9 = get_category_by_slug($block9); 
	$id9 = get_theme_mod('block9');  
	} else {    
} ?>
						
<?php if( get_theme_mod('block10') != "" && get_theme_mod('block10') != 0 ) { 	
	$block10 = get_theme_mod('block10');
	$idObj10 = get_category_by_slug($block10); 
	$id10 = get_theme_mod('block10'); 
	} else {    
} ?>


<?php if( get_theme_mod('block11') != "" && get_theme_mod('block11') != 0 ) { 	
	$block11 = get_theme_mod('block11');
	$idObj11 = get_category_by_slug($block11); 
	$id11 = get_theme_mod('block11'); 
	} else {    
} ?>
						

<?php if( get_theme_mod('block12') != "" && get_theme_mod('block12') != 0 ) { 
	$block12 = get_theme_mod('block12');
	$idObj12 = get_category_by_slug($block12); 
	$id12 = get_theme_mod('block12'); 
	} else {    
} ?>

<?php if( get_theme_mod('block13') != "" && get_theme_mod('block13') != 0 ) { 	
	$block13 = get_theme_mod('block13');
	$idObj13 = get_category_by_slug($block13); 
	$id13 = get_theme_mod('block13');  
	} else {    
} ?>
						
<?php if( get_theme_mod('block14') != "" && get_theme_mod('block14') != 0 ) { 	
	$block14 = get_theme_mod('block14');
	$idObj14 = get_category_by_slug($block14); 
	$id14 = get_theme_mod('block14'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block15') != "" && get_theme_mod('block15') != 0 ) { 							
	$block15 = get_theme_mod('block15');
	$idObj15 = get_category_by_slug($block15); 
	$id15 = get_theme_mod('block15');  
	} else {    
} ?>
						
<?php if( get_theme_mod('block16') != "" && get_theme_mod('block16') != 0 ) { 
	$block16 = get_theme_mod('block16');
	$idObj16 = get_category_by_slug($block16); 
	$id16 = get_theme_mod('block16'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block17') != "" && get_theme_mod('block17') != 0 ) {
	$block17 = get_theme_mod('block17');
	$idObj17 = get_category_by_slug($block17); 
	$id17 = get_theme_mod('block17'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block18') != "" && get_theme_mod('block18') != 0 ) {
	$block18 = get_theme_mod('block18');
	$idObj18 = get_category_by_slug($block18); 
	$id18 = get_theme_mod('block18');  
	} else {    
} ?>
						
<?php if( get_theme_mod('block19') != "" && get_theme_mod('block19') != 0 ) {
	$block19 = get_theme_mod('block19');
	$idObj19 = get_category_by_slug($block19); 
	$id19 = get_theme_mod('block19');  
		} else {    
} ?>
						
<?php if( get_theme_mod('block20') != "" && get_theme_mod('block20') != 0 ) {
	$block20 = get_theme_mod('block20');
	$idObj20 = get_category_by_slug($block20); 
	$id20 = get_theme_mod('block20');
	} else {    
} ?>

<?php if( get_theme_mod('block21') != "" && get_theme_mod('block21') != 0 ) {
	$block21 = get_theme_mod('block21');
	$idObj21 = get_category_by_slug($block21); 
	$id21 = get_theme_mod('block21');
	} else {    
} ?>

<?php if( get_theme_mod('block22') != "" && get_theme_mod('block22') != 0 ) {					
	$block22 = get_theme_mod('block22');
	$idObj22 = get_category_by_slug($block22); 
	$id22 = get_theme_mod('block22'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block23') != "" && get_theme_mod('block23') != 0 ) {
	$block23 = get_theme_mod('block23');
	$idObj23 = get_category_by_slug($block23); 
	$id23 = get_theme_mod('block23');
	} else {    
} ?>
					
<?php if( get_theme_mod('block24') != "" && get_theme_mod('block24') != 0 ) {
	$block24 = get_theme_mod('block24');
	$idObj24 = get_category_by_slug($block24); 
	$id24 = get_theme_mod('block24');
	} else {    
} ?>
						
<?php if( get_theme_mod('block25') != "" && get_theme_mod('block25') != 0 ) {		
	$block25 = get_theme_mod('block25');
	$idObj25 = get_category_by_slug($block25); 
	$id25 = get_theme_mod('block25'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block26') != "" && get_theme_mod('block26') != 0 ) {
	$block26 = get_theme_mod('block26');
	$idObj26 = get_category_by_slug($block26); 
	$id26 = get_theme_mod('block26');
		} else {    
} ?>
						
<?php if( get_theme_mod('block27') != "" && get_theme_mod('block27') != 0 ) {
	$block27 = get_theme_mod('block27');
	$idObj27 = get_category_by_slug($block27); 
	$id27 = get_theme_mod('block27'); 
	} else {    
} ?>
						
<?php if( get_theme_mod('block28') != "" && get_theme_mod('block28') != 0 ) {
	$block28 = get_theme_mod('block28');
	$idObj28 = get_category_by_slug($block28); 
	$id28 = get_theme_mod('block28');
	} else {    
} ?>
						
<?php if( get_theme_mod('block29') != "" && get_theme_mod('block29') != 0 ) {
	$block29 = get_theme_mod('block29');
	$idObj29 = get_category_by_slug($block29); 
	$id29 = get_theme_mod('block29');	
	} else {    
} ?>
						
						
<?php if( get_theme_mod('block30') != "" && get_theme_mod('block30') != 0 ) {
	$block30 = get_theme_mod('block30');
	$idObj30 = get_category_by_slug($block30); 
	$id30 = get_theme_mod('block30'); 
	} else {    
	} ?>
						
					
<!-- ************************

	TRENDING 

********************** -->
	
<?php if( get_theme_mod( 'block1') != "" ) { 
	$trending_block1 = get_theme_mod("trending-1-id"); 
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block2') != "" ) { 
	$trending_block2 = get_theme_mod("trending-2-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block3') != "" ) { 
	$trending_block3 = get_theme_mod("trending-3-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block4') != "" ) { 	
	$trending_block4 = get_theme_mod("trending-4-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block5') != "" ) { 	
	$trending_block5 = get_theme_mod("trending-5-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block6') != "" ) { 	
	$trending_block6 = get_theme_mod("trending-6-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block7') != "" ) { 	
	$trending_block7 = get_theme_mod("trending-7-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block8') != "" ) { 		
	$trending_block8 = get_theme_mod("trending-8-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block9') != "" ) { 		
	$trending_block9 = get_theme_mod("trending-9-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block10') != "" ) { 		
	$trending_block10 = get_theme_mod("trending-10-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block11') != "" ) { 		
	$trending_block11 = get_theme_mod("trending-11-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block12') != "" ) { 		
	$trending_block12 = get_theme_mod("trending-12-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block13') != "" ) { 		
	$trending_block13 = get_theme_mod("trending-13-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block14') != "" ) { 		
	$trending_block14 = get_theme_mod("trending-14-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block15') != "" ) { 		
	$trending_block15 = get_theme_mod("trending-15-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block6') != "" ) { 		
	$trending_block16 = get_theme_mod("trending-16-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block17') != "" ) { 		
	$trending_block17 = get_theme_mod("trending-17-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block18') != "" ) { 	
	$trending_block18 = get_theme_mod("trending-18-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block19') != "" ) { 		
	$trending_block19 = get_theme_mod("trending-19-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block20') != "" ) { 		
	$trending_block20 = get_theme_mod("trending-20-id");
	} else {    
} ?>

<?php if( get_theme_mod( 'block21') != "" ) { 		
	$trending_block21 = get_theme_mod("trending-21-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block22') != "" ) { 		
	$trending_block22 = get_theme_mod("trending-22-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block3') != "" ) { 		
	$trending_block23 = get_theme_mod("trending-23-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block4') != "" ) { 		
	$trending_block24 = get_theme_mod("trending-24-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block5') != "" ) { 		
	$trending_block25 = get_theme_mod("trending-25-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block26') != "" ) { 		
	$trending_block26 = get_theme_mod("trending-26-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block27') != "" ) { 	
	$trending_block27 = get_theme_mod("trending-27-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block28') != "" ) { 		
	$trending_block28 = get_theme_mod("trending-28-id");
	} else {    
} ?>
	
<?php if( get_theme_mod( 'block29') != "" ) { 		
	$trending_block29 = get_theme_mod("trending-29-id"); 
	} else {    
} ?>
						
<?php if( get_theme_mod( 'block30') != "" ) { 
	$trending_block30 = get_theme_mod("trending-30-id"); 
	} else {
} ?>
						
<!-- ************************

	ARGUMENTS

********************** -->						


<?php		
$semua = array(
	'range' => 'all',
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
						
?>
						
<?php if( get_theme_mod( 'block1') != "" ) { 			
$args = array(
    'cat' => $id1,
	    'range' => $trending_block1,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {    
} ?>
						

<?php if( get_theme_mod( 'block2') != "" ) { 			
$args2 = array(
    'cat' => $id2,
	    'range' => $trending_block2,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>

<?php if( get_theme_mod( 'block3') != "" ) { 			
$args3 = array(
    'cat' => $id3,
	    'range' => $trending_block3,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>

<?php if( get_theme_mod( 'block4') != "" ) { 				
$args4 = array(
    'cat' => $id4,
	    'range' => $trending_block4,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
						

<?php if( get_theme_mod( 'block5') != "" ) { 			
$args5 = array(
    'cat' => $id5,
	    'range' => $trending_block5,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>


<?php if( get_theme_mod( 'block6') != "" ) { 			
$args6 = array(
    'cat' => $id6,
	    'range' => $trending_block6,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
						

<?php if( get_theme_mod( 'block7') != "" ) { 			
$args7 = array(
    'cat' => $id7,
	    'range' => $trending_block7,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>

	
<?php if( get_theme_mod( 'block8') != "" ) { 			
$args8 = array(
    'cat' => $id8,
	    'range' => $trending_block8,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>


<?php if( get_theme_mod( 'block9') != "" ) { 			
$args9 = array(
    'cat' => $id9,
	    'range' => $trending_block9,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>

	
<?php if( get_theme_mod( 'block10') != "" ) { 				
$args10 = array(
    'cat' => $id10,
	    'range' => $trending_block10,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	

<?php if( get_theme_mod( 'block11') != "" ) { 			
$args11 = array(
    'cat' => $id11,
	    'range' => $trending_block11,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block12') != "" ) { 			
$args12 = array(
    'cat' => $id12,
	    'range' => $trending_block12,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block13') != "" ) { 			
$args13 = array(
    'cat' => $id13,
	    'range' => $trending_block13,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block14') != "" ) { 			
$args14 = array(
    'cat' => $id14,
	    'range' => $trending_block14,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block15') != "" ) { 			
$args15 = array(
    'cat' => $id15,
	    'range' => $trending_block15,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block16') != "" ) { 			
$args16 = array(
    'cat' => $id16,
	    'range' => $trending_block16,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block17') != "" ) { 			
$args17 = array(
    'cat' => $id17,
	    'range' => $trending_block17,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block18') != "" ) { 			
$args18 = array(
    'cat' => $id18,
	    'range' => $trending_block18,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block19') != "" ) { 			
$args19 = array(
    'cat' => $id19,
	    'range' => $trending_block19,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);	
	} else {
} ?>
	
	
	
<?php if( get_theme_mod( 'block20') != "" ) { 			
$args20 = array(
    'cat' => $id20,
	    'range' => $trending_block20,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);	
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block21') != "" ) { 			
$args21 = array(
    'cat' => $id21,
	    'range' => $trending_block21,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);	
	} else {
} ?>
						
	
<?php if( get_theme_mod( 'block22') != "" ) { 			
$args22 = array(
    'cat' => $id22,
	    'range' => $trending_block22,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block23') != "" ) { 			
$args23 = array(
    'cat' => $id23,
	    'range' => $trending_block23,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block24') != "" ) { 			
$args24 = array(
    'cat' => $id24,
	    'range' => $trending_block24,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block25') != "" ) { 			
$args25 = array(
    'cat' => $id25,
	    'range' => $trending_block25,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block26') != "" ) { 			
$args26 = array(
    'cat' => $id26,
	    'range' => $trending_block26,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block27') != "" ) { 			
$args27 = array(
    'cat' => $id27,
	    'range' => $trending_block27,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block28') != "" ) { 			
$args28 = array(
    'cat' => $id28,
	    'range' => $trending_block28,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>
	
	
<?php if( get_theme_mod( 'block29') != "" ) { 			
$args29 = array(
    'cat' => $id29,
	    'range' => $trending_block29,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);
	} else {
} ?>

						
						
<?php if( get_theme_mod( 'block30') != "" ) { 
$args30 = array(
    'cat' => $id30,
	    'range' => $trending_block30,
	  'thumbnail_width' => 85,
    'thumbnail_height' => 85,
	'stats_date' => 1,
	  'stats_date_format' => 'j F Y',
	 'stats_category' => 1, 
	'stats_views' => 1,
	  'post_html' => '<li>{thumb} {title} <div class="wpp-stats-custom"> {category} - {views} kali dibaca</div><p class="wpp-date-custom"> {date} </p></li>'
);	
	} else {
} ?>
						

			
		</div><!-- akhir trending-wrap -->

            <?php endwhile; ?><?php endif; ?>
	
<div class="trending-wrap">
	
	<div class="wrapper">
	<div class="tab-wrapper">
		<ul class="tabs">
			<li class="tab-link active" data-tab="1"><?php echo esc_html__( 'All', 'kibaran' );?></li>
			
<!-- ************************

	TAB LINK LI

********************** -->
			
<?php if( get_theme_mod('block1') != "" && get_theme_mod('block1') != 0 ) { ?>
		<li class="tab-link" data-tab="2"><?php echo get_cat_name( get_theme_mod('block1') ); ?></li>
<?php } else {    
} ?>

<?php if( get_theme_mod('block2') != "" && get_theme_mod('block2') != 0 ) { ?>
		<li class="tab-link" data-tab="3"><?php echo get_cat_name( get_theme_mod('block2') ); ?></li>
<?php } else {    
} ?>
	
<?php if( get_theme_mod('block3') != "" && get_theme_mod('block3') != 0 ) { ?>
		<li class="tab-link" data-tab="4"><?php echo get_cat_name( get_theme_mod('block3') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block4') != "" && get_theme_mod('block4') != 0 ) { ?>
		<li class="tab-link" data-tab="5"><?php echo get_cat_name( get_theme_mod('block4') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block5') != "" && get_theme_mod('block5') != 0 ) { ?>
		<li class="tab-link" data-tab="6"><?php echo get_cat_name( get_theme_mod('block5') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block6') != "" && get_theme_mod('block6') != 0 ) { ?>
		<li class="tab-link" data-tab="7"><?php echo get_cat_name( get_theme_mod('block6') ); ?></li>
<?php } else {    
} ?>

<?php if( get_theme_mod('block7') != "" && get_theme_mod('block7') != 0 ) { ?>
		<li class="tab-link" data-tab="8"><?php echo get_cat_name( get_theme_mod('block7') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block8') != "" && get_theme_mod('block8') != 0 ) { ?>
		<li class="tab-link" data-tab="9"><?php echo get_cat_name( get_theme_mod('block8') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block9') != "" && get_theme_mod('block9') != 0 ) { ?>
		<li class="tab-link" data-tab="10"><?php echo get_cat_name( get_theme_mod('block9') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block10') != "" && get_theme_mod('block10') != 0 ) { ?>
		<li class="tab-link" data-tab="11"><?php echo get_cat_name( get_theme_mod('block1') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block11') != "" && get_theme_mod('block11') != 0 ) { ?>
		<li class="tab-link" data-tab="12"><?php echo get_cat_name( get_theme_mod('block11') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block12') != "" && get_theme_mod('block12') != 0 ) { ?>
		<li class="tab-link" data-tab="13"><?php echo get_cat_name( get_theme_mod('block12') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block13') != "" && get_theme_mod('block13') != 0 ) { ?>
		<li class="tab-link" data-tab="14"><?php echo get_cat_name( get_theme_mod('block13') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block14') != "" && get_theme_mod('block14') != 0 ) { ?>
		<li class="tab-link" data-tab="15"><?php echo get_cat_name( get_theme_mod('block14') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block15') != "" && get_theme_mod('block15') != 0 ) { ?>
		<li class="tab-link" data-tab="16"><?php echo get_cat_name( get_theme_mod('block15') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block16') != "" && get_theme_mod('block16') != 0 ) { ?>
		<li class="tab-link" data-tab="17"><?php echo get_cat_name( get_theme_mod('block16') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block17') != "" && get_theme_mod('block17') != 0 ) { ?>
		<li class="tab-link" data-tab="18"><?php echo get_cat_name( get_theme_mod('block17') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block18') != "" && get_theme_mod('block18') != 0 ) { ?>
		<li class="tab-link" data-tab="19"><?php echo get_cat_name( get_theme_mod('block18') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block19') != "" && get_theme_mod('block19') != 0 ) { ?>
		<li class="tab-link" data-tab="20"><?php echo get_cat_name( get_theme_mod('block19') ); ?></li>
<?php } else {    
} ?>				
			
<?php if( get_theme_mod('block20') != "" && get_theme_mod('block20') != 0 ) { ?>
		<li class="tab-link" data-tab="21"><?php echo get_cat_name( get_theme_mod('block20') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block21') != "" && get_theme_mod('block21') != 0 ) { ?>
		<li class="tab-link" data-tab="22"><?php echo get_cat_name( get_theme_mod('block21') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block22') != "" && get_theme_mod('block22') != 0 ) { ?>
		<li class="tab-link" data-tab="23"><?php echo get_cat_name( get_theme_mod('block22') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block23') != "" && get_theme_mod('block23') != 0 ) { ?>
		<li class="tab-link" data-tab="24"><?php echo get_cat_name( get_theme_mod('block23') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block24') != "" && get_theme_mod('block24') != 0 ) { ?>
		<li class="tab-link" data-tab="25"><?php echo get_cat_name( get_theme_mod('block24') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block25') != "" && get_theme_mod('block25') != 0 ) { ?>
		<li class="tab-link" data-tab="26"><?php echo get_cat_name( get_theme_mod('block25') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block26') != "" && get_theme_mod('block26') != 0 ) { ?>
		<li class="tab-link" data-tab="27"><?php echo get_cat_name( get_theme_mod('block26') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block27') != "" && get_theme_mod('block27') != 0 ) { ?>
		<li class="tab-link" data-tab="28"><?php echo get_cat_name( get_theme_mod('block27') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block28') != "" && get_theme_mod('block28') != 0 ) { ?>
		<li class="tab-link" data-tab="29"><?php echo get_cat_name( get_theme_mod('block28') ); ?></li>
<?php } else {    
} ?>
			
<?php if( get_theme_mod('block29') != "" && get_theme_mod('block29') != 0 ) { ?>
		<li class="tab-link" data-tab="30"><?php echo get_cat_name( get_theme_mod('block29') ); ?></li>
<?php } else {    
} ?>
			
			
<?php if( get_theme_mod('block30') != "" && get_theme_mod('block30') != 0 ) { ?>
		<li class="tab-link" data-tab="31"><?php echo get_cat_name( get_theme_mod('block30') ); ?></li>
<?php } else {    
} ?>
		</ul>
	</div>
	<div class="content-wrapper">

		<div id="tab-1" class="tab-content active"><?php wpp_get_mostpopular($semua); ?></div>
		
<!-- ************************

	TAB CONTENT DIV

********************** -->		
<?php if( get_theme_mod( 'block1') != "" ) { ?>
		<div id="tab-2" class="tab-content"><?php wpp_get_mostpopular($args); ?></div>
<?php } else {    
} ?>

<?php if( get_theme_mod( 'block2') != "" ) { ?>
		<div id="tab-3" class="tab-content"><?php wpp_get_mostpopular($args2); ?></div>
<?php } else {    
} ?>

<?php if( get_theme_mod( 'block3') != "" ) { ?>
		<div id="tab-4" class="tab-content"><?php wpp_get_mostpopular($args3); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block4') != "" ) { ?>
		<div id="tab-5"class="tab-content"><?php wpp_get_mostpopular($args4); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block5') != "" ) { ?>
		<div id="tab-6" class="tab-content"><?php wpp_get_mostpopular($args5); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block6') != "" ) { ?>
		<div id="tab-7"class="tab-content"><?php wpp_get_mostpopular($args6); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block7') != "" ) { ?>
		<div id="tab-8"class="tab-content"><?php wpp_get_mostpopular($args7); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block8') != "" ) { ?>
		<div id="tab-9" class="tab-content"><?php wpp_get_mostpopular($args8); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block9') != "" ) { ?>
		<div id="tab-10"class="tab-content"><?php wpp_get_mostpopular($args9); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block10') != "" ) { ?>
		<div id="tab-11" class="tab-content"><?php wpp_get_mostpopular($args10); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block11') != "" ) { ?>
		<div id="tab-12"class="tab-content"><?php wpp_get_mostpopular($args11); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block12') != "" ) { ?>
		<div id="tab-13"class="tab-content"><?php wpp_get_mostpopular($args12); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block13') != "" ) { ?>
		<div id="tab-14"class="tab-content"><?php wpp_get_mostpopular($args13); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block14') != "" ) { ?>
		<div id="tab-15"class="tab-content"><?php wpp_get_mostpopular($args14); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block15') != "" ) { ?>
		<div id="tab-16"class="tab-content"><?php wpp_get_mostpopular($args15); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block16') != "" ) { ?>
		<div id="tab-17"class="tab-content"><?php wpp_get_mostpopular($args16); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block17') != "" ) { ?>
		<div id="tab-18"class="tab-content"><?php wpp_get_mostpopular($args17); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block18') != "" ) { ?>
		<div id="tab-19"class="tab-content"><?php wpp_get_mostpopular($args18); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block19') != "" ) { ?>
		<div id="tab-20"class="tab-content"><?php wpp_get_mostpopular($args19); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block20') != "" ) { ?>
		<div id="tab-21"class="tab-content"><?php wpp_get_mostpopular($args20); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block21') != "" ) { ?>
		<div id="tab-22"class="tab-content"><?php wpp_get_mostpopular($args21); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block22') != "" ) { ?>
		<div id="tab-23"class="tab-content"><?php wpp_get_mostpopular($args22); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block23') != "" ) { ?>
		<div id="tab-24"class="tab-content"><?php wpp_get_mostpopular($args23); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block24') != "" ) { ?>
		<div id="tab-25"class="tab-content"><?php wpp_get_mostpopular($args24); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block25') != "" ) { ?>
		<div id="tab-26"class="tab-content"><?php wpp_get_mostpopular($args25); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block26') != "" ) { ?>
		<div id="tab-27"class="tab-content"><?php wpp_get_mostpopular($args26); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block27') != "" ) { ?>
		<div id="tab-28"class="tab-content"><?php wpp_get_mostpopular($args27); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block28') != "" ) { ?>
		<div id="tab-29"class="tab-content"><?php wpp_get_mostpopular($args28); ?></div>
<?php } else {    
} ?>
		
<?php if( get_theme_mod( 'block29') != "" ) { ?>
		<div id="tab-30"class="tab-content"><?php wpp_get_mostpopular($args29); ?></div>
<?php } else {    
} ?>

<?php if( get_theme_mod( 'block30') != "" ) { ?>
		<div id="tab-31"class="tab-content"><?php wpp_get_mostpopular($args30); ?></div>
<?php } else {    
} ?>

	</div>
	
</div>
	
	
	</div>		
</div><!-- akhir page-fullwidth -->

<?php get_footer(); ?>