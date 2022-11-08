<!DOCTYPE html>
<html>
	<head>
		<title>Pressroom - Responsive News &amp; Magazine Template</title>
		<!--meta-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="Medic, Medical Center">
		<meta name="description" content="Responsive Medical Health Template">
		<!--style-->
		<link href='../../css.css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='../../css-1.css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/reset.css">
		<link rel="stylesheet" type="text/css" href="style/superfish.css">
		<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/menu_styles.css">
		<link rel="stylesheet" type="text/css" href="style/animations.css">
		<link rel="stylesheet" type="text/css" href="style/responsive.css">
		<link rel="stylesheet" type="text/css" href="style/odometer-theme-default.css">
				<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<?php
	include('menu.php');

	?>

<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title">Contact Us</h1>
		</div>
		<div class="page_header_right">
			<ul class="bread_crumb">
				<li>
					<a title="Home" href="index-2.htm?page=home">
						Home
					</a>
				</li>
				<li class="separator icon_small_arrow right_gray">
					&nbsp;
				</li>
				<li>
					Contact Us
				</li>
			</ul>
		</div>
	</div>
	<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row page_margin_top">
			<div class="column column_1_2">
				<img class="responsive pr_preload" src='images/samples/510x374/image_08.jpg' alt='img'>
			</div>
			<div class="column column_1_2">
				<h1 class="about_title">We Would Love To</h1>
				<h2 class="about_subtitle">Hear From You</h2>
				<h3 class="page_margin_top">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local.</h3>
				<p class="text padding_top_0 page_margin_top">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo.</p>
			</div>
		</div>
		<div class="row page_margin_top_section">
			<div class="column column_1_3">
				<div class="row">
					<h4 class="box_header">On The Map</h4>
					<p class="padding_top_30">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios nulla. Ligula etos magna.</p>
					<div class="contact_map margin_top_15" id="map">
					</div>
				</div>
			</div>
			<div class="column column_1_3">
				<div class="row">
					<h4 class="box_header">Contact Information</h4>
					<ul class="page_margin_top">
						<li class="item_content clearfix">
							<span class="features_icon envelope animated_element animation-scale"></span>
							<div class="text">
								<h3>Postal Address</h3>
								<p>PressRoom Ltd.<br>33 Farlane Street<br>25-100 Kelior East, Australia</p>
							</div>
						</li>
						<li class="item_content border_top clearfix">
							<span class="features_icon mobile animated_element animation-scale"></span>
							<div class="text">
								<h3>Phone and E-mail</h3>
								<p>Phone: 1-800-64-38<br>Fax: 1-800-64-39<br>E-mail: <a href="mailto:pressroom@mail.com" title="pressroom@mail.com">pressroom@mail.com</a></p>
							</div>
						</li>
						<li class="item_content border_top clearfix">
							<span class="features_icon clock animated_element animation-scale"></span>
							<div class="text">
								<h3>Business Hours</h3>
								<p>Monday-Friday: 8 am - 6 pm<br>Saturday: 8 am - 3 pm</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="column column_1_3">
				<div class="row">
					<h4 class="box_header">
						Drop Us a Line
					</h4>
					<p class="padding_top_30">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue.</p>
					<form class="contact_form margin_top_15" id="contact_form" method="post" action="contact_form/contact_form.php">
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
							</div>
						</fieldset>
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
							</div>
						</fieldset>
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="subject" type="text" value="Subject" placeholder="Subject">
							</div>
						</fieldset>
						<fieldset>
							<div class="block">
								<textarea name="message" placeholder="Message *">Message *</textarea>
							</div>
						</fieldset>
						<fieldset>
							<input type="hidden" name="action" value="contact_form">
							<input type="submit" name="submit" value="SEND MESSAGE" class="more active">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>			

<?php 
						include('footer.php');
						
						?>
		<!--js-->
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.sliderControl.js"></script>
		<script type="text/javascript" src="js/jquery.timeago.js"></script>
		<script type="text/javascript" src="js/jquery.hint.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript" src="js/jquery.imagesloaded-packed.js"></script>
				<script type="text/javascript" src="../../maps/api/js?key=AIzaSyA2LLXoPbK_YPWDdpwgHaG3-PFYl6KiWhI"></script>
				<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style_selector/style_selector.css">
<script type="text/javascript" src="style_selector/style_selector.js"></script>
<!-- <div class="style_selector opened">
	<div class="style_selector_icon">
		&nbsp;
	</div>
	<div class="style_selector_content">
		<h4>Style Selector</h4>
		<ul>
			<li class="style_selector_header hide_on_mobile">
				<label>Header Style</label>
				<select name="header_style">
					<option value="style_1" selected="selected">Style 1</option>
					<option value="style_2">Style 2</option>
					<option value="style_3">Style 3</option>
					<option value="style_4">Style 4</option>
					<option value="style_5">Style 5</option>
					<option value="style_6">Style 6</option>
					<option value="style_7">Style 7</option>
					<option value="style_8">Style 8</option>
					<option value="style_9">Style 9</option>
					<option value="style_10">Style 10</option>
					<option value="style_11">Style 11</option>
					<option value="style_12">Style 12</option>
					<option value="style_13">Style 13</option>
					<option value="style_14">Style 14</option>
					<option value="style_15">Style 15</option>
					<option value="style_high_contrast">Style high contrast</option>
				</select>
			</li>
			<li class="hide_on_mobile">
				<label>Menu Type</label>
				<select name="menu_type">
					<option value="default" selected="selected">Default</option>
					<option value="sticky">Sticky</option>
				</select>
			</li>
			<li class="hide_on_mobile">
				<label>Layout Style</label>
				<select name="layout_style">
					<option value="wide" selected="selected">Wide</option>
					<option value="boxed">Boxed</option>
				</select>
			</li>
			<li>
				<label>Color Skin</label>
				<select name="color_skin">
					<option value="light" selected="selected">Light</option>
					<option value="dark">Dark</option>
					<option value="high_contrast">Hight Contrast</option>
				</select>
			</li>
			<li class="clearfix hide_on_mobile">
				<label>Boxed Layout Pattern</label>
				<ul class="layout_chooser">
					<li>
						<a href="#" class="pattern_1">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_2">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_3">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_4">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_5">
							<span class="tick"></span>
						</a>
					</li>
					<li class="first">
						<a href="#" class="pattern_6">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_7">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_8">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_9">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="pattern_10">
							<span class="tick"></span>
						</a>
					</li>
				</ul>
			</li>
			<li class="clearfix hide_on_mobile">
				<label>Boxed Layout Image</label>
				<ul class="layout_chooser">
					<li class="selected">
						<a href="#" class="image_1">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="image_2">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="image_3">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="image_4">
							<span class="tick"></span>
						</a>
					</li>
					<li>
						<a href="#" class="image_5">
							<span class="tick"></span>
						</a>
					</li>
					<li class="first">
						<input type="checkbox" checked="checked" id="overlay"><label class="overlay_label" for="overlay">overlay</label>
					</li>
				</ul>
			</li>
		</ul> 
	</div>
</div>-->
	</body>
</html>