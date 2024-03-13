<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Portreto</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/portreto-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<?php include 'menu-bar.php'; ?>

		<!-- content 
			================================================== -->
		<div id="content">
			<?php
                include("admin/config.php");
				$id_blog = $_GET['id'];
				$sql = "SELECT * FROM blog_port WHERE id_blog='$id_blog'";
                $result = mysqli_query($connect1, $sql);
				$data = mysqli_fetch_assoc($result);
                $img1=$data["img1_blog"];
				$img2=$data["img2_blog"];
            	$ttl=$data["title_blog"];
				$topic=$data["topic_blog"];
                $shortDesc=$data["shortDesc_blog"];
				$longDesc=$data["longDesc_blog"];
                $st=$data['status_blog'];
                $lk=$data['like_blog'];
                $dt=$data['dateAdd_blog'];?>
				
				<section class="blog-section standart single-post">
					<div class="container-fluid">
						<div class="blog-box">

							<div class="blog-post">
								<div class="post-gallery">
									<img src="admin/assets/images/blog/<?php echo $img1; ?>" width="870px" alt="">
								</div>
								<div class="post-content">
									<span><?php echo $topic; ?></span>
									<h1><?php echo $ttl; ?></h1>
									<span><?php echo $dt; ?></span>
									<p><?php echo $shortDesc; ?></p>
									<p><?php echo $longDesc; ?></p>
									<div class="post-gallery">
										<img src="admin/assets/images/blog/<?php echo $img2; ?>" width="870px" alt="">
									</div>
									
								</div>
							</div>
							<div class="autor-post">
								<img src="upload/blog/autor.jpg" alt="">
								<div class="autor-content">
									<h2>Admin</h2>
									<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
								</div>
							</div>

						
							<div style="display:none" class="comment-section">
								<h1>2 Comments</h1>

								<ul class="comment-tree">
									<li>
										<div class="comment-box">
											<img alt="" src="upload/blog/autor2.jpg">
											<div class="comment-content">
												<h4>Kate</h4>
												<span>May 12, 2016</span>
												<p>Morbi interdum mollis sapien. Sed ac risus. </p>
												<a href="#">Reply</a>
											</div>
										</div>
									</li>

									<li>
										<div class="comment-box">
											<img alt="" src="upload/blog/autor.jpg">
											<div class="comment-content">
												<h4>John</h4>
												<span>May 12, 2016</span>
												<p>Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. </p>
												<a href="#">Reply</a>
											</div>
										</div>
									</li>

								</ul>
								<form class="comment-form">
									<h1>Leave a Comment</h1>
									<div class="row">
										<div class="col-md-6">
											<input name="name" id="name" type="text" placeholder="name:">
										</div>
										<div class="col-md-6">
											<input name="mail" id="mail" type="text" placeholder="email:">
										</div>
									</div>
									<textarea name="comment" id="comment" placeholder="Message:"></textarea>
									<input type="submit" id="submit_contact" value="Submit">
								</form>	
							</div>
						
						</div>
					</div>
				</section>
				<!-- End blog section -->

		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<script src="js/portreto-plugins.min.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>