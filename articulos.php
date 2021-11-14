<?php 

include("con_db.php");

if (isset($_POST['reg'])) {

    if (strlen($_POST['ID_Articulo']) >= 1 &&
	 	strlen($_POST['NombreArticulo']) >= 1 &&
	 	strlen($_POST['TipoArticulo']) >= 1 &&
	    strlen($_POST['PrecioArticulo']) >= 1  &&
		strlen($_POST['ExistenciaArticulo']) >= 1)
		{

	    $ID_Articulo = trim($_POST['ID_Articulo']);
	    $NombreArticulo = trim($_POST['NombreArticulo']);
	    $TipoArticulo = trim($_POST['TipoArticulo']);
	    $PrecioArticulo = trim($_POST['PrecioArticulo']);
	    $ExistenciaArticulo = trim($_POST['ExistenciaArticulo']);

	    $consulta = "INSERT INTO articulo(ID_Articulo, NombreArticulo, TipoArticulo, PrecioArticulo, ExistenciaArticulo) VALUES ('$ID_Articulo','$NombreArticulo','$TipoArticulo','$PrecioArticulo','$ExistenciaArticulo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Has registrado tu producto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>