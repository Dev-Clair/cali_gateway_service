<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client
    ) {
    }

    #[Route('/product', name: 'app_product', methods: ['GET'])]
    public function index(): Response | JsonResponse
    {
        $product = $this->client->request('get', 'http://localhost:8800/product');

        return $this->json($product, 200);

        // return $this->render('product/index.html.twig', [
        //     'controller_name' => 'ProductController',
        // ]);
    }

    #[Route('/product/{productslug}', name: 'app_product_show', methods: ['GET'])]
    public function show($productslug): Response | JsonResponse
    {
        $product_detail = $this->client->request('get', 'http://localhost:8800/product/' . $productslug, []);

        return $this->json($product_detail, 200);

        // return $this->render('product/index.html.twig', [
        //     'controller_name' => 'ProductController',
        // ]);
    }
}
