<?php
 include '../model/hotel-cliente.php';

 $diaria = new Hotel();
 $cli = new Cliente();

 $cli->setNome($_POST['txtnome']);
 $cli->setRg($_POST['txtrg']);
 $cli->setEmail($_POST['txtemail']);
 $cli->setTelefone($_POST['txttelefone']);

 $diaria->setDias($_POST['txtdias']);
 $diaria->setQuartos($_POST['txtquartos']);

echo "<p>Nome: {$cli->getNome()}</p>".
"<p>RG: {$cli->getRg()}</p>".
"<p>Email: {$cli->getEmail()}</p>".
"<p>Telefone: {$cli->getTelefone()}</p>";
echo "<hr>";
echo "<p>cálculo dias: {$diaria->calcularDiaria()}</p>".
"<p>suíte escolhida: {$diaria->selecionarCategoria()}</p>";
?>