<div class="clr"></div>
<footer>
<?php if(get_theme_mod( 'hidefooter', '0' ) == 0){ ?>
	<div id="footer-wrap">
				<?php if(get_theme_mod( 'filtercolorfooter' ) != 0){ ?>
				<div class="logo-bawah-wrap">
				<?php } else { ?>
				<div class="logo-bawah-wrap-no-filter">
				<?php }?>
		
				<?php if (my_get_footer_image() == "" || my_get_footer_image() == null){
					echo '<a id="logo-footer" href="'; ?> <?php echo esc_url( home_url( '/' ) ); ?> <?php echo '" rel="home"> <img src="'. get_template_directory_uri().'/images/logo-kibaran.png'.'" alt="logo-footer">'.'</a>';
				} else {
					echo '<a id="logo-footer" href="'; ?> <?php echo esc_url( home_url( '/' ) ); ?> <?php echo '" rel="home">' . my_get_footer_image() .'</a>'; }?>


<?php if( get_theme_mod( 'copyright') != "" ) { ?>
			<p>
				<?php echo get_theme_mod('copyright'); ?>
			</p>
<?php } else {
			echo "<p>Copyright @".date('Y')." ";
	echo bloginfo('name');
	echo "<br />All Rights Reserved</p>";
			} ?>

			</div><!-- akhir logo bawah wrap -->
		<?php wp_nav_menu( array( 'theme_location' => 'menu_footer_mobile', 'menu_class' => 'menu-bawah-mobile') ); ?>
		<div id="media-sosial-footer">
			<?php if( get_theme_mod( 'facebook-id') != "" ) { ?>
			<a target="_blank" class="fb" href="<?php echo esc_html(get_theme_mod( 'facebook-id')); ?>"></a> <?php } else {}; ?>
			<?php if( get_theme_mod( 'twitter-id') != "" ) { ?>
			<a target="_blank" class="twitter" href="<?php echo esc_html(get_theme_mod( 'twitter-id')); ?>"></a> <?php } else {}; ?>
			<?php if( get_theme_mod( 'instagram-id') != "" ) { ?>
			<a target="_blank" class="instagram" href="<?php echo esc_html(get_theme_mod( 'instagram-id')); ?>"></a> <?php } else {}; ?>
			<?php if( get_theme_mod( 'youtube-id') != "" ) { ?>
			<a target="_blank" class="youtube" href="<?php echo esc_html(get_theme_mod( 'youtube-id')); ?>"></a> <?php } else {}; ?>
			<?php if( get_theme_mod( 'tiktok-id') != "" ) { ?>
			<a target="_blank" class="tiktok" href="<?php echo esc_html(get_theme_mod( 'tiktok-id')); ?>"></a> <?php } else {}; ?>
	</div>
		
	<?php if ( has_nav_menu( 'menu_bawah' ) ) { wp_nav_menu( array( 'theme_location' => 'menu_bawah', 'menu_class' => 'menu-bawah') ); } ?>
		<?php if ( has_nav_menu( 'menu_footer_2' ) ) { wp_nav_menu( array( 'theme_location' => 'menu_footer_2', 'menu_class' => 'menu-footer-2') ); } ?>
		<?php if ( has_nav_menu( 'menu_footer_3' ) ) { wp_nav_menu( array( 'theme_location' => 'menu_footer_3', 'menu_class' => 'menu-footer-3') ); } ?>
		<?php if ( has_nav_menu( 'menu_footer_4' ) ) { wp_nav_menu( array( 'theme_location' => 'menu_footer_4', 'menu_class' => 'menu-footer-4') ); } ?>
	<!--<p class="copyrights">
		<?php // echo bloginfo('name') ?> | All Rights Reserved @<?php //echo date('Y'); ?>
	</p> -->
		<?php if( get_theme_mod( 'copyright') != "" ) { ?>
			<p class="copyright-mobile-new">
				<?php echo get_theme_mod('copyright'); ?>
			</p>
<?php } else {
			echo "<p class='copyright-mobile-new'>Copyright @".date('Y')." ";
	echo bloginfo('name');
	echo "<br />All Rights Reserved</p>";
			} ?>
		<div class="clr"></div>
</div><!-- akhir footer-wrap -->
<?php if( get_theme_mod( 'aktifscrooltotop', 'enable') == "enable" ) { ?>	
		 <div id="stop" class="scrollTop">
    <span><a href=""><i class="arrow up"></i></a></span>
  </div><!-- akhir scrolltop --><?php } ?>
<?php } ?>	
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'PT+Serif:400,700', 'Heebo:400,500,700,800,900' ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
<!-- <div id="fb-root"></div> -->
<!-- <script> /* (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=348506109234534&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); */</script> -->
<style>
/* **TETAP GUNAKAN CSS MUTLAK INI** */
* {
    -webkit-user-select: none !important; 
    -moz-user-select: none !important;    
    -ms-user-select: none !important;     
    user-select: none !important;         
}
h1, h1 * {
    -webkit-user-select: text !important;
    -moz-user-select: text !important;
    -ms-user-select: text !important;
    user-select: text !important;
}
</style>

<script>
// =================================================
// SOLUSI FINAL DAN JALAN TERAKHIR: FORCE OVERRIDE PADA H1
// =================================================

const title = document.querySelector("h1#article-title"); // Ambil H1 dengan ID

// 1. Force Copy Override: Selalu mengganti data clipboard dengan teks H1 jika seleksi dimulai di sana.
document.addEventListener("copy", function(e) {
    const sel = window.getSelection();
    
    // Jika tidak ada judul atau tidak ada seleksi, blokir total
    if (!title || !sel.rangeCount) {
        e.preventDefault(); 
        return;
    }
    
    // Cek apakah seleksi DIMULAI dari H1 (ini adalah kondisi kunci)
    const isStartingInTitle = sel.anchorNode.closest("h1") === title;
    
    if (isStartingInTitle) {
        // Ambil teks dari H1
        const titleText = title.innerText.trim(); // Gunakan trim() untuk membersihkan spasi
        
        // Ganti konten clipboard dengan HANYA teks judul.
        e.clipboardData.setData('text/plain', titleText); 
        
        // Cegah browser menyalin konten yang diblokir pengguna (WAJIB!)
        e.preventDefault(); 
    }
    
    // Jika seleksi tidak dimulai di H1, perintah copy akan diblokir.
});

// 2. Blok keydown (CTRL/CMD + A/S/U/X)
document.addEventListener("keydown", function(e) {
    const key = e.key.toLowerCase();
    const isCtrlCmd = e.ctrlKey || e.metaKey;
    
    if (isCtrlCmd && ["a", "s", "u", "x"].includes(key)) {
         e.preventDefault();
    }
});

// 3. Blok klik kanan (contextmenu) kecuali area <h1>
document.addEventListener("contextmenu", function(e) {
    if (!e.target.closest("h1")) {
        e.preventDefault();
    }
});
</script>	
	</body>
</html>