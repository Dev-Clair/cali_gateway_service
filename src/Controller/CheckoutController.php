<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CheckoutController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client
    ) {
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function index(): Response
    {
        return $this->render('checkout/index.html.twig', [
            'controller_name' => 'CheckoutController',
        ]);
    }
}
