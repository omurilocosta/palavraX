<?php 
    include './conn.php';

    $id_category = random_category($conn);
    $category = get_name_category_by_id($conn, $id_category);
    $wordX = random_word_by_category($conn, $id_category);
    $id_word = get_id_from_word($conn, $wordX);
    $result = get_tips_from_id_wordX($id_word);
    $dados = mysqli_query($conn,$result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PalavraX</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/_in_game.css">
    <link rel="stylesheet" href="../css/media-queries.css">
    <link rel="stylesheet" href="../css/vars.css">
</head>
<body>
    <header class="header__in-game u-flex u-items-center">
        <div class="category"><h2>CATEGORIA:</h2></div>
        <div class="type-category u-text-center"><h2><?php echo $category ?></h2></div>
    </header>
    <main class="content__in-game">
        <div class="word_x-area u-flex u-just-center u-items-center">
            <h1><?php echo $wordX ?></h1>
        </div>

        <div class="tips-area">

            <?php
                $index=0;
                while ($tip = mysqli_fetch_assoc($dados)){

                    $name_tip = $tip['name_tip'];
                    $index++;
                    echo " 
                        <a id='n$index' class='tip-item u-flex u-just-center u-items-center' href='#' onclick=\"get_data_from_tip('$name_tip'),abrirModal($index)\">
                            <h3>$index</h3>
                            <input type='hidden' value='$name_tip'>
                        </a>";
                }

            ?>
        
        </div>

    </main>
    <footer class="finish-round u-flex u-just-center u-items-center">
        <a href="">
            <div class="finish-button">
                <h2>FINALIZAR</h2>
            </div>
        </a>
    </footer>


    <div class="modal" id="modal-tip">
        <div class="modal__content u-flex u-flex-col u-items-center u-just-center">
            <h2 id="desc-tip" class="u-text-center"></h2>
            <div class="modal-buttons">
                <a id="close" href="#">
                    <i class='bx bx-x'></i>
                </a>
                <a id="check" href="">
                    <i class='bx bx-check'></i>
                </a>
            </div>
        </div>
    </div>

</body>
<script defer src="../js/script.js"></script>
</html>