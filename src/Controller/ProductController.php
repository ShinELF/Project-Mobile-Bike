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
          public function displayAddForm(ServerRequestInterface $request): ResponseInterface
    {

        $title =  "Ajout d'un produit";
        $html = $this->twig->render('shop/addForm.twig', [
            'title' => $title,
            'links' => $this->navService->routesToLinks('/administration/add'),
            'status' => $this->loginService->connection()
        ]);



        return new Response(
            200,
            ['Content-Type' => 'text/html'],
            $html
        );
    }

    public function add(ServerRequestInterface $request): ResponseInterface
    {
        // Récupération des données du formulaire dans le cadre du PSR-7 qui utilise les objets request et response
        $data = $request->getParsedBody();

        // Création de l'entité User
        $productEntity = new Product();

        // Hydratation de l'utilisation
        $productEntity->hydrate($data);


        // Appel au modèle ou au repository
        $this->productRepository->save($productEntity);



        // Si tout s'est bien passé, on redirige
        return new Response(
            302,
            ['Location' => '/administration'],
            ''
        );
    }
}
