<?php
//Librerías para el envío de mail
// include_once('phpmailer/class.phpmailer.php');
// include_once('phpmailer/class.smtp.php');
require_once('phpmailer/PHPMailerAutoload.php');

 
//Recibir todos los parámetros del formulario
//$nombre = $_POST['nombre'];
$name = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$asunto = "Enviado desde nebulizadores.com";

//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nuestra cuenta
$mail->Username ='todoenequipomedico@gmail.com';  //correo
$mail->Password = 'equip0tod0'; //Su password
 
//Agregar destinatario
$mail->AddAddress('ing.alfredoherrera@hotmail.com');
$mail->setFrom("todoenequipomedico@gmail.com","nebulizadores.com");
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo

$mail->msgHTML('Este contacto ha sido enviado desde nebulizadores.com:<br><br>
                  <table border="1">
                  <tr>
                  <th>Nombre Contacto</th>
                  <th>E-mail</th>
                  <th>Mensaje</th>
</tr>
<tr>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mensaje.'</td>
</tr>   

</table>');
 
//Avisar si fue enviado o no y dirigir al index
if(!$mail->send()) {

    echo'El correo no pudo ser enviado';
    echo 'Mailer Error: '.$mail->ErrorInfo;

} else {
    echo'Tu mensaje ha sido enviado, a la brevedad recibiras una respuesta, Gracias por tu interes.<br>';
    ?>
    <script language="javascript">
        var segundos = 5; //Segundos de la cuenta atrás
        function tiempo(){
            var t = setTimeout("tiempo()",1000);
            document.getElementById('contenedor').innerHTML = 'En un momento sera redireccionado al inicio en '+segundos--+" segundos.";
            if (segundos==0){
                window.history.back();  //Página a la que redireccionará a X segundos

                clearTimeout(t);
            }
        }
        tiempo()
    </script>
    <div id="contenedor">
    </div>
    <?php


}


?>
