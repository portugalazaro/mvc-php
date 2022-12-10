<?php
    $titulo = "Novo Curso";
    require_once __DIR__ . "/../inicio-html.php";


?>

    <form action="/salvar-curso" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" class="form-control" name="descricao">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>

<?php require_once __DIR__ . "/../fim-html.php" ; ?>
