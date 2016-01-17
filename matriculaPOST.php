<HTML>
	<HEAD>
		<title>Matrícula de asignaturas</title>
		<meta charset="UTF-8">
	</HEAD>
<body>
<CENTER>	
<?php
	session_start();
	include ("/includes/autenticado.php");
	if (isset($_POST['Envio'])){
		echo "<H2> Matricula realizada en las asignaturas:</H2><BR>";
		if (isset($_POST['SPW'])) echo "Seguridad en la Programación Web<BR>";
		if (isset($_POST['DAWTP'])) echo "Desarrollo de Aplicaciones Web con Tecnologías Propietarias<BR>";
		if (isset($_POST['DAWDCA'])) echo "Desarrollo de Aplicaciones Web Distribuidas de Código Abierto<BR>";
		echo "<BR><BR>"
?>
		<A href= 'MasterWeb.php'> Volver a inicio </A>

<?php
	} else {
?>
			<img src="logo.png" width= 120 height= 60>
			<br><br><br>
		
			<H2> Selecciona las asignaturas en que quieres matricularte </H2><BR><BR>
			<FORM name="matricula" method=post action= '<?php "{$_SERVER['PHP_SELF']}"  ?>'>
				<TABLE>
					<TR>
						<TD align=right><INPUT type="checkbox" name="SPW" value="Si"></TD>
						<TD align=left> Seguridad en la Programación Web</TD>
					</TR>
					<TR>
						<TD align=right><INPUT type="checkbox" name="DAWTP" value="Si"></TD>
						<TD align=left> Sistemas de Aplicaciones Web con Tecnologías Propietarias</TD>
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