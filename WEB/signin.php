<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from tanacsado where Username ='$username'";
$s2="select * from irodavezeto where Username ='$username'";


$result = mysqli_query($con, $s);
$result2= mysqli_query($con, $s2);
        
$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

$row=mysqli_fetch_assoc($result);
$row2=mysqli_fetch_assoc($result2);

if($num==1)
{
    $validPassword = password_verify($password, $row['Password']);
    if($validPassword==true)
    {
			$_SESSION['username']=$username;
			echo '<script type="text/javascript">'; 
			echo 'alert("A bejelentkezés tanácsadóként sikeres volt!");';
			echo 'window.location.href = "usersite.php";';
			echo '</script>';
			exit();
    }
              
}elseif($num2==1)
{
    $validPassword2 = password_verify($password, $row2['Password']);
    if($validPassword2==true)
    {
			echo '<script type="text/javascript">'; 
			echo 'alert("A bejelentkezés irodavezetőként sikeres volt!");'; 
			echo 'window.location.href = "adminsite.php";';
			echo '</script>';
    }
}else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikertelen bejelentkezés, a felhasználó név vagy jelszó nem megfelelő. Próbálja újra!");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';
}
