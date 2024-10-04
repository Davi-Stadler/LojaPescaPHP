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
        <h1>Nossos Produtos</h1>
        <div class="produtos-container">
            <div class="produto">
                <img src="/img/canadepesca.jpg" alt="Cana de Pesca">
                <h2>Cana de Pesca</h2>
                <p>Ideal para pesca em rios e lagos.</p>
                <p class="preco">R$ 199,99</p>
                <button class="comprar">Comprar</button>
            </div>
            <div class="produto">
                <img src="/img/molinete.jpg" alt="Molinete">
                <h2>Molinete</h2>
                <p>Leve e resistente, perfeito para qualquer pescaria.</p>
                <p class="preco">R$ 149,99</p>
                <button class="comprar">Comprar</button>
            </div>
            <div class="produto">
                <img src="/img/iscasdiversas.jpg" alt="Iscas">
                <h2>Iscas Diversas</h2>
                <p>As melhores iscas para atrair os peixes.</p>
                <p class="preco">R$ 29,99</p>
                <button class="comprar">Comprar</button>
            </div>
            <div class="produto">
                <img src="/img/caixadepesca.jpg" alt="Caixa de Pesca">
                <h2>Caixa de Pesca</h2>
                <p>Perfeita para organizar seus equipamentos.</p>
                <p class="preco">R$ 89,99</p>
                <button class="comprar">Comprar</button>
            </div>
        </div>
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
