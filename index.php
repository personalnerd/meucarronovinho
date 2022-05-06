<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho Novinho</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/icones/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icones/favicon-16x16.png">
    <link rel="manifest" href="/img/icones/site.webmanifest">
    <link rel="mask-icon" href="/img/icones/safari-pinned-tab.svg" color="#fecd00">
    <link rel="shortcut icon" href="/img/icones/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/img/icones/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="container">        
            <a href="index.php" title="Home" class="header__logo">
                <img src="img/logo.png" alt="Logotipo Meu Carrinho Novinho">
            </a>

            <a href="javascript:menu()" title="Menu" class="header__menu">
                <i class="fa-solid fa-bars"></i>
            </a>

            <nav class="header__nav">
                <ul>
                    <li>
                        <a href="home" title="Home">
                            <i class="fa-solid fa-house-chimney"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="estoque" title="Estoque">
                            <i class="fa-solid fa-car"></i>
                            Estoque
                        </a>
                    </li>
                    <li>
                        <a href="sobre" title="Sobre">
                            <i class="fa-solid fa-address-card"></i>
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="contato" title="Contato">
                            <i class="fa-solid fa-envelope"></i>
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
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
        <p>Desenvolvido por <strong>Tarcisio Uchoa</strong><br>
        para a aula de SASS na <a href="https://webdev.alfaumuarama.edu.br/" target="_blank">Pós-Graduação em Desenvolvimento de Aplicações para Internet e Dispositivos Móveis</a><br>
        UniAlfa Umuarama</p>
        <ul class="redes-sociais">
            <li><a href="https://github.com/personalnerd" target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="https://linkedin.com/in/tcavalcante" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/tarcis_io" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://facebook.com/tarcisio" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            
        </ul>
    </footer>

    <script src="vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>