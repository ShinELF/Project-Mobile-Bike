<?php

namespace Mobilebike\Src\Controller;

use Mobilebike\Src\Middleware\AuthMiddleware;
use Mobilebike\Src\Services\NavigationService;
use Twig\Environment;

abstract class Controller
{
  protected NavigationService $navService;
  protected Environment $twig;
}
