<?php 

  session_start();

  session_destroy();

  header("Location:paginainicio.php");

?>