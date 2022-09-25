<?php
    $error = "";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tech Notícias</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <body>
        <section class="main">
            <form method="POST" id="createnew">
                <?php
                    echo "$error";
                ?>
                <h2>Crie sua notícia:</h2>
                <input type="text" name="title" placeholder="Título">
                <textarea name="text" palceholder="Texto"></textarea>
                <button type="submit">Criar Notícia</button>
            </form>
        </section>
    </body>
</hmtl>