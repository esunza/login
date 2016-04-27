<?php
	include ("conexion.php");
	//include ("../sesion.php");

	//$idUsuario=$_GET['idUsuario'];
	$idCliente=$_GET['idCliente'];

	$sql="delete from clientes where idCliente=$idCliente";
	$consulta=mysql_query($sql);

	if($consulta)
        {
        ?>
            <script languaje='javascript'>
                var idUsuario = "<?php echo $idUsuario; ?>" ;
                alert('CLIENTE ELIMINADO CORRECTAMENTE');
                window.location='catalogoClientes.php?idUsuario=' + idUsuario;
            </script>";
        
        <?php 
    }
    else
    {
        ?>
        <script languaje='javascript'>
                var idUsuario = "<?php echo $idUsuario; ?>" ;
                alert('ERROR AL ELIMINAR EL CLIENTE');
                window.location='catalogoClientes.php?idUsuario=' + idUsuario;
            </script>";
<?php
    }

?>