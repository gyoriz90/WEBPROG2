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


/*születési dátum ellenőrzés, nem lehet kisebb mint 18*/
$now = time();
$datediff=(int)$now-(int)$birthdate;

$s = " select * from ugyfel where AdoAzon = '$taxid'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);



function adoazon_check($taxid, $birthdate)
{
    $time= date_create('1967-01-01');
    $time2= date_create($birthdate);
    $elso= substr($taxid, 1,1);
    $kov_ot= substr($taxid, 2,5);
    $utolso= substr($taxid, 10,1);
    $interval= date_diff($time2, $time);
    $maradek=((((int)$elso)*1)+(((int)substr($taxid,2,1))*2)+(((int)substr($taxid,3,1))*3)+(((int)substr($taxid,4,1))*4)+(((int)substr($taxid,5,1))*5)+(((int)substr($taxid,6,1))*6)+(((int)substr($taxid,7,1))*7)+(((int)substr($taxid,8,1))*8)+(((int)substr($taxid,9,1))*9))%11;
    
    if(($elso=="8")&&((int)$kov_ot==(int)$interval)&&($maradek==(int)$utolso))
    {
        return 1;
    }
        else{
        return 1;
        }
    
}

if($datediff < (14*365))
{
        echo '<script type="text/javascript">'; 
	echo 'alert("Helytelen születési dátum!");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';

}elseif($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("A megadott adóazonosító már foglalt.");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
	exit();
	
}elseif(adoazon_check($taxid,$birthdate)==0)
{
        echo '<script type="text/javascript">'; 
	echo 'alert("A megadott adóazonosító nem megfelelő!");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
	exit();
}else{
    
	$reg= " insert into ugyfel(AdoAzon, Bevetel, VezNev, KerNev, SzuletesiDatum, Nem, Tanacsado) values ('$taxid', '$income', '$surname', '$lastname', '$birthdate', '$gender', '$advisor')";

        if(mysqli_query($con, $reg))
    {
	$_SESSION['taxid']=$taxid;
        echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres feltöltés! Adjon hozzá az ügyfélhez szerződéseket!");'; 
	echo 'window.location.href = "customer_site.php";';
	echo '</script>';
    }else
    {
        echo '<script type="text/javascript">'; 
	echo 'alert("A feltöltés sikertelen!");'; 
	echo 'window.location.href = "usersite.php";';
	echo '</script>';
    }
	
}