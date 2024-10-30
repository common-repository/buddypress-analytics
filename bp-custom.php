<?php

/**
 * @package BuddyPress Analytics
 * @author Sandeep Hegde
 * @version 1.1
 */
/*
Plugin Name: BuddyPress Analytics
Plugin URI: http://www.sandeephegde.me/2009/11/buddypress-analytics-plugin/
Description: This plugin will allow you to use your analytics script with your buddypress site(with wordpress mu) Supports any analytics script including but not limited to Google Analytics. Just replace the analytics code below with your own analytics code.

Google analytics users can just replace the google analytics ID (UA-5834099-9 in the code below) with your google analytics ID.

New ! Version 1.1 released, please update


Author: Sandeep Hegde
Version: 1.1
Author URI: http://www.sandeephegde.me
*/



function bp_ga_analytics() {
echo '<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5834099-9");
pageTracker._trackPageview();
} catch(err) {}</script>';
}
add_action('bp_after_footer', 'bp_ga_analytics'); 

?>