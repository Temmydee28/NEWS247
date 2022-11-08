<?php

include('conn.php');
$id = 1;
$cat = 'Health';
$cat2='Sport';
$cat3='Lifestyle';
$cat4='Science';
$sql="SELECT * FROM newsupload WHERE id='$id'";
$sql2="SELECT * FROM newsupload WHERE category='$cat'";
$results=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
$rowss=mysqli_fetch_array($results);
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);
?>

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

</div><!-- slider -->
<div class="caroufredsel_wrapper caroufredsel_wrapper_slider">
	<ul class="slider">

	<?php
$sql= "SELECT * FROM `newsupload` ORDER BY `id` DESC LIMIT 0, 5";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows( $result) > 0){
	while($row = mysqli_fetch_array($result)){

?>

<li class="slide">
			<img src='Login/passport/<?php echo $row['coverphoto'];?>' alt='img'>
			<div class="slider_content_box">
				<ul class="post_details simple">
					<li class="category"><a href ="index-14.php?category=<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
					<li class="date">
					<?php echo $row['time'];?>
					</li>
				</ul>
				<h2><a <?php echo "href ='index-1.php?id=".$row['id']."'"; ?>><?php echo $row['headline'];?></a></h2>
				<p class="clearfix"><?php echo $row['content'];?></p>
			</div>
		</li>
		<?php

	}}

?>
	</ul>
</div>
<div class="page">
	<div class='slider_posts_list_container'>
	</div>
	<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<div class="column column_2_3">
				

				<div class="row page_margin_top_section">
					<h4 class="box_header">HOT🔥🔥</h4>
					<div class="horizontal_carousel_container page_margin_top">
						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						<?php 
