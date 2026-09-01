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
            ['Location' => '/admin'],
            ''
        );
    }


    public function edit(ServerRequestInterface $request, array $routeParams = [])
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];
        if (isset($id)) {

            $formData = $request->getParsedBody();

            $product = $this->productRepository->findById($id);
            $product->hydrate($formData);
            $product->id = $id;

            if (!$this->productRepository->save($product)) {
                return new Response(
                    418,
                    ['Content-Type' => 'text/html'],
                    '<h1>Problème dans la mise à jour </h1>'
                );
            }

            return new Response(
                302,
                ['Location' => '/admin'],
                ''
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            '<h1>La requête HTTP a été mal formulée </h1>'
        );

    }
    public function displayEditForm(ServerRequestInterface $request, array $routeParams = [])
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];

        $title = "Modification d'un produit";
        if (isset($id)) {


            $product = $this->productRepository->findById($id);

            $html = $this->twig->render('shop/editForm.twig', [
                'title' => $title,
                'links' => $this->navService->routesToLinks('/administration/edit'),
                'product' => $product,
                'status' => $this->loginService->connection()
            ]);

            if (!$product) {
                return new Response(
                    404,
                    ['Content-Type' => 'text/html'],
                    '<h1>Aucun produit ne correspond ! </h1>'
                );
            }

            return new Response(
                200,
                ['Content-Type' => 'text/html'],
                $html
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            '<h1>La requête HTTP a été mal forumlée </h1>'
        );
    }

public function delete(ServerRequestInterface $request, array $routeParams = []): ResponseInterface
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];
        if (isset($id)) {
            $delete = $this->productRepository->delete($id);

            if (!$delete) {
                return new Response(
                    418,
                    ['Content-Type' => 'text/html'],
                    '<h1>Problème dans la suppression du produit </h1>'
                );
            }

            return new Response(
                302,
                ['Location' => '/admin'],
                ''
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            '<h1>La requête HTTP a été mal formulée </h1>'
        );
    }
}
