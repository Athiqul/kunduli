<?php 
namespace App\DB;

use mysqli;
use Exception;

class Database {
    private static $servername = "localhost"; // or your server name
    private static $username = "root"; // your MySQL username
    private static $password = ""; // your MySQL password
    private static $database = "kunduli"; // your database name
    private static $conn = null;

    // Private constructor to prevent instantiation
    private function __construct() {}

    // Method to get the database connection
    public static function getConnection() {
        if (self::$conn === null) {
            self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);

            // Check connection
            if (self::$conn->connect_error) {
                // Throw custom exception with detailed error message
                throw new DatabaseException('Connection failed: ' . self::$conn->connect_error);
            }
        }
        echo "Database connection established successfully.";
        return self::$conn;
    }

    // Method to close the database connection
    public static function closeConnection() {
        if (self::$conn !== null) {
            self::$conn->close();
            self::$conn = null;
        }
    }

  // Save Data into the table
public static function save($table, $data) {
    // Get the database connection
    $conn = self::getConnection();

    // Extract columns and values from the data array
    $columns = implode(", ", array_keys($data));
    $placeholders = implode(", ", array_fill(0, count($data), "?"));
    $values = array_values($data);

    // Prepare the SQL query
    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error preparing statement: " . $conn->error);
    }

    // Bind parameters to the SQL query
    $types = str_repeat("s", count($values)); // Assuming all values are strings
    if (!$stmt->bind_param($types, ...$values)) {
        throw new Exception("Error binding parameters: " . $stmt->error);
    }

    // Execute the SQL statement
    if (!$stmt->execute()) {
        throw new Exception("Error executing query: " . $stmt->error);
    }

    // Get the ID of the newly inserted record
    $last_id = $conn->insert_id;

    // Close the statement
    $stmt->close();

    // Fetch and return the newly inserted record
    return self::getDataRecord($table, $last_id);
}


    public static function getDataRecord($table, $id)
    {
        $conn = self::getConnection();
        $query = "SELECT * FROM $table WHERE id = ?";
        $stmt = $conn->prepare($query);
    
        if ($stmt === false) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }
    
        $stmt->bind_param("i", $id);
    
        if (!$stmt->execute()) {
            throw new Exception("Error executing query: " . $stmt->error);
        }
    
        $result = $stmt->get_result();
    
        if ($result === false) {
            throw new Exception("Error retrieving result set: " . $stmt->error);
        }
    
        $record = $result->fetch_assoc();
    
        if ($record === null) {
            throw new Exception("Record not found with ID: " . $id);
        }
    
        return $record;
    }


    //Update

    public static function updateDataRecord($table, $data, $id)
    {
        $conn = self::getConnection();
    
        // Prepare the SET part of the SQL statement
        $setPart = "";
        $values = [];
        foreach ($data as $column => $value) {
            $setPart .= "$column = ?, ";
            $values[] = $value;
        }
        $setPart = rtrim($setPart, ", "); // Remove trailing comma
    
        // Prepare the SQL query
        $query = "UPDATE $table SET $setPart WHERE id = ?";
        $stmt = $conn->prepare($query);
    
        if ($stmt === false) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }
    
        // Add the ID to the values array
        $values[] = $id;
    
        // Bind parameters
        $types = str_repeat('s', count($data)) . 'i'; // Add 'i' for the ID, assuming it's an integer
        $stmt->bind_param($types, ...$values);
    
        if (!$stmt->execute()) {
            throw new Exception("Error executing query: " . $stmt->error);
        }
    
        if ($stmt->affected_rows === 0) {
            // throw new Exception("No record updated. Either the record does not exist or the data is the same.");
        }
    
        return true;
    }
    

    
    
}

class DatabaseException extends Exception {}

?>

