<?php

require(__DIR__ . '/../config/database.php');


// example class calling database pdo, u can create many database with create different class
class BaseModel extends sintret\pdo\Db{
    public function __construct() {
        parent::__construct(HOST, DB_NAME, DB_USER, DB_PASS);
    }
    
}