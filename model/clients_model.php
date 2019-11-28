<?php
class clients_model
{
  private $db;
  private $clients;
  public function __construct()
  {
    require_once("connect.php");
    $this->db = connect::connection();
    $this->clients = array();
  }
  public function get_clients()
  {
    $query = $this->db->query("SELECT *FROM clients");
    while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
      $this->clients[] = $rows;
    }
    return $this->clients;
  }
}
