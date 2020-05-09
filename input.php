<html>
    <head>
        <link rel="stylesheet" href="Styles/creation.css"/>
    </head>

    <body>
        <?php
            if(isset($_GET['insertion'])) echo $_GET['insertion'];
        ?>

        <form action="includes/add.php" method="POST">
            <div id="text_input">
                <input id="Image_select" name="image_input" type="file" accept="image/*">
                <br>
                <input id="titulo" class="text_input" type="text" name="titulo" placeholder="Título">
                <br><br>
                <input class="text_input" type="text" name="editora" placeholder="Editora">
                <br><br>
                <input class="text_input" type="int" name="paginas" placeholder="Páginas">
                <br><br>
                <input class="text_input" type="text" name="local" placeholder="Local">
                <br><br>
                <input class="text_input" type="text" name="dono" placeholder="Dono">
            </div>

            <br>
            <div id="status_area">
                <input class="status" type="radio" name="status" value="não lido">Não lido
                <input class="status" type="radio" name="status" value="lido">Lido
            </div>

            <br>
            <div id="submit_area">
                <button id="submit" type="submit" name="submit">Adicionar</button>
            </div>
        </form>

    </body>
</html>