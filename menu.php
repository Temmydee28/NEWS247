
	
	<?php

include('conn.php');
$id = 1;
$sql="SELECT * FROM newsupload WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);
?>
	
	<!--<body class="image_1">
	<body class="image_1 overlay">
	<body class="image_2">
	<body class="image_2 overlay">
	<body class="image_3">
	<body class="image_3 overlay">
	<body class="image_4">
	<body class="image_4 overlay">
	<body class="image_5">
	<body class="image_5 overlay">
	<body class="pattern_1">
	<body class="pattern_2">
	<body class="pattern_3">
	<body class="pattern_4">
	<body class="pattern_5">
	<body class="pattern_6">
	<body class="pattern_7">
	<body class="pattern_8">
	<body class="pattern_9">
	<body class="pattern_10">-->
	<body class="">
		<div class="site_container">
			<!--<div class="header_top_bar_container style_2 clearfix">
			<div class="header_top_bar_container style_2 border clearfix">
			<div class="header_top_bar_container style_3 clearfix">
			<div class="header_top_bar_container style_3 border clearfix">
			<div class="header_top_bar_container style_4 clearfix">
			<div class="header_top_bar_container style_4 border clearfix">
			<div class="header_top_bar_container style_5 clearfix">
			<div class="header_top_bar_container style_5 border clearfix"> -->
			<div class="header_top_bar_container clearfix">
				<div class="header_top_bar">
					<form class="search">
						<input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
						<input type="submit" class="search_submit" value="">
						<input type="hidden" name="page" value="search">
					</form>
					<!--<ul class="social_icons dark clearfix">
					<ul class="social_icons colors clearfix">-->
					<ul class="social_icons dark clearfix">
						<li>
							<a target="_blank" href="../../QuanticaLabs.html" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.twitter.com/OTemmydee" class="social_icon twitter" title="twitter">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="mailto:animasauntemidayoprosper@gmail.com?" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="Login/index.php" class="social_icon envato" title="envato">
								&nbsp;
							</a>
						</li>
						<!--<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon behance">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon bing">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon blogger">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon deezer">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon designfloat">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon deviantart">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon digg">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon dribbble">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon flickr">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon form">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon forrst">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon foursquare">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon friendfeed">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon googleplus">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon instagram">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon linkedin">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon mobile">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon myspace">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon picasa">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon pinterest">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon reddit">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon rss">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon skype">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon soundcloud">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon spotify">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon stumbleupon">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon technorati">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon tumblr">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon vimeo">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon wykop">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon xing">
								&nbsp;
							</a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social_icon youtube">
								&nbsp;
							</a>
						</li>-->
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">LATEST</li>
							<li class="left"><a href="#"></a></li>
							<li class="right"><a href="#"></a></li>
							<li class="posts">
								<ul class="latest_news_scrolling_list">
									<li>
										<a href="index-1.htm?page=post" title="">Climate Change Debate While Britain Floods</a>
									</li>
									<li>
										<a href="index-1.htm?page=post" title="">The Public Health Crisis Hiding in Our Food</a>
									</li>
									<li>
										<a href="index-1.htm?page=post" title="">Nuclear Fusion Closer to Becoming a Reality</a>
									</li>
								</ul>
							</li>
							<li class="date">
								<abbr title="04 Apr 2012" class="timeago current">04 Apr 2014</abbr>
								<abbr title="04 May 2003" class="timeago">04 May 2014</abbr>
								<abbr title="04 June 2014" class="timeago">04 June 2014</abbr>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--<div class="header_container small">
			<div class="header_container style_2">
			<div class="header_container style_2 small">
			<div class="header_container style_3">
			<div class="header_container style_3 small">-->
			<div class="header_container">
				<div class="header clearfix">
					<div class="logo">
						<h1><a href="index.htm" title="Pressroom">NEWS24</a></h1>
						<h4>Home Of News</h4>
					</div>
					<div class="placeholder">728 x 90</div>
				</div>
			</div>
			<!-- <div class="menu_container style_2 clearfix">
			<div class="menu_container style_3 clearfix">
			<div class="menu_container style_... clearfix">
			<div class="menu_container style_10 clearfix">
			<div class="menu_container sticky clearfix">
			<div class="menu_container clearfix">-->
			<div class="menu_container sticky clearfix">
				<nav>
