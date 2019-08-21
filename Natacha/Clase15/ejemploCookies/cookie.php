<?php
session_start();
if(!empty($_SESSION['usuario'])){
/* La funcion empty() devuelve verdadero si el argumento posee un valor vacio,
al usar !empty() devuelve verdadero no solo si la variable fue declarada sino
ademas si contiene algun valor no nulo.
*/
echo 'Te haz logueado como: '.$_SESSION['usuario'].'<br />';
echo 'Haz logrado el acceso a una pagina segura';
}
  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
    // suma 1 al contador de cookies
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Bienvenido a nuestra página web'; 
  } 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Prueba de cookie</title> 
</head> 
<body> 
<p> 
<?php echo $mensaje; ?> 
</p> 
</body> 
</html> 