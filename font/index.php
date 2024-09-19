<?php
include("database.php");

// select sql protfolio name 
$protfolioSelectSql = "SELECT * FROM `protfolio_name` ORDER BY id DESC LIMIT 1";

// select sql menubar
$selectSqlNav = "SELECT * FROM `menu_bar`";

//select sql bodyheader
$headerBody = "SELECT * FROM `header_text` ORDER BY id DESC LIMIT 1";

//select sql about
$aboutSql = "SELECT * FROM `about` ORDER BY id DESC LIMIT 1";

//select sql social media
$socialSql = "SELECT * FROM `about`";

//select sql contact info 
$contactSql = "SELECT * FROM `contact_info` ORDER BY id DESC LIMIT 1";

// skill data select sql 
$skill_sql = "SELECT * FROM `skills`";

$selectSkill = $connectionDB->query($skill_sql);
$skillName = [];
$skillValue = [];

if ($selectSkill->num_rows > 0) {
	while ($selectSkill_row = $selectSkill->fetch_assoc()) {
		$skillName[] = $selectSkill_row['name'];
		$skillValue[] = $selectSkill_row['value'];
	}
}
$totalSkill = count($skillName);
$halfSkill = ceil($totalSkill / 2);

//education data select sql 
$educationSelect_sql = "SELECT * FROM `education`";

