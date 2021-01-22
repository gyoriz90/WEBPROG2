<?php
session_start();
$taxid=$_SESSION['taxid'];
$_SESSION['taxid']=$taxid;
?>
<html>
<head>
	<title> Szerződés adatok szerkesztése </title>
	<link rel="stylesheet" type="text/css" href="customer_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    
    <form action="logout.php" method="post">
	<button type="submit" class="btn btn-primary"> Kilépés </button>
        </form>
    
    <div class="container">
        <div class="upload-box">
        <div class="row">
        <div class="col-md-10 upload-new-contract">
             <h2>Add meg a felvenni kívánt szerződés adatait!</h2>
             <form action="upload_contract.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Szerződésszám </label>
             <input type="text" name="contractnumber" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label for="type"> Típus </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Szerzodestipusok FROM szerzodestipus";
                $result = mysqli_query($con,$sql);
                echo "<select name='type'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Szerzodestipusok'] . "'>" . $row['Szerzodestipusok'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
	 
           <div class="form-group">
             <label> Kötés dátuma </label>
             <input type= "date" name= "contractdate" class="form-control">
             </div>
                 
          <div class="form-group">
             <label for="company"> Pénzintézet </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Penzintezet FROM penzintezetek";
                $result = mysqli_query($con,$sql);
                echo "<select name='company'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Penzintezet'] . "'>" . $row['Penzintezet'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
                 
           <div class="form-group">
             <label> Éves díj </label>
             <input type="text" name="annualfee" class="form-control" required>
             </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	</div>
            
            <div class="col-md-10 update-new-contract">
             <h2>Add meg a frissíteni kívánt szerződés szerződésszámát!</h2>
             <form action="update_contract.php" method="post" enctype="multipart/form-data">
     
	 <div class="form-group">
             <label> Szerződésszám </label>
             <input type="text" name="contractnumber" class="form-control" required>
             </div>
	 
	 <div class="form-group">
             <label for="type"> Típus </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Szerzodestipusok FROM szerzodestipus";
                $result = mysqli_query($con,$sql);
                echo "<select name='type'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Szerzodestipusok'] . "'>" . $row['Szerzodestipusok'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
	 
           <div class="form-group">
             <label> Kötés dátuma </label>
             <input type= "date" name= "contractdate" class="form-control">
             </div>
                 
          <div class="form-group">
             <label for="company"> Pénzintézet </label>
             <?php
                $con = mysqli_connect('localhost', 'root','123456');
                mysqli_select_db($con, 'webprog2gyak');
                $sql = "SELECT Penzintezet FROM penzintezetek";
                $result = mysqli_query($con,$sql);
                echo "<select name='company'>";
                while ($row = mysqli_fetch_array($result)) 
                {
                echo "<option value='" . $row['Penzintezet'] . "'>" . $row['Penzintezet'] . "</option>"; 
                }
                echo "</select>";
                ?>
             </div>
                 
           <div class="form-group">
             <label> Éves díj </label>
             <input type="text" name="annualfee" class="form-control">
             </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	</div>
            
            <div class="col-md-10 delete-contract">
             <h2>Add meg a törölni kívánt szerződés szerződésszámát!</h2>
             <form action="delete_contract.php" method="post">
     
	 <div class="form-group">
             <label> Szerződésszám </label>
             <input type="text" name="contractnumber" class="form-control" required>
             </div>
		
	<button type="submit" class="btn btn-primary"> Törlés </button>
    </form>
	</div>
        
            
            
    </div>
            
            
	</div>
         </div>

</body>
</html>