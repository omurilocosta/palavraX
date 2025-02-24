<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PalavraX</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/media-queries.css">
    <link rel="stylesheet" href="./assets/css/vars.css">
    <link rel="shortcut icon" href="./assets/img/Palavra.png" type="image/x-icon">
</head>
<body>
    <div class="game-initial-page">
        <div class="game-logo u-flex u-flex-col u-just-center u-items-center">
            <div class="title u-flex u-items-center"><span class="logo"><h1>Palavra</h1></span><span class="logo"><h1>X</h1></span></div>
            <div class="subtitle"><span class="slogan">Descubra a palavra secreta através das dicas</span></div>
        </div>
    </div>
    <div class="game-initial-page">
        <ul class="game-buttons-option">
            <a href="./assets/php/_in_game.php">
                <li class="button-option">
                    <h2>INICIAR JOGO</h2>
                </li>
            </a>
            <a href="./assets/php/_instructions.php">
                <li class="button-option">
                    <h2>INSTRUÇÕES</h2>
                </li>
            </a>
            <a href="./assets/php/_about_game.php">
                <li class="button-option">
                    <h2>SOBRE O JOGO</h2>
                </li>
            </a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd5JCt8KyMpm8_9t2lYfHDBW1ox_u5V8kGPemIr0aNde86NWw/viewform?usp=header">
                <li class="button-option">
                    <h2>RELATE UM ERRO  ⚠</h2>
                </li>
            </a>
        </ul>
    </div>
</body>
</html>