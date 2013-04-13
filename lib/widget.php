<?php
global $social_accounts;

$data = array();
foreach ($social_accounts as $site => $id) {
	$data[$id] = $instance[$id];
}

extract($args);

$title = $instance['title'];
$icons = $instance['icons'];
$labels = $instance['labels'];

echo $before_widget;

echo $before_title;
echo $title;
echo $after_title;

if($labels == 'show') { $ul_class = 'show-labels '; }
$ul_class .= 'icons-'.$icons;
?>

<ul class="<?php echo $ul_class; ?>">
<?php foreach($social_accounts as $title => $id) : ?>
	<?php if($instance[$id] != '' && $instance[$id] != 'http://') :
		
		$custom_sizes = array('custom_small','custom_medium','custom_large');
		
		if (in_array($icons, $custom_sizes)) {
			$size = str_replace("custom_","",$icons);
			$icon_path = STYLESHEETPATH .'/social_icons/'.$size.'/'.$id.'.{gif,jpg,jpeg,png}';
		}
		else {
			$icon_path = ABSPATH .'wp-content/plugins/social_icons_widget/icons/'.$icons.'/'.$id.'.{gif,jpg,jpeg,png}';			
		}
		
		$result = glob( $icon_path, GLOB_BRACE );

		if (in_array($icons, $custom_sizes)) {
			$path = explode('themes', $result[0]);
			$icon = get_bloginfo('url').'/wp-content/themes'.$path[1];
		}
		else {
			$path = explode('plugins', $result[0]);
			$icon = get_bloginfo('url').'/wp-content/plugins'.$path[1];
		}

		if ( @getimagesize($icon) ) { $image = '<img class="site-icon" src="'.$icon.'" alt="'.$title.'" title="'.$title.'" />'; }
		else { $image = ''; }
		
		if($labels != 'show') { $title = ''; }
		else { $title = '<span class="site-label">'.$title.'</span>'; }
		
	?>
		<li><a href="<?php echo $instance[$id]; ?>"><?php echo $image; ?><?php echo $title; ?></a></li>
	<?php endif; ?>
<?php endforeach; ?>
</ul>

<?php 
echo $after_widget;
?>