<!-- This file is used to markup the administration form of the widget. -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Titre :", "extra-widget-contact"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"/>
</p>

<p>
	<label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e("Téléphone :", "extra-widget-contact"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" type="text" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo $instance['phone']; ?>"/>
</p>

<p>
	<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e("Email :", "extra-widget-contact"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo $instance['email']; ?>"/>
</p>

<p>
	<label for="<?php echo $this->get_field_id('address'); ?>"><?php _e("Adresse :", "extra-widget-contact"); ?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>"><?php echo $instance['address']; ?></textarea>
</p>