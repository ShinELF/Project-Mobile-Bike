<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Services\LoginService;
use Diginamic\Framework\Services\NavigationService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Twig\Environment;

class HomeController extends Controller
{

  public function __construct(NavigationService $navService, Environment $twig, LoginService $loginService)
  {
    $this->navService = $navService;
    $this->twig = $twig;
    $this->loginService = $loginService;
  }

  public function index(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/index.twig', [
      'title' => "Accueil - Mobile Bike",
      'links' => $this->navService->routesToLinks('/'),
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function displayOverview(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/presentation.twig', [
      'title' => "Présentation - Mobile Bike",
      'links' => $this->navService->routesToLinks('/presentation'),
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function displayEvent(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/evenements.twig', [
      'title' => "Évènements - Mobile Bike",
      'links' => $this->navService->routesToLinks('/evenements'),
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function displayMaintenance(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('home/entretien.twig', [
      'title' => "Entretien - Mobile Bike",
      'links' => $this->navService->routesToLinks('/entretien'),
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
}
