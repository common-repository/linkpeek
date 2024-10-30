=== LinkPeek ===
Tags: screenshots, preview, hover, image, screenshot, link
Tested up to: 4.7.0
Contributors: Russell Ballestrini
Requires at least: 3.0
Stable tag: trunk
Donate link: https://linkpeek.com/signup

LinkPeek is a fast real-time website screen shot service. We capture, store, and update webpage snapshots for you.

== Description ==

LinkPeek is a fast real-time website screen shot service. We capture, store, and update webpage snapshots for you.

The LinkPeek plugin grants you access to the following shortcode commands:

  * linkpeek-image
  * linkpeek-link-image
  * linkpeek-hover
  * linkpeek-save-page

== Installation ==

 * Install from the wordpress admin plugin dashboard.
 * Edit wp-linkpeek.php and set a default apikey and secret.

== Shortcode examples ==

Demo and Example Wordpress: http://russell2.ballestrini.net/linkpeek-wordpress-shortcodes/

= linkpeek-image =

This shortcode will embed a LinkPeek screenshot.

Syntax:

 [linkpeek-image uri="" apikey="" secret="" size="" style="" text=""]

 uri: Target to be screen captured
 apikey: Your identifier
 secret: Your security secret
 size: width X height
 style: inline css styles
 text: title text

Example: 

 [linkpeek-image uri="http://russell.ballestrini.net" size="140x100" style="float:right;" text="title text!"] 

Note:
  The linkpeek-link-image works the same as linkpeek-image, but it produces an image which is also a link.

= linkpeek-hover =

This shortcode will embed a LinkPeek hover link preview screenshot.

Syntax:

 [linkpeek-hover uri="" apikey="" secret="" size="" text=""]

 uri: Target to be screen captured
 apikey: Your identifier
 secret: Your security secret
 size: width X height
 style: inline css styles
 text: Hyperlink text

Example: 

 [linkpeek-hover uri="http://russell.ballestrini.net" size="140x100" style="color:green;" text="Anchor Text"] 

Note:
 You can set your apikey and secret in the plug-in to avoid manually entering it for each shortcode.

== Frequently Asked Questions ==

http://linkpeek.com/docs/faq

How do I get an API key?

Sign up for an API key here: https://linkpeek.com/signup

= Questions? =

 http://linkpeek.com/contact

== Changelog ==

0.2.5 - bumping the version after testing in latest wordpress 4.7
0.2.4 - hopefully resolved conflict with other plugins that use jQuery

== Screenshots ==

 This is a screenshot service! Check out these real examples:

 * http://russell2.ballestrini.net/linkpeek-wordpress-shortcodes/

== Upgrade Notice ==

0.2.5 - bumping the version after testing in latest wordpress 4.7
0.2.4 - hopefully resolved conflict with other plugins that use jQuery

