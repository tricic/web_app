<?php
class Alert {
    private static function stringToArray($string) {
        $array[] = $string;
        return $array;
    }

    public static function success($alerts) {
        if(is_string($alerts)) {
            $alerts = self::stringToArray($alerts);
        }
        ?>

        <!-- HTML -->
        <div class="alert alert-success">
            <ul>
                <?php foreach($alerts as $alert) ?>
                <li><?= $alert ?></li>
            </ul>
        </div>

    <?php
    }

    public static function info($alerts) {
        if(is_string($alerts)) {
            $alerts = self::stringToArray($alerts);
        }
        ?>

        <!-- HTML -->
        <div class="alert alert-info">
            <ul>
                <?php foreach($alerts as $alert) ?>
                <li><?= $alert ?></li>
            </ul>
        </div>

    <?php
    }

    public static function warning($alerts) {
        if(is_string($alerts)) {
            $alerts = self::stringToArray($alerts);
        }
        ?>

        <!-- HTML -->
        <div class="alert alert-warning">
            <ul>
                <?php foreach($alerts as $alert) ?>
                <li><?= $alert ?></li>
            </ul>
        </div>

    <?php
    }

    public static function danger($alerts) {
        if(is_string($alerts)) {
            $alerts = self::stringToArray($alerts);
        }
        ?>

        <!-- HTML -->
        <div class="alert alert-danger">
            <ul>
                <?php foreach($alerts as $alert) ?>
                <li><?= $alert ?></li>
            </ul>
        </div>

    <?php
    }
}