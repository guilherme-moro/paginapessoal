<?php
   $nome = $_GET['nome'];
   $fone = $_GET['fone'];
   $email = $_GET['email']);
   $motivo = $_GET['motivo'];
   $comentario = $_GET['comentario'];

   $destino = "guilherme.fer.moro@gmail.com";
   $assunto = "Contato da página pessoal";

   $corpo = "Nome: ".$nome. "\r\n".
   "Telefone: ".$fone. "\r\n".
   "Email: ".$email. "\r\n".
   "Motivo: ".$motivo. "\r\n".
   "Comentario: ".$comentario;

   $cabecalho = "Enviado de:".$email."\r\n".
             "X=Mailer:PHP/".phpversion();
    

    if(mail($destino,$assunto,$corpo,$cabecalho)){
        echo("Email enviado com sucesso!");
    }else{
        echo("O email não pode ser enviado");
    }
   
?>