<?php

namespace App;

class Post
{
    protected $comentarios = array();
    public function agregarComentario(Comment $comentario)
    {
        $this->comentarios[]= $comentario;
    }
    public function countComments()
    {
        return count($this->comentarios);
    }
    public function getComments()
    {
        return $this->comentarios;
    }
}
