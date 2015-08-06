<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


$args = array(

);
?>

<div class="comment-container">
	<?php wp_list_comments(); ?>

	<?php comment_form(); ?>
</div>