<?php
require('class.database.php');

class Article extends Database {

    // Queries
    public static function getArticleById($id) {
        $query = "SELECT article.article_id, article.title, article.content, article.article_date, user.username, category.name 
                  FROM article
                  JOIN user ON article_id = $id AND article.user_id = user.user_id
                  JOIN category ON article.category_id = category.category_id;";
        
        if($result = self::queryResult($query)) {
            return $result[0];
        } else {
            return false;
        }
    }

    public static function getArticlesByCategoryId($category_id, $limit = false) {
        if($limit) {
            $query = "SELECT article_id, title, SUBSTR(content, 1, 80) AS content_intro, article_date, category.name AS category_name 
                      FROM article 
                      JOIN category
                      WHERE article.category_id = $category_id AND category.category_id = $category_id 
                      ORDER BY article_date DESC 
                      LIMIT $limit";
        } else {
            $query = "SELECT article_id, title, SUBSTR(content, 1, 80) AS content_intro, article_date, category.name AS category_name 
                      FROM article 
                      JOIN category
                      WHERE article.category_id = $category_id AND category.category_id = $category_id 
                      ORDER BY article_date DESC";
        }

        if($result = self::queryResult($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public static function getArticlesBySearch($s) {
        $query = "SELECT article_id, title, article_date 
                  FROM article 
                  WHERE title LIKE '%$s%' 
                  ORDER BY article_date DESC";

        if($result = self::queryResult($query)) {
            return $result;
        } else {
            return false;
        }
        
    }

    // Outputs
    public static function outputThumbnail($article) { ?>
        <div class="col-sm-3">
            <a href="article.php?id=<?= $article['article_id'] ?>">
                <div class="thumbnail">
                    <img src="http://placehold.it/242x130?text=article" alt="placeholder">
                    <div class="caption">
                        <h4><?= $article['title'] ?></h4>
                        <p><?= $article['content_intro'] ?>...</p>
                        <small><?= $article['article_date'] ?></small>
                    </div>
                </div>
            </a>
        </div>
    <?php
    }

    public static function outputRow($article) { ?>
        <div class="row">
            <div class="col-xs-12">
                <a href="article.php?id=<?= $article['article_id'] ?>">
                    <div class="well well-sm">
                        <h4><?= $article['title'] ?></h4>
                        <span>- <?= $article['article_date']?><span>
                    </div>
                </a>
            </div>
        </div>
    <?php
    }
}