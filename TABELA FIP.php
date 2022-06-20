<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <link rel="stylesheet" type="text/css" href="php.css">
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <link rel="shortcut icon" href="LU.svg" type="image/x-icon">
    <title>Calculadora IPVA</title>
</head>

<body>
    <header class="cabecalho">
        <img src="logo.png" alt="logo" width="200" height="200">

        <nav>
            <ul class="menu">
                <li class="links"><a href="ipva python.html">Home</a></li>
                <li class="links"><a href="#">Sobre</a></li>
                <li class="links"><a href="#">Ajuda</a></li>
            </ul>
        </nav>

        <div class="barra">
            <img src="cardapio.png "alt="barra" width="15" height="15">
        </div>

        <nav id="option" class="option1">
            <ul class="f">
                <li class="active">
                    <span class="tooltip">Connections</span>
                </li>
                <li class="active">
                    <span class="tooltip">Devices</span>
                </li>
                <li class="active">
                    <span class="tooltip">Contacts</span>
                </li>
                <li class="active">
                    <span class="tooltip">Fax</span>
                </li>
                <li class="active">
                    <span class="tooltip">Settings</span>
                </li>
                <li class="active">
                    <span class="tooltip">chat</span>
                </li>
            </ul>
        </nav>
    </header>

    <script type="text/javascript" src="js.js"></script>

    <section class="resultado">
        <h1>Valor do IPVA é:</h1><br>

        <section class="php">
            <?php

$reg=$_POST["regiao"];
$vec=$_POST["veiculos"];
$v=$_POST["valor"];

if ($reg=="sp")
{
    if ($vec=="carro")
    {
        $val=$v*4/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1.5/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2/100;
        echo"R$ $val ";
    }
}
else if ($reg=="es")
{
    if ($vec=="carro")
    {
        $val=$v*2/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*3/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*1.7/100;
        echo" R$ $val ";
    }
}
else if ($reg=="mg")
{
    if ($vec=="carro")
    {
        $val=$v*4.2/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2.2/100;
        echo"R$ $val ";
    }
}
else if ($reg=="rj")
{
    if ($vec=="carro")
    {
        $val=$v*4.10/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1.30/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2.50/100;
        echo" R$ $val";
    }
}
?>
        </section>
    </section>

    <footer class="rodape">
        <div class="conteudo">
            <ul class="redes">
                <li class="lista"><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwj_-YydxfH3AhXtjGgJHcxBBuwYABAAGgJ3Zg&ae=2&ei=IlqJYo_JNN-aseMP-KyROA&ohost=www.google.com&cid=CAASJORohmwEtVE0OrxA-nPKlhFCjk_BBOX-haMeU9AJDCSFqrHS0w&sig=AOD64_1TK8hsPpUrbmpYO03XdDZmkLsNFA&q&sqi=2&adurl&ved=2ahUKEwiP4vmcxfH3AhVfTWwGHXhWBAcQ0Qx6BAgDEAE"><img src="face.png" alt="facebook" width="36" height="36"></a></li>
                <li class="lista"><a href="https://www.instagram.com/"><img src="instagram (1).png" alt="instagram" width="36" height="36"></a></li>
                <li class="lista"><a href="https://twitter.com/login?lang=pt"><img src="twiter.png" alt="twiter" width="36" height="36"></a></li>
            </ul>

            <div class="contato">
                <h4>Contato:</h4>
                <p>IPVARS@gmail.com</p>
            </div>

            <div class="contato">
                <h4>Endereço:</h4>
                <p>Rua Carolina de Calligares Cibim-Parque Gramado</p>
            </div>

            <div class="texto">
                <h3>Copyright 2022</h3>
            </div>
        </div>
    </footer>
</body>

</html>
