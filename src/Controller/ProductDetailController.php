<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductDetailController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client
    ) {
    }

    #[Route('/product-detail', name: 'app_product_detail')]
    public function index(): Response
    {
        return $this->render('product_detail/index.html.twig', [
            'controller_name' => 'ProductDetailController',
        ]);
    }
}
