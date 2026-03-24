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
    ]);

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
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("Accueil", $html)
  public function presentationEcologie(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('presentation/personnalisation.twig', [
      'title' => "Personnalisation",
      'links' => $this->navService->routesToLinks('/presentation/personnalisation'),
    ]);
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function Ecologie(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('presentation/ecologie.twig', [
      'title' => "Écologie",
      'links' => $this->navService->routesToLinks('/presentation/ecologie'),

    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("presentationEcologie", $html)

    public function pageAdministration(ServerRequestInterface $request): ResponseInterface
    {

        $html = $this->twig->render('home/administration.twig', [
            'title' => "Administration",
            'links' => $this->navService->routesToLinks('/administration'),
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
  } //View::baseTemplate("Accueil", $html)

  public function entretien(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/entretien.twig', [
      'title' => "Entretien",
      'links' => $this->navService->routesToLinks('/entretien'),
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  } //View::baseTemplate("Accueil", $html)

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
