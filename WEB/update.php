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


/*mnbid generálás*/
$s="select MnbId from tanacsado";
$result = mysqli_query($con, $s);
$mnbid=1;
while($row=mysqli_fetch_array($result))
{
    $maxid=(int)$row['MnbId'];
    if($mnbid<$maxid)
    {
        $mnbid=$maxid;
    }
}
$mnbid++;

/*password hash generálás*/
$passwordHashed = password_hash($password, PASSWORD_BCRYPT);

/*file feltöltés*/

$image = $_FILES['image']['name'];

        
/*születési dátum ellenőrzés, nem lehet kisebb mint 18*/
$now = time();
$datediff=(int)$now-(int)$birthdate;

$s = " select * from tanacsado where Username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($datediff < (18*365))
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Helytelen születési dátum!");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';

}elseif($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("A megadott felhasználónév már foglalt.");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
	exit();
	
}else
{
	$reg= " insert into tanacsado(MnbId, Username, Password, Profilkep, Fizetes, Vegzettseg, Email, Telefonszam, "
                . "HazSzam, Utca, Varos, IrSzam, SzuletesiDatum, VezNev, KerNev, Beosztas, "
                . "Iroda) values ('$mnbid', '$username', '$passwordHashed', '$image', '$payment', '$qualification', '$email', '$phonenumber',"
                . "'$housenumber', '$street', '$city', '$zipcode', '$birthdate', '$surname', '$lastname', '$rank', '$office')";
	mysqli_query($con, $reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres feltöltés!");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
	
}