<?php
namespace SeleniaModules\DemoAdmin\Controllers;

use Electro\ViewEngine\Lib\ViewModel;
use Selenia\Platform\Components\Base\PageComponent;
use SeleniaModules\DemoAdmin\Models\Article;

class NewsController extends PageComponent
{
  public $template = <<<'HTML'
<Import service="navigation"/>

<GridPage>

  <DataGrid data={news} as="i:r" onClickGoTo={navigation.article + r.id}>
    <Column width="40" type="row-selector">
      {i|ord}
    </Column>
    <Column width="80" title="Published" align="center" type="field">
      <Checkbox checked={r.published} disabled/>
    </Column>
    <Column width="100%" title="Title">
      {r.title}
    </Column>
    <Column width="145" title="Date">
      {r.date}
    </Column>
    <Column width="145" title="Creation date">
      {r.creation_date}
    </Column>

    <Actions>
      <ButtonDelete/>
      <ButtonNew url={navigation.article}/>
    </Actions>
  </DataGrid>

</GridPage>
HTML;

  protected function viewModel (ViewModel $viewModel)
  {
    $viewModel->news = Article::all();
  }

}
