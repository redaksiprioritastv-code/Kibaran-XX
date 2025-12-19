<script>
// Get the modal
var modal = document.getElementById('sticky_ads_right');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<div id="sidebar-banner-160x600-kanan">

		<?php if (get_theme_mod('adsfloatkanan')!="") { ?>

		<div class="sidebar-banner-160x600-kanan-wrap"><div id="sticky_ads_right">
      <a class="close-button-right" onclick="document.getElementById('sticky_ads_right').style.display='none'"></a>
			<?php echo get_theme_mod('adsfloatkanan'); ?>

		</div></div><!-- sidebar-banner-160x600-kanan WRAP -->

		<?php } else { ?>

	<div>

			

		</div><!-- sidebar-banner-160x600-kanan WRAP -->

<?php } ?>

</div><!-- sidebar-banner-160x600-kanan BANNER -->