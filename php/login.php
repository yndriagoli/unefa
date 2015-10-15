
<?php 
session_start();
$idform=$_POST["username"];
$passform=$_POST["password"];

 include("../includes/usarBD.php"); 
   
   $datos= "select ced_usu_sist,contra_usu_sist,nom_usu_sist,ape_usu_sist,tip_usu_sist,estado_usu_sist from usuario_sist where ced_usu_sist= '$idform' and contra_usu_sist='$passform' "; 
   
   $datostotal = mysql_query($datos, $conexion);
   
   		while($row=mysql_fetch_array($datostotal, MYSQL_ASSOC))

   {
	
	$_SESSION["id"]=$row["ced_usu_sist"];
	$_SESSION["clave"]=$row["contra_usu_sist"];
	$_SESSION["tipo"]=$row["tip_usu_sist"];
    $_SESSION["estado"]=$row["estado_usu_sist"];
	 $_SESSION["nombreu"]=$row["nom_usu_sist"];
	  $_SESSION["apellidou"]=$row["ape_usu_sist"];
	  
	
  }
  
  
  if (($idform==$_SESSION["id"] && $passform==$_SESSION["clave"])  && ($_SESSION["estado"]=="Activado"))

  {echo "<script type='text/javascript'>
			alert('Ha Ingresado Satisfactoriamente Al Sistema ');
			window.location='../inicio.html';
              </script>";
}
  
  else { if(($idform==$_SESSION["id"] && $passform==$_SESSION["clave"]) && ($_SESSION["estado"]=="Desactivado"))
  { echo "<script type='text/javascript'>
			alert('No es Posible Ingresar Al Sistema  Usuario Desactivado');
			window.location='../index.html';
              </script>";          }
  
  
else {echo "<script type='text/javascript'>
			alert('Usuario No Registrado ');
			window.location='../index.html';
              </script>";
  
}}

  
?> 