<ul class="sf-menu">
	<li class="submenu">
		<a href="index.php" title="Home">
			Home
		</a>
		<!-- <ul>
			<li>
				<a href="index.htm" title="Home Style 1">
					Home Style 1
				</a>
			</li>
			
		 </ul> -->
	</li>
	<li class="submenu">
		<a href="index-9.php?page=about" title="Pages">
			Pages
		</a>

	</li>
	<li class="submenu mega_menu_parent">
		<a href="#" title="Mega Menu">
			Mega Menu
		</a>
		<ul>
			<li class="submenu">
				<a href="index-26.php?page=blog" title="Latest Posts">
					Latest Posts
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">
							<img src='images/samples/330x242/image_08.jpg' alt='img'>
						</a>
						<h5><a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">
							<img src='images/samples/330x242/image_11.jpg' alt='img'>
						</a>
						<h5><a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-1.htm?page=post" title="Build on Brotherhood, Club Lives Up to Name">
							<img src='images/samples/330x242/image_06.jpg' alt='img'>
						</a>
						<h5><a href="index-1.htm?page=post" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="index-26.php?page=blog" title="Recent Galleries">
					Recent Galleries
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="index-15.htm?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_03.jpg' alt='img'>
						</a>
						<h5><a href="index-15.htm?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-15.htm?page=post_gallery" title="High Altitudes May Aid Weight Control">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_05.jpg' alt='img'>
						</a>
						<h5><a href="index-15.htm?page=post_gallery" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-15.htm?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_04.jpg' alt='img'>
						</a>
						<h5><a href="index-15.htm?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="index-26.php?page=blog" title="Recent Reviews">
					Recent Reviews
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="index-16.htm?page=post_review" title="New Painkiller Rekindles Addiction Concerns">
							<span class="icon"><span>8.7</span></span>
							<img src='images/samples/330x242/image_07.jpg' alt='img'>
						</a>
						<h5><a href="index-16.htm?page=post_review" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-17.htm?page=post_review_2" title="High Altitudes May Aid Weight Control">
							<span class="icon"><span>9.5</span></span>
							<img src='images/samples/330x242/image_09.jpg' alt='img'>
						</a>
						<h5><a href="index-17.htm?page=post_review_2" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="index-16.htm?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">
							<span class="icon"><span>7.8</span></span>
							<img src='images/samples/330x242/image_14.jpg' alt='img'>
						</a>
						<h5><a href="index-16.htm?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="index-16.htm?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">
							<span class="icon"><span>8.0</span></span>
							<img src='images/samples/330x242/image_13.jpg' alt='img'>
						</a>
						<h5><a href="index-16.htm?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="index-17.htm?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">
							<span class="icon"><span>9.1</span></span>
							<img src='images/samples/330x242/image_02.jpg' alt='img'>
						</a>
						<h5><a href="index-17.htm?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="index-17.htm?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
							<span class="icon"><span>6.7</span></span>
							<img src='images/samples/330x242/image_01.jpg' alt='img'>
						</a>
						<h5><a href="index-17.htm?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="index-14.htm?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="index-26.php?page=blog" title="Most Read">
					Most Read
				</a>
				<div class="mega_menu row">
					<div class="column column_1_2">
						<ul class="blog small">
							<li class="post">
								<a href="index-1.htm?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
									<img src='images/samples/100x100/image_06.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="index-1.htm?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
									<img src='images/samples/100x100/image_12.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/100x100/image_02.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="column column_1_2">
						<ul class="blog small">
							<li class="post">
								<a href="index-1.htm?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
									<img src='images/samples/100x100/image_04.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="index-1.htm?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
									<img src='images/samples/100x100/image_10.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/100x100/image_07.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</li>
	<!--<li class="submenu">
		<a href="#" title="Post Formats">
			Post Formats
		</a>
		<ul>
			<li>
				<a href="index-1.htm?page=post" title="Post Default">
					Post Default
				</a>
			</li>
			<li>
				<a href="index-15.htm?page=post_gallery" title="Post Gallery">
					Post Gallery
				</a>
			</li>
			<li>
				<a href="index-20.htm?page=post_small_image" title="Post Small Image">
					Post Small Image
				</a>
			</li>
			<li>
				<a href="index-21.htm?page=post_video" title="Post Video YouTube">
					Post Video Youtube
				</a>
			</li>
			<li>
				<a href="index-22.htm?page=post_video_2" title="Post Video Vimeo">
					Post Video Vimeo
				</a>
			</li>
			<li>
				<a href="index-23.htm?page=post_soundcloud" title="Post Soundcloud">
					Post Soundcloud
				</a>
			</li>
			<li>
				<a href="index-16.htm?page=post_review" title="Post Review Style 1">
					Post Review Style 1
				</a>
			</li>
			<li>
				<a href="index-17.htm?page=post_review_2" title="Post Review Style 2">
					Post Review Style 2
				</a>
			</li>
			<li>
				<a href="index-24.htm?page=post_quote" title="Post Quote Style 1">
					Post Quote Style 1
				</a>
			</li>
			<li>
				<a href="index-25.htm?page=post_quote_2" title="Post Quote Style 2">
					Post Quote Style 2
				</a>
			</li>
		</ul>
	</li>-->
	<li class="submenu">
		<a href="index-26.php?page=blog_small_slider" title="Blog">
			Blog
		</a>
		<ul>
			
	
			<li>
				<a href="index-31.php?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
					Search Page Template
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu">
		<a href="index-32.php?page=authors" title="Authors">
			Authors
		</a>
	</li>
	<li class="submenu">
		<a href="#" title="Categories">
			Categories
		</a>
		<ul>
		<?php
