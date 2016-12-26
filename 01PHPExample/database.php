<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'test');
function db_connect() {
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
    or die("Error: " . mysqli_error($link));
    if (!mysqli_set_charset($link, "utf8")) {
        printf("Error: " . mysqli_error($link));
    }
    return $link;
}

class Database {
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";

    private $conn       = false;
    private $result     = array();
    private $myQuery    = "";
    private $numResults = "";

    public function __construct($db_host, $db_user, $db_pass, $db_name) {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    public function connect() {
        if (!$this->conn) {
            $myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
            if ($myconn) {
                $seldb = @mysql_select_db($this->db_name, $myconn);
                if ($seldb) {
                    $this->conn = true;
                    return true;
                } else {
                    array_push($this->result, mysql_error());
                    return false;
                }
            } else {
                array_push($this->result, mysql_error());
                return false;
            }
        } else {
            return false;
        }

    }

    // Function to disconnect from the database
    public function disconnect() {
        // If there is a connection to the database
        if ($this->con) {
            // We have found a connection, try to close it
            if (@mysql_close()) {
                // We have successfully closed the connection, set the connection variable to false
                $this->con = false;
                // Return true tjat we have closed the connection
                return true;
            } else {
                // We could not close the connection, return false
                return false;
            }
        }
    }

    public function sql($sql) {
        $query         = @mysql_query($sql);
        $this->myQuery = $sql; // Pass back the SQL
        if ($query) {
            // If the query returns >= 1 assign the number of rows to numResults
            $this->numResults = mysql_num_rows($query);
            // Loop through the query results by the number of rows returned
            for ($i = 0; $i < $this->numResults; $i++) {
                $r   = mysql_fetch_array($query);
                $key = array_keys($r);
                for ($x = 0; $x < count($key); $x++) {
                    // Sanitizes keys so only alphavalues are allowed
                    if (!is_int($key[$x])) {
                        if (mysql_num_rows($query) >= 1) {
                            $this->result[$i][$key[$x]] = $r[$key[$x]];
                        } else {
                            $this->result = null;
                        }
                    }
                }
            }
            return true; // Query was successful
        } else {
            array_push($this->result, mysql_error());
            return false; // No rows where returned
        }
    }

    // Function to SELECT from the database
    public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null) {
        // Create query from the variables passed to the function
        $q = 'SELECT ' . $rows . ' FROM ' . $table;
        if ($join != null) {
            $q .= ' JOIN ' . $join;
        }
        if ($where != null) {
            $q .= ' WHERE ' . $where;
        }
        if ($order != null) {
            $q .= ' ORDER BY ' . $order;
        }
        if ($limit != null) {
            $q .= ' LIMIT ' . $limit;
        }
        $this->myQuery = $q; // Pass back the SQL
        // Check to see if the table exists
        if ($this->tableExists($table)) {
            // The table exists, run the query
            $query = @mysql_query($q);
            if ($query) {
                // If the query returns >= 1 assign the number of rows to numResults
                $this->numResults = mysql_num_rows($query);
                // Loop through the query results by the number of rows returned
                for ($i = 0; $i < $this->numResults; $i++) {
                    $r   = mysql_fetch_array($query);
                    $key = array_keys($r);
                    for ($x = 0; $x < count($key); $x++) {
                        // Sanitizes keys so only alphavalues are allowed
                        if (!is_int($key[$x])) {
                            if (mysql_num_rows($query) >= 1) {
                                $this->result[$i][$key[$x]] = $r[$key[$x]];
                            } else {
                                $this->result = null;
                            }
                        }
                    }
                }
                return true; // Query was successful
            } else {
                array_push($this->result, mysql_error());
                return false; // No rows where returned
            }
        } else {
            return false; // Table does not exist
        }
    }

    // Function to insert into the database
    public function insert($table, $params = array()) {
        // Check to see if the table exists
        if ($this->tableExists($table)) {
            $sql           = 'INSERT INTO `' . $table . '` (`' . implode('`, `', array_keys($params)) . '`) VALUES ("' . implode('", "', $params) . '")';
            $this->myQuery = $sql; // Pass back the SQL
            // Make the query to insert to the database
            if ($ins = @mysql_query($sql)) {
                array_push($this->result, mysql_insert_id());
                return true; // The data has been inserted
            } else {
                array_push($this->result, mysql_error());
                return false; // The data has not been inserted
            }
        } else {
            return false; // Table does not exist
        }
    }

    //Function to delete table or row(s) from database
    public function delete($table, $where = null) {
        // Check to see if table exists
        if ($this->tableExists($table)) {
            // The table exists check to see if we are deleting rows or table
            if ($where == null) {
                $delete = 'DROP TABLE ' . $table; // Create query to delete table
            } else {
                $delete = 'DELETE FROM ' . $table . ' WHERE ' . $where; // Create query to delete rows
            }
            // Submit query to database
            if ($del = @mysql_query($delete)) {
                array_push($this->result, mysql_affected_rows());
                $this->myQuery = $delete; // Pass back the SQL
                return true; // The query exectued correctly
            } else {
                array_push($this->result, mysql_error());
                return false; // The query did not execute correctly
            }
        } else {
            return false; // The table does not exist
        }
    }

    // Function to update row in database
    public function update($table, $params = array(), $where) {
        // Check to see if table exists
        if ($this->tableExists($table)) {
            // Create Array to hold all the columns to update
            $args = array();
            foreach ($params as $field => $value) {
                // Seperate each column out with it's corresponding value
                $args[] = $field . '="' . $value . '"';
            }
            // Create the query
            $sql = 'UPDATE ' . $table . ' SET ' . implode(',', $args) . ' WHERE ' . $where;
            // Make query to database
            $this->myQuery = $sql; // Pass back the SQL
            if ($query = @mysql_query($sql)) {
                array_push($this->result, mysql_affected_rows());
                return true; // Update has been successful
            } else {
                array_push($this->result, mysql_error());
                return false; // Update has not been successful
            }
        } else {
            return false; // The table does not exist
        }
    }

    // Private function to check if table exists for use with queries
    private function tableExists($table) {
        $tablesInDb = @mysql_query('SHOW TABLES FROM ' . $this->db_name . ' LIKE "' . $table . '"');
        if ($tablesInDb) {
            if (mysql_num_rows($tablesInDb) == 1) {
                return true; // The table exists
            } else {
                array_push($this->result, $table . " does not exist in this database");
                return false; // The table does not exist
            }
        }
    }

    // Public function to return the data to the user
    public function getResult() {
        $val          = $this->result;
        $this->result = array();
        return $val;
    }
    //Pass the SQL back for debugging
    public function getSql() {
        $val           = $this->myQuery;
        $this->myQuery = array();
        return $val;
    }
    //Pass the number of rows back
    public function numRows() {
        $val              = $this->numResults;
        $this->numResults = array();
        return $val;
    }
    // Escape your string
    public function escapeString($data) {
        return mysql_real_escape_string($data);
    }
}

// $db = new Database('127.0.0.1', 'root', '', 'test');
// var_dump($db->connect());