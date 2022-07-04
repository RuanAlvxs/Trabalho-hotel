<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>
    <h1>Hotel Tal</h1>
    <form action="../controller/hotel-controller.php" method="POST">
        <label>Nome: 
            <input type="text" name:="txtnome" placeholder="Digite seu nome:">
        </label>
        <br><br>
        <label>Telefone:
            <input type="number" name="txttelefone" placeholder="Digite seu telefone:">
        </label>
        <br><br>
        <label>RG:
            <input type="number" name="txtrg" placeholder="Digite seu RG:">
        </label>
        <br><br>
        <label>Email:
            <input type="text" name="txtemail" placeholder="Digite seu email:">
        </label>
        <br><br>
        <label>Quantidade de Dias:
            <input type="number" name="txtdias" placeholder="Selecione a quantidade de dias desejados">
        </label>
        <br><br>
        <label>Selecione sua Suíte: <br>
            <select name="txtquartos">
                <option>Suíte Single - R$100,00 a diária</option>
                <option>Suíte Master - R$150,00 a diária</option>
                <option>Suíte Família - R$180,00 a diária</option>
            </select>
        </label>

        <br><br>
        <input action="../hotel-controller.php" type="submit" value="Resumo">&nbsp
        <input type="reset" value="Limpar Campos">
    </form>
</body>

</html>