<?php 
require ('valid.php')
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task2</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/navbar-static-top.css">
	<style>
		.form-group {
			margin-bottom: 15px;
			padding-bottom: 30px;
		}
		.error {
			color: #FF0000;
		}
	</style>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
	<div class="container">
        <div class="navbar-header">
          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#">XINIX TEST</a>
        </div>
	</div>
</div>
<div class="container">
	<form action="" role="form" method="POST">
		<fieldset>
			<legend>Form Pendaftaran</legend>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Fullname</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Fullname" name="name" value="<?php echo !isset($_POST['name']) ? '' : trim($_POST['name']) ?>">
		      		<span class="error"><?php echo validName('name') ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Email</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Email" name="email" value="<?php echo !isset($_POST['email']) ? '' : trim($_POST['email']) ?>">
		      		<span class="error"><?php echo validEmpty('email'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Username</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Username" name="user" value="<?php echo !isset($_POST['user']) ? '' : trim($_POST['user']) ?>">
		      		<span class="error"><?php echo validEmpty('user'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Password</label>
		    	<div class="col-xs-10">
		      		<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo !isset($_POST['password']) ? '' : trim($_POST['password']) ?>">
		      		<span class="error"><?php echo validEmpty('password'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Re-type Password</label>
		    	<div class="col-xs-10">
		      		<input type="password" class="form-control" placeholder="Re-type Password" name="rePassword" value="<?php echo !isset($_POST['rePassword']) ? '' : trim($_POST['rePassword']) ?>">
		      		<span class="error"><?php echo validEmpty('rePassword'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Birth Date</label>
		    	<div class="col-xs-10">
		    		<?php echo date1(); ?> <br>
		    		<?php echo month(); ?> <br>
		    		<?php echo year(); ?> <br>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Sex</label>
		    	<div class="col-xs-10">
				  	<label>
				    	<input type="radio" name="sex" <?php if (isset($_POST['sex']) && $_POST['sex'] == "male") echo "checked"; ?> value="male" >
				    	Male
				  	</label>
				  	<label>
				    	<input type="radio" name="sex" <?php if (isset($_POST['sex']) && $_POST['sex'] == "female") echo "checked"; ?> value="female" >
				    	Female
				  	</label>
		      		<span class="error"><?php echo validEmpty('sex'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Phone</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Phone" name="phone" value="<?php echo !isset($_POST['phone']) ? '' : trim($_POST['phone']) ?>">
	      			<span class="error"><?php echo validEmpty('phone'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Address</label>
		    	<div class="col-xs-10">
		    		<textarea  class="form-control" rows="3"></textarea>
		    	</div>
		  	</div>

		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">ZIP Code</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="ZIP Code" name="zip" value="<?php echo !isset($_POST['zip']) ? '' : trim($_POST['zip']) ?>">
	      			<span class="error"><?php echo validEmpty('zip'); ?></span>
		    	</div>
		  	</div>

		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Height</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Height" name="height" value="<?php echo !isset($_POST['height']) ? '' : trim($_POST['height']) ?>">
	      			<span class="error"><?php echo validEmpty('height'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Weight</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Weight" name="weight" value="<?php echo !isset($_POST['weight']) ? '' : trim($_POST['weight']) ?>">
	      			<span class="error"><?php echo validEmpty('weight'); ?></span>
		    	</div>
		  	</div>

		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Hobby</label>
		    	<div class="col-xs-10">
			    	<div class="checkbox">
			    		<label>
				          	<input type="checkbox"> Kalah Tarohan
			          	</label><br />          	
			          	<label>
			          		<input type="checkbox"> Mijit
			          	</label><br />
			          	<label>
			          		<input type="checkbox"> Nyikat WC
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Bikin Kopi
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Download Film
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Input Data
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Facebook-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Twitter-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Youtube-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox"> Masak Aer
			          	</label><br />
			    	</div>
		    	</div>	
		  	</div><br /><br />
		  	<div class="form-group">
		    	<div class="col-xs-5">
		      		<button type="submit" class="btn btn-primary">Input</button>
		    	</div>
		  	</div>
		</fieldset>
	</form>
</div>
</body>
</html>