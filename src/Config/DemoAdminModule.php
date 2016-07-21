<?php
namespace SeleniaModules\DemoAdmin\Config;

use Electro\Application;
use Electro\Core\Assembly\Services\ModuleServices;
use Electro\Interfaces\Http\RouterInterface;
use Electro\Interfaces\ModuleInterface;

class DemoAdminModule implements ModuleInterface
{
  function configure (ModuleServices $module, RouterInterface $router, Application $app)
  {
    // Uncomment the lines below if you do not wish to inherit the configuration from the website module (if it exists).
//    $app->name    = 'myadmin';   // session cookie name
//    $app->appName = 'Admin';     // default page title; also displayed on title bar (optional)
//    $app->title   = '@ - Admin'; // @ = page title
    $module
      ->publishPublicDirAs ('modules/private/modules/selenia-modules/demo-admin')
      ->provideMacros ()
      ->provideViews ()
      ->registerRouter (Routes::class)
      ->registerNavigation (Navigation::class);
  }

}
