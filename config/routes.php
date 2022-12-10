<?php

use Alura\Cursos\Controller\{ListarCursos,FormularioInsercao,Persistencia};

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class
];





