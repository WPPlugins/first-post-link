=== First Post Link === 
Contributors: strange_attractor
Donate link: http://www.strangeattractor.ca/wp/donate/
Tags: first, oldest, link, post, links, posts, permalink, title, query, navigation, webcomic, comic
Requires at least: 3.1.1
Tested up to: 3.5
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds commands that give you the permalink and title of the oldest post. 

== Description ==

Provides a simple way to access the permalink and title of your first (oldest) post.  It can be useful for webcomics, welcome pages, and other places where you want this type of navigation.

== Installation ==

1. Extract the files from the archive
2. Upload the files to the wp-content/plugins folder of your Wordpress installation
3. Activate the plugin from the Wordpress Plugins Menu from an account with administrator access.

How to use:

This plugin adds two specific functions to your Wordpress installation: 
1. 'firstpostlink_permalink' and 
2. 'firstpostlink_title'

They are similar to the 'the_permalink' and 'the_title' functions that are part of a Wordpress installation, except that they refer to only the oldest post in the blog.  Technically they give information from the first one in the database, so in some unusual circumstance that might not be the oldest.

Example 1: Link with text saying "|< First" 
`<a href="<?php firstpostlink_permalink() ?>" title="Oldest Post">|&lt; First</a>` 

Example 2: Link with post title included
`<a href="<?php firstpostlink_permalink() ?>" title="Oldest Post">|&lt; First: <?php firstpostlink_title() ;?></a>`

== Screenshots ==

1. Here's an example of the plugin in use.  The red circle is around a link to the first (oldest) post.

== Changelog ==

= 0.1 = 
* The first version

== Upgrade Notice ==

= 0.1 =
No reason to upgrade yet.

== Frequently Asked Questions ==

Ask me a question, and there will be something to put in the FAQ.
