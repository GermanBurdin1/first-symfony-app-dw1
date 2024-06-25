<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home_index')]
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAllWithTags();
        return $this->render('home/index.html.twig', [
            'posts' => $posts
        ]);
    }

    #[Route('/a-propos', name: 'app_home_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'prenom' => 'Rémy',
        ]);
    }
}