include('conn.php'); 
$sql = "SELECT * FROM newsupload ORDER by `id`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
     ?>
							<li class="post">
								<a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">
									<img src='Login/passport/<?php echo $row['coverphoto'];?>' alt='img' height='150px'>
								</a>
								<h5><a href="index-1.htm?page=post" title="<?php echo $row['headline'];?>"><?php echo $row['headline'];?></a></h5>
								<ul class="post_details simple">
									<li class="category"><a href ="index-14.php?category=<?php echo $row['category'];?>"  title="<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
									<li class="date">
									<?php echo $row['time'];?>
									</li>
								</ul>
							</li>
							<?php
 }}
							?>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Latest From Health</h4>
					<div class="row">
						<ul class="blog column column_1_2">
						<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat'  DESC LIMIT 0, 1";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>
							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>">
									<span class="icon gallery"></span>
									<img src='Login/passport/<?php echo $rowss['coverphoto']; ?>' alt='img'>
								</a>
								<h2 class="with_number">
									<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>"><?php echo $rowss['headline'];?></a>
									<a class="comments_number" href="index-15.htm?page=post_gallery#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="<?php echo $rowss['category'];?>"><?php echo $rowss['category'];?></a></li>
									<li class="date">
									<?php echo $rowss['time'];?>
									</li>
								</ul>
								<p></p>
								<a class="read_more" <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
							</li>

							<?php
	}
}
							?>
						</ul>
						<div class="column column_1_2">
							<ul class="blog small clearfix">

							<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat'  DESC LIMIT 1, 2";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>

								<li class="post">
									<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>">
										<img src='Login/passport/<?php echo $rowss['coverphoto'];?>' height="200px" alt='img'>
									</a>
									<div class="post_content">
										<h5>
											<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>"><?php echo $rowss['headline'];?></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="<?php echo $rowss['category'];?>"> <?php echo $rowss['category'];?></a></li>
											<li class="date">
											<?php echo $rowss['time'];?>
											</li>
										</ul>
									</div>
								</li>
								<?php
	}}
								?>
							</ul>
							<a class="more page_margin_top" href="#">MORE FROM HEALTH</a>
						</div>
					</div>
				</div>
				<!--<div class="row page_margin_top_section">
					<h4 class="box_header">Top Posts</h4>
					<div class="tabs no_scroll margin_top_10 clearfix">
						<ul class="tabs_navigation small clearfix">
							<li>
								<a href="#most-recent" title="Most Recent">
									Most Recent
								</a>
							</li>
							<li>
								<a href="#most-read" title="Most Read">
									Most Read
								</a>
							</li>
							<li>
								<a href="#most-commented" title="Most Commented">
									Most Commented
								</a>
							</li>
						</ul>
						<div id="most-recent">
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">
											<img src='images/samples/330x242/image_11.jpg' alt='img'>
										</a>
										<h5><span class="number">1.</span><a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-1.htm?page=post" title="Climate Change Debate While Britain Floods">
											<img src='images/samples/330x242/image_14.jpg' alt='img'>
										</a>
										<h5><span class="number">2.</span><a href="index-1.htm?page=post" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-20.htm?page=post_small_image" title="Escape From Planet Earth: The Movie">
											<img src='images/samples/330x242/image_02.jpg' alt='img'>
										</a>
										<h5><span class="number">3.</span><a href="index-20.htm?page=post_small_image" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-35.htm?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/330x242/image_09.jpg' alt='img'>
										</a>
										<h5><span class="number">4.</span><a href="index-1.htm?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div id="most-read">
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="index-1.htm?page=post" title="The Public Health Crisis Hiding in Our Food">
											<img src='images/samples/330x242/image_10.jpg' alt='img'>
										</a>
										<h5><span class="number">1.</span><a href="index-1.htm?page=post" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-1.htm?page=post" title="Drug Makers Hunt for Mergers">
											<img src='images/samples/330x242/image_07.jpg' alt='img'>
										</a>
										<h5><span class="number">2.</span><a href="index-1.htm?page=post" title="Drug Makers Hunt for Mergers">Drug Makers Hunt for Mergers</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-1.htm?page=post" title="Escape From Planet Earth: The Movie">
											<img src='images/samples/330x242/image_13.jpg' alt='img'>
										</a>
										<h5><span class="number">3.</span><a href="index-1.htm?page=post" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-35.htm?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="index-23.htm?page=post_soundcloud" title="High Altitudes May Aid Weight Control">
											<img src='images/samples/330x242/image_05.jpg' alt='img'>
										</a>
										<h5><span class="number">4.</span><a href="index-23.htm?page=post_soundcloud" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div id="most-commented">
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="index-1.htm?page=post" title="Escape From Planet Earth: The Movie">
											<img src='images/samples/330x242/image_13.jpg' alt='img'>
										</a>
										<h5><span class="number">1.</span><a href="index-1.htm?page=post" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-14.htm?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-1.htm?page=post" title="Struggling Nuremberg Sack Coach Verbeek">
											<img src='images/samples/330x242/image_06.jpg' alt='img'>
										</a>
										<h5><span class="number">2.</span><a href="index-1.htm?page=post" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="index-20.htm?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h5><span class="number">3.</span><a href="index-20.htm?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-35.htm?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">
											<img src='images/samples/330x242/image_05.jpg' alt='img'>
										</a>
										<h5><span class="number">4.</span><a href="index-1.htm?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="index-19.htm?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<div class="row page_margin_top_section">
					<div class="column column_1_2">
						<h4 class="box_header">Sports</h4>
						<ul class="blog">
						<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat2'  DESC LIMIT 0, 1";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>


							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$rowss['id']."'";?> title="<?php echo $rowss['headline'];?>">
									<img src='Login/passport/<?php echo $rowss['coverphoto'];?>' alt='img'>
								</a>
								<h2 class="with_number">
									<a <?php echo "href ='index-1.php?id=".$rowss['id']."'";?> title="<?php echo $rowss['category'];?>"><?php echo $rowss['headline'];?></a>
									<a class="comments_number" href="index-1.htm?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="<?php echo $rowss['category'];?>"><?php echo $rowss['category'];?></a></li>
									<li class="date">
									<?php echo $rowss['time'];?>
									</li>
								</ul>
								<p><?php echo $rowss['headline'];?></p>
								<a class="read_more" <?php echo "href ='index-1.php?id=".$rowss['id']."'";?> title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
							</li>
							<?php
	}}
							?>
						</ul>
						<ul class="blog small clearfix">

