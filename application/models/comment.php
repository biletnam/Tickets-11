<!-- models/comment.php -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Comment_Model extends Model_Core
{

  private $comment_table;

  public function  __construct() {
    parent::__construct();
    $this->comment_table = 'comments';
  }

  public function create($data, $id) // Tworzenie komentarza. Do zmiennej $data przekazywane będą w kontrolerze dane do komentarza. $id to identyfikator ticketu w którym dodawane będą tickety
  {
    $this->db->insert($this->comment_table, $data);
    $this->db->where('ticket_id', $id);
  }

  public function get_list($id) // Pobierana jest lista komenarzy dla danego $id ticketu. Wartość dla $id przekazywane są w kontrolerze
  {
    $this->db->from($this->comment_table);
    $this->db->where('ticket_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
}