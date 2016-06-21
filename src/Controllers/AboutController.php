<?php
namespace SeleniaModules\DemoAdmin\Controllers;

use Selenia\Platform\Components\Base\PageComponent;

class AboutController extends PageComponent
{
  public $template = <<<HTML
  
    <FormPage>
    
      <FormLayout>
      
        <Field name=title label=Ninja>
          <Prepend>
            <Button label=Gravar class="btn-success"/>
          </Prepend>
          <Input/>
        </Field>
        
      </FormLayout>
      
      <Actions>
        <ButtonsSaveDelete/>
        <Button label="Preview"/>
      </Actions>
      
    </FormPage>

HTML;

}
