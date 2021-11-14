<!DOCTYPE html>
<html>
<head>
	<title>Registro de articulos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<!-- Abisai Sanchez Rubio -->
    <form method="POST">
    	<h1>Registro de articulos</h1>
    	<input type="text" name="ID_Articulo" placeholder="Ingresa el ID del articulo">
    	<input type="text" name="NombreArticulo" placeholder="Ingresa el nombre del articulo">
    	<input type="text" name="TipoArticulo" placeholder="Ingresa el tipo del articulo">
    	<input type="text" name="PrecioArticulo" placeholder="Ingresa el precio del articulo">
    	<input type="text" name="ExistenciaArticulo" placeholder="¿Hay en existencia? (0 = No, 1 = Sí)">
		<input type="submit" name="reg" value="reg">
	</form>
        <?php 
        include("articulos.php");
        ?>
</body>
</html>