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

function validEmpty($fieldName = null){
	
	if ($_POST){
		$_POST[$fieldName] = trim($_POST[$fieldName]);
		
		if(empty($_POST[$fieldName])){
			echo ucfirst($fieldName) . ' Belum di Isi';
			return;
		}
	}
}

