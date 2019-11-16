<?php

  class connect{

    public static function connection() {
      try{
        $connection = new PDO("mysql:host=localhost; dbname=pageDB", "constsoft2", "123456789seb");// al final iría el password, debería ser un usuario dedicado para este programa
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$connection->exec("SET CHARACTER SET UTF8"); 
      } catch (Exception $e){
        die("ERROR" .$e->getMessage());
        echo "Error line" .$e->getLine();
      }
      return $connection;
    }
  }

?>