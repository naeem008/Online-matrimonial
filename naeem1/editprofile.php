<?php
require 'header.php';
$email=$_SESSION['email'];
if (!isset($_SESSION['email'])) { ?>
	<script>window.location="index.php";</script>
<?php }
 ?>
<style>
	label, h1 {
    font-weight: 100;
}
div.page-wrapper{
	background: #f1f1f2!important;
}
.range-flex{
	display: flex;
}
</style>
<div class="page-wrapper">

<div class="container">
	<?php if (isset($_GET['update'])) { ?>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span> Update </span> > <span><?php echo $_GET['update']; ?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<?php } ?>
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
			  <a href="#" class="list-group-item active">
			    Another updates
			  </a>
			  <a href="editprofile.php?update=basic" class="list-group-item"><?php if ($_GET['update']=='basic') {
			  	echo '<i class="fa fa-hand-o-right" aria-hidden="true"></i>  ';
			  } ?>Basic & Lifestyle</a>
			  <a href="editprofile.php?update=family" class="list-group-item"><?php if ($_GET['update']=='family') {
			  	echo '<i class="fa fa-hand-o-right" aria-hidden="true"></i>  ';
			  } ?>Family details</a>
			  <a href="editprofile.php?update=education" class="list-group-item"><?php if ($_GET['update']=='education') {
			  	echo '<i class="fa fa-hand-o-right" aria-hidden="true"></i>  ';
			  } ?>Education & career</a>
			  <a href="editprofile.php?update=contact" class="list-group-item"><?php if ($_GET['update']=='contact') {
			  	echo '<i class="fa fa-hand-o-right" aria-hidden="true"></i>  ';
			  } ?>Contact details</a>
			  <a href="editprofile.php?update=partner" class="list-group-item"><?php if ($_GET['update']=='partner') {
			  	echo '<i class="fa fa-hand-o-right" aria-hidden="true"></i>  ';
			  } ?>Partner preferences</a>
			</div>
		</div>
