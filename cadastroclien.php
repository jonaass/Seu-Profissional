<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./cadastroclien.css">
</head>

<body>

<header class="navbar">

    <div class="logo">
        <a href="./index.php">Seu Profissional</a>
    </div>

    <nav class="menu">
        <a href="./profissinais.php">Profissional</a>
        <a href="./cadastroclien.php">Cliente</a>
    </nav>

</header>

<section class="lista-profissionais">

    <h1>Clientes Procurando Serviços</h1>

    <div id="cards-clientes"></div>

</section>

<script>

const listaClientes =
JSON.parse(localStorage.getItem("clientes")) || [];

const containerClientes =
document.getElementById("cards-clientes");

if(listaClientes.length === 0){

    containerClientes.innerHTML =
    "<p>Nenhum cliente cadastrado.</p>";

}else{

    listaClientes.forEach(function(cliente){

        containerClientes.innerHTML += `

        <div class="card-profissional">

            <h2>${cliente.nome}</h2>

            <p>
                <strong>Serviço:</strong>
                ${cliente.servico}
            </p>

            <p>
                <strong>Telefone:</strong>
                ${cliente.telefone}
            </p>

            <p>
                <strong>Email:</strong>
                ${cliente.email}
            </p>

            <p>
                <strong>Descrição:</strong>
                ${cliente.descricao}
            </p>

        </div>

        `;

    });

}

</script>

</body>

</html>