
<?php
session_start();
?>
<?php
echo '<p></p>';
echo '<h1 align="center"><font color="#0000FF">Bienvenido Al Sistema Kolping</h1></font>';
if (isset($_SESSION['k_username']))
{
    echo '<h4 align="center"><font color="#0000FF">Usuario : '.'<b>'.$_SESSION['k_username'].''.' <a href="logout.php">Cerrar Sesion </a></font></b></h4>';
	echo '<table border="1" align="center">';
    echo '<h2 align="center"><font color="#0000FF">MENU PRINCIPAL</font></h2>';
    echo '<tr>';
	echo '<td><a href="http://localhost/kolping/evaluacion.php	">Selecion de Personal</td>';
	echo '<td><a href="http://localhost/miguel/evaluacion.php">Evaluacion</td>';
	echo '<td><a href="http://localhost/miguel/periodoprueva">Periodo de prueva</td>';
	echo '<td><a href="http://localhost/miguel/requerimiento">Requerimineto</td>';
	echo '</tr>';
	echo '<tr>';
    echo '<td><a href="http://localhost/miguel/entrevistaseleccion">Selecion de Personal</td>';
	echo '<td><a href="http://localhost/miguel/evaluacion">Evaluacion</td>';
	echo '<td><a href="http://localhost/miguel/periodoprueva">Periodo de prueva</td>';
	echo '<td><a href="http://localhost/miguel/requerimiento">Requerimineto</td>';
    echo '</tr>';
	echo '<tr>';
    echo '<td><a href="http://localhost/miguel/entrevistaseleccion">Selecion de Personal</td>';
	echo '<td><a href="http://localhost/miguel/evaluacion">Evaluacion</td>';
	echo '<td><a href="http://localhost/miguel/periodoprueva">Periodo de prueva</td>';
	echo '<td><a href="http://localhost/miguel/requerimiento">Requerimineto</td>';
    echo '</tr>';
	echo '<tr>';
    echo '<td><a href="http://localhost/miguel/entrevistaseleccion">Selecion de Personal</td>';
	echo '<td><a href="http://localhost/miguel/evaluacion">Evaluacion</td>';
	echo '<td><a href="http://localhost/miguel/periodoprueva">Periodo de prueva</td>';
	echo '<td><a href="http://localhost/miguel/requerimiento">Requerimineto</td>';
    echo '</tr>';
	echo '</table>';
    //echo '<p><a href="logout.php">Logout</a></p>';
    echo '<p align="center"><a href="http://localhost/miguel/ej_control_pers">Control de Personal</a> <a href="http://localhost/miguel/ej_control_pers">Seleccion de Personal</a></p>';
    echo '<p></p>';
}
else
{
    echo '<form action="validar_usuario.php" method="post">';
    echo '<table border="1" align="center">';

    echo '<td  width="80">Usuario<td>';
    echo '<input type="text" name="usuario" size="15" maxlength="15"/></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td  width="80">Password</td>';
    echo '<td><input type="password" name="password" size="15" maxlength="15" /></td>';
    echo '<tr>';
    echo '<td align="center"><input type="submit" value="Ingresar"/></td>';
    echo '<td align="center"><input type="reset" value="Limpiar" /></td>';
    echo '</form>';
    echo '</table>';
    echo '<br>';
    //echo'<p><a href="login.php">Login</a></p>';
    echo '<h3 align="center"><font color="#0000FF">Para Ingresar al Sistema debe estar registrado previamente</h3></font>';
    echo '<p align="center"><a href="registrar.php">Registrar</a></p>';
}
?>
<html>
<body leftmargin="0" topmargin="0">
<center>
<table width="750" border="1" cellspacing="0" cellpadding="0" bgcolor="#FF93" bordercolor="#000000">
  <tbody><tr>
    <td align="center" valign="top">
	
	<table width="750" height="397" border="0" cellpadding="0" cellspacing="0">
 		 <tbody>
 		   <tr>
    		<td height="154">
			
			<table width="750" border="0" cellspacing="0" cellpadding="0">
 			 <tbody>
 			   <tr>
   			 <td width="189" height="125" align="center" valign="middle"><img src="kolpg.jpg" width="194" height="193"></td>
  			  <td width="561" align="right"><img src="file:///E|/mi proyecto/fotos de mi proye/Adolfo-Kolping-251x300.jpg" width="162" height="195"></td>
 			 </tr>
			</tbody></table>
		
			</td>
  		</tr>
		
		<tr><td height="4" bgcolor="#000000"><font class="peque">
		
			<table border="0" cellpadding="1" cellspacing="0"><tbody><tr>
		 		<td>&nbsp;</td>
				<td><a href="http://www.tunari.com/bolivia-hospedaje-diseno-paginas-web.php"><img src="./Diseño de Páginas paginas, Sitios y Sistemas Web, Tunari.com, Bolivia, Hosting, Hospedaje de Páginas Web en Gigas y Megas, Registro de nombres dominios, Empresa Nosotros_files/servicios.gif" border="0"></a></td>
				<td><a href="http://www.tunari.com/bolivia-marketing-analisis-publicidad-web.php"><img src="./Diseño de Páginas paginas, Sitios y Sistemas Web, Tunari.com, Bolivia, Hosting, Hospedaje de Páginas Web en Gigas y Megas, Registro de nombres dominios, Empresa Nosotros_files/marketing.gif" border="0"></a></td>
				<td><a href="http://www.tunari.com/bolivia-nombre-dominio-hosting-diseno-web.php"><img src="./Diseño de Páginas paginas, Sitios y Sistemas Web, Tunari.com, Bolivia, Hosting, Hospedaje de Páginas Web en Gigas y Megas, Registro de nombres dominios, Empresa Nosotros_files/ofertas.gif" border="0"></a></td>
				<td>&nbsp;</td>
			  </tr></tbody></table>
		</font></td>
		</tr>
		<tr>
    		<td valign="top"><br>
    		  <table width="706">
    		    <tr>
			    <td width="596" align="center"><h1>FUNDACION PADRE ADOLFO KOLPING</h1></td>
			    </tr>
			  </table>
			<p><br>
			</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><br>
			  <br>
			  </p>			</td>
		   </tr>
	</tbody></table>
   <a href="http://localhost/kolping/login/">Volver</a>

<body> 
<form name="Reloj"> 
<input type="text" size=7 name="tiempo" value="mm:hh:ss" title="Tiempo restante para finalizar el día">
<script language="JavaScript"> 
<!-- 
var tiempoAtras; 

updateReloj(); 
function updateReloj() { 
var tiempo = new Date(); 
var hora = 23-tiempo.getHours(); 
var minutos = 59-tiempo.getMinutes(); 
var segundos = 59-tiempo.getSeconds(); 

tiempoAtras= (hora < 10) ? hora :hora; 
tiempoAtras+= ((minutos < 10) ? ":0" : ":") + minutos; 
tiempoAtras+= ((segundos < 10) ? ":0" : ":") + segundos; 

document.Reloj.tiempo.value = tiempoAtras; 

setTimeout("updateReloj()",1000); 
} 
//--> 
</script> 

</form> 
</body> 
</html>
