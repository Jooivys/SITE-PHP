<?php

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$assunto = $_REQUEST['assunto'];
$form = "$nome\n $sobrenome\n $email\n $telefone\n $assunto";

echo "<h3>Obrigado pelo contato</h3>";
echo "<p>Em breve retornaremos</p>";

($arquivo = fopen("dados/$nome.txt", "w"));
fwrite($arquivo, "$form \n");
fclose($arquivo);
