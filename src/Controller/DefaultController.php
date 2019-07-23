<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->find(2);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'post' => $post,
        ]);
    }
}
