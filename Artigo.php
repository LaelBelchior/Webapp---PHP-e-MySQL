<?php

class Artigo{

    public function exibirTodos(): array
    {
        $artigos = [
            [
                'titulo' => 'Aprendendo PHP com MySQL',
                'conteudo' => 'Curso de PHP integrado com MySQL para construção de webapps',
                'link' => ''
            ],
            [
                'titulo' => 'Aprendendo Inglês',
                'conteudo' => 'Curso de Inglês para ajudar no aprendizado de programação',
                'link' => ''
            ],
            [
                'titulo' => 'Cuidando do joelho',
                'conteudo' => 'Exercícios para cuidar do joelho e parar de sentir dor',
                'link' => ''
            ]
        ];

        return $artigos;
    }

}