<?php
namespace Portal\Model\Navigation;

class Model
{
  public $template;
  public $data = array();

  public function __construct($route){
    global $portal;

    // Set current page to determine which navigation tab will be active
    $current_page = (isset($route['controller']) ? $route['controller'] : ($route['page'] == '' ? 'home' : $route['page']));

    // Data to be passed to twig
    $this->data = array(
      'site_url' => $portal->site_url,
      'current_page' => $current_page,
      'logged_in' => (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? 'true' : 'false')
    );

    // Set template file
    $this->template = 'navigation.html.twig';

  }
}

?>
