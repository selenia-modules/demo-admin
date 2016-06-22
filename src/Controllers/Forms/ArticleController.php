<?php
namespace SeleniaModules\DemoAdmin\Controllers\Forms;

use Selenia\Platform\Components\AdminPageComponent;
use SeleniaModules\DemoAdmin\Models\Article;

class ArticleController extends AdminPageComponent
{
  public $templateUrl = 'admin/forms/article.html';

  protected function model ()
  {
    $this->modelController->withRequestedId ()->loadModel (Article::class);
  }

}
