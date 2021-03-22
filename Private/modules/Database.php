<?php

/**
 * Class Database
 * This file connects to the database using PDO
 */
class Database
{

    private string $host = DB_HOST;
    private string $user = DB_USER;
    private string $pass = DB_PASS;
    private string $dbname = DB_NAME;

    private PDO $dbh;
    private $stmt;
    private string $error;

    // Initiate connection once the class is instantiated
    public function __construct()
    {
        //set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Prepare query statement
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Bind query statement to values when placeholders are set
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            $type = match (true) {
                is_int($value) => PDO::PARAM_INT,
                is_bool($value) => PDO::PARAM_BOOL,
                is_null($value) => PDO::PARAM_NULL,
                default => PDO::PARAM_STR,
            };
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute query statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Return all results from executed query when a
    // multidimensional array output is expected
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Return results from executed query when a
    // single array output is expected
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Return id of last insert statement
    public function last_insert_id(): string
    {
        return $this->dbh->lastInsertId();
    }

    // Count number of rows returned from an executed query
    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}