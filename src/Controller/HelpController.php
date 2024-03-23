<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HelpController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client
    ) {
    }

    #[Route('/help', name: 'app_help')]
    public function index(): Response
    {
        return $this->render('help/index.html.twig', [
            'controller_name' => 'HelpController',
        ]);
    }
}
