<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>	
     <meta charset="<?php bloginfo( 'charset' ); ?>"> 
     <link href="http://gmpg.org/xfn/11" rel="profile">
     <link href="<?php bloginfo( 'pingback_url' ); ?>" rel="pingback">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="width=device-width, initial-scale=1" name="viewport">

<!-- Google Site Verification -->
<meta name="google-site-verification" content="u5WCOs8rBBhNCNiICsWN4OUwUMMSVCSt9ywl-nSfOIk" />

<!-- Google News Publisher Center -->
<script async type="application/javascript" src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
<script>
  (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
    basicSubscriptions.init({
      type: "NewsArticle",
      isPartOfType: ["Product"],
      isPartOfProductId: "CAowwJO-DA:openaccess",
      clientOptions: { theme: "light", lang: "id" },
    });
  });
</script>
<!-- End Google News Publisher Center -->

<?php wp_head(); ?>
	 <meta content='<?php echo get_theme_mod( 'themecolor', '#009BA9' ); ?>' name='theme-color'/> 
	    <style>
	<?php if ( is_admin_bar_showing() ) { ?>
	.logged-in header {
            top: 32px;
        }
			@media screen and (max-width: 600px) {
			html #wpadminbar {
            /*top: -50px !important; */
            position: fixed;
        }
			}
			
