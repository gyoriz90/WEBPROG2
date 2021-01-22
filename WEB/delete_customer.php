<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');

$taxid=$_POST['taxid'];

if(!isset($taxid) || trim($taxid) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a törölni kívánt ügyfél adóazonosítóját");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
}else
{
    $reg = " DELETE FROM ugyfel where 'AdoAzon' = '$taxid'";
    if(mysqli_query($con, $reg))
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Sikeresen törölte az ügyfelet!");'; 
    echo 'window.location.href = "usersite.php";';
    echo '</script>';
    }else
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Az ügyfél törlése sikertelen volt!");'; 
    echo 'window.location.href = "usersite.php";';
    echo '</script>';
        
    }
}