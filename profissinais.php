<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Profissional</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <header class="navbar">

        <div class="logo">
            <a href="./index.php"> Seu Profissional</a>
        </div>

        <nav class="menu">
            <a href="./profissinais.php">Profissional</a>
            <a href="./cadastroclien.php">Cliente</a>
        </nav>


    </header>

    <section class="lista-profissionais">

        <h1>Profissionais Disponíveis</h1>

        <div id="cards-profissionais"></div>

    </section>

    <script>
        const lista =
            JSON.parse(localStorage.getItem("profissionais")) || [];

        const container =
            document.getElementById("cards-profissionais");

        if (lista.length === 0) {

            container.innerHTML =
                "<p>Nenhum profissional cadastrado.</p>";

        } else {

            lista.forEach(function(profissional) {

                container.innerHTML += `

        <div class="card-profissional">

            <h2>${profissional.nome}</h2>

            <p>
                <strong>Serviço:</strong>
                ${profissional.servico}
            </p>

            <p>
                <strong>Telefone:</strong>
                ${profissional.telefone}
            </p>

            <p>
                <strong>Email:</strong>
                ${profissional.email}
            </p>

            <p>
                <strong>Valor/Hora:</strong>
                R$ ${profissional.valor}
            </p>

        </div>

        `;

            });

        }
    </script>
</body>

</html>