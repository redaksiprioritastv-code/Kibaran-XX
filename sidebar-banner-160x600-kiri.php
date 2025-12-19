<script>
// Get the modal
var modal2 = document.getElementById('sticky_ads_left');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>


<div id="sidebar-banner-160x600-kiri">

		<?php if (get_theme_mod('adsfloatkiri')!="") { ?>
    	
		<div class="sidebar-banner-160x600-kiri-wrap"><div id="sticky_ads_left"><a class="close-button-left" onclick="document.getElementById('sticky_ads_left').style.display='none'"></a>

			<?php echo get_theme_mod('adsfloatkiri'); ?>

		</div></div><!-- sidebar-banner-160x600-kiri WRAP -->

		<?php } else { ?>

	<div>

			

		</div><!-- sidebar-banner-160x600-kiri WRAP -->

<?php } ?>

</div><!-- sidebar-banner-160x600-kiri BANNER -->