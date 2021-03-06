<?php
class Database {
    // Properties
    public static $conn = null;
    public static $error;

    // Connection methods
    public static function checkConnection() {
        if(self::$conn == null) {
            self::$conn = new mysqli("localhost", "root", "", "web_app");
            self::$conn->set_charset("utf8");

            if(self::$conn->connect_errno) {
                include_once('classes/alert.class.php');

                Alert::danger("<strong>$mysqli->connect_errno: $mysqli->connect_error</strong>");
                exit();
            }
        }
    }

    public static function closeConnection() {
        unset(self::$conn);
        unset(self::$error);
    }

    // Query methods
    public static function queryResult($query) {
        self::checkConnection();

        $result = self::$conn->query($query);

        if(@$result->num_rows) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            self::$error = self::$conn->error;
            return false;
        }
    }

    public static function queryExec($query) {
        self::checkConnection();
        
        // DELETE will return TRUE even if row does not exist, therefore we need to check affected rows to be sure row is ACTUALLY deleted
        if(self::$conn->query($query) && self::$conn->affected_rows) {
            return true;
        } else {
            self::$error = self::$conn->error;
            return false;
        }
    }
}