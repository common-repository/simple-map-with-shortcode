<?php
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div class="amap">
	<div class="agmap">
		<div class="marker_new">
			<h1 class="title">GOOGLE MAP MARKER WITH SHORTCODE</h1>
			<hr>
		</div>
		<h2 class="desc">
			<p>Create Google Maps in a minute with Google Map Marker WordPress plugin and add google map with shortcode</p>
			<p>You can open it in a popup or use google map widget. Adding an embedded Google Map is a must for most websites. We have created a simple way to add your map location with just a simple shortcode. Just Enter your address on the shortcode and paste on the page. You can add this shortcode in your custom php file by including :
			<pre class="gmap">  do_shortcode( "[map_marker width=600 height=350 address='YOUR_ADDRESS']" ); </pre>There are some nice features that makes this plugin simple but powerful.</p>
		</h2>
	</div>
	<div class="amap">
		<div class="agmap">
			<h2 class="title">Copy Shortcode</h2>
			<hr>
		</div>
		<p>Use below shortcode anywhere in the page/post</p>
		<input type="text" id="shortcode" value="[map_marker width=600 height=350 address='YOUR_ADDRESS']" readonly>
		<button onclick="copyText('#shortcode')" class="btn btn-primary copy_shortcode">Copy</button>
	</div>
</div>
<div class="clear"></div>