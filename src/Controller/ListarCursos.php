<?php

namespace Alura\Cursos\Controller;
use \Alura\Cursos\Entity\Curso;
use \Alura\Cursos\Infra\EntityManagerCreator;
use \Alura\Cursos\Controller\InterfaceControladorRequisicao;

class ListarCursos implements InterfaceControladorRequisicao
{

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    
    
    public function processaRequisicao():void
    {
        $cursos = $this->repositorioDeCursos->findAll();

        require_once  __DIR__ . "/../../view/cursos/listar-cursos.php";

    }


    public function teste()
    {
        echo 'metodo de teste funcionando';
    }

}