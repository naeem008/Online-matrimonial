	
<!-- footer -->
<footer>
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h6>Get in Touch.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="feedback.php">Feedback</a></li>  
							<li><a href="help.php">Help</a></li>  
							<li><a href="tips.php">Safety Tips</a></li>
							<li><a href="typo.php">Typography</a></li>
							<li><a href="icons.php">Icons Page</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
							<li><a href="terms.php">Terms of use</a></li>
							<li><a href="privacy_policy.php">Privacy Policy</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="sitemap.php">Sitemap</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Follow Us on</h3>
						<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>	
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Match. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
		</div>
	</div> 
</footer>
<!-- //footer -->	

<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
		<h4 class="modal-title">Login to Continue</h4>
	  </div>
	  <div class="modal-body">
		<div class="login-w3ls">
			<div id="msg"></div>
			<div id="signin">
				<label>Email </label>
				<input type="email" name="login_email" placeholder="Email" id="login_email" required="">
				<label>Password</label>
				<input type="password" name="login_password" placeholder="Password" id="login_password" required="">	
				<div class="w3ls-loginr"> 
					<input type="checkbox" id="brand" name="checkbox" value="">
					<span> Remember me ?</span> 
					<a href="#">Forgot password ?</a>
				</div>
				<div class="clearfix"> </div>
				<input type="submit" name="submit" id="loginBtn" value="Login" onclick="login()">
				<div class="clearfix"> </div>
				<div class="social-icons">
					<ul>  
						<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> 
						<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  
					</ul> 
					<div class="clearfix"> </div>
				</div>	
			</div>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- //Modal -->
<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<script src="js/notify.min.js"></script>
	<!-- //menu js aim -->
	<!-- easyResponsiveTabs -->	
	<script src="js/easyResponsiveTabs.js"></script>
<!-- //easyResponsiveTabs -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		$('#loginBtn').click(function(event) {
			if ($('input#login_email')=="") {
				$('input#login_email').css('border', '1px solid red');
			}
		});
	});
	</script>
	<!-- //for smooth scrolling -->
<script>
	function login(){
		
	    var xmlHttp=new XMLHttpRequest();
	    xmlHttp.open("GET","ajax_action/login.php?email="+document.getElementById('login_email').value+"&pass="+document.getElementById('login_password').value, false);
	    xmlHttp.send(null);
	    document.getElementById('msg').innerHTML=xmlHttp.responseText;
	}
</script>
</body>
<!-- //body -->
</html>
<!-- //html -->
