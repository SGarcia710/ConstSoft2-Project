<?php
class connect{
  public static function connection() {
    try{
      $connection=new PDO("mysql:host=localhost; dbname=pruebadb", "root", "");// al final iría el password, debería ser un usuario dedicado para este programa
      $connection->setAttribute(PDO::ATTR_ERRMODE);
    }
  }
}