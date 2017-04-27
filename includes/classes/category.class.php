<?php
require_once('database.class.php');

class Category extends Database {
    public static function add($name) {
        $query = "INSERT INTO category VALUES(null, '$name')";

        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        $query = "DELETE FROM category WHERE category_id = $id";
        
        if(self::queryExec($query)) {
            return true;
        } else {
            return false;
        } 
    }

    public static function getCategories() {
        $query = "SELECT * FROM category";
        return self::queryResult($query);
    }

    public static function getNameById($id) {
        $query = "SELECT name FROM category WHERE category_id = $id";
        return self::queryResult($query)[0]['name'];
    }

    public static function outputAsOptions($selected = false) {
        $categories = self::getCategories();
        
        foreach($categories as $category) { ?>
            <option value="<?= $category['category_id'] ?>"
            <?php if($category['category_id'] === $selected) echo 'selected'; ?>
            ><?= $category['name'] ?></option>
        <?php
        }
    }
}