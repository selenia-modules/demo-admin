<?php
namespace SeleniaModules\DemoAdmin\Controllers;

use Selenia\Platform\Components\Base\PageComponent;

class AboutController extends PageComponent
{
  public $template = <<<HTML
  
    <Content of=main>
      <h1>ABOUT US</h1>
    </Content>
    
    <Include view="platform/layouts/main.html"/>

HTML;

}
