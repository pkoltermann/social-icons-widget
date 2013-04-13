Social Icons Widget for WordPress
=================================

Displays a list of social media website icons and a link to your profile.

Users can select from preset icon sizes, show and hide social media website labels, and easily use their own custom icons.

Installation
------------

Download the zip file and upload to your WordPress installation. Upon activation, widget is available under Appearance > Widgets. Drag the widget into your sidebar, adjust the settings, and populate the profiles you wish to show on your website.

Extending
---------

By default, the Social Icons Widget provides a variety of popular social media websites. However, it's been structured to allow for easy addition of new social media profiles, or removal of unwanted ones.

To edit the list of social media profiles, open `social_icons_widget.php` and locate line 32, which contains the $social_accounts array. Any edits made to this array will be reflected through the entire widget. There's no need to find/replace in any other file.

The structure of the array follows a simple format:

`'Full Website Name' => 'full-website-id'`

The full-website-id should reflect the name of the .jpg image you create in each of the icon folder sizes, or in your custom icon directory. It is also used to populate the class field of the icon when the widget displays.

Custom Icons
------------

Custom icons are easy to add. To enable them, select "Custom" from the Icon Type dropdown in the widget settings. In the directory of your active theme, create a folder titled "social_icons". Add your icons in .jpg format, using the name of the ID in the $social_accounts array (details above).

Icons
-----

Default icons are from the Social Boilerplate Iconset created by [Mosaic Web Studios](http://mosaic.ws/projects/boilerplate.php).
