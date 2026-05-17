<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Profissional</title>
    <link rel="stylesheet" href="index.css">
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

    <main class="content">
        <h1>Encontre o profissional ideal para suas necessidades</h1>
        <p>Conectamos clientes a profissionais qualificados em diversas áreas.
            Encontre o serviço que você precisa com facilidade e segurança.</p>
        <a href="#" class="cta-button">Comece Agora</a>

    </main>

    <div class="Produtos">

        <h1>o que oferecemos ?</h1>

        <p>Oferecemos uma plataforma fácil de usar para conectar clientes a profissionais qualificados em diversas áreas,como.</p>
        <div class="container-encanadores">
            <div class="card">
                <h2>Encanadores</h2>
                <p>Encontre encanadores qualificados para resolver seus problemas de encanamento com eficiência e qualidade.</p>
            </div>

            <div class="card">
                <h2>Eletricistas</h2>
                <p>Conecte-se com eletricistas experientes para garantir a segurança e o bom funcionamento das instalações elétricas.</p>
            </div>

            <div class="card">
                <h2>Pintores</h2>
                <p>Encontre pintores talentosos para transformar seus espaços com cores vibrantes e acabamentos de alta qualidade.</p>
            </div>

            <div class="card">
                <h2>Jardineiros</h2>
                <p>Conecte-se com jardineiros dedicados para cuidar do seu jardim e criar um ambiente verde e agradável.</p>
            </div>
        </div>

    </div>

    <section class="cadastro-profissional">

        <h1>Cadastre-se como Profissional</h1>

        <p>
            Preencha as informações abaixo para divulgar seus serviços
            em nossa plataforma.
        </p>

        <form class="form-profissional" id="formCadastro">

            <div class="input-group">
                <label>Nome Completo</label>
                <input type="text" id="nome" required>
            </div>

            <div class="input-group">
                <label>Serviço Oferecido</label>
                <input type="text" id="servico" required>
            </div>

            <div class="input-group">
                <label>Telefone</label>
                <input type="tel" id="telefone" required>   
            </div>

            <div class="input-group">
                <label>E-mail para Contato</label>
                <input type="email" id="email" required>
            </div>

            <div class="input-group">
                <label>Quanto cobra por hora?</label>
                <input type="number" id="valor" required>
            </div>

            <button type="submit" class="btn-cadastro">
                Cadastrar Profissional
            </button>

            <p id="mensagem-sucesso"></p>

        </form>

    </section>

<script>

document.getElementById("formCadastro").addEventListener("submit", function(event){

    event.preventDefault();

    const nome = document.getElementById("nome").value;
    const servico = document.getElementById("servico").value;
    const telefone = document.getElementById("telefone").value;
    const email = document.getElementById("email").value;
    const valor = document.getElementById("valor").value;

    const profissional = {
        nome,
        servico,
        telefone,
        email,
        valor
    };

    let profissionais =
        JSON.parse(localStorage.getItem("profissionais")) || [];

    profissionais.push(profissional);

    localStorage.setItem(
        "profissionais",
        JSON.stringify(profissionais)
    );

    document.getElementById("mensagem-sucesso").innerHTML =
    "✅ Cadastro realizado com sucesso!";

    document.getElementById("mensagem-sucesso").style.display = "block";

    this.reset();

});

</script>

<!-- =========================
     CADASTRO CLIENTE
========================= -->

<section class="cadastro-cliente">

    <h1>Solicite um Serviço</h1>

    <p>
        Preencha as informações abaixo para encontrar
        um profissional ideal para sua necessidade.
    </p>

    <form class="form-cliente" id="formCliente">

        <div class="input-group">
            <label>Nome Completo</label>
            <input type="text" id="nomeCliente" required>
        </div>

        <div class="input-group">
            <label>Serviço Solicitado</label>
            <input type="text" id="servicoCliente" required>
        </div>

        <div class="input-group">
            <label>Telefone</label>
            <input type="tel" id="telefoneCliente" required>
        </div>

        <div class="input-group">
            <label>E-mail</label>
            <input type="email" id="emailCliente" required>
        </div>

        <div class="input-group">
            <label>Descrição do Problema</label>
            <input type="text" id="descricaoCliente" required>
        </div>

        <button type="submit" class="btn-cliente">
            Solicitar Serviço
        </button>

        <p id="mensagem-cliente"></p>

    </form>

</section>

<script>

document.getElementById("formCliente")
.addEventListener("submit", function(event){

    event.preventDefault();

    const nome =
    document.getElementById("nomeCliente").value;

    const servico =
    document.getElementById("servicoCliente").value;

    const telefone =
    document.getElementById("telefoneCliente").value;

    const email =
    document.getElementById("emailCliente").value;

    const descricao =
    document.getElementById("descricaoCliente").value;

    const cliente = {
        nome,
        servico,
        telefone,
        email,
        descricao
    };

    let clientes =
    JSON.parse(localStorage.getItem("clientes")) || [];

    clientes.push(cliente);

    localStorage.setItem(
        "clientes",
        JSON.stringify(clientes)
    );

    document.getElementById("mensagem-cliente").innerHTML =
    "✅ Solicitação enviada com sucesso!";

    document.getElementById("mensagem-cliente").style.display =
    "block";

    this.reset();

});

</script>

</body>

</html>