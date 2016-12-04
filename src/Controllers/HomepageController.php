<?php
namespace SeleniaTemplates\DemoAdmin\Controllers;

use Selenia\Platform\Components\Base\PageComponent;

class HomepageController extends PageComponent
{
  public $template = <<<HTML
  
<AppPage>
  <FormPanel>
    <FormLayout>
      <Field label="Nome" bind=model.nome required/>
    </FormLayout>
    <Actions>
      <StandardFormActions key="{model.id}"/>
    </Actions>
  </FormPanel>
</AppPage>

HTML;

}
