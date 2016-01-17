<HTML>
	<HEAD>
		<title>Matrícula de asignaturas</title>
		<meta charset="UTF-8">
	</HEAD>
<body>
<CENTER>	
<?php
	session_start();
	include ("includes/autenticado.php");
	if (isset($_GET['Envio'])){
		echo "<H2> Matricula realizada en las asignaturas:</H2><BR>";
		if (isset($_GET['SPW'])) echo "Seguridad en la Programación Web<BR>";
		if (isset($_GET['DAWTP'])) echo "Desarrollo de Aplicaciones Web con Tecnologías Propietarias<BR>";
		if (isset($_GET['DAWDCA'])) echo "Desarrollo de Aplicaciones Web Distribuidas de Código Abierto<BR>";
		echo "<BR><BR>"
		// Si quieres, puedes poner el código que actualiza los permisos de un alumno 
		// realizado en la práctica 1 (Autenticación y TLS)
?>
		<A href= 'MasterWeb.php'> Volver a inicio </A>

<?php
	} else {
?>
			<img src="logo.png" width= 120 height= 60>
			<br><br><br>
			
			<H2> Selecciona las asignaturas en que quieres matricularte </H2><BR><BR>
			<FORM name="matricula" method=get action= '<?php "{$_SERVER['PHP_SELF']}"  ?>'>
				<TABLE>
					<TR>
						<TD align=right><INPUT type="checkbox" name="SPW" value="Si"></TD>
						<TD align=left> Seguridad en la Programación Web</TD>
					</TR>
					<TR>
						<TD align=right><INPUT type="checkbox" name="DAWTP" value="Si"></TD>
						<TD align=left> Desarrollo de Aplicaciones Web con Tecnologías Propietarias</TD>
					</TR>
					<TR>
						<TD align=right><INPUT type="checkbox" name="DAWDCA" value="Si"></TD>
						<TD align=left> Desarrollo de Aplicaciones Web Distribuidas de Código Abierto</TD>
					</TR>
				</TABLE><BR>
				<INPUT type="submit" name="Envio" value="Enviar">
			</FORM>
		</CENTER>
<?php
	}
?>
</BODY>
</HTML>

   