<?php
 $nombre = $_POST['nombre']; //$nombre --> la variable en php ['nombre'] --> la variable del formulario que contiene el valor 
 $apellido = $_POST['apellido']; 
 $correo = $_POST['correo'];
 $mensaje = $_POST['mensaje'];
  //echo $nombre." ".$apellido." ".$correo." ".$mensaje; --> comprobación para saber si tienen contenido las variables 
 $para = "lorenzoiglesias@movistar.es";
 $asunto = "Correo enviado desde mi web."; 
 $cabecera = "From:".$correo; $cuerpo = $nombre." ".$apellido."\n"; //.= es lo mismo que +=, ya que se va a concatenar otra línea debajo 
 $cuerpo .= "Ha enviado el siguiente mensaje:"."\n";

 $cuerpo .= $mensaje; $cuerpo .= "----------------------------------"."\n";
if(mail($para,$asunto,$cuerpo,$cabecera)){ //si cumple la condición, se cargará la página gracias.html 
	header('Location:gracias.html'); //Location: se utiliza para cargar una página que nosotros queramos, en este caso, en el mismo nivel que las demás páginas 
}
 else{
  header('Location:error.html'); 
} 
?>