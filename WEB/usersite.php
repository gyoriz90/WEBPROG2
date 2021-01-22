<html>
<head>
	<title> Ügyféladatok szerkesztése </title>
	<link rel="stylesheet" type="text/css" href="user_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    
    <form action="logout.php" method="post">
	<button type="submit" class="btn btn-primary"> Kilépés </button>
        </form>
    
    <div class="container">
        <div class="upload-box">
        <div class="row">
        <div class="col-md-10 upload-new-customer">
             <h2>Add meg a felfenni kívánt ügyfél adatait!</h2>
             <form action="upload_customer.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Adóazonosító </label>
             <input type="text" name="taxid" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Bevétel </label>
             <input type="text" name="income" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label> Vezetéknév </label>
             <input type="text" name="surname" class="form-control">
             </div>
	 
	  <div class="form-group">
             <label> Keresztnév </label>
             <input type="text" name="lastname" class="form-control">
          </div>
         
         <div class="form-group">
             <label> Születési dátum </label>
             <input type= "date" name= "birthdate" class="form-control">
             </div>
         
         <div class="form-group">
             <label for="gender"> Nem </label>
             <select name="gender">
                 <option value="Férfi">Férfi</option>
                 <option value="Nő">Nő</option>
                 <option value="Egyéb">Egyéb</option>
             </select>
             </div>
                 
          <div class="form-group">
             <label for="advisor"> Tanácsadó </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT MnbId FROM tanacsado";
                $result = mysqli_query($con,$sql);
                echo "<select name='advisor'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['MnbId'] . "'>" . $row['MnbId'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	</div>
            
            <div class="col-md-10 update-new-customer">
             <h2>Add meg a frissíteni kívánt ügyfél adóazonosítóját, majd javítsd az adatait!</h2>
             <form action="update_customer.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Adóazonosító </label>
             <input type="text" name="taxid" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label> Bevétel </label>
             <input type="text" name="income" class="form-control">
             </div>
	 
	 <div class="form-group">
             <label> Vezetéknév </label>
             <input type="text" name="surname" class="form-control">
             </div>
	 
	  <div class="form-group">
             <label> Keresztnév </label>
             <input type="text" name="lastname" class="form-control">
          </div>
         
         <div class="form-group">
             <label> Születési dátum </label>
             <input type= "date" name= "birthdate" class="form-control">
             </div>
         
         <div class="form-group">
             <label for="gender"> Nem </label>
             <select name="gender">
                 <option value="Férfi">Férfi</option>
                 <option value="Nő">Nő</option>
                 <option value="Egyéb">Egyéb</option>
             </select>
             </div>
                 
          <div class="form-group">
             <label for="advisor"> Tanácsadó </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT MnbId FROM tanacsado";
                $result = mysqli_query($con,$sql);
                echo "<select name='advisor'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['MnbId'] . "'>" . $row['MnbId'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	</div>
            
            <div class="col-md-10 delete-customer">
             <h2>Add meg a törölni kívánt ügyfél adóazonosítóját:</h2>
             <form action="delete_customer.php" method="post">
     
	 <div class="form-group">
             <label> Adóazonosító </label>
             <input type="text" name="taxid" class="form-control" required>
             </div>
		
	<button type="submit" class="btn btn-primary"> Törlés </button>
    </form>
	</div>
        
            
            
    </div>
            
            
	</div>
         </div>

</body>
</html>