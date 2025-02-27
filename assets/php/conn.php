<?php 
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "palavra_x";
    // if ($conn = mysqli_connect($server, $username, $password, $database) ) {
    //     //echo "Conectado!";
    // } else {
    //     echo "Error: " . mysqli_connect_error();
    // }

    $host = "sql305.infinityfree.com";
    $dbname = "if0_38382368_palavrax";
    $user = "if0_38382368";
    $password = "oYMdRIP9qC";

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    function random_category($conn) {
        $sql = 'SELECT `id_category` FROM `category` ORDER BY RAND() LIMIT 1';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $word = $row['id_category'];

        return $word;
    };

    function get_name_category_by_id($conn, $id_category) {
        $sql = "SELECT `name_category` FROM `category` WHERE `id_category` = $id_category";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $word = $row['name_category'];

        return $word;
    };

    function random_word_by_category($conn, $id_category) {
        $sql = "SELECT `name_wordX` FROM `wordx` WHERE `id_category_fk` = $id_category ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $word = $row['name_wordX'];

        return $word;
    };

    function get_id_from_word($conn, $wordX) {
        $sql = "SELECT `id_wordX` FROM `wordx` WHERE `name_wordX` = '$wordX'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $word = $row['id_wordX'];

        return $word;
    }

    function get_tips_from_id_wordX($id_word){
        $sql = "SELECT `name_tip` FROM `tips` WHERE `id_wordX_fk` = $id_word ORDER BY RAND() LIMIT 20";
        
        return $sql;
    }
    
?>