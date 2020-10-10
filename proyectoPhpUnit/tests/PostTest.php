<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function agregarComentariosPost()
    {
        $post = new Post();
        $comment = new Comment();

        $post->agregarComentario($comment);
        //comprobar que tengo un post
        $this->assertEquals(1, $post->countComments());
        //verifica que se haga una instancia de comentarios
        //despues reviso ese comnetario es instancia de esa clase revise el primer comentario
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}
