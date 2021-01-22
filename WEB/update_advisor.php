<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'webprog2gyak');

$username=$_POST['username'];
$password=$_POST['password'];
$payment=$_POST['payment'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$zipcode=$_POST['zipcode'];
$city=$_POST['city'];
$street=$_POST['street'];
$housenumber=$_POST['housenumber'];
$birthdate=$_POST['birthdate'];
$surname=$_POST['surname'];
$lastname=$_POST['lastname'];
$rank=$_POST['rank'];
$office=$_POST['office'];
$image = $_FILES['image']['name'];
$now = time();

if(!isset($username) || trim($username) == '')
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem adta meg a módosítani kívánt tanácsadó felhasználónevét");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
}else
{
    $s = " select * from tanacsado where Username = '$username'";
    $result = mysqli_query($con, $s);
    $num= mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
   
if($num==1)
{    
if(!isset($password) || trim($password) == '')
{
    $passwordHashed=$row['Password'];
}else {$passwordHashed = password_hash($password, PASSWORD_BCRYPT);}

if(!isset($payment) || trim($payment) == '')
{
    $payment=$row['Fizetes'];
}
if(!isset($qualification) || trim($qualification) == '')
{
    $qualification=$row['Vegzettseg'];
}
if(!isset($email) || trim($email) == '')
{
    $email=$row['Email'];
}
if(!isset($phonenumber) || trim($phonenumber) == '')
{
    $phonenumber=$row['Telefonszam'];
}
if(!isset($housenumber) || trim($housenumber) == '')
{
    $housenumber=$row['HazSzam'];
}
if(!isset($street) || trim($street) == '')
{
    $street=$row['Utca'];
}
if(!isset($city) || trim($city) == '')
{
    $city=$row['Varos'];
}
if(!isset($zipcode) || trim($zipcode) == '')
{
    $zipcode=$row['IrSzam'];
}
if(!isset($birthdate) || trim($birthdate) == '')
{
    $birthdate=$row['SzuletesiDatum'];
}
if(!isset($surname) || trim($surname) == '')
{
    $surname=$row['VezNev'];
}
if(!isset($lastname) || trim($lastname) == '')
{
    $lastname=$row['KerNev'];
}
if(!isset($rank) || trim($rank) == '')
{
    $rank=$row['Beosztas'];
}
if(!isset($office) || trim($office) == '')
{
    $office=$row['Iroda'];
}
if(!isset($image) || trim($image) == '')
{
    $image=$row['Profilkep'];
}
$mnbid=$row['MnbId'];
}else
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Nem található a táblában a megadott felhasználónév!");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
}
}

/*születési dátum ellenőrzés, nem lehet kisebb mint 18*/
$datediff=(int)$now-(int)$birthdate;

if($datediff < (18*365))
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Helytelen születési dátum!");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
}else
{
	$reg= " UPDATE tanacsado SET MnbId='$mnbid', Username='$username', Password='$passwordHashed', "
                . "Profilkep='$image', Fizetes='$payment', Vegzettseg='$qualification', Email='$email', Telefonszam='$phonenumber', "
                . "HazSzam='$housenumber', Utca='$street', Varos='$city', IrSzam='$zipcode', SzuletesiDatum='$birthdate',VezNev='$surname', "
                . "KerNev='$lastname', Beosztas='$rank', Iroda=$office WHERE Username='$username'";
        
    if(mysqli_query($con, $reg))
    {
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres frissítés!");'; 
	echo 'window.location.href = "adminsite.php";';
        echo '</script>';
    }else
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("A tanácsadó adatainak frissítése sikertelen!");'; 
        echo 'window.location.href = "adminsite.php";';
        echo '</script>';
        }
	
}