# singleton

## Use
######This class only supports one or more php7.0

#### Create your class

class Yourclass
{
  use \Boone\Outshine\Support\Traits\Singleton;

  protected function __construct()
  {
  }
  
  public function demo()
  {
  
  }
}

Yourclass::getInstance()->demo();
