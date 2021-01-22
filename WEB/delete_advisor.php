<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');

$username=$_POST['username'];

if(!isset($username) || trim($username) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a törölni kívánt tanácsadó felhasználónevét");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
}else
{
    $reg = " DELETE FROM tanacsado where Username = '$username'";
    if(mysqli_query($con, $reg))
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Sikeresen törölte a tanácsadót!");'; 
    echo 'window.location.href = "adminsite.php";';
    echo '</script>';
    }else
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("A tanácsadó törlése sikertelen volt!");'; 
    echo 'window.location.href = "adminsite.php";';
    echo '</script>';
        
    }
}