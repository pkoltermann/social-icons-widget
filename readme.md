Social Icons Widget for WordPress
=================================

Displays a list of social media website icons and a link to your profile.

Users can select from preset icon sizes, show and hide social media website labels, and easily use their own custom icons.


Installation
------------

Download the zip file and upload to your WordPress installation. Upon activation, widget is available under Appearance > Widgets. Drag the widget into your sidebar, adjust the settings, and populate the profiles you wish to show on your website.


Extending
---------

By default, the Social Icons Widget provides a variety of popular social media websites. Developers can easily add more social media websites by creating a filter in the active theme's functions.php file like such:

`function add_new_icons($icon_list) {
	$icon_list['Full Website Name'] = 'full-website-id';
 
	return $icon_list;
}
add_filter('social_icon_accounts', 'add_new_icons');`

The full-website-id should reflect the name of the image you create in each of the icon folder sizes, or in your custom icon directory. It is also used to populate the class field of the icon when the widget displays. The Social Icon Widget looks for .gif, .jpg, .jpeg, and .png in order and returns the first extention it finds.


Custom Icons
------------

Custom icons are easy to add. To enable them, select "Custom" from the Icon Type dropdown in the widget settings. In the directory of your active theme, create a folder titled `social_icons`. Within that directory, add folders titled `small`, `medium`, and `large` for each icon size you wish to use. Add your icons in .gif, .jpg, .jpeg, or .png format, using the name of the ID in the $social_accounts array (details above).


Icons
-----

Default icons are from the Social Boilerplate Iconset created by [Mosaic Web Studios](http://mosaic.ws/projects/boilerplate.php).
