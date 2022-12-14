<?php $titulo = "Listar Cursos"; 
    require_once __DIR__ . "/../inicio-html.php"; 
?>

<a href="/novo-curso" class="btn btn-primary mb-2">
    Novo Curso
</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item">
                <?= $curso->getDescricao(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require_once __DIR__ . "/../fim-html.php" ; ?>
