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

		if ($icons != 'custom') { $icon = plugins_url('social_icons_widget/icons/'.$icons.'/'.$id.'.jpg', ''); }
		else { $icon = get_bloginfo('stylesheet_directory').'/social_icons/'.$id.'.jpg'; }

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