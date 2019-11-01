<?php
namespace Portal\Model\Footer;

class Model
{
  public $template;
  public $data = array();

  public function __construct($route){
    global $portal;

    // Set the current page name
    $current_page = (isset($route['controller']) ? $route['controller'] : ($route['page'] == '' ? 'home' : $route['page']));

    // Data to be passed to twig
    $this->data = array(
      'current_page' => $current_page,
      'logged_in' => $portal->logged_in
    );

    // Set template file
    $this->template = 'footer.html.twig';

  }
}

?>
