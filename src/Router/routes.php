<?php

use Diginamic\Framework\Controller\AdministrationController;
use Diginamic\Framework\Controller\HomeController;
use Diginamic\Framework\Controller\UserController;
use Diginamic\Framework\Controller\ProductController;
use Diginamic\Framework\Middleware\AuthMiddleware;
use Diginamic\Framework\Middleware\AuthAdminMiddleware;
use Diginamic\Framework\Middleware\InputCheckerMiddleware;

/**
 * Fichier de configuration des routes
 *
 * Chaque route est définie par :
 * - path : le chemin de la route
 * - controller : la classe du contrôleur
 * - controllerMethod : la méthode du contrôleur à appeler
 * - httpMethod : la méthode HTTP (GET, POST, etc.)
 * - params : (optionnel) les patterns pour les paramètres d'URL
 * - middlewares : (optionnel) les middlewares spécifiques à cette route
 */
return [
  // 1
  [
    'path' => '/',
    'controller' => HomeController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 2
  [
    'path' => '/presentation',
    'controller' => HomeController::class,
    'controllerMethod' => 'displayOverview',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Présentation',
    'middlewares' => []
  ],

  //3
  [
    'path' => '/evenements',
    'controller' => HomeController::class,
    'controllerMethod' => 'displayEvent',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Évènements',
    'middlewares' => []
  ],

  // 4
  [
    'path' => '/boutique',
    'controller' => ProductController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Produits',
    'middlewares' => []
  ],

  // 5
  [
    'path' => '/entretien',
    'controller' => HomeController::class,
    'controllerMethod' => 'displayMaintenance',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Entretien',
    'middlewares' => []
  ],

  // 6
  [
    'path' => '/admin',
    'controller' => AdministrationController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Administration',
    'middlewares' => [
      new AuthAdminMiddleware(['/admin'])
    ]
  ],

  // 7
  [
    'path' => '/inscription',
    'controller' => UserController::class,
    'controllerMethod' => 'displayAddForm',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 8
  [
    'path' => '/inscription',
    'controller' => UserController::class,
    'controllerMethod' => 'add',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      new InputCheckerMiddleware(['/inscription'])
    ]
  ],

  // 9
  [
    'path' => '/inscriptionReussie',
    'controller' => UserController::class,
    'controllerMethod' => 'addSuccess',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 10
  [
    'path' => '/login',
    'controller' => UserController::class,
    'controllerMethod' => 'login',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 11
  [
    'path' => '/login-post',
    'controller' => UserController::class,
    'controllerMethod' => 'submitLogin',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 12
  [
    'path' => '/logout-post',
    'controller' => UserController::class,
    'controllerMethod' => 'logout',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => []
  ],

  // 13
  [
    'path' => '/compte',
    'controller' => UserController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      new AuthMiddleware(['/compte'])
    ]
  ],

  // 14
  // [
  //   'path' => '/users/add',
  //   'controller' => UserController::class,
  //   'controllerMethod' => 'displayAddForm',
  //   'httpMethod' => 'GET',
  //   'params' => [],
  //   'titleMenu' => '',
  //   'middlewares' => [
  //     new AuthMiddleware(['/users/add'])
  //   ]
  // ],

  // 15
  // [
  //   'path' => '/users/add',
  //   'controller' => UserController::class,
  //   'controllerMethod' => 'add',
  //   'httpMethod' => 'POST',
  //   'params' => [],
  //   'titleMenu' => '',
  //   'middlewares' => [
  //     new AuthMiddleware(['/users/add']),
  //     new InputCheckerMiddleware(['/users/add'])
  //   ]
  // ],

  // 16
  // [
  //   'path' => '/users/update/{id}',
  //   'controller' => UserController::class,
  //   'controllerMethod' => 'displayFormEdit',
  //   'httpMethod' => 'GET',
  //   'params' => ['id' => '\d+'],
  //   'titleMenu' => '',
  //   'middlewares' => []
  // ],

  // 17
  // [
  //   'path' => '/users/update/{id}',
  //   'controller' => UserController::class,
  //   'controllerMethod' => 'edit',
  //   'httpMethod' => 'POST',
  //   'params' => ['id' => '\d+'],
  //   'titleMenu' => '',
  //   'middlewares' => []
  // ],

  // 18
  // [
  //   'path' => '/users/delete/{id}',
  //   'controller' => UserController::class,
  //   'controllerMethod' => 'delete',
  //   'httpMethod' => 'GET',
  //   'params' => ['id' => '\d+'],
  //   'titleMenu' => '',
  //   'middlewares' => []
  // ],

  // 19
  // [
  //   'path' => '/presentation/personnalisation',
  //   'controller' => HomeController::class,
  //   'controllerMethod' => 'personnalisation',
  //   'httpMethod' => 'GET',
  //   'params' => [],
  //   'titleMenu' => 'Personnalisation',
  //   'middlewares' => []
  // ],

  // 20
  // [
  //   'path' => '/presentation/ecologie',
  //   'controller' => HomeController::class,
  //   'controllerMethod' => 'écologie',
  //   'httpMethod' => 'GET',
  //   'params' => [],
  //   'titleMenu' => 'Écologie',
  //   'middlewares' => []
  // ],

  // 21
  // [
  //   'path' => '/presentation/{id}',
  //   'controller' => ProductController::class,
  //   'controllerMethod' => 'findOne',
  //   'httpMethod' => 'GET',
  //   'params' => ['id' => '\d+'],
  //   'titleMenu' => 'Présentation des produits',
  //   'middlewares' => []
  // ],


  // 22
  // [
  //   'path' => '/administration/add',
  //   'controller' => ProductController::class,
  //   'controllerMethod' => 'displayAddForm',
  //   'httpMethod' => 'GET',
  //   'params' => [],
  //   'titleMenu' => '',
  //   'middlewares' => []
  // ],

  // 23
  // [
  //   'path' => '/administration/add',
  //   'controller' => ProductController::class,
  //   'controllerMethod' => 'add',
  //   'httpMethod' => 'POST',
  //   'params' => [],
  //   'titleMenu' => '',
  //   'middlewares' => []
  // ],



];