<?php } else { ?>
        .logged-in header{
            top: 0 !important;
        }
<?php }; ?>
			
	
		<?php if( get_theme_mod( 'alignmenu') != "" ) { 
	$alignmenu = get_theme_mod('alignmenu');
	echo ".menu-utama { text-align: ".$alignmenu."}";
}; ?>
			
			
	<?php if( get_theme_mod( 'hidesidebar', 0) == 1 ) { ?>
	@media screen and (max-width: 857px) { #sidebar-single { display: none } }
<?php } ; ?>

			<?php if( get_theme_mod( 'hidesidebarhomepage', 0) == 1 ) { ?>
	@media screen and (max-width: 750px) { #sidebar-custom-homepage { display: none } }
<?php } ; ?>

			<?php if( get_theme_mod( 'deactive-sidebar-headline', 0) == 1 ) { ?>
	@media screen and (max-width: 750px) { #sidebar-right { display: none } }
<?php } ; ?>

		</style>
		
</head>
<body <?php body_class(); ?> >
	 <?php wp_body_open(); ?>
	<?php get_sidebar('banner-mobile-bawah'); ?>
	<header>
		<?php if ( has_nav_menu( 'menu_samping_mobile' ) ) { ?>
		<div class="hamburger-button">
			<p class="atas"></p>
			<p class="tengah"></p>
			<p class="bawah"></p>
		</div>
		<div class="mobile-menu-kiri-wrap">
			<p class="judul-menu">
				Menu <span class="close-button-hamburger">&#10006;</span>
			</p>
			<div class="container">
				<div class="modegelap">
					<?php echo esc_html__( 'Dark Mode', 'kibaran' ); ?>
				</div>
  <label class="switch" for="checkbox">
    <input type="checkbox" class="tombolmodegelap" id="checkbox" />
    <div class="slider round"></div>
  </label>
			</div>
			
					
		<?php wp_nav_menu( array( 'theme_location' => 'menu_samping_mobile', 'menu_class' => 'mobile-menu-kiri') ); ?>
				<p class="copyright-mobile">
					<?php if( get_theme_mod( 'copyright') != "" ) { ?>
			
				<?php echo get_theme_mod('copyright'); ?>
			
<?php } else {
			echo "Copyright ©".date('Y')." ";
	echo bloginfo('name');
	echo " All Rights Reserved";
			} ?>
				
			</p>
		</div>
		<?php } ?>
		<div class="fixed-wrap">
	<?php
          function theme_prefix_the_custom_logo() {
  
  if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }

}; 
		
	
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<a id="logo" href="'; ?><?php echo esc_url(home_url('/')); ?> <?php echo '" rel="home"> <img src="'. esc_url( $logo[0] ) .'" alt="logo">'.'</a>'; 
} else {
        echo '<a id="logo" href="'; ?> <?php echo esc_url( home_url( '/' ) ); ?> <?php echo '" rel="home"> <img src="'. get_template_directory_uri().'/images/logo-kibaran.png'.'" alt="logo">'.'</a>'; 
 };

?>
		<?php get_search_form(); ?>   
			<div class="containerdua">
				
  <label class="switch" for="checkbox">
    <input type="checkbox" class="tombolmodegelap" id="checkbox" />
    <div class="gelapterang"></div>
  </label>
</div>
			
	<div id="search-mobile-button">
			</div><div id="media-sosial-header">
			<?php if( get_theme_mod( 'facebook-id') != "" ) { ?>
			<a target="_blank" title="Facebook" class="fb" href="<?php echo esc_html(get_theme_mod( 'facebook-id')); ?>"></a> <?php }; ?>
			<?php if( get_theme_mod( 'twitter-id') != "" ) { ?>
			<a target="_blank" title="Twitter" class="twitter" href="<?php echo esc_html(get_theme_mod( 'twitter-id')); ?>"></a> <?php }; ?>
			<?php if( get_theme_mod( 'instagram-id') != "" ) { ?>
			<a target="_blank" title="Instagram" class="instagram" href="<?php echo esc_html(get_theme_mod( 'instagram-id')); ?>"></a> <?php }; ?>
			<?php if( get_theme_mod( 'youtube-id') != "" ) { ?>
			<a target="_blank" title="Youtube" class="youtube" href="<?php echo esc_html(get_theme_mod( 'youtube-id')); ?>"></a> <?php }; ?>
			<?php if( get_theme_mod( 'tiktok-id') != "" ) { ?>
			<a target="_blank" title="Tiktok" class="tiktok" href="<?php echo esc_html(get_theme_mod( 'tiktok-id')); ?>"></a> <?php }; ?>
	</div><div class="clr"></div>		

		<button id="geserkiri" type="button"></button><?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(wp_is_mobile()){
	if ( has_nav_menu( 'menu_utama_mobile' ) ) {
	wp_nav_menu( array( 'theme_location' => 'menu_utama_mobile', 'menu_class' => 'menu-utama', 'menu_id' => 'menu-utama', 'depth' => 1,) ); } ?>
<?php $sticky_header = get_theme_mod('sticky-header');  
if ($sticky_header == 1){ ?>			
	<script type="text/javascript">jQuery(document).ready(function ($) {
$(document).ready(function() {
  var $header = $("header"),
      $clone = $header.before($header.clone().addClass("clone"));

  $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('body').toggleClass("down", (fromTop > 200));
  });

var zx = jQuery.noConflict();
zx(".hamburger-button").click(function() {
    zx(".mobile-menu-kiri-wrap").slideToggle();
		zx('body').css('overflow', 'hidden');
}),zx(".close-button-hamburger").click(function() {
    zx(".mobile-menu-kiri-wrap").hide();
	zx('body').css('overflow', 'visible');
}), zx("#search-mobile-button").click(function() {
    zx("header #searchform").slideToggle()
}), zx(document).ready(function() {
    zx(".share-button-timeline").click(function(o) {
        o.stopPropagation(), zx(this).next(".share-popup").toggle()
    }), zx(".share-popup").on("click", function(o) {
        o.stopPropagation()
    })
})

$(".slider").click(function(){
  $(this).toggleClass("checked");
});

  $('ul.menu-utama > li.menu-item-has-children').hover(function(){
    $('ul.menu-utama > li.menu-item-has-children').children("ul.sub-menu").css({"display":"none"});
    return;
   });

   $("ul.menu-utama > li.menu-item-has-children").click(function(e){
        e.preventDefault();
      //Find the child ul and slideToggle
      $(this).children("ul").slideToggle('fast');
      $(this).toggleClass("down");
   });

const toggleSwitch = document.querySelector('.tombolmodegelap');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        $('.slider').addClass('checked');
	
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);



});
});</script>
<?php } 
	
	} else {
		if ( has_nav_menu( 'menu_utama' ) ) {
			wp_nav_menu( array( 'theme_location' => 'menu_utama', 'menu_class' => 'menu-utama', 'menu_id' => 'menu-utama') ); } ?>
<?php $sticky_header = get_theme_mod('sticky-header');  
if ($sticky_header == 1){ ?>			
	<script type="text/javascript">jQuery(document).ready(function ($) {
$(document).ready(function() {
  var $header = $("header"),
      $clone = $header.before($header.clone().addClass("clone"));

  $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('body').toggleClass("down", (fromTop > 200));
  });


const toggleSwitch = document.querySelector('.tombolmodegelap');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

const collection = document.querySelector(".sidebar-single-wrap");
if (collection !== null) {
collection.style.top = "140px";
}
const collection2 = document.querySelector(".sidebar-category-wrap");
if (collection2 !== null) {
collection2.style.top = "140px";
}


});
});</script>
<?php } ?>
<?php	} ?><button id="geserkanan" type="button"></button>
		</div>	
	</header>
	<div class="add-height"></div><!-- add-height -->
<?php $active_breakingnews = get_theme_mod('active-breakingnews'); 
if ($active_breakingnews!= null && $active_breakingnews == 1){ ?>
	<!-- marquee -->
	<div class="marquee">
		<?php $breakingnewsid = get_term(get_theme_mod('breakingnewssetting')); $breakingnewsid = $breakingnewsid->slug; $query = new WP_Query( array( 'tag' => $breakingnewsid, 'posts_per_page' => '6' ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
	 <a href="<?php the_permalink(); ?>"><?php the_title();?></a>   
                    <?php 
                            endwhile;
                            else :
                            _e( '&nbsp;', 'textdomain' );
                            endif; ?>
		</div>  <!-- akhir div marquee -->
<?php }; ?>

	<?php get_sidebar('header'); ?>
	<?php // includee 'header-banner.php'; ?>