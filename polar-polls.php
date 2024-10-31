<?php
/*
Plugin Name: Polls by Polar
Description: Polar polls dramatically increase contributors, time spent, and more on Web sites.
Author: polar_polls
Contributors: polar_polls, wpeterson
Version: 1.0
Tags: polar, polls, opinions, polling, social, survey, vote, voting, engagement, responsive, mobile, tablets, widget
Author URI: http://polarb.com/
License: GPLv3
*/

$oembed_provider_url = 'http://polarb.com/api/v4/o_embed.json';
$polar_oembed_content_regex = '#https?://(www\.|secure\.)?polarb.com/.*#i';
wp_oembed_add_provider($polar_oembed_content_regex, $oembed_provider_url, true);

?>
