<?php

namespace Diginamic\Framework\Controller;

use Diginamic\Framework\Services\NavigationService;
use Twig\Environment;
use Diginamic\Framework\Services\LoginService;

abstract class Controller
{
  protected NavigationService $navService;
  protected Environment $twig;
  protected LoginService $loginService;
}
