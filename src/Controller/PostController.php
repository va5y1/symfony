<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index()
    {
      $repository = $this->getDoctrine()->getRepository(Post::class);
      $posts = $repository->findAll();
      return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }
  /**
   * @param Post $post
   * @return \Symfony\Component\HttpFoundation\Response
   * @Route("/post/{id}", name="post")
   */
  public function post(Post $post)
  {
    return $this->render('post/show.html.twig', [
      'post' => $post
    ]);
  }
}
