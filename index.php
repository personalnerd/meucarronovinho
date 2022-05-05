<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho Novinho</title>
    <link rel="shortcut icon" href="imagens/icone.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/09a3488589.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <a href="index.php" title="Home" class="header-logo">
            <img src="img/logo.png" alt="Logotipo Meu Carrinho Novinho">
        </a>

        <a href="javascript:menu()" title="Menu" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

        <nav class="header-nav">
            <ul class="header-ul">
                <li>
                    <a href="home" title="Home">
                        <i class="fa-solid fa-house-chimney"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="quem-somos" title="Quem somos">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Quem Somos
                    </a>
                </li>
                <li>
                    <a href="estoque" title="Estoque">
                        <i class="fa-solid fa-car"></i>
                        Estoque
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main container">
        <?php
            $pagina = $_GET["param"] ?? "home";
            $pagina = "pages/{$pagina}.php";

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "pages/404.php";
            }
        ?>
    </main>

    <footer class="footer">
        <p>Desenvolvido por Tarcisio Uchoa</p>
    </footer>

    <script src="vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>