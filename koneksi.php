<?php

// Class database (koneksi database)
class Database{
    // Property
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "tugas_pl2";
    var $connection;

    // method koneksi kedalam database
    function Connect(){
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass, $this->db); 
        return $this->connection;

    
    
    }

    }
    
?>