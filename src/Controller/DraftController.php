<?php

  public function écologie(ServerRequestInterface $request): ResponseInterface
  {

    $html = $this->twig->render('presentation/ecologie.twig', [
      'title' => "Écologie",
      'links' => $this->navService->routesToLinks('/presentation/ecologie'),
      'status' => $this->loginService->connection()

    ]);

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
      'status' => $this->loginService->connection()
    ]);

    return new Response(
      200,
      ['Content-Type' => 'text/html'],
      $html
    );
  }

  // USERCONTROLLER

    public function delete(ServerRequestInterface $request, array $routeParams = []): ResponseInterface
  {
    // Récupération de l'id qui provient de la requête (le paramètre de la route)
    $id = $routeParams["id"];
    if (isset($id)) {
      $delete = $this->userRepository->delete($id);

      // Modification de la base de données via le modèle donc via le repository
      if (!$delete) {
        return new Response(
          418,
          ['Content-Type' => 'text/html'],
          '<h1>Problème dans la suppression de l\'utilisateur </h1>'
        );
      }
      // Quand la suppression a bien eu lieu, on redirige
      // Quand tout se passe bien (utilisateur mis à jour), je veux faire une redirection vers /users
      return new Response(
        302,
        ['Location' => '/users'],
        ''
      );
    }
    return new Response(
      400,
      ['Content-Type' => 'text/html'],
      '<h1>La requête HTTP a été mal formulée </h1>'
    );
  }
  public function edit(ServerRequestInterface $request, array $routeParams = [])
  {
    // Récupération de l'id qui provient de la requête (le paramètre de la route)
    $id = $routeParams["id"];
    if (isset($id)) {
      // Récupération des données envoyées (pour modification) par le client via la requête
      $formData = $request->getParsedBody();

      // Création d'une instance de User avec la bonne id
      $user = new User();
      $user->hydrate($formData);
      $user->id = $id;

      // Modification de la base de données via le modèle donc via le repository
      if (!$this->userRepository->save($user)) {
        return new Response(
          418,
          ['Content-Type' => 'text/html'],
          '<h1>Problème dans la mise à jour </h1>'
        );
      }
      // Quand tout se passe bien (utilisateur mis à jour), je veux faire une redirection vers /users
      return new Response(
        302,
        ['Location' => '/users'],
        ''
      );
    }
    return new Response(
      400,
      ['Content-Type' => 'text/html'],
      '<h1>La requête HTTP a été mal formulée </h1>'
    );


    // Affiche les données du modèle dans un formulaire
  }
  public function displayFormEdit(ServerRequestInterface $request, array $routeParams = [])
  {
    // Récupération de l'id qui provient de la requête (le paramètre de la route)
    $id = $routeParams["id"];

    $title = "Modification d'un utilisateur";
    if (isset($id)) {

      // Récupération des données de l'utilisateur à modifier en passant par le repository
      $user = $this->userRepository->findById($id);

      $html = $this->twig->render('users/updateForm.twig', [
        'title' => $title,
        'links' => $this->navService->routesToLinks('/users'),
        'user' => $user,
        'status' => $this->loginService->connection()
      ]);

      // Si je n'ai pas d'utilisateur, je renvoie une erreur 404
      if (!$user) {
        return new Response(
          404,
          ['Content-Type' => 'text/html'],
          '<h1>Aucun utilisateur ne correspond ! </h1>'
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
      '<h1>La requête HTTP a été mal formulée </h1>'
    );
  }

  // PRODUCTCONTROLLER

      public function displayAddForm(ServerRequestInterface $request): ResponseInterface
    {

        $title =  "Ajout d'un produit";
        $html = $this->twig->render('shop/addForm.twig', [
            'title' => $title,
            'links' => $this->navService->routesToLinks('/'),
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
    public function delete(ServerRequestInterface $request, array $routeParams = []): ResponseInterface
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];
        if (isset($id)) {
            $delete = $this->productRepository->delete($id);

            // Modification de la base de données via le modèle donc via le repository
            if (!$delete) {
                return new Response(
                    418,
                    ['Content-Type' => 'text/html'],
                    '<h1>Problème dans la suppression de l\'utilisateur </h1>'
                );
            }
            // Quand la suppression a bien eu lieu, on redirige
            // Quand tout se passe bien (utilisateur mis à jour), je veux faire une redirection vers /users
            return new Response(
                302,
                ['Location' => '/users'],
                ''
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            '<h1>La requête HTTP a été mal formulée </h1>'
        );
    }
    public function edit(ServerRequestInterface $request, array $routeParams = [])
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];
        if (isset($id)) {
            // Récupération des données envoyées (pour modification) par le client via la requête
            $formData = $request->getParsedBody();

            // Création d'une instance de User avec la bonne id
            $product = new Product();
            $product->hydrate($formData);
            $product->id = $id;

            // Modification de la base de données via le modèle donc via le repository
            if (!$this->productRepository->save($product)) {
                return new Response(
                    418,
                    ['Content-Type' => 'text/html'],
                    '<h1>Problème dans la mise à jour </h1>'
                );
            }
            // Quand tout se passe bien (utilisateur mis à jour), je veux faire une redirection vers /users
            return new Response(
                302,
                ['Location' => '/users'],
                ''
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            '<h1>La requête HTTP a été mal formulée </h1>'
        );


        // Affiche les données du modèle dans un formulaire
    }
    public function displayFormEdit(ServerRequestInterface $request, array $routeParams = [])
    {
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];

        $title = "Modification d'un utilisateur";
        if (isset($id)) {

            // Récupération des données de l'utilisateur à modifier en passant par le repository
            $user = $this->productRepository->findById($id);

            $html = $this->twig->render('users/updateForm.twig', [
                'title' => $title,
                'links' => $this->navService->routesToLinks('/users'),
                'user' => $user,
                'status' => $this->loginService->connection()
            ]);

            // Si je n'ai pas d'utilisateur, je renvoie une erreur 404
            if (!$user) {
                return new Response(
                    404,
                    ['Content-Type' => 'text/html'],
                    '<h1>Aucun utilisateur ne correspond ! </h1>'
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
    public function presentationProduits(ServerRequestInterface $request): ResponseInterface
    {

        $html = $this->twig->render('home/presentationProduits.twig', [
            'title' => "Présentation des produits",
            'links' => $this->navService->routesToLinks('/presentation/{id}'),
            'date' => date(DATE_ATOM, strtotime('now')),
            'status' => $this->loginService->connection()
        ]);
        /* $html = View::header($links);
    $html .= "<h1>Page d'accueil</h1>"; */
        return new Response(
            200,
            ['Content-Type' => 'text/html'],
            $html
        );
    }
    public function findOne(ServerRequestInterface $request, array $routeParams = []): ResponseInterface
    {

        $title = "Détails vélomobile";
        // Récupération de l'id qui provient de la requête (le paramètre de la route)
        $id = $routeParams["id"];
        if (isset($id)) {

            $product = $this->productRepository->findById($id);

            $html = $this->twig->render('home/presentationProduits.twig', [
                'title' => $title,
                'links' => $this->navService->routesToLinks('/presentation/{id}'),
                'product' => $product,
                'status' => $this->loginService->connection()
            ]);

            return new Response(
                200,
                ['Content-Type' => 'text/html'],
                $html
            );
        }
        return new Response(
            400,
            ['Content-Type' => 'text/html'],
            "<h1>Article inconnu</h1>"
        );
    }