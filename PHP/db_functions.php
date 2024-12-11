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

        if (!$this->conn->select_db('bagsntopsdb')) {
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

/*class insert
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
}*/

class insert
{
    private $db;
    private $table;

    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->table = $table; // Store table name
    }

    function insertData(array $elements, array $values)
    {
        $this->db->startDB();

        $columns = implode(', ', $elements);
        $placeholders = implode(', ', array_map(function ($value) {
            return is_int($value) || is_float($value) ? $value : '"'.$value.'"';
        }, $values));

        $command = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders});";

        if ($this->db->conn->query($command) === FALSE) {
            echo '<script>console.log("insert failed: ' . $this->db->conn->error . '");</script>';
        }

        $this->db->endDB();

        return $command;
    }
}

class delete
{
    private $db;
    private $table;

    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->table = $table; // Store table name
    }

    function deleteData($element, $value)
    {
        $this->db->startDB();

        $command = "DELETE FROM {$this->table} WHERE {$element} = ";
        $command .= is_int($value) || is_float($value) ? $value : '"'.$value.'"';
        $command .= ";";

        if ($this->db->conn->query($command) === FALSE) {
            echo '<script>console.log("delete failed: ' . $this->db->conn->error . '");</script>';
        }

        $this->db->endDB();
    }
}


class update
{
    private $db;
    private  $table;
    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->table = $table;
    }

    function updateData($element, $value, $whereElement, $whereValue)
    {
        $this->db->startDB();

        // Construct a fresh query each time
        $command = "UPDATE {$this->table} SET {$element} = ";
        if (is_int($value) || is_float($value)) {
            $command .= "{$value}";
        } else {
            $command .= "'{$value}'";
        }
        $command .= " WHERE {$whereElement} = ";
        if (is_int($whereValue) || is_float($whereValue)) {
            $command .= "{$whereValue};";
        } else {
            $command .= "'{$whereValue}';";
        }

        // Execute the query
        if ($this->db->conn->query($command) === FALSE) {
            echo '<script>console.log("Update failed: ' . $this->db->conn->error . '");</script>';
        }

        $this->db->endDB();
    }
}


class select
{
    public $db;
    public $table;

    function __construct($table)
    {
        $this->db = new DBStarter();
        $this->table = $table;
    }

    function selectData($column = "*", ?string $constraints = null)
    {
        $this->db->startDB();

        // Reset command for each query to prevent append errors
        $command = "SELECT {$column} FROM {$this->table}";

        // Add constraints if provided
        if (!is_null($constraints)) {
            $command .= " {$constraints}";
        }

        $command .= ";";  // Add the semicolon to the query

        // Debugging the query (can be removed in production)
        // echo $command;

        $result = $this->db->conn->query($command);

        // Prepare the result array
        $result_array = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $result_array[] = $row;
            }
        }

        // End the database connection
        $this->db->endDB();

        // Return the result
        return $result_array;
    }
}
