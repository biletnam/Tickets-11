<!-- controllers/ticket -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Ticket_Controller extends DefaultTpl_Controller {

  private $ticket_model;
  private $comment_model;

  public $ticket;
  public $comments;

  public function  __construct() {
    parent::__construct();
    $this->ticket_model = new Ticket_Model();
    $this->comment_model = new Comment_Model();
    
  }
  
  public function index() {
  }
  
  public function show_create_editor() {  // formularz do tworzenia ticketów
  
    $this->template->content = new View('ticket/create');
  }

  public function show_ticket($id) {  // pokaż ticket od danym id
  
    $this->ticket = $this->ticket_model->show($id);
    $this->show_ticket_comments($id);
    $this->template->content = new View('ticket/show');
  }

  public function show_ticket_comments($id) {// pobiera listę komnetarzy dla dla ticketu o danym $id
  
    $this->comments = $this->comment_model->get_list($id);

  }

  public function create() {  // stwórz ticket
  
    $ticket_data = array(
        'title' => $this->input->post('title'),
        'body' => $this->input->post('body')
    );

    $this->ticket_model->create($ticket_data);
    url::redirect('ticket/show');

  }

  public function edit() {  // edytuj ticket
  }

  public function update() {  // aktualizacjia ticketu
      
  }
}