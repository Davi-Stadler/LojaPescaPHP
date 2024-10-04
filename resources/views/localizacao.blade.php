<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loja de Pesca</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>

    <!-- Menu Superior -->
    <header>
        <nav>
            <ul>
                <!-- Adicionando a logo no canto esquerdo -->
                <li class="logo">
                    <a href="/"><img src="/img/logopesca.png" alt="Logo Loja de Pesca"></a>
                </li>
                <li><a href="produtos">Produtos</a></li>
                <li><a href="sobrenos">Sobre Nós</a></li>
                <li><a href="localizacao">Nossa Localização</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo da página -->
    <main>
        <section class="conteudo">
            <h1>Estamos localizados na Rua da Pesca, 123</h1>
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14402.124772764342!2d-48.5061663!3d-25.5206771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94db9b9f6cec7133%3A0x23b362b5cf9ff4c6!2sRJ%20Pesca%20e%20Acess%C3%B3rios%20N%C3%A1uticos!5e0!3m2!1spt-BR!2sbr!4v1726753997002!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>Loja de Pesca - Equipamentos para suas aventuras aquáticas!</p>
        <p>Endereço: Rua das Águas, 123 - Praia da Pesca, Paranaguá - PR</p>
        <p>Telefone: (41) 1234-5678 | Email: contato@lojadepesca.com.br</p>
        <p>Horário de funcionamento: Seg-Sex das 8h às 18h | Sáb das 8h às 12h</p>
    </footer>

</body>
</html>
