<html>
<head>
	<title> Tanácsadó adatok szerkesztése </title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <form action="logout.php" method="post">
	<button type="submit" class="btn btn-primary"> Kilépés </button>
        </form> 
    <div class="container">
        <div class="upload-box">
        <div class="row">
        <div class="col-md-10 upload-left">
             <h2>Add meg a felvenni kívánt tanácsadó adatait:</h2>
             <form action="upload_advisor.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Felhasználónév </label>
             <input type="text" name="username" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Jelszó </label>
             <input type="password" name="password" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Profilkép </label>
             <input type="file" name="image" class="form-control">
             </div>
	 
	  <div class="form-group">
             <label> Fizetés </label>
             <input type="text" name="payment" class="form-control">
             </div>
	  
	  <div class="form-group">
             <label for="qualification"> Végzettség </label>
             <select name="qualification">
                 <option value="alapfok">Alapfok</option>
                 <option value="középfok">Középfok</option>
                 <option value="felsőfok">Felsőfok</option>
             </select>
             </div>
	 
	 <div class="form-group">
             <label> E-mail </label>
             <input type= "email" name= "email" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label> Telefonszám </label>
             <input type= "text" name= "phonenumber" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label for="zipcode"> Irányítószám </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Iranyitoszam FROM telepulesek";
                $result = mysqli_query($con,$sql);
                echo "<select name='zipcode'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Iranyitoszam'] . "'>" . $row['Iranyitoszam'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
          
         <div class="form-group">
             <label for="city"> Település </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Telepules FROM telepulesek";
                $result = mysqli_query($con,$sql);
                echo "<select name='city'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Telepules'] . "'>" . $row['Telepules'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
         
          <div class="form-group">
             <label for="street"> Utcanév </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Utcanev FROM utcanevek";
                $result = mysqli_query($con,$sql);
                echo "<select name='street'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Utcanev'] . "'>" . $row['Utcanev'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
         
         <div class="form-group">
             <label> Házszám </label>
             <input type= "text" name= "housenumber" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Születési dátum </label>
             <input type= "date" name= "birthdate" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Vezetéknév </label>
             <input type= "text" name= "surname" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Keresztnév </label>
             <input type= "text" name= "lastname" class="form-control">
             </div>
         
         <div class="form-group">
             <label for="rank"> Beosztás </label>
             <select name="rank">
                 <option value="Tanácsadó">Tanácsadó</option>
                 <option value="Elemző">Elemző</option>
                 <option value="Kiértékelő">Kiértékelő</option>
             </select>
             </div>
         
          <div class="form-group">
             <label for="office"> Iroda </label>
             <select name="office">
                 <option value="1234">1234</option>
                 <option value="1235">1235</option>
                 <option value="1236">1236</option>
                 <option value="1237">1237</option>
                 <option value="1238">1238</option>
                 <option value="1239">1239</option>
                 <option value="1240">1240</option>
                 <option value="1241">1241</option>
                 <option value="1242">1242</option>
             </select>
             </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	</div>
            
            <div class="col-md-10 update-right">
             <h2>Add meg a frissíteni kívánt tanácsadó felhasználónevét, majd javítsd az adatait!</h2>
             <form action="update_advisor.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Felhasználónév </label>
             <input type="text" name="username" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Jelszó </label>
             <input type="password" name="password" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Profilkép </label>
             <input type="file" name="image" class="form-control">
             </div>
	 
	  <div class="form-group">
             <label> Fizetés </label>
             <input type="text" name="payment" class="form-control">
             </div>
	  
	  <div class="form-group">
             <label for="qualification"> Végzettség </label>
             <select name="qualification">
                 <option value="alapfok">Alapfok</option>
                 <option value="középfok">Középfok</option>
                 <option value="felsőfok">Felsőfok</option>
             </select>
             </div>
	 
	 <div class="form-group">
             <label> E-mail </label>
             <input type= "email" name= "email" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label> Telefonszám </label>
             <input type= "text" name= "phonenumber" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label for="zipcode"> Irányítószám </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Iranyitoszam FROM telepulesek";
                $result = mysqli_query($con,$sql);
                echo "<select name='zipcode'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Iranyitoszam'] . "'>" . $row['Iranyitoszam'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
          
         <div class="form-group">
             <label for="city"> Település </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Telepules FROM telepulesek";
                $result = mysqli_query($con,$sql);
                echo "<select name='city'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Telepules'] . "'>" . $row['Telepules'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
         
          <div class="form-group">
             <label for="street"> Utcanév </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Utcanev FROM utcanevek";
                $result = mysqli_query($con,$sql);
                echo "<select name='street'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Utcanev'] . "'>" . $row['Utcanev'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
         
         <div class="form-group">
             <label> Házszám </label>
             <input type= "text" name= "housenumber" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Születési dátum </label>
             <input type= "date" name= "birthdate" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Vezetéknév </label>
             <input type= "text" name= "surname" class="form-control">
             </div>
         
         <div class="form-group">
             <label> Keresztnév </label>
             <input type= "text" name= "lastname" class="form-control">
             </div>
         
         <div class="form-group">
             <label for="rank"> Beosztás </label>
             <select name="rank">
                 <option value="Tanácsadó">Tanácsadó</option>
                 <option value="Elemző">Elemző</option>
                 <option value="Kiértékelő">Kiértékelő</option>
             </select>
             </div>
         
          <div class="form-group">
             <label for="office"> Iroda </label>
             <select name="office">
                 <option value="1234">1234</option>
                 <option value="1235">1235</option>
                 <option value="1236">1236</option>
                 <option value="1237">1237</option>
                 <option value="1238">1238</option>
                 <option value="1239">1239</option>
                 <option value="1240">1240</option>
                 <option value="1241">1241</option>
                 <option value="1242">1242</option>
             </select>
             </div>
		
	<button type="submit" class="btn btn-primary"> Frissítés </button>
    </form>
	</div>
            
            <div class="col-md-10 delete-down">
             <h2>Add meg a törölni kívánt tanácsadó felhasználónevét:</h2>
             <form action="delete_advisor.php" method="post">
     
	 <div class="form-group">
             <label> Felhasználónév </label>
             <input type="text" name="username" class="form-control" required>
             </div>
		
	<button type="submit" class="btn btn-primary"> Törlés </button>
    </form>
	</div>
        
            
            
    </div>
	</div>
         </div>

</body>
</html>