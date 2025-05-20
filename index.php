<?php
/**
*Procesamiento de correo electronico válido
*Recibe un correo electronico a través de POST 
*Si es correcto lo válida y da mensaje
*Si no es correcto da un mensaje avisandolo. 
*
*@package ValidacionEmail
*@autor Sara Ramos
*@version 1.0
*
**/

function procesarEmailFormulario(){

/**
*Email a validar
*@var string  $email
**/
    $email =$_POST['email'] ?? '';

/**
*Condicional que valida 
*@var string @email
**/
    if($email){
        echo "Email '". htmlspecialchars($email) . "' recibido con éxito.";
    }else {
        echo "Por favor, envía un email válido";
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    procesarEmailFormulario();
}

?>

<form method="POST">
    <input type="email" name="email" placeholder="tu.email@ejemplo.com" required>
    <button type="submit">Enviar </button>
</form>
