<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
	#[Route('/', name: 'app_home_index')]
	public function index(): Response
	{
			return $this->render('home/index.html.twig', [
					'prénom' => 'German',
			]);
	}

	#[Route('/a-propos', name: 'app_home_about')]
	public function about(): Response
	{
			return $this->render('home/about.html.twig');
	}

}
