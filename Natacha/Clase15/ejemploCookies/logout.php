<?php
 session_start ();
 if(!empty($_SESSION['usuario']))
 {
 session_destroy ();
 echo "Sesión finalizada";
 }
?>