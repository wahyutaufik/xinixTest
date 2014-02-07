<?php 

function date1(){
	echo "<select class='form-control'>";
	for ($i=1; $i <=31 ; $i++) { 
		echo "<option>$i</option>";
	}
	echo "</select>";
}

function month(){
	$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Agustus","Oktober","November","Desember");

	$jumlah = count($bulan);

	echo "<select class='form-control'>";
		for ($i=0; $i < $jumlah ; $i++) {
			echo "<option value=$bulan[$i]>$bulan[$i]</option>";
		}
	echo "</select>";
}

function year(){
	echo "<select class='form-control'>";
	for ($c=1980; $c<=2014 ; $c++) { 
		echo "<option>$c</option>";
	}
	echo "</select>";
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

function validLength($fieldName = null) {
	if ($_POST) {
		if ((strlen($_POST[$fieldName])) < 3) {
			return '*' . ucfirst($fieldName) . ' Min. 3 Characters';
		} 
		elseif ((strlen($_POST[$fieldName])) > 50) {
			return '*' . ucfirst($fieldName) . ' Max. 50 Character';
		}	
	}
	return '';
}

function validString($fieldName){
	if ($_POST) {
		if (is_numeric($_POST[$fieldName])) {
			return '*' . ucfirst($fieldName) . ' Must be Alphabet';		
		}
	}
	return '';
}

function validName(){
	$msg = '';
	if($_POST){
		if(validEmpty('name') != ''){
			$msg = validEmpty('name');
			return $msg;
		} 
		if(validLength('name') != ''){
		$msg = validLength('name');
		return $msg;
		}
		if(validString('name') != ''){
		$msg = validString('name');
		return $msg;
		}
	}
return $msg;
}
