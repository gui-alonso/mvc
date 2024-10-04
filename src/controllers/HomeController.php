<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Post 1', 'conteudo' => 'Conteúdo do post 1'],
            ['titulo' => 'Post 2', 'conteudo' => 'Conteúdo do post 2'],
            ['titulo' => 'Post 3', 'conteudo' => 'Conteúdo do post 3'],
            ['titulo' => 'Post 4', 'conteudo' => 'Conteúdo do post 4'],
            ['titulo' => 'Post 5', 'conteudo' => 'Conteúdo do post 5'],
        ];

        $nome = 'Guilherme';

        $this->render('home', [
            'nome' => $nome,
            'posts' => $posts,
        ]);
        //$this->render('home', ['nome' => 'Guilherme']);
    }

    public function fotos()
    {
        echo 'Opa, fotos?';
    }

    public function foto($par)
    {
        // ACESSANDO ROTAS DINÂMICAS
        echo "Acessando foto: {$par['id']}";
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}