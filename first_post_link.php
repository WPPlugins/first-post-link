<?php
/*
Plugin Name: First Post Link
Plugin URI: http://www.strangeattractor.ca/wp/first-post-link/
Description: Adds commands that give you the permalink and title of the oldest post.
Version: 0.1
Author: Ellen Kaye-Cheveldayoff
Author URI: http://www.strangeattractor.ca/wp/
License: GPLv2
*/
function firstpostlink_permalink() {

    // Query the database for the oldest post
    $oldestpost = new WP_Query();
    $oldestpost->query('order=asc&showposts=1');


    if ($oldestpost->have_posts()) { 

        $oldestpost->the_post(); 
        $firstlink=the_permalink();
        echo $firstlink;
    }

    // Prevent the loop in this function from interfering with other loops.
    wp_reset_postdata();
}
function firstpostlink_title() {
		
    // Query the database for the oldest post
    $oldestpost = new WP_Query('order=asc&showposts=1');

    
    if ($oldestpost->have_posts()) {

        $oldestpost->the_post(); 
        $firsttitle = the_title();		
        echo $firsttitle;
    }

    // Prevent the loop in this function from interfering with other loops.
    wp_reset_postdata();
}
?>
<?php
/*  Copyright 2011  Ellen Kaye-Cheveldayoff  (email : ellen-wp@strangeattractor.ca)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
