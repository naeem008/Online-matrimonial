<?php require 'header.php'; ?>
	<!-- inner banner -->	
	<div class="w3layouts-inner-banner">
		<div class="container">
			<div class="logo">
				<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //inner banner -->
	
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Privacy Policy</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- Privacy-policy-section -->
		<section class="privacy_policy_section">
			<div class="privacy_policy">
				<div class="container">
					<h2 class="last-updated">Last updated on : 29-05-2017</h2>
					<div class="panel-group" id="accordion">
						<!-- First Panel -->
						<?php $sql="SELECT * FROM privacy";
						if ($result=mysqli_query($con,$sql)) {
							$i=0;
							while ($row=mysqli_fetch_assoc($result)) { ?>
							<div class="panel panel-default">
							<div class="panel-heading">
								 <h4 class="panel-title" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>">
									 <span>&#8594;</span> <?php echo $row['title']; ?>
								 </h4>
							</div>
							<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<p><?php echo $row['details']; ?></p>
								</div>
							</div>
						</div>
						<?php	
						$i++;
					}
						 } ?>
						
					</div>
				</div>
			</div>
		</section>
		<!-- //Privacy-policy-section -->
	
	<!-- browse profiles -->
	<div class="w3layouts-browse text-center">
		<div class="container">
			<h3>Browse Matchmaking Profiles by</h3>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Country</h4>
				<ul>
					<li><a href="nri_list.php">Country 1</a></li>
					<li><a href="nri_list.php">Country 2</a></li>
					<li><a href="nri_list.php">Country 3</a></li>
					<li><a href="nri_list.php">Country 4</a></li>
					<li><a href="nri_list.php">Country 5</a></li>
					<li><a href="nri_list.php">Country 6</a></li>
					<li><a href="nri_list.php">Country 7</a></li>
					<li><a href="nri_list.php">Country 8</a></li>
					<li><a href="nri_list.php">Country 9</a></li>
					<li><a href="nri_list.php">Country 10</a></li>
					<li><a href="nri_list.php">Country 11</a></li>
					<li class="more"><a href="nri_list.php">more..</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Religion</h4>
				<ul>
					<li><a href="r_list.php">Religion 1</a></li>
					<li><a href="r_list.php">Religion 2</a></li>
					<li><a href="r_list.php">Religion 3</a></li>
					<li><a href="r_list.php">Religion 4</a></li>
					<li><a href="r_list.php">Religion 5</a></li>
					<li><a href="r_list.php">Religion 6</a></li>
					<li><a href="r_list.php">Religion 7</a></li>
					<li><a href="r_list.php">Religion 8</a></li>
					<li><a href="r_list.php">Religion 9</a></li>
					<li><a href="r_list.php">Religion 10</a></li>
					<li><a href="r_list.php">Religion 11</a></li>
					<li class="more"><a href="r_list.php">more..</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Community</h4>
				<ul>
					<li><a href="r_list.php">Community 1</a></li>
					<li><a href="r_list.php">Community 2</a></li>
					<li><a href="r_list.php">Community 3</a></li>
					<li><a href="r_list.php">Community 4</a></li>
					<li><a href="r_list.php">Community 5</a></li>
					<li><a href="r_list.php">Community 6</a></li>
					<li><a href="r_list.php">Community 7</a></li>
					<li><a href="r_list.php">Community 8</a></li>
					<li><a href="r_list.php">Community 9</a></li>
					<li class="more"><a href="r_list.php">more..</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //browse profiles -->

	<!-- Get started -->
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a href="index.php">Get started</a></h4>
		</div>
	</div>
	<!-- //Get started -->
<?php require 'footer.php'; ?>