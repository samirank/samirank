<?php
/**
* Class and Function List:
* Function list:
* - __construct()
* - con()
* Classes list:
* - dbconnect extends mysqli
*/
/**
 * Database connection class
 */
class dbconnect extends mysqli {
  protected $DBLOCATION = "localhost";
  protected $DBUSER     = "logoins";
  protected $DBPASS     = "B6JvUeTOEZ7bXEDF";
  protected $DBNAME     = "logoins";
  protected $mysqli;
  function __construct() {
    $this->mysqli = new mysqli($this->DBLOCATION, $this->DBUSER, $this->DBPASS, $this->DBNAME);
  }
  function con() {
    $mysqli       = $this->mysqli;
    if ($mysqli->connect_error) {
      echo "Connection error" . $mysqli->connect_error;
    }
    else {
      return $mysqli;
    }
  }
}
$connect = new dbconnect();
$connect->con();
?>
