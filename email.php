<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);


    $to ="achillespb@hotmail.com";
    $subject = "Contato - teste  PHP";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email. "\n".
            "Mensagem".$mensagem. "\n";


}





?>