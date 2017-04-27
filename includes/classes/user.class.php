<?php
require_once('database.class.php');

class User extends Database {
    public static function delete($id) {
        $query = "DELETE FROM user WHERE user_id = $id";

        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getUserByUsername($username) {
        $query = "SELECT user.user_id, user.username, user.gender, user.reg_date, rank.name AS rank 
                  FROM user 
                  JOIN rank ON user.username = '$username' AND user.rank_id = rank.rank_id";
        
        if($result = self::queryResult($query)) {
            return $result[0];
        } else {
            return false;
        }
    }

    public static function getUsersBySearch($string) {
        $query = "SELECT * FROM user WHERE username LIKE '%$string%'";

        if($result = self::queryResult($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public static function usernameToId($username) {
        $query = "SELECT user_id FROM user WHERE username = '$username' LIMIT 1";

        if($result = self::queryResult($query)) {
            return $result[0]['user_id'];
        } else {
            return false;
        }
    }

    public static function idToUsername($id) {
        $query = "SELECT username FROM user WHERE user_id = $id LIMIT 1";

        if($result = self::queryResult($query)) {
            return $result[0]['username'];
        } else {
            return false;
        }
    }
}