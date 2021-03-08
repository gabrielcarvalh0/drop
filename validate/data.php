<?php

include_once('../conexao/conecta.php');

$nome = trim(strip_tags($_POST['nome']));
$cidade = trim(strip_tags($_POST['cidade']));
$email = trim(strip_tags($_POST['email']));

$insert = "INSERT INTO tb_users (nome, cidade, email) VALUES ('$nome', '$cidade', '$email') ";
$result = $conexao->prepare($insert);
$result->execute();

header('Location: ../enviado.html');