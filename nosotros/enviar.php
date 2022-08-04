<?php 
    $correo_destino = 'cesarcoyoc@gmail.com';
    $asunto = 'prueba';
    $mensaje = $_POST['msg']
	mail($correo_destino, $asunto, utf8_decode($mensaje);
    header("Location:Index.html");
?>