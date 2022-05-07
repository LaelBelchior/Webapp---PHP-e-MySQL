<?php

class Artigo{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this -> mysql = $mysql;
    }

    public function exibirTodos(): array
    {

        $resultado = $this -> mysql -> query('SELECT id, titulo, conteudo FROM artigos');
        $artigos = $resultado -> fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }

    public function buscaArtigoPorId(string $id): array
    {
        $selecionaArtigo = $this -> mysql -> prepare("SELECT id, titulo, conteudo FROM artigos WHERE id = ?");
        $selecionaArtigo -> bind_param('s', $id);
        $selecionaArtigo -> execute();
        $artigo = $selecionaArtigo -> get_result() -> fetch_assoc();

        return $artigo;
    }

    public function adicionar(string $titulo, string $conteudo): void
    {
        $adicionaArtigo = $this -> mysql -> prepare("INSERT INTO artigos(titulo, conteudo) VALUES(?,?);");
        $adicionaArtigo -> bind_param('ss', $titulo, $conteudo);
        $adicionaArtigo -> execute();
    }

    public function remover(string $id): void
    {
        $removeArtigo = $this -> mysql -> prepare('DELETE FROM artigos WHERE id = ?');
        $removeArtigo -> bind_param('s', $id);
        $removeArtigo -> execute();
    }

}