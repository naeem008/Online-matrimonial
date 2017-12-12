<?php
require 'header.php'; 
if (!isset($_SESSION['email'])) { ?>
	<script>window.location='index.php';</script>
<?php }
?>
<style>
	div.page-wrapper{
	background: #f1f1f2!important;
}
</style>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
				  <div class="panel-body">
				    Basic panel example
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>
