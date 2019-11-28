<?php
class products_model
{
  private $db;
  private $products;
  public function __construct()
  { //Conexión a la base de datos
    require_once("connect.php"); // archivo que conecta a la base de datos
    $this->db = connect::connection(); //Función que hace la conexión a la base de datos
    $this->products = array();
  }
  public function get_products()
  {
    $query = $this->db->query("SELECT *FROM products");
    while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
      $this->products[] = $rows;
    }
    return $this->products;
  }
}
