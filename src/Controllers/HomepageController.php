<?php
namespace SeleniaModules\DemoAdmin\Controllers;

use Selenia\Platform\Components\Base\PageComponent;

class HomepageController extends PageComponent
{
  public $template = <<<HTML
  
    <FormPage>
      <Actions>
        <ButtonsSaveDelete/>
        <Button label="Preview"/>
      </Actions>
      
      <FormLayout>
      
        <Field name=title label=Ninja>
          <Input type=/>
        </Field>
        
      </FormLayout>
      
    </FormPage>

HTML;

}
