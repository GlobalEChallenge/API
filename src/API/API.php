<?php
namespace GlobalEAPI\Api;

abstract class API {

    const DB_DSN = 'mysql:host=127.0.0.1:3307;dbname=customers';
    const DB_USER = 'root';
    const DB_PASS = '';

    protected $_db;

    public function __construct(){
        $this->__connectToDB();
    }

    private function __connectToDB(){
        $this->_db = new \PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
    }
}