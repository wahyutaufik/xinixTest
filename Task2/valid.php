<?php 


function date1(){

	echo "<select class='form-control' name='day'>";
	$i=1;
	while($i<=31)
	{
		echo '<option value="'.str_pad($i, 2, 0, STR_PAD_LEFT).'">'.str_pad($i, 2, 0, STR_PAD_LEFT).'</option>';
		$i++;
	}
	echo "</select>";
}

function month(){
	echo "<select class='form-control' name='month'>";
		$i=1;
		while($i<=12)
		{
			echo '<option value="'.str_pad($i, 2, 0, STR_PAD_LEFT).'">'.str_pad($i, 2, 0, STR_PAD_LEFT).'</option>';
			$i++;
		}
	echo "</select>";
}

function year(){
	echo "<select class='form-control' name='year'>";
	$i=1970;
	while($i<=date('Y'))
	{
		echo '<option value="'.str_pad($i, 2, 0, STR_PAD_LEFT).'">'.str_pad($i, 2, 0, STR_PAD_LEFT).'</option>';
		$i++;
	}
	echo "</select>";
}

function age(){
	$age_requirement = 17;
	
	$bdate = strtotime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']);
		
	$difference = floor((time() - $bdate)/(60*60*24*365));

	if($difference >= $age_requirement){
		echo 'You are '.$difference.' years old. You have the age required.';
	} 
	else{
		echo 'You are '.$difference.' years old. You don\'t have the age required.';	
	}
}

