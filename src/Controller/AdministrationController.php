<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Repository\ProductRepository;
use Diginamic\Framework\Services\NavigationService;
use Diginamic\Framework\Services\LoginService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Twig\Environment;

class AdministrationController extends Controller
{
  // Il faut créer un constructeur qui va récupérer les routes (dans les paramètres)
  // On stocke les routes dans un attribut $routes
  // on crée une méthode qui permet de créer le tableau links à partir de $routes
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
    $product = $this->productRepository->findAll();
    $html = $this->twig->render('home/administration.twig', [
      'title' => "Administration - Mobile Bike",
      'links' => $this->navService->routesToLinks('/admin'),
      'product' => $product,
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
}
