<?php
namespace SeleniaModules\DemoAdmin\Controllers\Forms;

use Selenia\Platform\Components\AdminPageComponent;
use SeleniaModules\DemoAdmin\Models\Article;

class ArticleController extends AdminPageComponent
{
  public    $templateUrl    = 'admin/forms/article.html';
  protected $autoRedirectUp = true;

  protected function model ()
  {
    /** @var Article $model */
    $model = $this->modelController->withRequestedId ()->loadModel (Article::class);
    if (!isset($model->creation_date))
      $model->creation_date = date ('Y-m-d h:i:s');
  }

}
