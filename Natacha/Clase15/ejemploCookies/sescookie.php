<?php 
  session_start();

  if(isset($_SESSION['contador'])) 
  { 
    $_SESSION['contador'] = $_SESSION['contador'] + 1; 
    $mensaje = 'Número de visitas: ' . $_SESSION['contador']; 
  } 
  else 
  { 
    $_SESSION['contador'] = 1; 
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