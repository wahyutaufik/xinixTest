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
			margin-bottom: 20px;
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
		      		<span class="error"><?php echo nameValidation(); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Email</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Email" name="email" value="<?php echo !isset($_POST['email']) ? '' : trim($_POST['email']) ?>">
		      		<span class="error"><?php echo emailValidation('email'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Username</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Username" name="user" value="<?php echo !isset($_POST['user']) ? '' : trim($_POST['user']) ?>">
		      		<span class="error"><?php echo userName(); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Password</label>
		    	<div class="col-xs-10">
		      		<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo !isset($_POST['password']) ? '' : trim($_POST['password']) ?>">
		      		<span class="error"><?php echo validPassword(); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Re-type Password</label>
		    	<div class="col-xs-10">
		      		<input type="password" class="form-control" placeholder="Re-type Password" name="rePassword" value="<?php echo !isset($_POST['rePassword']) ? '' : trim($_POST['rePassword']) ?>">
		      		<span class="error"><?php echo rePassword('rePassword'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Birth Date</label>
		    	<div class="col-xs-1">
		    		<?php echo date1(); ?> <br>
		    	</div>
		    	<div class="col-xs-1">
		    		<?php echo month(); ?> <br>
		    	</div>
		    	<div class="col-xs-2">
		    		<?php echo year(); ?> <br>
		    	</div>
		    	<span class="error"><?php echo age(); ?></span>
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
		      		<span class="error"><?php echo validSex('sex'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Phone</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Phone" name="phone" value="<?php echo !isset($_POST['phone']) ? '' : trim($_POST['phone']) ?>">
	      			<span class="error"><?php echo validatePhone('phone'); ?></span>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Address</label>
		    	<div class="col-xs-10">
		    		<textarea  class="form-control" rows="3" name="address"><?php echo !isset($_POST['address']) ? '' : trim($_POST['address']) ?></textarea>
		      		<span class="error"><?php echo validAddress('address'); ?></span>
		    	</div>
		  	</div>

		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">ZIP Code</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="ZIP Code" name="zip" value="<?php echo !isset($_POST['zip']) ? '' : trim($_POST['zip']) ?>">
	      			<span class="error"><?php echo validZip('zip'); ?></span>
		    	</div>
		  	</div>

		  	<div class="form-group">
		    	<label class="col-sm-12 control-label">Height</label>
		    	<div class="col-xs-10">
		      		<input class="form-control" placeholder="Height" name="height" value="<?php echo !isset($_POST['height']) ? '' : trim($_POST['height']) ?>">
	      			<span class="error"><?php echo validHeight('height'); ?></span>
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
				          	<input type="checkbox" name="hobbies[0]" value="0" <?php if(isset($_POST['hobbies'][0]) && isset($_POST['hobbies'][0])) echo "checked" ?>> Kalah Tarohan
			          	</label><br />          	
			          	<label>
			          		<input type="checkbox" name="hobbies[1]" value="1" <?php if(isset($_POST['hobbies'][1]) && isset($_POST['hobbies'][1])) echo "checked" ?>> Mijit
			          	</label><br />
			          	<label>
			          		<input type="checkbox" name="hobbies[2]" value="2" <?php if(isset($_POST['hobbies'][2]) && isset($_POST['hobbies'][2])) echo "checked" ?>> Nyikat WC
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[3]" value="3" <?php if(isset($_POST['hobbies'][3]) && isset($_POST['hobbies'][3])) echo "checked" ?>> Bikin Kopi
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[4]" value="4" <?php if(isset($_POST['hobbies'][4]) && isset($_POST['hobbies'][4])) echo "checked" ?>> Download Film
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[5]" value="5" <?php if(isset($_POST['hobbies'][5]) && isset($_POST['hobbies'][5])) echo "checked" ?>> Input Data
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[6]" value="6" <?php if(isset($_POST['hobbies'][6]) && isset($_POST['hobbies'][6])) echo "checked" ?>> Facebook-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[7]" value="7" <?php if(isset($_POST['hobbies'][7]) && isset($_POST['hobbies'][7])) echo "checked" ?>> Twitter-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[8]" value="8" <?php if(isset($_POST['hobbies'][8]) && isset($_POST['hobbies'][8])) echo "checked" ?>> Youtube-an
			          	</label><br />
			          	<label>
				          	<input type="checkbox" name="hobbies[9]" value="9" <?php if(isset($_POST['hobbies'][9]) && isset($_POST['hobbies'][9])) echo "checked" ?>> Masak Aer
			          	</label><br />
			    	</div>
			          	<span class="error"><?php echo checkBox(); ?></span>	
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