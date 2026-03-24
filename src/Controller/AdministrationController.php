<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Model\Product;
use Diginamic\Framework\Repository\ProductRepository;
use Diginamic\Framework\Services\NavigationService;
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

  public function __construct(NavigationService $navService, Environment $twig)
  {
    $this->productRepository = new ProductRepository();
    $this->navService = $navService;
    $this->twig = $twig;
  }


  public function pageAdministration(ServerRequestInterface $request): ResponseInterface
  {
    $product = $this->productRepository->findAll();
    $html = $this->twig->render('home/administration.twig', [
      'title' => "Administration",
      'links' => $this->navService->routesToLinks('/administration'),
      'date' => date(DATE_ATOM, strtotime('now')),
      'product' => $product
    ]);
    /* $html = View::header($links);
        $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
  public function event(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/evenement.twig', [
      'title' => "Évènements",
      'links' => $this->navService->routesToLinks('/evenement'),
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function findAll(ServerRequestInterface $request): ResponseInterface
  {

    $title = "Boutique en ligne";
    // Récupération des produit de type Model\Product car c'est le repository (ici AbstractRepository) qui fait la 
    // correspondance (mapping) entre la base de données et le "Model" objet.


    $html = $this->twig->render('shop/index.twig', [
      'title' => $title,
      'links' => $this->navService->routesToLinks('/boutique'),

    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
  public function pageInscription(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/inscription.twig', [
      'title' => "Inscription",
      'links' => $this->navService->routesToLinks('/inscription'),
    ]);
    /* $html = View::header($links);
        $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
  public function subsciptionSuccess(ServerRequestInterface $request): ResponseInterface
  {

    $title =  "Ajout d'un utilisateur";
    $html = $this->twig->render('home/inscriptionReussie.twig', [
      'title' => $title,
      'links' => $this->navService->routesToLinks('/'),

    ]);



    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
}
