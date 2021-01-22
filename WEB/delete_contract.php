<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');

$contractnumber=$_POST['contractnumber'];

if(!isset($contractnumber) || trim($contractnumber) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a törölni kívánt szerződés számát!");'; 
	echo 'window.location.href = "customer_site.php";';
	echo '</script>';
}else
{
    $reg = " DELETE FROM szerzodes where SzerzodesSzam = '$contractnumber'";
    if(mysqli_query($con, $reg))
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Sikeresen törölte a szerződést!");'; 
    echo 'window.location.href = "customer_site.php";';
    echo '</script>';
    }else
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("A szerződés törlése sikertelen volt!");'; 
    echo 'window.location.href = "customer_site.php";';
    echo '</script>';
        
    }
}