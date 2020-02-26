<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostsController extends AbstractController
{
  /**
  * @Route("/posts")
  */

  public function list()
  {
    return $this->render('posts/posts.html.twig');
  }
}