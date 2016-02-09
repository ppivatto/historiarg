<?php
//Importamos las variables del formulario de contacto

@$name = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$comment = addslashes($_POST['comment']);
//Preparamos el mensaje de contacto
$heads = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$subject = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "pepivatto@gmail.com"; //cambiar por tu email
$content = "$name ha enviado un mensaje desde la web www.historiarg.com.ar\n"
. "\n"
. "Nombre: $name\n"
. "Email: $email\n"
. "Comentarios: $comment\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $subject ,$content ,$heads )) {

//Si el mensaje se envía muestra una confirmación
//echo "Gracias por comunicarse con HistoriArg!!! su mensaje se envió correctamente....";
 header('Location: contacto-gracias.html?msg=val1');
} else {
//Si el mensaje no se envía muestra el mensaje de error
// echo "Error: Su información no pudo ser enviada, intente más tarde. Disculpe las molestias";
 header('Location: contacto-gracias.html?msg=val2');
}

// header('Location: http://www.historiarg.com.ar/contacto-gracias.html');
?>