//experience data select sql 
$experienceSelect_sql = "SELECT * FROM `experience` ORDER BY `id` DESC";

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">

	<!-- title of site -->
	<title>Browny</title>

	<!-- For favicon png -->
	<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!--flat icon css-->
	<link rel="stylesheet" href="assets/css/flaticon.css">

	<!--animate.css-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- bootsnav -->
	<link rel="stylesheet" href="assets/css/bootsnav.css">

	<!--style.css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--responsive.css-->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
	<!-- top-area Start -->
	<header class="top-area">
		<div class="header-area">
			<!-- Start Navigation -->
			<nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">
				<div class="container">
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.php">
							<?php
							$result = $connectionDB->query($protfolioSelectSql);
							if ($result->num_rows > 0) {
								$row = $result->fetch_assoc();
								echo $row['name'];
							}
							?>
						</a>
					</div><!--/.navbar-header-->
					<!-- End Header Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<?php
							$navResult = $connectionDB->query($selectSqlNav);
							if ($navResult->num_rows > 0) {
								while ($navRow = $navResult->fetch_assoc()) { ?>
									<li class="smooth-menu"><a href="#<?php echo $navRow['name']; ?>"><?php echo $navRow['name']; ?></a></li>
							<?php };
							}

							?>

							<!-- <li class=" smooth-menu"><a href="#education">education</a></li>
							<li class="smooth-menu"><a href="#skills">skills</a></li>
							<li class="smooth-menu"><a href="#experience">experience</a></li>
							<li class="smooth-menu"><a href="#profiles">profile</a></li>
							<li class="smooth-menu"><a href="#portfolio">portfolio</a></li>
							<li class="smooth-menu"><a href="#clients">clients</a></li>
							<li class="smooth-menu"><a href="#contact">contact</a></li> -->
						</ul><!--/.nav -->
					</div><!-- /.navbar-collapse -->
				</div><!--/.container-->
			</nav><!--/nav-->
			<!-- End Navigation -->
		</div><!--/.header-area-->

		<div class="clearfix"></div>

	</header><!-- /.top-area-->
	<!-- top-area End -->

	<!--welcome-hero start -->
	<?php
	$bodyHeaderSelect = $connectionDB->query($headerBody);
	if ($bodyHeaderSelect->num_rows > 0) {
		$bodyHeaderRow = $bodyHeaderSelect->fetch_assoc(); ?>
		<section id="welcome-hero" class="welcome-hero bg-cover bg-center bg-no-repeat" style="background-image: url('../<?php echo $bodyHeaderRow['image']; ?>');">

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<!-- <h2>hi <span>,</span> i am <br> browny <br> star <span>.</span> </h2> -->
							<h2><?php echo $bodyHeaderRow['heading'] ?></h2>
							<p><?php echo $bodyHeaderRow['details_head'] ?></p>
							<a href="../<?php echo $bodyHeaderRow['download_file'] ?>" download>download resume</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
	<?php	}
	?>
	<!--welcome-hero end -->

	<!--about start -->
	<section id="about" class="about">
		<div class="section-heading text-center">
			<h2>about me</h2>
		</div>
		<div class="container">
			<?php
			$aboutCon = $connectionDB->query($aboutSql);
			if ($aboutCon->num_rows > 0) {
				$aboutRow = $aboutCon->fetch_assoc(); ?>
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>
									<?php echo $aboutRow['heading_about'] ?>
								</h3>
								<p>
									<?php echo $aboutRow['paragraph_about'] ?>
								</p>

								<!-- contact info added  -->
								<div class="row">
									<?php
									$selectContact = $connectionDB->query($contactSql);
									if ($selectContact->num_rows > 0) {
										$selectContactRow = $selectContact->fetch_assoc(); ?>

										<style>
											.single-about-add-info p {
												word-wrap: break-word;
												white-space: normal;
												overflow-wrap: break-word;
											}
										</style>

										<div class="col-sm-4">
											<div class="single-about-add-info">
												<h3>Phone</h3>
												<p><?php echo $selectContactRow['phone']; ?></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="single-about-add-info">
												<h3>Email</h3>
												<p><?php echo $selectContactRow['email']; ?></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="single-about-add-info">
												<h3>Website</h3>
												<p><?php echo $selectContactRow['website']; ?></p>
											</div>
										</div>

									<?php } ?>

								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="<?php echo "../" . $aboutRow['image_about'] ?>" alt="profile_image">
								<div class="about-list-icon">
									<ul>
										<!-- Example Row -->
										<?php
										// nave/menu data select 
										$nameSelectSql = "SELECT * FROM `social`";
										$nameConnect = $connectionDB->query($nameSelectSql);

										if ($nameConnect->num_rows > 0) {
											while ($row = $nameConnect->fetch_assoc()) { ?>
												<li>
													<a href="<?php echo $row['info_details'] ?>" target="_blank">
														<?php echo $row['icon_name'] ?>
													</a>
												</li><!-- / li -->
										<?php  }
										}
										?>
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->
							</div>
						</div>
					</div>
				</div>

			<?php	} ?>
		</div>
	</section><!--/.about-->
	<!--about end -->

	<!--education start -->
	<section id="education" class="education">
		<div class="section-heading text-center">
			<h2>education</h2>
		</div>
		<div class="container">
			<div class="education-horizontal-timeline">
				<div class="row">
					<?php
					$educationCon = $connectionDB->query($educationSelect_sql);
					if ($educationCon->num_rows > 0) {
						while ($educationRow = $educationCon->fetch_assoc()) { ?>
							<div class="col-sm-4">
								<div class="single-horizontal-timeline">
									<div class="experience-time">
										<h2><?php echo $educationRow['year']; ?></h2>
										<h3><?php echo $educationRow['subject']; ?></h3>
									</div><!--/.experience-time-->
									<div class="timeline-horizontal-border">
										<i class="fa fa-circle" aria-hidden="true"></i>
										<span class="single-timeline-horizontal"></span>
									</div>
									<div class="timeline">
										<div class="timeline-content">
											<h4 class="title">
												<?php echo $educationRow['university']; ?>
											</h4>
											<h5><?php echo $educationRow['location_university']; ?></h5>
											<p class="description">
												<?php echo $educationRow['details']; ?>
											</p>
										</div><!--/.timeline-content-->
									</div><!--/.timeline-->
								</div>
							</div>
					<?php	}
					}
					?>
				</div>
			</div>
		</div>

	</section><!--/.education-->
	<!--education end -->

	<!--skills start -->
	<section id="skills" class="skills">
		<div class="skill-content">
			<div class="section-heading text-center">
				<h2>skills</h2>
			</div>
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="single-skill-content">
							<?php
							for ($i = 0; $i < $halfSkill; $i++) { ?>

								<div class="barWrapper">
									<span class="progressText"><?php echo $skillName[$i] ?> </span>
									<div class="single-progress-txt">
										<div class="progress ">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skillValue[$i] ?>" aria-valuemin="10" aria-valuemax="100">

											</div>
										</div>
										<h3><?php echo $skillValue[$i] ?>%</h3>
									</div>
								</div><!-- /.barWrapper -->
							<?php	}
							?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-skill-content">
							<?php
							for ($i = $halfSkill; $i < $totalSkill; $i++) { ?>
								<div class="barWrapper">
									<span class="progressText"><?php echo $skillName[$i] ?> </span>
									<div class="single-progress-txt">
										<div class="progress ">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skillValue[$i] ?>" aria-valuemin="10" aria-valuemax="100">

											</div>
										</div>
										<h3><?php echo $skillValue[$i] ?>%</h3>
									</div>
								</div><!-- /.barWrapper -->
							<?php	}
							?>
						</div>
					</div>
				</div><!-- /.row -->
			</div> <!-- /.container -->
		</div><!-- /.skill-content-->

	</section><!--/.skills-->
	<!--skills end -->

	<!--experience start -->
	<section id="experience" class="experience">
		<div class="section-heading text-center">
			<h2>experience</h2>
		</div>
		<div class="container">
			<div class="experience-content">
				<div class="main-timeline">
					<ul>
						<?php
						$counter = 0; // Initialize a counter to track odd/even rows

						$experienceCon = $connectionDB->query($experienceSelect_sql);
						if ($experienceCon->num_rows > 0) {
							while ($experienceRow = $experienceCon->fetch_assoc()) {
								// Determine alignment for experience-time and timeline-content based on the counter
								if ($counter % 2 == 0) { ?>
									<!-- right text using first  -->
									<li>
										<div class="single-timeline-box fix">
											<div class="row">
												<div class="col-md-5">
													<div class="experience-time text-right">
														<h2><?php echo $experienceRow['work_time'] ?></h2>
														<h3><?php echo $experienceRow['work_name'] ?></h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-offset-1 col-md-5">
													<div class="timeline">
														<div class="timeline-content">
															<h4 class="title">
																<span><i class="fa fa-circle" aria-hidden="true"></i></span>
																<?php echo $experienceRow['company_name'] ?>
															</h4>
															<h5><?php echo $experienceRow['company_locatoin'] ?></h5>
															<p class="description">
																<?php echo $experienceRow['work_details'] ?>
															</p>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div>
										</div><!--/.single-timeline-box-->
									</li>

								<?php	} elseif ($counter % 2 != 0) { ?>
									<!-- right text using second 	 -->
									<li>
										<div class="single-timeline-box fix">
											<div class="row">
												<div class="col-md-offset-1 col-md-5 experience-time-responsive">
													<div class="experience-time">
														<h2>
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															<?php echo $experienceRow['work_time'] ?>
														</h2>
														<h3><?php echo $experienceRow['work_name'] ?></h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-5">
													<div class="timeline">
														<div class="timeline-content text-right">
															<h4 class="title">
																<?php echo $experienceRow['company_name'] ?>
															</h4>
															<h5><?php echo $experienceRow['company_locatoin'] ?></h5>
															<p class="description">
																<?php echo $experienceRow['work_details'] ?>
															</p>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
												<div class="col-md-offset-1 col-md-5 experience-time-main">
													<div class="experience-time">
														<h2>
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															2016 - 2018
														</h2>
														<h3>associate design director</h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
											</div>
										</div><!--/.single-timeline-box-->
									</li>

						<?php
								}
								$counter++; // Increment the counter for the next row
							}
						}
						?>
					</ul>
				</div><!--.main-timeline-->
			</div><!--.experience-content-->
		</div>

	</section><!--/.experience-->
	<!--experience end -->



	<!--contact start -->
	<section id="contact" class="contact">
		<div class="section-heading text-center">
			<h2>contact me</h2>
		</div>
		<div class="container">
			<div class="contact-content">
				<div class="row">
					<div class="col-md-offset-1 col-md-5 col-sm-6">
						<div class="single-contact-box">
							<div class="contact-form">
								<form action="https://formsubmit.co/shahajalalbadsha5@gmail.com" method="POST">
									<div class="row">
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" placeholder="Name*" name="name">
											</div><!--/.form-group-->
										</div><!--/.col-->
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
											</div><!--/.form-group-->
										</div><!--/.col-->
									</div><!--/.row-->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
											</div><!--/.form-group-->
										</div><!--/.col-->
									</div><!--/.row-->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<textarea class="form-control" name="message" rows="8" id="comment" placeholder="Message"></textarea>
											</div><!--/.form-group-->
										</div><!--/.col-->
									</div><!--/.row-->
									<div class="row">
										<div class="col-sm-12">
											<div class="single-contact-btn">
												<button class="contact-btn" type="submit" role="button">Submit</button>
											</div><!--/.single-single-contact-btn-->
										</div><!--/.col-->
									</div><!--/.row-->
								</form><!--/form-->
							</div><!--/.contact-form-->
						</div><!--/.single-contact-box-->
					</div><!--/.col-->
					<div class="col-md-offset-1 col-md-5 col-sm-6">
						<div class="single-contact-box">
							<div class="contact-adress">

								<!-- contact info added 2nd part contact us part  -->
								<?php
								$selectContact = $connectionDB->query($contactSql);
								if ($selectContact->num_rows > 0) {
									$selectContactRow = $selectContact->fetch_assoc(); ?>

									<div class="contact-add-head">
										<h3><?php echo $selectContactRow['name']; ?></h3>
										<p><?php echo $selectContactRow['profetion']; ?></p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>phone</h3>
											<p><?php echo $selectContactRow['phone']; ?></p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p><?php echo $selectContactRow['email']; ?></p>
										</div>
										<div class="single-contact-add-info">
											<h3>website</h3>
											<p><?php echo $selectContactRow['website']; ?></p>
										</div>

									<?php }
									?>
									</div>
							</div><!--/.contact-adress-->
							<div class="hm-foot-icon">
								<ul>
									<!-- Example Row -->
									<?php
									// nave/menu data select 
									$nameSelectSql = "SELECT * FROM `social`";
									$nameConnect = $connectionDB->query($nameSelectSql);

									if ($nameConnect->num_rows > 0) {
										while ($row = $nameConnect->fetch_assoc()) { ?>
											<li>
												<a href="<?php echo $row['info_details'] ?>" target="_blank">
													<?php echo $row['icon_name'] ?>
												</a>
											</li><!-- / li -->
									<?php  }
									}
									?>
								</ul><!--/ul-->
							</div><!--/.hm-foot-icon-->
						</div><!--/.single-contact-box-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.contact-content-->
		</div><!--/.container-->

	</section><!--/.contact-->
	<!--contact end -->

	<!--footer-copyright start-->
	<footer id="footer-copyright" class="footer-copyright">
		<div class="container">
			<div class="hm-footer-copyright text-center">
				<p>
					&copy; copyright yourname. design and developed by <a href="https://www.themesine.com/">themesine</a>
				</p><!--/p-->
			</div><!--/.text-center-->
		</div><!--/.container-->

		<div id="scroll-Top">
			<div class="return-to-top">
				<i class="fa fa-angle-up " id="scroll-top"></i>
			</div>

		</div><!--/.scroll-Top-->

	</footer><!--/.footer-copyright-->
	<!--footer-copyright end-->

	<!-- Include all js compiled plugins (below), or include individual files as needed -->

	<script src="assets/js/jquery.js"></script>

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<!--bootstrap.min.js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!-- jquery.sticky.js -->
	<script src="assets/js/jquery.sticky.js"></script>

	<!-- for progress bar start-->

	<!-- progressbar js -->
	<script src="assets/js/progressbar.js"></script>

	<!-- appear js -->
	<script src="assets/js/jquery.appear.js"></script>



	<!--owl.carousel.js-->
	<script src="assets/js/owl.carousel.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


	<!--Custom JS-->
	<script src="assets/js/custom.js"></script>

</body>

</html>