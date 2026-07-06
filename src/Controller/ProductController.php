<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Model\Product;
use Diginamic\Framework\Repository\ProductRepository;
use Diginamic\Framework\Services\NavigationService;
use Diginamic\Framework\Services\LoginService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Twig\Environment;

class ProductController extends Controller
{
    // Attributs
    private $productRepository;

    public function __construct(NavigationService $navService, Environment $twig, LoginService $loginService)
    {
        $this->productRepository = new ProductRepository();
        $this->navService = $navService;
        $this->twig = $twig;
        $this->loginService = $loginService;
    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        // Récupération des produit de type Model\Product car c'est le repository (ici AbstractRepository) qui fait la
        // correspondance (mapping) entre la base de données et le "Model" objet.
        $product = $this->productRepository->findAll();

        $html = $this->twig->render('shop/index.twig', [
            'title' => "Produits - Mobile Bike",
            'product' => $product,
            'links' => $this->navService->routesToLinks('/boutique'),
            'status' => $this->loginService->connection()
        ]);

        return new Response(
            200,
            ['Content-Type' => 'text/html'],
            $html
        );
    }
}
