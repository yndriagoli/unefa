
<?php
	
	include("../includes/usarBD.php");
	
	echo "$_POST[cedula]";
	
	
		$insercion= "INSERT INTO `solicit_beca`( `tip_beca`,`tip_benf`, `nom_ape_es`, `ced_es`, `fech_nac_es`,  `nacio_es`, `est_civil_es`, `gen_es`, `direcc_es`, `direcca_es`, `casa_es`, `pais_es`, `estado_es`, `ciudad_es`, `munic_es`, `telf1_es`, `telf2_es`,`direc2_es`,`direcc22`, `casa2_es`, `pais2_es`, `estado2_es`, `ciudad2_es`, `munic2_es`, `telf_hab_es`, `cel_es`, `correo_es`, `militar_es`, `deporte_es`, `cultura_es`, `nom_padre`, `ced_padre`, `tel_padre`, `luga_padre`, `fec_nac_padre`, `nom_madre`, `ced_madre`, `tel_madre`, `lugar_madre`, `fec_nac_madre`,`estatus`) 
		VALUES ('$_POST[tipo]','$_POST[tip_benf]', '$_POST[nombre]' , '$_POST[cedula]', '$_POST[nacimiento]','$_POST[nacionalidad]','$_POST[civil]','$_POST[genero]','$_POST[direccion1]','$_POST[direccion2]','$_POST[direccion3]','$_POST[pais]','$_POST[estado]','$_POST[ciudad]','$_POST[municipio]','$_POST[habitacion]','$_POST[celular]','$_POST[direcciona]','$_POST[direccionb]','$_POST[direccionc]','$_POST[paisa]','$_POST[estadob]','$_POST[ciudadc]','$_POST[municipiod]','$_POST[habitacione]','$_POST[celularf]','$_POST[correo]','$_POST[militar]','$_POST[deporte]','$_POST[cultura]','$_POST[p1]','$_POST[p2]','$_POST[p3]','$_POST[p4]','$_POST[p5]','$_POST[m1]','$_POST[m2]','$_POST[m3]','$_POST[m4]','$_POST[m5]','$_POST[estatus]')";
		$insertarScript=mysql_query($insercion, $conexion);
		exit;

?>
