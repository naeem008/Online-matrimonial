<?php require 'header.php';
if (!isset($_SESSION['email'])) { ?>
	<script>
		window.location="index.php";
	</script>
<?php }
 ?>
<style>
	div.shortinfo a{
		color: #00bcd5;
		font-size: smaller;

	}
	div.shortinfo a:hover{
		text-decoration: underline;
	}
	.manage-profile {
    border: 1px solid #d6caca;
    padding: 20px;
    border-radius: 5px;
}
.form_but1 {
    margin-bottom: 0;
}
div.page-wrapper{
	background: #f1f1f2!important;
}
div.shortinfo{
	background: white;
	margin-top: 30px;
	padding: 10px;
}
#heading_band {
    padding: 18px 0 0 0;
    height: 28px;
}
img.pull.pull-right {
    border: 1px solid #f3caca;
}
section.single-section{
	margin-top:15px;
	background: white;
	padding: 10px;
}
section.single-section h3{
	border-bottom: 1px solid magenta;
}
section.last-section{
	margin-bottom: 15px;
	
}
span.chng_pr a {
    position: relative;
    width: 92%;
    text-align: center;
    top: 93%;
    color: white;
    background: black;
    
    opacity: .5;
    z-index: 500;
    font-size: large;
}
img.profile-picture{
	position: relative;
}
ul.dropdown-menu ul li a {
    background: white!important;
    color: black!important;
}
.chng_pr{
	display: none;
}
.profile_area:hover .chng_pr{
	display: block;
}
span.chng_pr a:hover {
    opacity: 0.78;
}
</style>
<div class="page-wrapper">
<div class="container">
	<?php $user=$_SESSION['email'];
	$sql="SELECT * FROM users NATURAL JOIN basic_info NATURAL JOIN family_details NATURAL JOIN lifestyle NATURAL JOIN educational_details NATURAL JOIN partner NATURAL JOIN contact_info WHERE email='$user'";
	if ($result=mysqli_query($con,$sql)) {
		while ($row=mysqli_fetch_assoc($result)) { ?>
		<h3 id="heading_band"><?php echo $_SESSION['name']; ?><small>(Created by: <?php echo $row['creator']; ?>)</small></h3>
		<div class="shortinfo">
			<div class="row">
				<div class="col-md-4 profile_area">
					<img src="<?php echo($row['image']); ?>" alt="" height="auto" width="100%" class="pull pull-right" class="profile-picture">
					<span class="chng_pr"><a href="settings.php" style="position: absolute;">Change profile picture</a></span>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<div class="form_but1">
								<label class="col-sm-3 control-label1">Age : </label>
								<div class="col-sm-9 w3_details">
									<?php echo date('Y')-substr($row['dateofbirth'], 6); ?>years
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="form_but1">
								<label class="col-sm-3 control-label1">Height : </label>
								<div class="col-sm-9 w3_details">
									<?php echo substr($row['height'], 0,1); ?>'<?php echo substr($row['height'], 2,2); ?>"
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="form_but1">
								<label class="col-sm-3 control-label1">Religion : </label>
								<div class="col-sm-9 w3_details">
									<?php echo $row['religion']; ?>
								</div>
								<div class="clearfix"> </div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="form_but1">
								<label class="col-sm-6 control-label1">Mother Tongue:</label>
								<div class="col-sm-6 w3_details">
									<?php echo $row['mother_tongue']; ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
								<label class="col-sm-6 control-label1">Weight:</label>
								<div class="col-sm-6 w3_details">
									<?php echo $row['weight']; ?>
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="form_but1">
								<label class="col-sm-6 control-label1">Location:</label>
								<div class="col-sm-6 w3_details">
									<?php echo $row['live']; ?>
								</div>
								<div class="clearfix"> </div>
							</div>
					</div>
				</div>
				<div class="manage-profile">
					<h4>Manage your profile</h4>
					<div class="row">
						<div class="col-md-4">
							<ul>
								<li><a href="editprofile.php?update=basic">Edit personal profile</a></li>
								<li><a href="editprofile.php?update=partner">Edit partner profile</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li><a href="editprofile.php?update=contact">Edit contact details</a></li>
								<li><a href="editprofile.php?update=family">Manage family details</a></li>
							</ul>
						</div>

						<div class="col-md-4">
							<ul>
								<li><a href="editprofile.php?update=education">Manage educational details</a></li>
								<li><a href="">Hide/Delete account</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	<!---//shortinfo -->
	<section class="single-section">
		<h3 style="color: orange;">About myself <span class="pull pull-right"><small><a href="editprofile.php?update=basic">Edit</a></small></span></h3>
		<p class="text-justify"><?php echo $row['about']; ?></p>
	</section>

	<section class="single-section">
		<h3 style="color: orange;">Life style & Basic info <span class="pull pull-right"><small><a href="editprofile.php?update=basic">Edit</a></small></span></h3>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-3 control-label1">Age : </label>
					<div class="col-sm-9 w3_details">
						<?php echo date('Y')-substr($row['dateofbirth'], 6); ?>  years
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="form_but1">
					<label class="col-sm-3 control-label1">Height : </label>
					<div class="col-sm-9 w3_details">
						<?php echo substr($row['height'], 0,1); ?>'<?php echo substr($row['height'], 2); ?>"
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Date of Birth : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['dateofbirth']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Gender : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['gender']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Religion : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['religion']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Merital Status : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['marital_status']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Skin tone : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['skintone']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Hair color : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['haircolor']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-3 control-label1">Eye color : </label>
					<div class="col-sm-9 w3_details">
						<?php echo $row['eyecolor']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Diet : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['diet']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Weight : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['weight']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Mother Tongue : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['mother_tongue']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Languages proficiency : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['language']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Blood group : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['blood']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Disability : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['disability']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Freckles : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['freckles']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col col-sm-6 col-6 control-label1">Dimples : </label>
					<div class="col col-sm-6 col-6 w3_details">
						<?php echo $row['dimple']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

	</section>


	<section class="single-section">
		<h3 style="color: orange;">Family details <span class="pull pull-right"><small><a href="editprofile.php?update=family">Edit</a></small></span></h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Father profession : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['father_profession']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Mother Profession : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['mother_profession']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Brothers : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['brothers']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Sister's : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['sister']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Family Value : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['family_value']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Location : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['live']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Family Type : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['family_type']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Family Affluence : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['family_affluence']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

	</section>


	<section class="single-section">
		<h3 style="color: orange;">Education and career <span class="pull pull-right"><small><a href="editprofile.php?update=education">Edit</a></small></span></h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Undergraduate : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['undergraduate']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="form_but1">
					<label class="col-sm-6 control-label1">University : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['university']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">College : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['college']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">profession : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['profession']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Company : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['company']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Designation : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['designation']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Salary : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['salary']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

	</section>


	<section class="single-section">
		<h3 style="color: orange;">Partner preferances <span class="pull pull-right"><small><a href="editprofile.php?update=partner">Edit</a></small></span></h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Age limit : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['min_age']; ?> To <?php echo $row['max_age']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Height limit: </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['min_height']; ?> To <?php echo $row['min_height']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Marital Status : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['partner_marital_status']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="form_but1">
					<label class="col-sm-6 control-label1">Religion : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['partner_religion']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form_but1">
					<label class="col-sm-6 control-label1">Profession : </label>
					<div class="col-sm-6 w3_details">
						<?php echo $row['partner_profession']; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

	</section>


	<section class="single-section last-section">
		<h3 style="color: orange;">My Contact detail <span class="pull pull-right"><small><a href="editprofile.php?update=contact">Edit</a></small></span></h3>
		<div class="form_but1">
			<label class="col-sm-6 control-label1">Contact Person : </label>
			<div class="col-sm-6 w3_details">
				<?php echo $row['contact_name']; ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="form_but1">
			<label class="col-sm-6 control-label1">Relation with member: </label>
			<div class="col-sm-6 w3_details">
				<?php echo $row['relation']; ?>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="form_but1">
			<label class="col-sm-6 control-label1">Contact Number : </label>
			<div class="col-sm-6 w3_details">
				<?php echo $row['contact_number']; ?>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="form_but1">
			<label class="col-sm-6 control-label1">Convenient Time to Call : </label>
			<div class="col-sm-6 w3_details">
				<?php echo $row['contact_time']; ?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</section>
	
	<?php }
	 } ?>
	


</div>	<!-- //Container -->
</div><!-- //page wrapper -->
<?php require 'footer.php'; ?>
<script>
	$(document).ready(function() {
		$('.profile').addClass('active');
	});
</script>