<?php 

if( !defined( 'ABSPATH' ) ) exit;

if(current_user_can('manage_options') && isset($_POST['submit_option'])){

	$header_script = htmlspecialchars($_POST['header_script']);

	$body_script = htmlspecialchars($_POST['body_script']);

	$footer_script = htmlspecialchars($_POST['footer_script']);

	$nonce=sanitize_text_field($_POST['insert_script_wpnonce']);



	if(wp_verify_nonce( $nonce, 'insert_script_option_nonce' ))

	{

		update_option('insert_header_script_gk',$header_script);

		update_option('insert_body_script_gk',$body_script);

		update_option('insert_footer_script_gk',$footer_script);

		$successmsg= ishf_success_option_msg('Settings Saved.');

	}

	else

	{

        $errormsg= ishf_failure_option_msg('Unable to save data!');

    }

}

$header_script= ishf_get_option_header_script();

$body_script=ishf_get_option_body_script();

$footer_script=ishf_get_option_footer_script();

?>





<div class="wrap ishf-script-wrap">



	<h2><?php _e('Compress Analytics &raquo; Settings','compress-analytics'); ?></h2>

	

	<?php

	if ( isset( $successmsg ) ) {

		?>

		<div class="ishf_updated fade"><p><?php _e($successmsg,'compress-analytics'); ?></p></div>

		<?php

	}

	if ( isset( $errormsg ) ) {

		?>

		<div class="error fade"><p><?php _e($errormsg,'compress-analytics'); ?></p></div>

		<?php

	}

	$nonce= wp_create_nonce('insert_script_option_nonce');

	?>

	<div class="row">

		<div class='col-6'>

		<div class="ishf-inner">

			<h4 class="heading-h4"><?php _e('Compress tracking Code on your Wordpress theme','compress-analytics'); ?></h4>

			

			<form method="post">

				<p>

					<label for="script_in_header"> <?php _e('Push your Compress Scripts in Header','compress-analytics'); ?> </label>

					<textarea name="header_script" rows="8" class="ishf-header-footer-textarea" ><?php _e($header_script); ?></textarea>

					<?php _e('These scripts will be printed in the <code>&lt;head&gt;</code> section.','compress-analytics'); ?>

				</p>

				<p>

					<label for="script_in_body"> <?php _e('Push your Compress Scripts in Body','compress-analytics'); ?> </label>

					<textarea name="body_script" rows="8" class="ishf-header-footer-textarea" ><?php _e($body_script); ?></textarea>

					<?php _e('These scripts will be printed below the <code>&lt;body&gt;</code> section.','compress-analytics'); ?>

				</p>

				<p>

					<label for="script_in_footer"> <?php _e('Push your Compress Scripts in Footer','compress-analytics'); ?> </label>

					<textarea name="footer_script" rows="8" class="ishf-header-footer-textarea" ><?php _e($footer_script); ?></textarea>

					<?php _e('These scripts will be printed above the <code>&lt;body&gt;</code> section.','compress-analytics'); ?>

				</p>

				<input type="hidden" name="insert_script_wpnonce" value="<?php esc_attr_e($nonce); ?>">

				<input type="submit" class="button button-primary " name="submit_option" value="Save">

				

			</form>

			</div>

			

		</div>

		<div class="col-6">

			<div class="ishf_pro_details">

				<h2><?php esc_html_e('Compress Analytics 1.1','compress-analytics'); ?></h2>

				<ul><img src="https://zigmoon.com/wp-content/uploads/2023/07/7t7rGq68SBd2MBhbpOyoolkDC2pttMiv4NgjqhAs.png" height="110">
<br><br>
					<li><?php esc_html_e('1. Register on compress.plus','compress-analytics'); ?> <a href="<?php echo esc_url('https://compress.plus/register'); ?>" target="_blank"><?php esc_html_e('Create your account','compress-analytics'); ?></a> or <a href="<?php echo esc_url('https://compress.plus/login'); ?>" target="_blank"><?php esc_html_e('Log-in','compress-analytics'); ?></a></li>

		
					<li>
					<?php _e('2. Paste the Compress JS Code in best place (default in <code>&lt;head&gt;</code>):
','compress-analytics'); ?>	
					<ul>
					<ul>
<li><?php _e('For a precise analysis, paste the tracking code in the input field <code>&lt;head&gt;</code> of thème. 
','compress-analytics'); ?></li>

<li><?php _e('For a newsletter, paste the tracking code in the input field <code>&lt;body&gt;</code> of thème.
','compress-analytics'); ?></li>

<li><?php _e('For a quick view, paste the tracking code in the input field <code>&lt;head&gt;</code> of thème.
','compress-analytics'); ?></li>


</ul>

</li>
</ul>




					<li><?php _e('3. Save','compress-analytics'); ?></li>

					<li><?php _e('4. Login you on and look your best traffic!)','compress-analytics'); ?> <a href="<?php echo esc_url('https://compress.plus/login'); ?>" target="_blank"><?php esc_html_e('Log-in','compress-analytics'); ?></a></li></li>


				

				<br><br>

					<?php _e('Timely','compress-analytics'); ?> <a href="<?php echo esc_url('mailto:zigmoon@gmail.com'); ?>" target="_blank"><?php esc_html_e('Support','compress-analytics'); ?></a> <?php esc_html_e('24/7','compress-analytics'); ?>

					<?php _e('➔ Regular updates.','compress-analytics'); ?>

					<?php _e('➔ Well documented.','compress-analytics'); ?>

				</ul>

    	

			</div>

		</div>

	</div>

	



</div>

