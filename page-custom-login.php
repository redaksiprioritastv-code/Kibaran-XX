<?php
		/**
		* Template name: custom login
		 */
get_header();
?>
<div class="custom-login">
	<h1><?php echo esc_html__( 'Log In', 'kibaran' ); ?></h1>
	<p class="login-desc"><?php echo esc_html__( 'Please log in to continue the activity', 'kibaran' ); ?></p>
<?php
$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
if ( $login === "failed" ) {
  echo '<p class="login-msg"><strong>ERROR:</strong> '. esc_html__( 'Incorrect username or password.', 'kibaran' ) . '</p>';
} elseif ( $login === "empty" ) {
  echo '<p class="login-msg"><strong>ERROR:</strong> '. esc_html__( 'Username or password cannot be empty.', 'kibaran' ) . '</p>';
} elseif ( $login === "false" ) {
  echo '<center><p class="login-msg-success">'. esc_html__( 'You\'re logout.', 'kibaran' ) . '</p></center>';
}
		
wp_login_form();
?>
</div>
<?php
get_footer();

?>