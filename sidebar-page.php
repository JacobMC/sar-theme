<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="col-md-4">
<div class="sidebar">
	
	<?php if( !dynamic_sidebar( 'page' ) ) : ?>

		<h3>Sidebar Setup</h3>
		<p>Oops! Looks like you need to add widgets via the admin menu!</p>

	<?php endif; ?> 

</div>
</div>