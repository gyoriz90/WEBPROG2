<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');

$taxid=$_POST['taxid'];
$income=$_POST['income'];
$surname=$_POST['surname'];
$lastname=$_POST['lastname'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$advisor=$_POST['advisor'];

if(!isset($taxid) || trim($taxid) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a módosítani kívánt ügyfél adoazonosítóját");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
}else
{
    $s = " select * from ugyfel where AdoAzon = '$taxid'";
    $result = mysqli_query($con, $s);
    $row=mysqli_fetch_array($result);
    
if(!isset($income) || trim($income) == '')
{
    $income=$row['Bevetel'];
}
if(!isset($surname) || trim($surname) == '')
{
    $surname=$row['VezNev'];
}
if(!isset($lastname) || trim($lastname) == '')
{
    $lastname=$row['KerNev'];
}
if(!isset($birthdate) || trim($birthdate) == '')
{
    $birthdate=$row['SzuletesiDatum'];
}
/*gender és advisor ellenőrzést nem kell végezni, mert azokat mindenképp meg kell adni*/
}

/*születési dátum ellenőrzés, nem lehet kisebb mint 14*/
$now=time();
$datediff=(int)$now-(int)$birthdate;

if($datediff < (14*365))
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Helytelen születési dátum!");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
}else
{
	$reg= " UPDATE ugyfel SET AdoAzon='$taxid', Bevetel='$income', VezNev='$surname', KerNev='$lastname', SzuletesiDatum='$birthdate', Nem='$gender', Tanacsado='$advisor' WHERE AdoAzon='$taxid'";
        
    if(mysqli_query($con, $reg))
    {
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres frissítés! Módosítsa az ügyfél szerződéseit!");'; 
	echo 'window.location.href = "customersite.php";';
        echo '</script>';
    }else
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("Az ügyfél adatainak frissítése sikertelen!");'; 
        echo 'window.location.href = "usersite.php";';
        echo '</script>';
        }
	
}