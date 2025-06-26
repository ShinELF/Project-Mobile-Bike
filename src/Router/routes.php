<?php

use Diginamic\Framework\Controller\HomeController;
use Diginamic\Framework\Controller\LoginController;
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
  [
    'path' => '/',
    'controller' => HomeController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Accueil',
    'middlewares' => [
      // Vous pouvez ajouter des middlewares spécifiques à cette route
      // new LoggingMiddleware(),
    ]
  ],

  [
    'path' => '/login',
    'controller' => LoginController::class,
    'controllerMethod' => 'index',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Identification',
    'middlewares' => [
      // new AuthMiddleware(['/admin'])  // Ceci n'est pas nécessaire car la liste a été ajoutée en début du fichier index.php
    ]
  ],
  [
    'path' => '/login-post',
    'controller' => LoginController::class,
    'controllerMethod' => 'submitLogin',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      // new AuthMiddleware(['/admin'])  // Ceci n'est pas nécessaire car la liste a été ajoutée en début du fichier index.php
    ]
  ],
  [
    'path' => '/users',
    'controller' => UserController::class,
    'controllerMethod' => 'findAll',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Gestion des utilisateurs',
    'middlewares' => [
      new AuthAdminMiddleware(['/users'])  // Ceci n'est pas nécessaire car la liste a été ajoutée en début du fichier index.php
    ]
  ],
  [
    'path' => '/users/add',
    'controller' => UserController::class,
    'controllerMethod' => 'displayAddForm',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      new AuthMiddleware(['/users/add'])
    ]
  ],
  [
    'path' => '/users/add',
    'controller' => UserController::class,
    'controllerMethod' => 'add',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      new AuthMiddleware(['/users/add']),
      new InputCheckerMiddleware(['/users/add'])
    ]
  ],
  [
    'path' => '/users/update/{id}',
    'controller' => UserController::class,
    'controllerMethod' => 'displayFormEdit',
    'httpMethod' => 'GET',
    'params' => ['id' => '\d+'],
    'titleMenu' => '',
    'middlewares' => []
  ],
  [
    'path' => '/users/update/{id}',
    'controller' => UserController::class,
    'controllerMethod' => 'edit',
    'httpMethod' => 'POST',
    'params' => ['id' => '\d+'],
    'titleMenu' => '',
    'middlewares' => []
  ],
  [
    'path' => '/users/delete/{id}',
    'controller' => UserController::class,
    'controllerMethod' => 'delete',
    'httpMethod' => 'GET',
    'params' => ['id' => '\d+'],
    'titleMenu' => '',
    'middlewares' => []
  ],
  [
    'path' => '/presentation/personnalisation',
    'controller' => HomeController::class,
    'controllerMethod' => 'presentationPersonnalisation',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Présentation Personnalisation',
    'middlewares' => []
  ],
   [
    'path' => '/presentation/Ecologie',
    'controller' => HomeController::class,
    'controllerMethod' => 'presentationEcologie',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Présentation Écologie',
    'middlewares' => []
  ],
    [
    'path' => '/evenement',
    'controller' => HomeController::class,
    'controllerMethod' => 'event',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Évènements',
    'middlewares' => []
  ],
  [
    'path' => '/boutique',
    'controller' => ProductController::class,
    'controllerMethod' => 'findAll',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Boutique en ligne',
    'middlewares' => []
  ],
    [
    'path' => '/entretien',
    'controller' => HomeController::class,
    'controllerMethod' => 'entretien',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => 'Entretien',
    'middlewares' => []
  ],

    [
    'path' => '/administration/add',
    'controller' => ProductController::class,
    'controllerMethod' => 'displayAddForm',
    'httpMethod' => 'GET',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      // new AuthMiddleware(['/administration/add'])
    ]
  ],
  [
    'path' => '/administration/add',
    'controller' => ProductController::class,
    'controllerMethod' => 'add',
    'httpMethod' => 'POST',
    'params' => [],
    'titleMenu' => '',
    'middlewares' => [
      // new AuthMiddleware(['/users/add']),
      // new InputCheckerMiddleware(['/administration/add'])
    ]
  ],
    [
        'path' => '/administration',
        'controller' => HomeController::class,
        'controllerMethod' => 'pageAdministration',
        'httpMethod' => 'GET',
        'params' => [],
        'titleMenu' => 'Administration',
        'middlewares' => [ new AuthMiddleware(['/administration']),
          new AuthAdminMiddleware(['/administration'])
        ]
    ],
    [
        'path' => '/inscription',
        'controller' => HomeController::class,
        'controllerMethod' => 'pageInscription',
        'httpMethod' => 'GET',
        'params' => [],
        'titleMenu' => '',
        'middlewares' => [
        ]
    ],
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
            [
        'path' => '/inscriptionReussie',
        'controller' => HomeController::class,
        'controllerMethod' => 'subsciptionSuccess',
        'httpMethod' => 'GET',
        'params' => [],
        'titleMenu' => '',
        'middlewares' => [

        ]
    ],
];
