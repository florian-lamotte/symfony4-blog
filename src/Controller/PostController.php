<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
  /**
  * @Route("/posts", name="blog_posts")
  */
  public function list()
  {
    return $this->render('post/list.html.twig');
  }

  /**
  * @Route("/post/{id}", name="blog_post", requirements={"id"="\d+"})
  */
  public function show(int $id)
  {
    return $this->render('post/show.html.twig', ['id' => $id]);
  }
}