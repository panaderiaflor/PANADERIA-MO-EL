<?php  

	include("conex.php");
	if (isset($_POST['registrar'])){
		if(strlen($_POST['cantidad']) >=1 &&
			strlen($_POST['tipos']) >=1 &&
			strlen($_POST['precio']) >=1){
			$cantidad = trim($_POST['cantidad']);
			$tipos = trim($_POST['tipos']);
			$precio = trim($_POST['precio']);
			$fecha_reg = date("d/m/y");
			$consulta = "INSERT INTO diarias(cantidad, tipos, precio, fecha_ven) VALUES ('$cantidad','$tipos','$precio','$fecha_reg')";
			$resultado = mysqli_query($conex,$consulta);
			if ($resultado) {
			 	?>
			 	<h3 class="ok">El registro se a guardado</h3>
			 	<?php
			 } else{
			 	?>
			 	<h3 class="bad">¡Ocurrio un error!</h3>
			 	<?php 
			 }
		}else{
			?>
			<h3 class="bad">¡Por favor complete los campos!</h3>
			<?php
		}
	}
