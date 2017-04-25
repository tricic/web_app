<?php
require_once('database.class.php');

class Comment extends Database {

    // Queries
    public static function insert($user_id, $article_id, $comment) {
        $comment = htmlspecialchars($comment);

        if(empty($comment)) {
            exit("Please enter your comment first...");
        } else if(strlen($comment) > 500) {
            exit("Comment can't contain more than 500 characters!");
        }

        $query = "INSERT INTO comment (user_id, article_id, content) 
                  VALUES($user_id, $article_id, '$comment')";
        
        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        $query = "DELETE FROM comment
                  WHERE comment_id = $id";

        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getCommentsByArticleId($id) {
        $query = "SELECT comment.comment_id, comment.content, comment.comment_date, user.username, user.rank_id, user.gender 
                 FROM comment
                 JOIN user ON comment.article_id = $id AND user.user_id = comment.user_id
                 ORDER BY comment.comment_date DESC";
        
        if($result = self::queryResult($query)) {
            return $result;
        } else {
            return false;
        }
    }
}