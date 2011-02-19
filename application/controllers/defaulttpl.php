<!-- controllers/template -->
<!-- controllers/home -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class DefaultTpl_Controller extends Template_Controller {

  public $template = 'template/default_tpl';
  

  function  __construct() {
    parent::__construct();

    $this->template->title = "Ticket System";
    $this->template->footer = "&copy; Lechu";
  }


}