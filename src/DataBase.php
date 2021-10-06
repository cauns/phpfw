<?php

namespace MyFrame;

use Doctrine\DBAL\DriverManager;

class DataBase
{
    protected $dbHost;
    protected $dbUser;
    protected $dbPort;
    protected $dbPass;
    protected $dbName;
    protected $conn;
    public function __construct()
    {
        $this->dbHost = getenv('DB_HOST');
        $this->dbUser = getenv('DB_USERNAME');
        $this->dbPort = getenv('DB_PORT');
        $this->dbPass = getenv('DB_PASSWORD');
        $this->dbName = getenv('DB_DATABASE');
    }

    public function setConnect(){
        $dbParams = [$this->dbHost,$this->dbUser,$this->dbPort,$this->dbPass,$this->dbName];
        $check = true;
        foreach ($dbParams as $param){
            if(is_null($param) || empty($param)){
                $check = false;
                break;
            }
        }
        if(!$check){
            return  $check;
        }
        return $this->conn = DriverManager::getConnection($dbParams);
    }

}