<?php require 'header.php'; ?>
<?php 
$info=array();
if ($_POST) {
	
	$creator=$_POST['creator'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=md5($_POST['password']);
	$gender=$_POST['gender'];
	$religion=$_POST['religion'];
	$birthdate=$_POST['birthdate'];
	$sql="INSERT INTO users(id,creator,name,email,password,phone,dateofbirth,gender,religion) VALUES(NULL,'$creator','$name','$email','$password','$phone','$birthdate','$gender','$religion')";
	if (mysqli_query($con,$sql)) { 
		if ($gender=='Male') {
			$image='groom-default.jpg';
		}elseif ($gender=='Female') {
			$image='bride-default.jpg';
		}
		$sql="INSERT INTO basic_info(email, about, marital_status, diet, image, height) VALUES('$email','Not set','Not set','Not set','$image','Not set')";
		if (mysqli_query($con,$sql)) {
			$partner_sql="INSERT INTO partner(email, min_age, max_age, min_height, max_height, partner_marital_status, partner_religion, partner_profession) VALUES('$email','Not set','Not set','Not set','Not set','Not set','Not set','Not set')";
			if (mysqli_query($con, $partner_sql)) {
			$contact_sql="INSERT INTO contact_info(email, contact_name, contact_number, relation, contact_time) VALUES('$email','Not set','Not set','Not set','Not set')";
				if (mysqli_query($con,$contact_sql)) {
					$education_sql="INSERT INTO educational_details(email, undergraduate, postgraduate, university, college, profession, company, designation, salary) VALUES('$email','Not set','Not set','Not set','Not set','Not set','Not set','Not set','Not set')";
					if (mysqli_query($con,$education_sql)) {
						$family_sql="INSERT INTO family_details(email, father_profession, mother_profession, brothers, sister, family_value, family_type, family_affluence, live) VALUES('$email','Not set','Not set','Not set','Not set','Not set','Not set','Not set','Not set')";
						if (mysqli_query($con,$family_sql)) {
							$family_sql="INSERT INTO lifestyle(email, weight, habits, mother_tongue, language, blood, disability) VALUES('$email','Not set','Not set','Not set','Not set','Not set','Not set')";
							if (mysqli_query($con,$family_sql)) {
								$info[]="Account is successfully created!";
							}
						}
					}
				}
			}
		}
	}else{ 
		$info[]="Account is not created";
	}
}

 ?>
<div class="w3layouts-banner" id="home">
<div class="container">
	<div class="logo">
		<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
	</div>
	<div class="clearfix"></div>
	<?php if (isset($_SESSION['name'])) { ?>

	



	<?php }else{ ?>
	<div class="agileits-register">
		<h3>Register NOW!</h3>
		<?php foreach ($info as $key => $value) {
			echo $value;
		} ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="w3_modal_body_grid">
					<span>Profile For:</span>
					<select id="w3_country" onchange="change_country(this.value)" name="creator" class="frm-field required">
						<option value="">Select</option>
						<option value="myself">Myself</option>   
						<option value="parent">Son</option>   
						<option value="parent">Daughter</option>   
						<option value="brother">Brother</option>   
						<option value="brother">Sister</option>  
						<option value="relative">Relative</option>
						<option value="friend">Friend</option>						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="gender" checked="" value="Male"><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="gender" value="Female"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date" id="datepicker" name="birthdate" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid">
					<span>religion:</span>
					<select id="w3_country1" name="religion" onchange="change_country(this.value)" class="frm-field required"> 
						<option value="">Select Religion</option>
						<option value="Muslim">Muslim</option>
						<option value="Hindu">Hindu</option>    
						<option value="Christian">Christian</option>   
						<option value="Sikh">Sikh</option>   
						<option value="Jain">Jain</option>   
						<option value="Buddhist">Buddhist</option>
						<option value="Secular">No Religious Belief</option>   						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
				<!-- country codes (ISO 3166) and Dial codes. -->
					<input id="phone" name="phone" type="tel">
				  <!-- Load jQuery from CDN so can run demo immediately -->
				  <script src="js/intlTelInput.js"></script>
				  <script>
					$("#phone").intlTelInput({
					  // allowDropdown: false,
					  // autoHideDialCode: false,
					  // autoPlaceholder: "off",
					  // dropdownContainer: "body",
					  // excludeCountries: ["us"],
					  // formatOnDisplay: false,
					  // geoIpLookup: function(callback) {
					  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					  //     var countryCode = (resp && resp.country) ? resp.country : "";
					  //     callback(countryCode);
					  //   });
					  // },
					  // initialCountry: "auto",
					  // nationalMode: false,
					  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
					  // placeholderNumberType: "MOBILE",
					  // preferredCountries: ['cn', 'jp'],
					  // separateDialCode: true,
					  utilsScript: "js/utils.js"
					});
				  </script>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="password" placeholder=" " required=""/>
				</div>
				<div class="w3-agree">
					<input type="checkbox" id="c1" name="cc">
					<label class="agileits-agree">I have read & agree to the <a href="terms.html">Terms and Conditions</a></label>
				</div>
				<input type="submit" value="Register me" />
				<div class="clearfix"></div>
				<p class="w3ls-login">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">Login</a></p>
			</form>
		</div>
<?php } ?>
		
	</div>
</div>
<!-- Find your soulmate -->
	<div class="w3l_find-soulmate text-center">
		<h3>Find Your Soulmate</h3>
			<div class="container">
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3>Sign Up</h3>
						<p>Signup for free and Upload your profile</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-search" aria-hidden="true"></i>
						<h3>Search</h3>
						<p>Search for your right partner</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Connect</h3>
						<p>Connect your perfect Match</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						<h3>Interact</h3>
						<p>Become a member and start Conversation</p>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>
	</div>
	<!-- //Find your soulmate -->
		
		<!-- featured profiles -->			
			<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/groom-default.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/bride-default.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p3.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p4.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p5.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p6.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p7.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p8.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/groom-default.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p10.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p11.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p12.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p7.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.html">
											<div class="profile-image">
												<img src="images/p5.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p1.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.html">
											<div class="profile-image">
												<img src="images/p2.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
								</li>
							</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->	
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: false,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
			<!-- //featured profiles -->		   
					   
		<!-- mobile-app -->
			<div class="wthree-mobilaapp main-grid-border">
				<div class="container">
					<div class="app">
						<div class="col-md-6 w3ls_app-left mpl">
							<h3>Matrimonial mobile app on your smartphone!</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<div class="agileits_app-devices">
								<h5>Download the App</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-5 app-image">
							<img src="images/mob.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- /mobile-app -->
	
	<!-- browse profiles -->
	<div class="w3layouts-browse text-center">
		<div class="container">
			<h3>Browse Matchmaking Profiles by</h3>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Country</h4>
				<ul>
					<li><a href="nri_list.html">Country 1</a></li>
					<li><a href="nri_list.html">Country 2</a></li>
					<li><a href="nri_list.html">Country 3</a></li>
					<li><a href="nri_list.html">Country 4</a></li>
					<li><a href="nri_list.html">Country 5</a></li>
					<li><a href="nri_list.html">Country 6</a></li>
					<li><a href="nri_list.html">Country 7</a></li>
					<li><a href="nri_list.html">Country 8</a></li>
					<li><a href="nri_list.html">Country 9</a></li>
					<li><a href="nri_list.html">Country 10</a></li>
					<li><a href="nri_list.html">Country 11</a></li>
					<li class="more"><a href="nri_list.html">more..</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Religion</h4>
				<ul>
					<li><a href="r_list.html">Religion 1</a></li>
					<li><a href="r_list.html">Religion 2</a></li>
					<li><a href="r_list.html">Religion 3</a></li>
					<li><a href="r_list.html">Religion 4</a></li>
					<li><a href="r_list.html">Religion 5</a></li>
					<li><a href="r_list.html">Religion 6</a></li>
					<li><a href="r_list.html">Religion 7</a></li>
					<li><a href="r_list.html">Religion 8</a></li>
					<li><a href="r_list.html">Religion 9</a></li>
					<li><a href="r_list.html">Religion 10</a></li>
					<li><a href="r_list.html">Religion 11</a></li>
					<li class="more"><a href="r_list.html">more..</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Community</h4>
				<ul>
					<li><a href="r_list.html">Community 1</a></li>
					<li><a href="r_list.html">Community 2</a></li>
					<li><a href="r_list.html">Community 3</a></li>
					<li><a href="r_list.html">Community 4</a></li>
					<li><a href="r_list.html">Community 5</a></li>
					<li><a href="r_list.html">Community 6</a></li>
					<li><a href="r_list.html">Community 7</a></li>
					<li><a href="r_list.html">Community 8</a></li>
					<li><a href="r_list.html">Community 9</a></li>
					<li class="more"><a href="r_list.html">more..</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //browse profiles -->
	
	<!-- Assisted Service -->
	<div class="agile-assisted-service text-center">
		<h4>Assisted Service</h4>
		<p>Our Relationship Managers have helped thousands of members find their life partners.</p>
		<a href="assisted_services.html">Know More</a>
	</div>
	<!-- //Assisted Service -->
	
	<!-- Location -->
	<div class="location w3layouts">
		<div class="container">
			<div class="col-md-6 col-sm-6 w3layouts location-grids location-grids-1">
				<h3>Where We Are</h3>
				<h5>Our Branches</h5>
				<p>250+ branches across World, Largest Network of its Kind.</p>
			</div>
			<div class="col-md-6 col-sm-6 w3layouts location-grids location-grids-2">
				<a href="contact.html"><img src="images/location.jpg" class="img-responsive" alt="Agileits W3layouts" /></a>
			</div>
			<div class="clearfix"></div>			
		</div>
	</div>
	<!-- //Location -->
	
	<!-- Get started -->
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a class="scroll" href="#home">Get started</a></h4>
		</div>
	</div>
	<!-- //Get started -->
<?php require 'footer.php'; ?>
<script>
	$(document).ready(function() {
		$('.home').addClass('active');
	});
</script>