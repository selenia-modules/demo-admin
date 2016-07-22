<?php
namespace SeleniaModules\DemoAdmin\Config;

use Electro\Interfaces\Navigation\NavigationInterface;
use Electro\Interfaces\Navigation\NavigationProviderInterface;

class Navigation implements NavigationProviderInterface
{
  function defineNavigation (NavigationInterface $nav)
  {
    $nav->add ([
      'admin' => $nav
        ->group ()
        ->title ('Contents')
        ->links ([
          'home'     => $nav
            ->link ()
            ->title ('Homepage'),
          'about'    => $nav
            ->link ()
            ->title ('About Us'),
          'news'     => $nav
            ->link ()
            ->title ('News')
            ->links ([
              '@id' => $nav
                ->link ()
                ->id ('article')
                ->title ('Article'),
            ]),
//          'products' => $nav
//            ->link ()
//            ->title ('Products'),
//          'contacts' => $nav
//            ->link ()
//            ->title ('Contacts'),
//          'config'   => $nav
//            ->link ()
//            ->title ('Config'),
        ]),
    ], false, 'mainMenu');
  }

}
