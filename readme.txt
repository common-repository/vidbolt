=== Vidbolt ===

Contributors: vidbolt
Tags: vidbolt, shortcode, youtube, video, social
Requires at least: 2.6
Tested up to: 3.9
Stable tag: trunk
Version: 1.2
Author: Vidbolt
Author URI: http://vidbolt.com
License: GPLv2

Share and discuss videos with the Vidbolt social video platform.


== Description ==

[Vidbolt](http://vidbolt.com) is a social video platform where you can: add or “bolt” comments to a moment in the video timeline, see comments from your friends and people you follow using our comment filters, get a visual snapshot of what people find interesting using our Vidbolt heatmap, and see your comments integrated with the video’s comment stream.

This plugin lets you embed a Vidbolt player using a [vidbolt] shortcode.

= Steps to embed a video: =
1. Sign up for a Vidbolt account at http://vidbolt.com and add a video.
1. Go to the video collection page for your video and click the "Embed" button.
1. Enter the video description and create the embed.
1. Copy the ID from the "data-vid" tag in the output.
1. Add a [vidbolt id="___"] shortcode with the ID you just copied to your Wordpress post.

= Example: =
[vidbolt id="5aee0d4f93a0d1ea41e76f981c1626dc"]


== Installation ==

1. Upload to `/wp-content/plugins/` or install via Dashboard > Plugins > Add New
1. Activate the plugin through the \'Plugins\' menu


== Changelog ==
= 1.2 =
* Support for blogs using SSL,https
= 1.1 =
* Updated embed syntax to handle multiple Vidbolt embeds on the same page/post.
= 1.0 =
* Initial release.
