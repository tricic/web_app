<?php
require('class.database.php');

class User extends Database {
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
}