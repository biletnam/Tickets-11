<!-- models/comment.php -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Comment_Controller extends DefaultTpl_Controller
{
  private $comment_model;
  public $comment_list;

  function  __construct() {
    parent::__construct();
    $this->comment_model = new Comment_Model();
  }

  public function create()
  {
    $id = $this->input->post('ticket_id');
    
    $comment_data = array(
        'body' => $this->input->post('body'),
        'ticket_id' => $this->input->post('ticket_id')
    );

    $this->comment_model->create($comment_data, $id);
    url::redirect('ticket/show_ticket/'.$id);
    
  }
}