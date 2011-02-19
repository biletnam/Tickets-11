<!-- controllers/home -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Home_Controller extends DefaultTpl_Controller {

  private $ticket_model;
  public $tickets_list; // lista ticketów

  public function  __construct() {
    parent::__construct();
    $this->ticket_model = new Ticket_Model; // dostęp do modelu dla ticket
  }

  public function index()
  {
    $this->content = $this->show_tickets_list();
    $this->template->content = new View('ticket/index');

  }

  public function show_tickets_list()
  {
    $this->tickets_list = $this->ticket_model->get_list();
  }
}