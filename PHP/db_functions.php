<?php
class DBStarter
{
    public $conn;
    function startDB()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'bagsntopsdb');
        if ($this->conn->connect_error) {
            die("connection failed: " . $this->conn->connect_error);
        }
        echo "<script>console.log('database connected successfully');</script>";
    }

    function endDB()
    {
        $this->conn->close();
    }
}

class DBInitiator
{
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '');
    }

    function checkDB()
    {
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        $database = $this->conn->select_db('bagsntopsdb');
        if ($database == NULL) {
            $sql = "CREATE DATABASE bagsntopsdb";
            if ($this->conn->query($sql) === FALSE) {
                return "Error creating database: " . $this->conn->error;
            }
            $this->conn->select_db('bagsntopsdb');
            $this->conn->multi_query(file_get_contents('../RSC/database/bagsntopsdb.sql'));
            $this->conn->close();
            return 'database successfully created!';
        }
    }
}

class insert
{
    public $db;
    public $command;
    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->command = "INSERT INTO {$table} (";
    }

    function insertData(array $elements, array $values)
    {
        $this->db->startDB();

        foreach ($elements as $index => $element) {
            if ($index == (count($elements) - 1)) {
                $this->command .= "{$element})";
            } else {
                $this->command .= "{$element}, ";
            }
        }

        $this->command .= " VALUES (";

        foreach ($values as $index => $value) {
            if ($index == (count($values) - 1)) {
                $this->command .= "'{$value}');";
            } else {
                if (is_int($value)) {
                    $this->command .= "{$value}, ";
                } else {
                    $this->command .= "'{$value}', ";
                }
            }
        }

        if ($this->db->conn->query($this->command) === FALSE) {
            echo '<script>console.log("insert failed");</script>';
        }
        $this->db->endDB();
    }
}

class delete
{
    public $db;
    public $command;
    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->command = "DELETE FROM {$table} WHERE ";
    }

    function deleteData($element, $value)
    {
        $this->db->startDB();
        if (is_int($value)) {
            $this->command .= "{$element} = {$value};";
        } else {
            $this->command .= "{$element} = '{$value}';";
        }

        if ($this->db->conn->query($this->command) === FALSE) {
            echo '<script>console.log("delete failed");</script>';
        }

        $this->db->endDB();
    }
}


class update
{
    public $db;
    public $command;
    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->command = "UPDATE {$table} SET ";
    }

    function updateData($element, $value, $whereElement, $whereValue)
    {
        $this->db->startDB();

        $this->command .= "{$element} = ";
        if (is_int($value)) {
            $this->command .= "{$value}";
        } else {
            $this->command .= "'{$value}'";
        }
        $this->command .= " WHERE {$whereElement} = ";
        if (is_int($whereValue)) {
            $this->command .= "{$whereValue};";
        } else {
            $this->command .= "'{$whereValue}';";
        }

        if ($this->db->conn->query($this->command) === FALSE) {
            echo '<script>console.log("update failed");</script>';
        }

        $this->db->endDB();
    }
}


class select
{
    public $db;
    public $command;
    public $table;
    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->command = "SELECT ";
        $this->table = $table;
    }

    function selectData($column = "*", ?string $constraints = null)
    {
        $this->db->startDB();

        if (!is_null($constraints)) {
            $this->command .= "{$column} FROM {$this->table} {$constraints};";
        } else {
            $this->command .= "{$column} FROM {$this->table};";
        }

        //echo $this->command;

        $result = $this->db->conn->query($this->command);
    
        $result_array = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $result_array[] = $row; 
            }
        }

        $this->db->endDB();

        return $result_array;
    }
}
