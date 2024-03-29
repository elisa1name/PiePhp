<?php
namespace Core;
use PDO;
class Database
{
    private $_connection;
    private $_servername = "localhost";
    private $_username = "root";
    private $_pass = "";
    public function __construct(){
        try {
            $this->_connection = new PDO('mysql:host=localhost;dbname=PiePHP', 'root', 'root');
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function getConnection(){
		return $this->_connection;
	}
}