<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index()
    {
      $posts = [
        'post1' => [
          'title' => '1 Заголовок',
          'body' => 'Тело первого поста'
        ],
        'post2' => [
          'title' => '2 Заголовок',
          'body' => 'Тело второго постdfgdfgsdfgsdfgsdgdgdfgsggdfgsdfgsdfg sdfg sdf g sd sdf  dfg sdfg sd sdf gfs sdf sdf sdf sdfg  а'
        ],
        'post3' => [
          'title' => '3 Заголовок',
          'body' => 'Тело третьего поста'
        ],
      ];
      return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }
}
