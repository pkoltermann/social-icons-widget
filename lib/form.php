<?php 
global $social_accounts;

$data = array();

foreach ($social_accounts as $site => $id) {
	if($instance[$id] == '') { $data[$id] = 'http://'; }
	else { $data[$id] = $instance[$id]; }
}

$data['title'] = $instance['title'];
$data['icons'] = $instance['icons'];
$data['labels'] = $instance['labels'];

?>

<div class="social_icons_widget">

<p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($data['title']); ?>" /></p>

<?php
$sizes = array(
	'None' => 'none',
	'Small (16px)' => 'small',
	'Medium (32px)' => 'medium',
	'Large (64px)' => 'large',
	'Custom (Small)' => 'custom_small',
	'Custom (Medium)' => 'custom_medium',
	'Custom (Large)' => 'custom_large'
);
?>

<p class="icon_options"><label for="<?php echo $this->get_field_id('icons'); ?>">Icon Type:</label>
	<select id="<?php echo $this->get_field_id('icons'); ?>" name="<?php echo $this->get_field_name('icons'); ?>">
	<?php
	foreach($sizes as $option => $value) :

		if(esc_attr($data['icons'] == $value)) { $selected = ' selected="selected"'; }
		else { $selected = ''; }
	?>
	
		<option value="<?php echo $value; ?>"<?php echo $selected; ?>><?php echo $option; ?></option>
	
	<?php endforeach; ?>
	</select>
</p>

<?php if(esc_attr($data['labels'] == 'show')) { $checked = ' checked="checked"'; } else { $checked = ''; } ?>
<p class="label_options"><input type="checkbox" id="<?php echo $this->get_field_id('labels'); ?>" name="<?php echo $this->get_field_name('labels'); ?>" value="show"<?php echo $checked; ?> /> <label for="<?php echo $this->get_field_id('labels'); ?>">Show Labels</label></p>

<ul class="social_accounts">
	<?php foreach ($social_accounts as $site => $id) : ?>
		<li><label for="<?php echo $this->get_field_id($id); ?>" class="<?php echo $id; ?>"><?php echo $site; ?>:</label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id($id); ?>" name="<?php echo $this->get_field_name($id); ?>" value="<?php echo esc_attr($data[$id]); ?>" /></li>
	<?php endforeach; ?>
</ul>

</div>