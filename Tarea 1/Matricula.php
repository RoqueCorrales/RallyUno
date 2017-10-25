<?php 
	require('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Matricula</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
	<div class="container">	
		<form method="POST" action="">
		    <div class="form-group">
		      <label for="cedula">Cedula</label>
		      <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
		    </div>
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
		  </div>
		    <div class="form-group">
		      <label for="apellido">Apellido</label>
		      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
		    </div>
		    <div class="form-group">
		      <label for="carrera">Carrera</label>
		      <select id="carrera" class="form-control" name="carrera">
		      	<?php 
					if (mysqli_num_rows($carreras) > 0) {
			         	while($row = mysqli_fetch_assoc($carreras)) {
			         		$name = $row["nombre"];
			               echo "<option>$name</option>";
			            }
			         } 
		      	 ?>
		        
		      </select>
		    </div>
		    <input type="submit" value="Guardar" class="btn btn-success">
		</form>
	</div>
	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>