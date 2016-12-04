<?php
namespace SeleniaTemplates\DemoAdmin\Models;

use Electro\Plugins\IlluminateDatabase\BaseModel;
use Electro\Plugins\MatisseComponents\Traits\FilesModelTrait;

class Article extends BaseModel
{
  use FilesModelTrait;
//  protected $dates = ['date', 'creation_date'];
}