function validEmpty($fieldName = null) {
	if ($_POST) {
	$_POST[$fieldName] = trim($_POST[$fieldName]);

		if(empty($_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' Required';
		}
	}
	return '';
}

function validEmptySex($fieldName = null) {
	if ($_POST) {
	// $_POST[$fieldName] = trim($_POST[$fieldName]);

		if(empty($_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' Required';
		}
	}
	return '';
}

function validLength($fieldName , $min=3 , $max=6) {
	if ($_POST) {
		if ((strlen($_POST[$fieldName])) < $min) {
			return '*' . ucfirst($fieldName) . ' Min. '.$min.' Characters';
		} 
		elseif ((strlen($_POST[$fieldName])) > $max) {
			return '*' . ucfirst($fieldName) . ' Max. '.$max.' Character';
		}	
	}
	return '';
}

function validString($fieldName = null) {
	if ($_POST) {

		if(!preg_match("/^[a-z A-Z]+$/",$_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' Must be Alphabet';	
		}
	}
	return '';
}

function validStrength($fieldName = null) {
   	if ($_POST) {
	   	if (!preg_match("#.*^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", ($_POST[$fieldName]))){
	     	return '*Your ' . ucfirst($fieldName) .' is weak!';
	   	} 
   	}    
   	return '';
}

function validEmail($fieldName = null) {
	if ($_POST) {

		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST[$fieldName])){
			return '*' . ucfirst($fieldName) . ' not valid';	
	  	}
	}
	return '';
}

function alphanumeric($fieldName){
	if ($_POST) {
		
		if(!preg_match("/[0-9a-zA-Z]+$/",$_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' not valid';	
		}
		elseif(!preg_match("#[0-9]+#",$_POST[$fieldName])) {
			return ucfirst($fieldName).' At least have 1 number';	
		}
		elseif(!preg_match("#[a-z]+#",$_POST[$fieldName])) {
			return ucfirst($fieldName).' At least have 1 letter';	
		}
	}
	return '';
}


function confirmPassword(){
   	$repass = $_POST['rePassword'];
   	$password = $_POST['password'];
   	if ($repass != $password) {
    	return '*Password do not match!';
   	}
}

function nameValidation(){
	$msg = '';
	if($_POST){
		if(validEmpty('name') != ''){
			$msg = validEmpty('name');
			return $msg;
		} 
		if(validLength('name',3,50) != ''){
			$msg = validLength('name',3,50);
			return $msg;
		}
		if(validString('name') != ''){
			$msg = validString('name');
			return $msg;
		}
	}
return $msg;
}

function emailValidation(){
	$msg = '';
	if($_POST){
		if(validEmpty('email') != ''){
			$msg = validEmpty('email');
			return $msg;
		} 
		if(validEmail('email') != ''){
			$msg = validEmail('email');
			return $msg;
		}
	}
return $msg;
}

function userName(){
	$msg = '';
	if($_POST){
		if(validEmpty('user') != ''){
			$msg = validEmpty('user');
			return $msg;
		} 
		if(validLength('user',6,20) != ''){
			$msg = validLength('user',6,20);
			return $msg;
		}
		if(alphanumeric('user') != ''){
			$msg = alphanumeric('user');
			return $msg;
		}
	}
return $msg;
}

function validPassword(){
	$msg = '';
	if($_POST){
		if(validEmpty('password') != ''){
			$msg = validEmpty('password');
			return $msg;
		} 
		if(validLength('password',6,20) != ''){
			$msg = validLength('password',6,20);
			return $msg;
		}
		if(validStrength('password') != ''){
			$msg = validStrength('password');
			return $msg;
		}
	}
return $msg;
}

function rePassword(){
	$msg = '';
	if($_POST){
		if(validEmpty('rePassword') != ''){
			$msg = validEmpty('rePassword');
			return $msg;
		}
		if(confirmPassword() != ''){
			$msg = confirmPassword();
			return $msg;
		}
	}
return $msg;
}

function validSex(){
   	$msg = '';
   	if($_POST){

       	if(validEmptySex('sex') != ''){
           	$msg = validEmptySex('sex');
           	return $msg;
       	} 
   	} 
} 

function validAddress(){
	$msg = '';
	if($_POST){
		if(validEmpty('address') != ''){
			$msg = validEmpty('address');
			return $msg;
		} 
		if(validLength('address',5,60) != ''){
			$msg = validLength('address',5,60);
			return $msg;
		}
	}
return $msg;
}

function validCode($fieldName){
	if ($_POST) {
	$_POST[$fieldName] = trim($_POST[$fieldName]);

		if(!is_numeric($_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' must be number';
		}
	}
	return '';
}

function validZip(){
	$msg = '';
	if($_POST){
		if(validEmpty('zip') != ''){
			$msg = validEmpty('zip');
			return $msg;
		}
		if(validCode('zip') != ''){
			$msg = validCode('zip');
			return $msg;
		} 
		if(validLength('zip',5,5) != ''){
			$msg = validLength('zip',5,5);
			return $msg;
		}
	}
return $msg;
}

function checkBox(){
	if ($_POST) {
	  	if(empty($_POST['hobbies'])){
	  		$msg_hobby = "*Hobby Required"; 
		  	return $msg_hobby;
	  	}   
		   
		if(!empty($_POST['hobbies'])) {  
		    $no_checked = count($_POST['hobbies']);  
		    if($no_checked<3)  
			    return "*Min 5 options"; 
		    if($no_checked>5)  
			    return "*Max 5 options"; 
	    }  
	}  
}   

function validatePhone($required) {
	if ($_POST) {
		if(validEmpty('phone') != ''){
			$msg = validEmpty('phone');
			return $msg;
		}
      	if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4,5}$/", ($_POST[$required]))){
       		return 'Fill with Format xxx-xxxx-xxxx';
      	}
   	}       
    return '';
}

function validHeight($required) {
	if ($_POST) {
		if(validEmpty('height') != ''){
			$msg = validEmpty('height');
			return $msg;
		}
      	if (!is_float($_POST[$required])){
       		return 'Fill with float';
      	}
   	}       
    return '';
}

function validWeight($required) {
	if ($_POST) {
		if(validEmpty('weight') != ''){
			$msg = validEmpty('weight');
			return $msg;
		}
      	if (!is_float($_POST[$required])){
       		return 'Fill with float';
      	}
   	}       
    return '';
}