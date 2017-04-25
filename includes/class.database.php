<?php
class Database {
    // Properties
    private static $conn = null;

    // Connection methods
    private static function checkConnection() {
        if(self::$conn == null) {
            self::$conn = new mysqli("localhost", "root", "", "web_app");
            self::$conn->set_charset("utf8");

            if(self::$conn->connect_errno) {
                include_once('class.alert.php');

                Alert::danger("<strong>$mysqli->connect_errno: $mysqli->connect_error</strong>");
                exit();
            }
        }
    }

    private static function closeConnection() {
        unset(self::$conn);
        unset(self::$error);
        unset(self::$errno);
    }

    // Query methods
    public static function queryResult($query) {
        self::checkConnection();

        $result = self::$conn->query($query);

        if(@$result->num_rows) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public static function queryExec($query) {
        self::checkConnection();

        if(self::$conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}