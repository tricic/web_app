<?php
$limit = $_GET['limit'];
require($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/connection.admin.php');

$query = "SELECT article_id, title, SUBSTR(content, 1, 90) AS content_start, article_date FROM article LIMIT $limit";
if(isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $query = "SELECT article_id, title, SUBSTR(content, 1, 80) AS content_start, article_date FROM article WHERE category_id = $category_id ORDER BY article_date DESC LIMIT $limit";
}

$result = $mysqli->query($query);

echo '<div class="row">';
while($article = $result->fetch_object()) {?>
    <div class="col-sm-3">
        <a href="article.php?id=<?php echo $article->article_id ?>">
            <div class="thumbnail">
                <img src="http://placehold.it/242x130?text=article" alt="placeholder">
                <div class="caption">
                    <h4><?php echo $article->title ?></h4>
                    <p><?php echo $article->content_start ?>...</p>
                    <small><?php echo $article->article_date ?></small>
                </div>
            </div>
        </a>
    </div>
    <?php
}
echo '</div>';