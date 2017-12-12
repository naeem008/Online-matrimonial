<?php require 'connection.php';
session_start();
 ?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | index :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	
<!-- //nav smooth scroll -->			
<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->			
<link rel="stylesheet" href="css/intlTelInput.css">
<link rel="stylesheet" href="style.css">
</head>
<!-- //head -->
<!-- body -->
<body>

<!-- header -->
<header>
	<!--  Navigation Start -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
          <div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Browse Profiles by</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="matches.php">All Profiles</a></li>
								<li class="has-children">
									<a href="#">Mother Tongue</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="l_list.php">Language 1</a></li>
												<li><a href="l_list.php">Language 2</a> </li>
												<li><a href="l_list.php">Language 3</a></li>
												
											
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Caste</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="c_list.php">Caste 1</a></li>
												<li><a href="c_list.php">Caste 2</a></li>  
												<li><a href="c_list.php">Caste 3</a></li> 
												
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="products2.php">Religion</a> 
									<ul class="cd-secondary-dropdown is-hidden"> 
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="r_list.php">Religion 1</a></li> 
												<li><a href="r_list.php">Religion 2</a></li> 
												<li><a href="r_list.php">Religion 3</a></li> 
												 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children --> 
								<li class="has-children">
									<a href="#">City</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="city_list.php">City 1</a></li> 
												<li><a href="city_list.php">City 2</a></li> 
												<li><a href="city_list.php">City 3</a></li> 
												
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">Occupation</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="o_list.php">IT Software </a></li> 
												<li><a href="o_list.php">Teacher  </a></li>
												<li><a href="o_list.php">Business man </a></li>
												<li><a href="o_list.php">Lawyers</a></li>
												
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">State</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="s_list.php">State 1</a></li> 
												<li><a href="s_list.php">State 2</a></li> 
												<li><a href="s_list.php">State 3</a></li> 
												<li><a href="s_list.php">State 4</a></li> 
												 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">NRI</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="nri_list.php">Country 1</a></li> 
												<li><a href="nri_list.php">Country 2</a></li> 
												<li><a href="nri_list.php">Country 3</a></li> 
												<li><a href="nri_list.php">Country 4</a></li> 
												
									</ul><!-- .cd-secondary-dropdown --> 
								</li>  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li class="home"><a href="index.php">Home</a></li>
		            <li class="about"><a href="about.php">About</a></li>
		            <li class="search"><a href="search.php">Search</a></li>
		            <li><a href="app.php" target="_blank">Mobile</a></li>
					  <!--<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="profile.php">Recently Viewed Profiles</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                <li><a href="shortcodes.php">Shortcodes</a></li>
		              </ul>
		            </li>-->
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <div class="banner-bottom-login">
							<div class="w3agile_banner_btom_login">
								<form action="#" method="post">
									<div class="w3agile__text w3agile_banner_btom_login_left">
										<h4>I'm looking for a</h4>
										<select id="country" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">Bride</option>
											<option value="null">Groom</option>   
										</select>
									</div>
									<div class="w3agile__text w3agile_banner_btom_login_left1">
										<h4>Aged</h4>
										<select id="country1" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">20</option>
											<option value="null">21</option>   
											<option value="null">22</option>   
											<option value="null">23</option>   
											<option value="null">24</option>   
											<option value="null">25</option>  
											<option value="null">- - -</option>   					
										</select>
										<span>To </span>
										<select id="country2" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">30</option>
											<option value="null">31</option>   
											<option value="null">32</option>   
											<option value="null">33</option>   
											<option value="null">34</option>   
											<option value="null">35</option>  
											<option value="null">- - -</option>   					
										</select>
									</div>
									<div class="w3agile__text w3agile_banner_btom_login_left2">
										<h4>Religion</h4>
										<select id="country3" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">Hindu</option>  
											<option value="null">Muslim</option>   
											<option value="null">Christian</option>   
											<option value="null">Sikh</option>   
											<option value="null">Jain</option>   
											<option value="null">Buddhist</option>
											<option value="null">No Religious Belief</option>   					
										</select>
									</div>
									<div class="w3agile_banner_btom_login_left3">
										<input type="submit" value="Search" />
									</div>
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
		              </ul>
		            </li>
		            <li class="last contact"><a href="contact.php">Contacts</a></li>
		            <?php if (isset($_SESSION['name'])) { ?>
		            <li class="dropdown profile">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name']; ?><span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <div class="banner-bottom-login">
							<div class="w3agile_banner_btom_login">
								<div class="row">
									<div class="col-md-6">
										<ul>
											<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> My profile</a></li>
											<li><a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Account Settings</a></li>
											<li><a href=""><i class="fa fa-filter" aria-hidden="true"></i> Contact Filters</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul>
											<li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> Email/SMS alert</a></li>
											<li> <a href=""><i class="fa fa-user-secret" aria-hidden="true"></i> Privacy options</a></li>
											<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		              </ul>
		            </li>
		        <?php    }else{ ?>
		        <li><a href="" data-toggle="modal" data-target="#myModal">Log in</a></li>
		    <?php    } ?>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
</header>
<!-- /header -->