<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat2'  DESC LIMIT 1, 2";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>

							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>">
									<img src='Login/passport/<?php echo $rowss['coverphoto'];?>' height="70px" alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>"><?php echo $rowss['headline'];?></a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="<?php echo $rowss['category'];?>"><?php echo $rowss['category'];?></a></li>
										<li class="date">
										<?php echo $rowss['time'];?>
										</li>
									</ul>
								</div>
							</li>
							<?php
	}}
							?>
						</ul>
						<a class="more page_margin_top" href="#">READ MORE</a>
					</div>
					<div class="column column_1_2">
						<h4 class="box_header">Lifestyle</h4>
						<ul class="blog">


						<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat3'  DESC LIMIT 0, 1";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>
	
							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>">
									<img src='Login/passport/<?php echo $rowss['coverphoto'];?>' alt='img'>
								</a>
								<h2 class="with_number">
									<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>"><?php echo $rowss['headline'];?></a>
									<a class="comments_number" href="index-1.htm?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="LIFESTYLE">LIFESTYLE</a></li>
									<li class="date">
									<?php echo $rowss['time'];?>
									</li>
								</ul>
								<p><?php echo $rowss['headline'];?></p>
								<a class="read_more" <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
							</li>
							<?php
	}}
							?>
						</ul>
						<ul class="blog small clearfix">
						<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat3'  DESC LIMIT 1, 2";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>

							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$rowss['id']."'"; ?> title="<?php echo $rowss['headline'];?>">
									<img src='Login/passport/<?php echo $rowss['coverphoto'];?>' height="60px" alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a <?php echo "href ='index-1.php?id=".$rowss['id']."'";?> title="<?php echo $rowss['headline'];?>"><?php echo $rowss['headline'];?></a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href ="index-14.php?category=<?php echo $rowss['category'];?>" title="LIFESTYLE"><?php echo $rowss['category'];?></a></li>
										<li class="date">
										<?php echo $rowss['time'];?>
										</li>
									</ul>
								</div>
							</li>
							<?php
	}}
							?>
						</ul>
						<a class="more page_margin_top" href="#">READ MORE</a>
					</div>
				</div>
			</div>-->
			<div class="column column_1_3">
				<!--<h4 class="box_header">Recommended</h4>
				<ul class="blog small_margin clearfix">
					<li class="post">
						<a href="index-15.htm?page=post_gallery" title="The Public Health Crisis Hiding in Our Food">
							<span class="icon gallery"></span>
							<img src='images/samples/510x187/image_12.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="index-15.htm?page=post_gallery" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>
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
						<a href="index-1.htm?page=post" title="The Public Health Crisis Hiding in Our Food">
							<img src='images/samples/510x187/image_01.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="index-1.htm?page=post" title="The Public Health Crisis Hiding in Our Food">Climate Change Debate While Britain Floods</a>
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
						<a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">
							<img src='images/samples/510x187/image_14.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="index-1.htm?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="index-18.htm?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
				</ul>-->
				
				<div class="tabs no_scroll page_margin_top_section clearfix">
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
						<?php
$sql= "SELECT * FROM `newsupload` ORDER BY `postview` DESC LIMIT 0, 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows( $result) > 0){
	while($row = mysqli_fetch_array($result)){

?>
							<li class="post">
								<a <?php echo "href ='index-1.php?id=".$row['id']."'"; ?> title="<?php echo $row['headline'];?>">
									<img src='Login/passport/<?php echo $row['coverphoto']; ?>' alt='img'>
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="<?php echo $row['postview'];?>"></span>
									<h5><a  <?php echo "href ='index-1.php?id=".$row['id']."'"; ?> title="<?php echo $row['headline'];?>"><?php echo $row['headline'];?></a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-14.htm?page=category&amp;cat=<?php echo $row['category'];?>" title="<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
									</ul>
								</div>
							</li>

							<?php
	}}

							?>
							<?php
$sql= "SELECT * FROM `newsupload` ORDER BY `postview` DESC LIMIT 1, 4";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows( $result) > 0){
	while($row = mysqli_fetch_array($result)){

?>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="<?php echo $row['postview'];?>"></span>
									<h5><a <?php echo "href ='index-1.php?id=".$row['id']."'";?> title="<?php echo $row['headline'];?>"><?php echo $row['headline'];?></a></h5>
									<ul class="post_details simple">
										<li class="category"><a href ="index-14.php?category=<?php echo $row['category'];?>" title="<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
									</ul>
								</div>
							</li>
							<?php
	}}
							?>
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
									<h5><a href="index-1.htm?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="index-34.htm?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
									</ul>
								</div>
							</li>
							<li class="post">
								<div class="post_content">
									<span class="number animated_element" data-value="4"></span>
									<h5><a href="index-23.htm?page=post_soundcloud" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
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

				<h4 class="box_header page_margin_top_section">Science</h4>
				<ul class="blog small clearfix">

				
<?php
$sql2= "SELECT * FROM `newsupload` ORDER BY category='$cat4'  DESC LIMIT 0, 2";
$results = mysqli_query($conn, $sql2);
if (mysqli_num_rows( $results) > 0){
	while($rowss = mysqli_fetch_array($results)){

?>
					<li class="post">
						<a <?php echo "href='index-1.php?id=".$rowss['id']."'";?> title="<?php echo $rowss['headline']?>">
					
							<img src='Login/passport/<?php echo $rowss['coverphoto']?>' height="150px" alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a <?php echo "href='index-1.php?id=".$rowss['id']."'";?> title="<?php echo $rowss['headline']?>"><?php echo $rowss['headline']?></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href ="index-14.php?category=<?php echo $row['category'];?>" title="SCIENCE"><?php echo $rowss['category']?></a></li>
								<li class="date">
								<?php echo $rowss['time']?>
								</li>
							</ul>
						</div>
					</li>
					<?php
	}}
					?>
				</ul>
				<a class="more page_margin_top" href="#">MORE FROM SCIENCE</a>
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