<?php if (isset($_GET['update'])) {
	if ($_GET['update']=='basic') { ?>

	<?php 
	$sql="SELECT * FROM basic_info NATURAL JOIN lifestyle WHERE email='$email'";
	if ($result=mysqli_query($con,$sql)) {
		while ($row=mysqli_fetch_assoc($result)) { ?>
		<div class="col-md-8">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">Basic & Lifestyle</h3>
				  </div>
				  <div class="panel-body">
				<form class="form-horizontal" action="ajax_action/basic_info_lifestyle_update.php" method="POST">
					<h1>Basic Info:</h1>
				  <div class="form-group about-group">
				    <label for="about" class="col-sm-2 control-label">About<strong>*</strong></label>
				    <div class="col-sm-10">
				      <textarea name="about" class="form-control" id="about" placeholder="About"><?php echo $row['about']; ?></textarea>
				    </div>
				  </div>
				  <div class="form-group marit-group">
				    <label for="marital_status" class="col-sm-2 control-label">Marital status<strong>*</strong></label>
				    <div class="col-sm-10">
				      <input type="text" name="marital_status" class="form-control" id="marital_status" placeholder="" value="<?php echo $row['marital_status']; ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="diet" class="col-sm-2 control-label">Diet</label>
				    <div class="col-sm-10">
				      <select name="diet" id="diet" class="form-control">
				      	<option value="<?php echo $row['diet'] ?>"><?php echo $row['diet']; ?></option>
				      	<option value="">Select a diet</option>
				      	<option value="Vegitarian">Vegitarian</option>
				      	<option value="Non-vegitarian">Non-vegitarian</option>
				      	<option value="Other">Other</option>
				      </select>
				    </div>
				  </div>
				  <div class="height-group form-group">
				    <label for="height" class="col-sm-2 control-label">Height<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="height" id="height" class="form-control">
				      	<option value="<?php echo $row['height']; ?>"><?php echo substr($row['height'], 0,1); ?>'<?php echo substr($row['height'], 2); ?>"</option>
				      	<option value="">Select a height</option>
				      	<option value="4.5">4'5''</option><option value="4.6">4'6''</option><option value="4.7">4'7''</option><option value="4.8">4'8''</option><option value="4.9">4'9''</option><option value="4.10">4'10''</option><option value="4.12">4'12''</option><option value="5.0">5'0''</option><option value="5.1">5'1''</option><option value="5.2">4'2''</option><option value="5.3">5'3''</option><option value="5.4">5'4''</option><option value="5.5">5'5''</option><option value="5.6">5'6''</option><option value="5.7">5'7''</option><option value="5.8">5'8''</option>
				      </select>
				    </div>
				  </div>

				  <div class="skin-group form-group">
				    <label for="skin" class="col-sm-2 control-label">Skin<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="skin" id="skin" class="form-control">
				      	<option value="<?php echo $row['skintone']; ?>"><?php echo $row['skintone']; ?></option><option value="">Select a skin</option><option value="Fair">Fair</option><option value="Light">Light</option><option value="Medium">Medium</option><option value="Tan">Tan</option><option value="Deep">Deep</option>
				      </select>
				    </div>
				  </div>

				  <div class="hair-group form-group">
				    <label for="hair" class="col-sm-2 control-label">Hair color<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="hair" id="hair" class="form-control">
				      	<option value="<?php echo $row['haircolor']; ?>"><?php echo $row['haircolor']; ?></option><option value="">Select a hair color</option><option value="Black">Black</option><option value="Brown">Brown</option><option value="Maroon">Maroon</option><option value="Dark brown">Dark brown</option><option value="Chocolate Brown">Chocolate Brown</option>
				      </select>
				    </div>
				  </div>

				  <div class="eye-group form-group">
				    <label for="eye" class="col-sm-2 control-label">Eye color<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="eye" id="eye" class="form-control">
				      	<option value="<?php echo $row['eyecolor']; ?>"><?php echo $row['eyecolor']; ?></option><option value="">Select a eye color</option><option value="Black">Black</option><option value="Brown">Brown</option><option value="Blue">Blue</option>
				      </select>
				    </div>
				  </div>

				  <div class="freckle-group form-group">
				    <label for="freckle" class="col-sm-2 control-label">Freckles<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="freckle" id="freckle" class="form-control">
				      	<option value="<?php echo $row['freckles']; ?>"><?php echo $row['freckles']; ?></option><option value="">Select a number of freeckle</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
				      </select>
				    </div>
				  </div>

				  <div class="dimple-group form-group">
				    <label for="dimple" class="col-sm-2 control-label">Dimples<strong>*</strong></label>
				    <div class="col-sm-10">
				      <select name="dimple" id="dimple" class="form-control">
				      	<option value="<?php echo $row['dimple']; ?>"><?php echo $row['dimple']; ?></option><option value="">Select a number of dimple</option><option value="0">0</option><option value="1">1</option><option value="2">2</option>
				      </select>
				    </div>
				  </div>

				  <h1>Life style:</h1>

				  <div class="form-group">
				    <label for="weight" class="col-sm-2 control-label">Weight</label>
				    <div class="col-sm-10">
				      <input type="text" name="weight" class="form-control" id="weight" placeholder="" value="<?php echo $row['weight']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="habits" class="col-sm-2 control-label">Habits</label>
				    <div class="col-sm-10">
				      <input type="text" name="habits" class="form-control" id="habits" placeholder="" value="<?php echo $row['habits']; ?>">
				    </div>
				  </div>

				  <div class="form-group mother_tongue-group">
				    <label for="mother_tongue" class="col-sm-2 control-label">Mother Tongue <strong>*</strong></label>
				    <div class="col-sm-10">
				      <input type="text" name="mother_tongue" class="form-control" id="mother_tongue" placeholder="" value="<?php echo $row['mother_tongue']; ?>">
				    </div>
				  </div>
				  

				  <div class="form-group">
				    <label for="languages" class="col-sm-2 control-label">Other Language</label>
				    <div class="col-sm-10">
				      <input type="text" name="languages" class="form-control" id="languages" placeholder="" value="<?php echo $row['language']; ?>">
				    </div>
				  </div>
				  

				  <div class="form-group">
				    <label for="blood" class="col-sm-2 control-label">Blood group</label>
				    <div class="col-sm-10">
				      <select name="blood" id="blood" class="form-control">
				      	<option value="<?php echo $row['blood']; ?>"><?php echo $row['blood']; ?></option>
				      	<option value="">Select a blood group</option>
				      	<option value="O+">O+</option>
				      	<option value="A+">A+</option>
				      	<option value="B+">B+</option>
				      	<option value="AB+">AB+</option>
				      	<option value="O-">O-'</option>
				      	<option value="A-">A-</option>
				      	<option value="B-">B-</option>
				      	<option value="AB-">AB-</option>
				      </select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="disability" class="col-sm-2 control-label">Disability</label>
				    <div class="col-sm-10">
				      <input type="text" name="disability" class="form-control" id="disability" placeholder="" value="<?php echo $row['disability']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull pull-right" onclick="basic()">Save</button>
				    </div>
				  </div>
				</form>
				</div>
				</div>	
			</div>
<?php 	}
	}
	 ?>
	<?php }elseif ($_GET['update']=='family') { ?>
		<?php $sql="SELECT * FROM family_details WHERE email='$email'";
		if ($result=mysqli_query($con,$sql)) {
			while ($row=mysqli_fetch_assoc($result)) { ?>
			<div class="col-md-8">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">Family Info</h3>
				  </div>
				  <div class="panel-body">
				<form class="form-horizontal" action="ajax_action/family_update.php" method="POST">
					
				  <div class="form-group">
				    <label for="father" class="col-sm-2 control-label">Father profession</label>
				    <div class="col-sm-10">
				      <input type="text" name="father" class="form-control" id="father" placeholder="" value="<?php echo($row['father_profession']); ?>" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="mother" class="col-sm-2 control-label">Mother profession</label>
				    <div class="col-sm-10">
				      <input type="text" name="mother" class="form-control" id="mother" placeholder="" value="<?php echo($row['mother_profession']); ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="brother" class="col-sm-2 control-label">Brothers</label>
				    <div class="col-sm-10">
				      <select name="brother" id="brother" class="form-control">
				      	<option value="<?php echo $row['brothers']; ?>"><?php echo $row['brothers']; ?></option>
				      	<option value="">Select a brothers</option>
				      	<option value="0">0</option>
				      	<option value="1">1</option>
				      	<option value="2">2</option>
				      	<option value="3">3</option>
				      	<option value="4">4</option>
				      	<option value="5">5</option>
				      </select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="sister" class="col-sm-2 control-label">Sisters</label>
				    <div class="col-sm-10">
				      <select name="sister" id="sister" class="form-control">
				      	<option value="<?php echo $row['sister']; ?>"><?php echo $row['sister']; ?></option>
				      	<option value="">Select a sisters</option>
				      	<option value="0">0</option>
				      	<option value="1">1</option>
				      	<option value="2">2</option>
				      	<option value="3">3</option>
				      	<option value="4">4</option>
				      	<option value="5">5</option>
				      </select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="family_value" class="col-sm-2 control-label">Family Value</label>
				    <div class="col-sm-10">
				      <select name="family_value" id="family_value" class="form-control">
				      	<option value="<?php echo $row['family_value']; ?>"><?php echo $row['family_value']; ?></option>
				      	<option value="">Select a family value</option>
				      	<option value="Moderate">Moderate</option>
				      	<option value="Restricted">Restricted</option>
				      	<option value="Open">Open</option>
				      	<option value="Not specified">Not specified</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="family_affluence" class="col-sm-2 control-label">Family Affluence</label>
				    <div class="col-sm-10">
				      <select name="family_affluence" id="family_affluence" class="form-control">
				      	<option value="<?php echo $row['family_affluence']; ?>"><?php echo $row['family_affluence']; ?></option>
				      	<option value="">Select a family affluence</option>
				      	<option value="Poor">Poor</option>
				      	<option value="Middle class">Middle class</option>
				      	<option value="Rich">Rich</option>
				      	<option value="Not specified">Not specified</option>
				      </select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="location" class="col-sm-2 control-label">Family location</label>
				    <div class="col-sm-10">
				      <input type="text" name="location" class="form-control" id="location" placeholder="" value="<?php echo $row['live']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull pull-right" onclick="family()">Save</button>
				    </div>
				  </div>
				</form>
				</div>
				</div>	
			</div>
		<?php	}
		 } ?>
	<?php }elseif ($_GET['update']=='education') { ?>
		<?php $sql="SELECT * FROM educational_details WHERE email='$email'";
		if ($result=mysqli_query($con,$sql)) {
			while ($row=mysqli_fetch_assoc($result)) { ?>
			<div class="col-md-8">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">Education and Career update</h3>
				  </div>
				  <div class="panel-body">
				<form class="form-horizontal" action="ajax_action/education_career_update.php" method="POST">
					
				  <div class="form-group">
				    <label for="undergraduate" class="col-sm-2 control-label">Undergraduate</label>
				    <div class="col-sm-10">
				      <input type="text" name="undergraduate" class="form-control" id="undergraduate" placeholder="" value="<?php echo($row['undergraduate']); ?>" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="postgraduate" class="col-sm-2 control-label">Post Graduate</label>
				    <div class="col-sm-10">
				      <input type="text" name="postgraduate" class="form-control" id="postgraduate" placeholder="" value="<?php echo($row['postgraduate']); ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="university" class="col-sm-2 control-label">University</label>
				    <div class="col-sm-10">
				      <input type="text" name="university" id="university" class="form-control" value="<?php echo $row['university']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="college" class="col-sm-2 control-label">College</label>
				    <div class="col-sm-10">
				      <input type="text" name="college" id="college" class="form-control" value="<?php echo($row['college']); ?>">
				      	
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="profession" class="col-sm-2 control-label">Profession</label>
				    <div class="col-sm-10">
				      <input type="text" name="profession" id="profession" class="form-control" value="<?php echo($row['profession']); ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="company" class="col-sm-2 control-label">Company</label>
				    <div class="col-sm-10">
				      <input type="text" name="company" id="company" class="form-control" value="<?php echo($row['company']); ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="Designation" class="col-sm-2 control-label">Designation</label>
				    <div class="col-sm-10">
				      <input type="text" name="designation" class="form-control" id="designation" placeholder="" value="<?php echo $row['designation']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="salary" class="col-sm-2 control-label">Salary</label>
				    <div class="col-sm-10">
				      <input type="number" name="salary" class="form-control" id="salary" placeholder="" value="<?php echo $row['salary']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull pull-right" onclick="family()">Save</button>
				    </div>
				  </div>
				</form>
				</div>
				</div>	
			</div>
		<?php	}
		 } ?>
	<?php }elseif ($_GET['update']=='contact') { ?>
		<?php $sql="SELECT * FROM contact_info WHERE email='$email'";
		if ($result=mysqli_query($con,$sql)) {
			while ($row=mysqli_fetch_assoc($result)) { ?>
			<div class="col-md-8">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">Contact person details</h3>
				  </div>
				  <div class="panel-body">
				<form class="form-horizontal" action="ajax_action/contact_update.php" method="POST">
					
				  <div class="form-group">
				    <label for="contact_name" class="col-sm-2 control-label">Contact person name</label>
				    <div class="col-sm-10">
				      <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="" value="<?php echo($row['contact_name']); ?>" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="contact_number" class="col-sm-2 control-label">Contact number</label>
				    <div class="col-sm-10">
				      <input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="" value="<?php echo($row['contact_number']); ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="relation" class="col-sm-2 control-label">Relationship with member</label>
				    <div class="col-sm-10">
				      <input type="text" name="relation" id="relation" class="form-control" value="<?php echo $row['relation']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="contact_time" class="col-sm-2 control-label">Convenient time to contact</label>
				    <div class="col-sm-10">
				      <input type="text" name="contact_time" id="contact_time" class="form-control" value="<?php echo($row['contact_time']); ?>">
				      	
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull pull-right">Save</button>
				    </div>
				  </div>
				</form>
				</div>
				</div>	
			</div>
		<?php	}
		 } ?>
	<?php }elseif ($_GET['update']=='partner') { ?>
		<?php $sql="SELECT * FROM partner WHERE email='$email'";
		if ($result=mysqli_query($con,$sql)) {
			while ($row=mysqli_fetch_assoc($result)) { ?>
			<div class="col-md-8">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">Partner preferences details</h3>
				  </div>
				  <div class="panel-body">
				<form class="form-horizontal" action="ajax_action/partner_preference_update.php" method="POST">
					
				  <div class="form-group">
				    <label for="min_age" class="col-sm-2 control-label">Age range</label>
				    <div class="col-sm-10 range-flex">
				      <input type="number" name="min_age" class="form-control" id="min_age" placeholder="" value="<?php echo($row['min_age']); ?>" /><span>To</span><input type="number" name="max_age" class="form-control" id="max_age" placeholder="" value="<?php echo($row['max_age']); ?>" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="height_range" class="col-sm-2 control-label">Height range</label>
				    <div class="col-sm-10 range-flex">
				      <select name="min_height" class="form-control" id="height_range" placeholder="">
				      	
				      	<option value="<?php echo $row['min_height']; ?>"><?php echo substr($row['min_height'], 0,1); ?>'<?php echo substr($row['min_height'], 2); ?>"</option>
				      	<option value="">Select a height</option>
				      	<option value="4.5">4'5''</option>
				      	<option value="4.6">4'6''</option>
				      	<option value="4.7">4'7''</option>
				      	<option value="4.8">4'8''</option>
				      	<option value="4.9">4'9''</option>
				      	<option value="4.10">4'10''</option>
				      	<option value="4.12">4'12''</option>
				      	<option value="5.0">5'0''</option>
				      	<option value="5.1">5'1''</option>
				      	<option value="5.2">4'2''</option>
				      	<option value="5.3">5'3''</option>
				      	<option value="5.4">5'4''</option>
				      	<option value="5.5">5'5''</option>
				      	<option value="5.6">5'6''</option>
				      	<option value="5.7">5'7''</option>
				      	<option value="5.8">5'8''</option>
				      </select>
				      <span>To</span>
				      <select name="max_height" class="form-control" placeholder="">
				      	
				      	<option value="<?php echo $row['max_height']; ?>"><?php echo substr($row['max_height'], 0,1); ?>'<?php echo substr($row['max_height'], 2); ?>"</option>
				      	<option value="">Select a height</option>
				      	<option value="4.5">4'5''</option>
				      	<option value="4.6">4'6''</option>
				      	<option value="4.7">4'7''</option>
				      	<option value="4.8">4'8''</option>
				      	<option value="4.9">4'9''</option>
				      	<option value="4.10">4'10''</option>
				      	<option value="4.12">4'12''</option>
				      	<option value="5.0">5'0''</option>
				      	<option value="5.1">5'1''</option>
				      	<option value="5.2">4'2''</option>
				      	<option value="5.3">5'3''</option>
				      	<option value="5.4">5'4''</option>
				      	<option value="5.5">5'5''</option>
				      	<option value="5.6">5'6''</option>
				      	<option value="5.7">5'7''</option>
				      	<option value="5.8">5'8''</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="partner_marital_status" class="col-sm-2 control-label">Partner Marital status</label>
				    <div class="col-sm-10">
				      <input type="text" name="partner_marital_status" id="partner_marital_status" class="form-control" value="<?php echo $row['partner_marital_status']; ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="partner_religion" class="col-sm-2 control-label">Partner Religion</label>
				    <div class="col-sm-10">
				      <input type="text" name="partner_religion" id="partner_religion" class="form-control" value="<?php echo($row['partner_religion']); ?>">
				      	
				    </div>
				  </div>



				  <div class="form-group">
				    <label for="partner_profession" class="col-sm-2 control-label">Partner profession</label>
				    <div class="col-sm-10">
				      <input type="text" name="partner_profession" id="partner_profession" class="form-control" value="<?php echo($row['partner_profession']); ?>">
				      	
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull pull-right">Save</button>
				    </div>
				  </div>
				</form>
				</div>
				</div>	
			</div>
		<?php	}
		 } ?>
	<?php }
} ?>
</div>
</div>
</div>
<?php require 'footer.php'; ?>
<script>
	$(document).ready(function() {
		
	  $('form').submit(function(event) {
	  	// var about = $('#about').val();
	  	// var marit=$('#marital_status').val();
	  	// var height=$('#height').val();
	  	// var mother_tongue=$('#mother_tongue').val();
	  	// if (about && marit && height && mother_tongue) {
	  		event.preventDefault(); // Prevent the form from submitting via the browser
		    var form = $(this);
		    $.ajax({
		      type: form.attr('method'),
		      url: form.attr('action'),
		      data: form.serialize()
		    }).done(function(data) {
		    	$.notify(data,'success');
		    }).fail(function(data) {
		      	$.notify(data,"error");
		    });
	  	// }else{
	  	// 	$.notify("Required field needs to fill",'warn');
	  	// 	return false;
	  	// }
	  });
	});
	function basic(){
		$('p').remove();
		var about= $('#about').val();
		var marital_status= $('#marital_status').val();
		var height=$('#height').val();
		var mother_tongue=$('#mother_tongue').val();
		if (about=="") {
	  		$('textarea#about').after('<p class="about-text">Field is required</p>');
	  		$('.about-group').addClass('has-error');
	  	}else{
	  		$('p.about-text').remove();
	  		$('.about-group').removeClass('has-error');
	  		$('.about-group').addClass('has-success');

	  	}

	  	if (marital_status=="") {
	  		$('input#marital_status').after('<p class="merit-text">Field is required</p>');
	  		$('.marit-group').addClass('has-error');
	  	}else{
	  		$('p.merit-text').remove();
	  		$('.marit-group').removeClass('has-error');
	  		$('.marit-group').addClass('has-success');

	  	}

	  	if (height=="") {
	  		$('select#height').after('<p class="height-text">Height field is required</p>');
	  		$('.height-group').addClass('has-error');
	  	}else{
	  		$('p.height-text').remove();
	  		$('.height-group').removeClass('has-error');
	  		$('.height-group').addClass('has-success');

	  	}

	  	if (mother_tongue=="") {
	  		$('input#mother_tongue').after('<p class="mother_tongue-text">Field is required</p>');
	  		$('.mother_tongue-group').addClass('has-error');
	  	}else{
	  		$('p.mother_tongue-text').remove();
	  		$('.mother_tongue-group').removeClass('has-error');
	  		$('.mother_tongue-group').addClass('has-success');

	  	}
	}
</script>



