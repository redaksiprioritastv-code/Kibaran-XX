<script>
// Get the modal
var modal = document.getElementById('sidebar-banner-mobile-bawah');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<div id="sidebar-banner-mobile-bawah">
		<?php if (get_theme_mod('adsfloatfootermobile')!="") { ?>
	<a class="close-button w3-button w3-display-topright" onclick="document.getElementById('sidebar-banner-mobile-bawah').style.display='none'">
</a>
		<div class="sidebar-banner-mobile-bawah-wrap">
			<?php echo get_theme_mod('adsfloatfootermobile'); ?>
		</div><!-- sidebar-banner-mobile-bawah WRAP -->
		<?php } else { ?>
	<div>
			
		</div><!-- sidebar-banner-mobile-bawah WRAP -->
<?php } ?>
</div><!-- sidebar-banner-mobile-bawah BANNER -->