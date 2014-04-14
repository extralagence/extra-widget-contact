<!-- This file is used to markup the public-facing widget. -->
<?php
extract( $args );
// these are the widget options
$title = apply_filters('widget_title', $instance['title']);
$phone = $instance['phone'];
$email = $instance['email'];
$address = $instance['address'];

// Display the widget
// Check if title is set
if ( $title ) {
	echo $before_title . $title . $after_title;
}
?>
<p class="address"><span><?php _e("Adresse : ", "extra-widget-contact"); ?></span> <?php echo nl2br($address); ?></p>
<p class="phone"><span><?php _e("Tél : ", "extra-widget-contact"); ?></span> <?php echo $phone; ?></p>
<p class="email"><span></span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>