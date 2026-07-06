<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Model\User;
use Diginamic\Framework\Repository\UserRepository;
use Diginamic\Framework\Services\NavigationService;
use Diginamic\Framework\Services\LoginService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Twig\Environment;

class UserController extends Controller
{
  // Attributs
  private $userRepository;

  public function __construct(NavigationService $navService, Environment $twig, LoginService $loginService)
  {
    $this->userRepository = new UserRepository();
    $this->navService = $navService;
    $this->twig = $twig;
    $this->loginService = $loginService;
  }

  public function index(ServerRequestInterface $request): ResponseInterface
  {
    $id = $_SESSION['user_id'];
    // Récupération des utilisateurs de type Model\User car c'est le repository (ici AbstractRepository) qui fait la 
    // correspondance (mapping) entre la base de données et le "Model" objet.
    $user = $this->userRepository->findById($id);

    $html = $this->twig->render('user/index.twig', [
      'title' => 'Mon compte - Mobile Bike',
      'links' => $this->navService->routesToLinks('/compte'),
      'user' => $user,
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

    $html = $this->twig->render('user/inscription.twig', [
      'title' => "Inscription - Mobile Bike",
      'links' => $this->navService->routesToLinks('/inscription'),
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
    $userEntity = new User();

    // Hydratation de l'utilisation
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    $userEntity->hydrate($data);

    // Appel au modèle ou au repository
    $this->userRepository->save($userEntity);

    // Si tout s'est bien passé, on redirige
    return new Response(
      302,
      ['Location' => '/inscriptionReussie'],
      ''
    );
  }

  public function addSuccess(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('user/inscriptionReussie.twig', [
      'title' => 'Inscription réussie - Mobile Bike',
      'links' => $this->navService->routesToLinks('/inscriptionReussie'),
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  public function login(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('user/login.twig', [
      'title' => 'Connexion - Mobile Bike',
      'links' => $this->navService->routesToLinks('/login'),
      'status' => $this->loginService->connection()
    ]);

    // Création et renvoi de la réponse
    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }
  public function submitLogin(ServerRequestInterface $request): ResponseInterface
  {
    // Récupération des données du formulaire
    $formData = $request->getParsedBody();

    /* L'opérateur de fusion null (null coalescing operator) en PHP.
      Introduit en PHP 7, cet opérateur ?? permet de vérifier si une variable existe et n'est pas null. 
      Si la variable à gauche de l'opérateur existe et n'est pas null, sa valeur est retournée. Sinon, c'est la valeur à droite de l'opérateur qui est retournée.
    */
    $login = $formData['login'] ?? '';
    $password = $formData['password'] ?? '';

    // Si tout s'est bien passé, on redirige
    return new Response(
      302,
      ['Location' => '/'],
      ''
    );
  }
  public function logout(ServerRequestInterface $request): ResponseInterface
  {
    session_destroy();

    // Si tout s'est bien passé, on redirige
    return new Response(
      302,
      ['Location' => '/'],
      ''
    );
  }
}
