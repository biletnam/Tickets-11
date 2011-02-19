<!-- models/ticket.php -->
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Ticket_Model extends Model_Core
{

  private $ticket_table;

  public function  __construct() {
    parent::__construct();
    $this->ticket_table = 'tickets'; // nazwę tabeli
  }

  public function get_list() // pobiera liste ticketów w bazie
  {
    $this->db->from($this->ticket_table);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function create($data) // Dodawanie ticketu do bazy. Do zmiennej $data będą przekazywane w kontrolerze wartości dla kolumn które mają być dodane do bazy
  {
    $this->db->insert($this->ticket_table, $data);
  }

  public function show($id) // Pobieranie kolumn z tabeli "tickets" dla ticketu o podanym $id
  {
    $this->db->from($this->ticket_table);
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result_array();

  }
}