$sql= "SELECT * FROM `newsupload` ORDER BY `id` DESC LIMIT 5, 5";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows( $result) > 0){
	while($row = mysqli_fetch_array($result)){

?>
		

		<li class="<?php echo $row['category'];?>"><a href ="index-14.php?category=<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
			<!--<li>
				<a href="index-34.php?page=category&amp;cat=science" title="Science">
					Science
				</a>
			</li>
			<li>
				<a href="index-19.php?page=category&amp;cat=sports" title="Sports">
					Sports
				</a>
			</li>
			<li>
				<a href="index-18.php?page=category&amp;cat=world" title="World">
					World
				</a>
			</li>
			<li>
				<a href="index-35.php?page=category&amp;cat=lifestyle" title="Lifestyle">
					Lifestyle
				</a>
			</li>-->


			<?php
	}}

			?>
		</ul>
	</li>
	<li class="submenu">
		<a href="index-37.php?page=contact" title="Contact">
			Contact
		</a>
		
	</li>
</ul>
</nav>

<div class="mobile_menu_container">
	<a href="#" class="mobile-menu-switch">
		<span class="line"></span>
		<span class="line"></span>
		<span class="line"></span>
	</a>
	<div class="mobile-menu-divider"></div>
	<nav>
	<ul class="mobile-menu">
		<li class="submenu">
			<a href="index-2.htm?page=home" title="Home">
				Home
			</a>
			
		</li>
		<li class="menu">
			<a href="index-9.htm?page=about" title="Pages">
				Pages
			</a>
			
		</li>
		<!--
		<li class="submenu">
			<a href="index-1.htm?page=post" title="Post Formats">
				Post Formats
			</a>
			<ul>
				<li>
					<a href="index-1.htm?page=post" title="Post Default">
						Post Default
					</a>
				</li>
				<li>
					<a href="index-15.htm?page=post_gallery" title="Post Gallery">
						Post Gallery
					</a>
				</li>
				<li>
					<a href="index-20.htm?page=post_small_image" title="Post Small Image">
						Post Small Image
					</a>
				</li>
				<li>
					<a href="index-21.htm?page=post_video" title="Post Video YouTube">
						Post Video Youtube
					</a>
				</li>
				<li>
					<a href="index-22.htm?page=post_video_2" title="Post Video Vimeo">
						Post Video Vimeo
					</a>
				</li>
				<li>
					<a href="index-23.htm?page=post_soundcloud" title="Post Soundcloud">
						Post Soundcloud
					</a>
				</li>
				<li>
					<a href="index-16.htm?page=post_review" title="Post Review Style 1">
						Post Review Style 1
					</a>
				</li>
				<li>
					<a href="index-17.htm?page=post_review_2" title="Post Review Style 2">
						Post Review Style 2
					</a>
				</li>
				<li>
					<a href="index-24.htm?page=post_quote" title="Post Quote Style 1">
						Post Quote Style 1
					</a>
				</li>
				<li>
					<a href="index-25.htm?page=post_quote_2" title="Post Quote Style 2">
						Post Quote Style 2
					</a>
				</li>
			</ul>
		</li>-->
		<li class="submenu">
			<a href="index-26.php?page=blog_small_slider" title="Blog">
				Blog
			</a>
			<ul>
				
					<a href="index-31.php?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
						Search Page Template
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu">
			<a href="index-32.php?page=authors" title="Authors">
				Authors
			</a>	
		</li>
		<li class="submenu">
			<a href="index-14.php?page=category&amp;cat=health" title="Categories">
				Categories
			</a>
			<ul>
				<li>
					<a href="index-14.php?page=category&amp;cat=health" title="Health">
						Health
					</a>
				</li>
				<li>
					<a href="index-34.php?page=category&amp;cat=science" title="Science">
						Science
					</a>
				</li>
				<li>
					<a href="index-19.php?page=category&amp;cat=sports" title="Sports">
						Sports
					</a>
				</li>
				<li>
					<a href="index-18.php?page=category&amp;cat=world" title="World">
						World
					</a>
				</li>
				<li>
					<a href="index-35.php?page=category&amp;cat=lifestyle" title="Lifestyle">
						Lifestyle
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu">
			<a href="index-37.php?page=contact" title="Contact">
				Contact
			</a>

		</li>
	</ul>
	</nav>
</div>			
</div>