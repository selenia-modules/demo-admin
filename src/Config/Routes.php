<?php
namespace SeleniaModules\DemoAdmin\Config;

use Electro\Interfaces\Http\RequestHandlerInterface;
use Electro\Interfaces\Http\RouterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use SeleniaModules\DemoAdmin\Controllers\AboutController;
use SeleniaModules\DemoAdmin\Controllers\Forms\ArticleController;
use SeleniaModules\DemoAdmin\Controllers\HomepageController;
use SeleniaModules\DemoAdmin\Controllers\NewsController;

class Routes implements RequestHandlerInterface
{
  /** @var RouterInterface */
  private $router;

  public function __construct (RouterInterface $router)
  {
    $this->router = $router;
  }

  function __invoke (ServerRequestInterface $request, ResponseInterface $response, callable $next)
  {
    return $this->router
      ->set ([
        'admin...' => [
          'home'     => HomepageController::class,
          'about'    => AboutController::class,
          'news'     => NewsController::class,
          'news/@id' => ArticleController::class,
          //          'products'
          //          'contacts'
          //          'config'
        ],
      ])
      ->__invoke ($request, $response, $next);
  }

}
