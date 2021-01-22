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

if(!isset($contractnumber) || trim($contractnumber) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a módosítani kívánt szerződés számát!");'; 
	echo 'window.location.href = "customer_site.php";';
	echo '</script>';
}else
{
    $s = " select * from szerzodes where 'SzerzodesSzam' = '$contractnumber'";
    $result = mysqli_query($con, $s);
    $row=mysqli_fetch_array($result);
    
if(!isset($contractdate) || trim($contractdate) == '')
{
    $contractdate=$row['KotesDatum'];
}
if(!isset($annualfee) || trim($annualfee) == '')
{
    $annualfee=$row['EvesDij'];
}

/*A szerződésszám, tipus, penzintézet ellenőrzést nem kell végezni, mert azokat mindenképp meg kell adni*/
}

$reg= " UPDATE szerzodes SET SzerzodesSzam='$contractnumber', Tipus='$type', KotesDatum='$contractdate', Penzintezet='$company', EvesDij='$annualfee', Ugyfel='$taxid' WHERE SzerzodesSzam='$contractnumber'";
        
if(mysqli_query($con, $reg))
    {
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres frissítés!");'; 
	echo 'window.location.href = "customer_site.php";';
        echo '</script>';
    }else
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("A frissítés sikertelen!");'; 
        echo 'window.location.href = "customer_site.php";';
        echo '</script>';
        }
	
