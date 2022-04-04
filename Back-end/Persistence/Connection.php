<?php

class Connection
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dataBase = "DevJobs";
    private $connection = null;

    function__construct(){};

    function getConnection()
    {
        if($this->connection == null)
        {
            $this->connection = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase);
        }
        if(!$this->connection)
        {
            die("connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }   
    
    
    
}
?> 
