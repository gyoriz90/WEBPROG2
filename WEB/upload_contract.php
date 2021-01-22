<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'webprog2gyak');

$taxid=$_SESSION['taxid'];
$contractnumber=$_POST['contractnumber'];
$type=$_POST['type'];
$contractdate=$_POST['contractdate'];
$company=$_POST['company'];
$annualfee=$_POST['annualfee'];


$s = " select * from szerzodes where 'SzerzodesSzam' = '$contractnumber'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("A megadott szerződsésszám már foglalt.");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
	exit();
}else{
    
	$reg= " insert into szerzodes(SzerzodesSzam, Tipus, KotesDatum, Penzintezet, EvesDij, Ugyfel) values ('$contractnumber', '$type', '$contractdate', '$company', '$annualfee', '$taxid')";

        if(mysqli_query($con, $reg))
    {
	
        echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres feltöltés!");'; 
	echo 'window.location.href = "customer_site.php";';
	echo '</script>';
    }else
    {
        echo '<script type="text/javascript">'; 
	echo 'alert("A feltöltés sikertelen!");'; 
	echo 'window.location.href = "customer_site.php";';
	echo '</script>';
    }
	
}