<?php
namespace Portal\Model\Footer;

class Model
{
  public $template;
  public $data = array();

  public function __construct($route){
    global $portal;

    // Data to be passed to twig
    $this->data = array(
      'current_page' => $portal->current_page,
      'logged_in' => $portal->is_logged_in()
    );

    // Set template file
    $this->template = 'footer.html.twig';

  }
}

?>
