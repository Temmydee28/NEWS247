
<?php
include('conn.php');
$today=date("d-M-Y");
if (isset($_REQUEST['id'])){
	$view_query="UPDATE `newsupload` SET postview=postview + " . 1 . " WHERE id='$_REQUEST[id]'";
	$send_viewquery=mysqli_query($conn,$view_query);

	$sql="SELECT * FROM newsupload WHERE id='$_REQUEST[id]'";
	$result=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_array($result);
	$newcategory=$rows['category'];
}

?>




<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $rows['headline']; ?></title>
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

						
				
		
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						<h1 class="post_title">
						<?php echo $rows['headline']; ?>
						</h1>
						<ul class="post_details clearfix">
							<li class="detail category">In <a href="index-14.htm?page=category&amp;cat=health" title="<?php echo $rows['category']; ?>"><?php echo $rows['category']; ?></a></li>
							<li class="detail date"><?php echo $rows['time']; ?></li>
							<li class="detail author">By <a href="index-33.htm?page=author" title="<?php echo $rows['author']; ?>"><?php echo $rows['author']; ?></a></li>
							<li class="detail views"><?php echo $rows['postview']; ?></li>
							<li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments">6 Comments</a></li>
						</ul>
						<a href="Login/passport/<?php echo $rows['coverphoto'];?>" class="post_image page_margin_top prettyPhoto" title="<?php echo $rows['headline'];?>">
							<img src='Login/passport/<?php echo $rows['coverphoto'];?>' alt='img'>
						</a>
						<div class="sentence">
							<span class="text"><?php echo $rows['headline']; ?></span>
							<span class="<?php echo $rows['author']; ?>"><?php echo $rows['author']; ?></span>
						</div>
						<div class="post_content page_margin_top_section clearfix">
							<div class="content_box">
								<h3 class="excerpt"><?php echo $rows['headline']; ?></h3>
								<div class="text">
									<p><?php echo $rows['content']; ?></p>
									<a title="6 Comments" href="index-1.php?page=post" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>6 COMMENTS</span></a>
								</div>
							</div>
							<div class="author_box animated_element">
								<div class="author">
									<a title="Anna Shubina" href="index-33.htm?page=author" class="thumb">
										<img alt="img" height="70px" src="Login/passport/<?php echo $rows['coverphoto'];?>">
									</a>
									<div class="details">
										<h5><a title="Anna Shubina" href="index-33.htm?page=author"><?php echo $rows['author']; ?></a></h5>
										<h6>EDITOR</h6>
										<a href="index-33.htm?page=author" class="more highlight margin_top_15">PROFILE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
							<li>
								<a target="_blank" title="" href="../../QuanticaLabs.html" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="" href="../../QuanticaLabs-1.html" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon skype">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="../../user/quanticalabs.html" class="social_icon envato">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon instagram">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon pinterest">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top">
					<ul class="taxonomies tags left clearfix">
						<li>
							<a href="#" title="People">PEOPLE</a>
						</li>
						<li>
							<a href="#" title="Sport">SPORT</a>
						</li>
					</ul>
					<ul class="taxonomies categories right clearfix">
						<li>
							<a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a>
						</li>
					</ul>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Latest Post</h4>
					<div class="horizontal_carousel_container page_margin_top">
						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
							<li class="post">
								<a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">
									<img src='images/samples/330x242/image_08.jpg' alt='img'>
								</a>
								<h5><a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										
									</li>
								</ul>
							</li>
							<li class="post">
								<a href="index-20.htm?page=post_small_image" title="High Altitudes May Aid Weight Control">
									<img src='images/samples/330x242/image_01.jpg' alt='img'>
								</a>
								<h5><a href="index-20.htm?page=post_small_image" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
							<li class="post">
								<a href="index-15.htm?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">
									<span class="icon gallery"><!--<span class="info">999</span>--></span>
									<img src='images/samples/330x242/image_03.jpg' alt='img'>
								</a>
								<h5><a href="index-15.htm?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
							<li class="post first">
								<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/330x242/image_09.jpg' alt='img'>
								</a>
								<h5><a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Leave a Comment</h4>
					<p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>
					<form class="comment_form margin_top_15" id="comment_form" method="post" action="/Pressroom/Template/?page=post">
						<fieldset class="column column_1_3">
							<input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
						</fieldset>
						<fieldset class="column column_1_3">
							<input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
						</fieldset>
						<fieldset class="column column_1_3">
							<input class="text_input" name="website" type="text" value="Website" placeholder="Website">
						</fieldset>
						<fieldset>
							<textarea name="message" placeholder="Comment *">Comment *</textarea>
						</fieldset>
						<fieldset>
							<input type="submit" value="POST COMMENT" class="more active">
							<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
						</fieldset>
					</form>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">6 Comments</h4>
					<ul id="comments_list">
						<li class="comment clearfix" id="comment-1">
							<div class="comment_author_avatar">
								&nbsp;
							</div>
							<div class="comment_details">
								<div class="posted_by clearfix">
									<h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
									<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
								</div>
								<p>
									Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
								</p>
								<a class="read_more" href="#comment_form" title="Reply">
									<span class="arrow"></span><span>REPLY</span>
								</a>
							</div>
						</li>
						<li class="comment clearfix" id="comment-2">
							<div class="comment_author_avatar">
								&nbsp;
							</div>
							<div class="comment_details">
								<div class="posted_by clearfix">
									<h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
									<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
								</div>
								<p>
									Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
								</p>
								<a class="read_more" href="#comment_form" title="Reply">
									<span class="arrow"></span><span>REPLY</span>
								</a>
							</div>
							<ul class="children">
								<li class="comment clearfix">
									<a href="#comment-2" class="parent_arrow"></a>
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by clearfix">
											<h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
											<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
										</p>
										<a class="read_more" href="#comment_form" title="Reply">
											<span class="arrow"></span><span>REPLY</span>
										</a>
									</div>
								</li>
								<li class="comment clearfix">
									<a href="#comment-2" class="parent_arrow"></a>
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by clearfix">
											<h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
											<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
										</p>
										<a class="read_more" href="#comment_form" title="Reply">
											<span class="arrow"></span><span>REPLY</span>
										</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="pagination page_margin_top_section">
						<li class="left">
							<a href="#" title="">&nbsp;</a>
						</li>
						<li class="selected">
							<a href="#" title="">
								1
							</a>
						</li>
						<li>
							<a href="#" title="">
								2
							</a>
						</li>
						<li>
							<a href="#" title="">
								3
							</a>
						</li>
						<li class="right">
							<a href="#" title="">&nbsp;</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="column column_1_3">
				<div class="tabs no_scroll clearfix">
					<ul class="tabs_navigation clearfix">
						<li>
							<a href="#sidebar-most-read" title="Most Read">
								Most Read
							</a>
							<span></span>
						</li>
						<li>
							<a href="#sidebar-most-commented" title="Commented">
								Commented
							</a>
							<span></span>
						</li>
					</ul>
					<div id="sidebar-most-read">
						<ul class="blog rating page_margin_top clearfix">
							<li class="post">
								<a href="index-1.htm?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
									<img src='images/samples/510x187/image_12.jpg' alt='img'>
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="6 257"></span>
									<h5><a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="5 062"></span>
									<h5><a href="index-23.htm?page=post_soundcloud" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="4 778"></span>
									<h5><a href="index-24.htm?page=post_quote" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="754"></span>
									<h5><a href="index-20.htm?page=post_small_image" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="52"></span>
									<h5><a href="index-1.htm?page=post" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
					<div id="sidebar-most-commented">
						<ul class="blog rating page_margin_top clearfix">
							<li class="post">
								<a href="index-1.htm?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
									<img src='images/samples/510x187/image_02.jpg' alt='img'>
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="70"></span>
									<h5><a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="62"></span>
									<h5><a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="30"></span>
									<h5><a href="index-1.htm?page=post" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="25"></span>
									<h5><a href="index-25.htm?page=post_quote_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="4"></span>
									<h5><a href="index-1.htm?page=post" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
				</div>
				
				<h4 class="box_header page_margin_top_section">Top Authors</h4>
				<ul class="authors rating clearfix">
					<li class="author">
						<a class="thumb" href="index-33.htm?page=author" title="Debora Hilton">
							<img src='images/samples/Team_100x100/image_01.jpg' alt='img'>
							<span class="number animated_element" data-value="34"></span>
						</a>
						<div class="details">
							<h5><a href="index-33.htm?page=author" title="Debora Hilton">Debora Hilton</a></h5>
							<h6>EDITOR</h6>
						</div>
					</li>
					<li class="author">
						<a class="thumb" href="index-33.htm?page=author" title="Anna Shubina">
							<img src='images/samples/Team_100x100/image_02.jpg' alt='img'>
							<span class="number animated_element" data-value="25"></span>
						</a>
						<div class="details">
							<h5><a href="index-33.htm?page=author" title="Anna Shubina">Anna Shubina</a></h5>
							<h6>EDITOR</h6>
						</div>
					</li>
					<li class="author">
						<a class="thumb" href="index-33.htm?page=author" title="Liam Holden">
							<img src='images/samples/Team_100x100/image_03.jpg' alt='img'>
							<span class="number animated_element" data-value="9"></span>
						</a>
						<div class="details">
							<h5><a href="index-33.htm?page=author" title="Liam Holden">Liam Holden</a></h5>
							<h6>PUBLISHER</h6>
						</div>
					</li>
					<li class="author">
						<a class="thumb" href="index-33.htm?page=author" title="Heather Dale">
							<img src='images/samples/Team_100x100/image_04.jpg' alt='img'>
							<span class="number animated_element" data-value="2"></span>
						</a>
						<div class="details">
							<h5><a href="index-33.htm?page=author" title="Heather Dale">Heather Dale</a></h5>
							<h6>ILLUSTRATOR</h6>
						</div>
					</li>
				</ul>
				<h4 class="box_header page_margin_top_section">Most Commented</h4>
				<div class="vertical_carousel_container clearfix">
					<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						<li class="post">
							<a href="index-15.htm?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
								<span class="icon small gallery"></span>
								<img src='images/samples/100x100/image_06.jpg' alt='img'>
							</a>
							<div class="post_content">
								<h5>
									<a href="index-15.htm?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
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
							<a href="index-24.htm?page=post_quote" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
								<img src='images/samples/100x100/image_12.jpg' alt='img'>
							</a>
							<div class="post_content">
								<h5>
									<a href="index-24.htm?page=post_quote" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
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
							<a href="index-20.htm?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">
								<img src='images/samples/100x100/image_02.jpg' alt='img'>
							</a>
							<div class="post_content">
								<h5>
									<a href="index-20.htm?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
								</h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</div>
						</li>
						<li class="post">
							<a href="index-1.htm?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
								<img src='images/samples/100x100/image_13.jpg' alt='img'>
							</a>
							<div class="post_content">
								<h5>
									<a href="index-1.htm?page=post" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
								</h5>
								<ul class="post_details simple">
									<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<h4 class="box_header page_margin_top_section">Featured Videos</h4>
				<div class="horizontal_carousel_container big page_margin_top">
					<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						<li class="post">
							<a href="index-21.htm?page=post_video" title="Struggling Nuremberg Sack Coach Verbeek">
								<span class="icon video"></span>
								<img src='images/samples/330x242/image_03.jpg' alt='img'>
							</a>
							<h5 class="with_number">
								<a href="index-21.htm?page=post_video" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
								<a class="comments_number" href="index-21.htm?page=post_video#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post">
							<a href="index-22.htm?page=post_video_2" title="Built on Brotherhood, Club Lives Up to Name">
								<span class="icon video"></span>
								<img src='images/samples/330x242/image_14.jpg' alt='img'>
							</a>
							<h5 class="with_number">
								<a href="index-22.htm?page=post_video_2" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
								<a class="comments_number" href="index-22.htm?page=post_video_2#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post">
							<a href="index-21.htm?page=post_video" title="New Painkiller Rekindles Addiction Concerns">
								<span class="icon video"></span>
								<img src='images/samples/330x242/image_04.jpg' alt='img'>
							</a>
							<h5 class="with_number">
								<a href="index-21.htm?page=post_video" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
								<a class="comments_number" href="index-21.htm?page=post_video#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<h4 class="box_header page_margin_top_section">Categories</h4>
				<ul class="taxonomies columns clearfix page_margin_top">
					<li>
						<a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a>
					</li>
					<li>
						<a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a>
					</li>
					<li>
						<a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a>
					</li>
					<li>
						<a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a>
					</li>
					<li>
						<a href="index-35.htm?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a>
					</li>
				</ul>
				<h4 class="box_header page_margin_top_section">Tags</h4>
				<ul class="taxonomies clearfix page_margin_top">
					<li>
						<a href="#" title="Business">BUSINESS</a>
					</li>
					<li>
						<a href="#" title="Education">EDUCATION</a>
					</li>
					<li>
						<a href="#" title="Family">FAMILY</a>
					</li>
					<li>
						<a href="#" title="Film">FILM</a>
					</li>
					<li>
						<a href="#" title="Food">FOOD</a>
					</li>
					<li>
						<a href="#" title="Garden">GARDEN</a>
					</li>
					<li>
						<a href="#" title="People">PEOPLE</a>
					</li>
					<li>
						<a href="#" title="Sport">SPORT</a>
					</li>
				</ul>
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
				<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style_selector/style_selector.css">
<script type="text/javascript" src="style_selector/style_selector.js"></script>
<div class="style_selector opened">
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
</div>
	</body>
</html>