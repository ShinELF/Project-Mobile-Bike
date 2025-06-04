<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Services\NavigationService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Twig\Environment;

class HomeController extends Controller
{
  // Il faut créer un constructeur qui va récupérer les routes (dans les paramètres)
  // On stocke les routes dans un attribut $routes
  // on crée une méthode qui permet de créer le tableau links à partir de $routes

  public function __construct(NavigationService $navService, Environment $twig)
  {
    $this->navService = $navService;
    $this->twig = $twig;
  }
  public function index(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/index.twig', [
      'title' => "Bienvenue sur notre site web",
      'links' => $this->navService->routesToLinks('/'),
      'date' => date(DATE_ATOM, strtotime('now'))
    ]);
    /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } 
    public function presentation(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/presentation.twig', [
      'title' => "Présentation",
      'links' => $this->navService->routesToLinks('/presentation'),
      'date' => date(DATE_ATOM, strtotime('now'))
    ]);
    /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("Accueil", $html)

      public function event(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/evenement.twig', [
      'title' => "Évènements",
      'links' => $this->navService->routesToLinks('/evenement'),
      'date' => date(DATE_ATOM, strtotime('now'))
    ]);
    /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("Accueil", $html)
        public function shop(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/boutique.twig', [
      'title' => "Boutique en ligne",
      'links' => $this->navService->routesToLinks('/boutique'),
      'date' => date(DATE_ATOM, strtotime('now'))
    ]);
    /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } 
          public function entretien(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/entretien.twig', [
      'title' => "Entretien",
      'links' => $this->navService->routesToLinks('/entretien'),
      'date' => date(DATE_ATOM, strtotime('now'))
    ]);
    /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("Accueil", $html)
}
