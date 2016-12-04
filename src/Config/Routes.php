<?php
namespace SeleniaTemplates\DemoAdmin\Config;

use Electro\Interfaces\Http\RequestHandlerInterface;
use Electro\Interfaces\Http\RouterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use SeleniaTemplates\DemoAdmin\Controllers\AboutController;
use SeleniaTemplates\DemoAdmin\Controllers\Forms\ArticleController;
use SeleniaTemplates\DemoAdmin\Controllers\HomepageController;
use SeleniaTemplates\DemoAdmin\Controllers\NewsController;

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
