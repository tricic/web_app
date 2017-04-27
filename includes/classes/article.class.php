<?php
require_once('database.class.php');

class Article extends Database {

    public static function insert($user_id, $category_id, $img_url, $title, $content) {
        $query = "INSERT INTO article (user_id, category_id, img_url, title, content) VALUES ($user_id, $category_id, '$img_url', '$title', '$content')";

        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        $query = "DELETE FROM article WHERE article_id = $id";

        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    // Queries
    public static function getArticleById($id) {
        $query = "SELECT article.article_id, article.title, article.content, article.img_url, article.article_date, user.username, category.name, category.category_id 
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
            $query = "SELECT article_id, title, SUBSTR(content, 1, 80) AS content_intro, img_url, article_date, category.name AS category_name 
                      FROM article 
                      JOIN category ON article.category_id = $category_id AND category.category_id = $category_id 
                      ORDER BY article_date DESC 
                      LIMIT $limit";
        } else {
            $query = "SELECT article_id, title, SUBSTR(content, 1, 80) AS content_intro, img_url, article_date, category.name AS category_name 
                      FROM article 
                      JOIN category ON article.category_id = $category_id AND category.category_id = $category_id 
                      ORDER BY article_date DESC";
        }

        if($result = self::queryResult($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public static function getArticlesBySearch($s) {
        $query = "SELECT article_id, title, img_url, article_date 
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
                    <img src="<?= $article['img_url'] ?>" alt="placeholder" class="img-rounded">
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
        <a href="article.php?id=<?= $article['article_id'] ?>">
            <div class="row well well-sm">
                <div class="col-xs-2">
                    <img src="<?= $article['img_url'] ?>" alt="placeholder" class="img-rounded" style="height: 100px;">
                </div>
                <div class="col-xs-10">
                        <h4><?= $article['title'] ?></h4>
                        <span>- <?= $article['article_date']?><span>
                </div>
            </div>
        </a>
    <?php
    }
}