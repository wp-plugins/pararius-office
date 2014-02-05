=== Pararius Office ===
Contributors: Anno MMX
Tags: Pararius, Pararius Office
Requires at least: 3.5
Tested up to: 3.8
Stable tag: 1.0.8
License: GPLv2

Use this plugin to display properties out of the backoffice Pararius Office
on your website.

== Description ==

This plugin is an extension of the backoffice Pararius Office, which is used by
real estate brokers to manage their properties. Via this plugin, a WordPress
designer can display all the properties of that broker easily on his website.
An API key is required for it to work, so it's no use for people who are no
customer of Anno MMX. You also need to have JSON natively installed on your
webserver. Wordpress does offer a replacement for this, but it's way too slow

Check out http://www.parariusoffice.nl/website-bouwen for more documentation.

== Installation ==

1. Upload `parariusoffice/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Start using the shortcodes in your posts/pages

== Changelog ==

= 1.0 =

Initial release

= 1.0.3 =

Use path provided by WordPress

= 1.0.4 =

Bugfixes
- Startup error solved
- cache was not always flushed

= 1.0.5 =

Custom template for maps

= 1.0.6 =

Forsale properties should have their address shown, not rentals

= 1.0.7 =

Use WordPress language for the API-calls

= 1.0.8 =

Change the way the default order is handled
