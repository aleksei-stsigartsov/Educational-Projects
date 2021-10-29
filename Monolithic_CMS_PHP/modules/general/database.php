<?php

class Database
{
    public $hostname;
    public $username;
    public $password;
    public $database;

    function __construct($hostname = "localhost", $username = "root", $password = "", $database = "database4gubanov")
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }

    function get_data($table)
    {
        return mysqli_query($this->connect, "SELECT * FROM `" . $table . "`");
    }

    function add_data($query){
        mysqli_query($this->connect, $query);
    }

    function __destruct() { mysqli_close($this->connect); }
}
