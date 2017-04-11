<?php
function success_alert($alert) {
    echo '<div class="alert alert-success">';
    if(is_string($alert)) {
        echo "<ul><li>$alert</li></ul>";
    } else if(is_array($alert)) {
        echo '<ul>';
        foreach($alert as $s) {
            echo "<li>$s</li>";
        }
        echo '</ul>';
    }
    echo '</div>';
}
function info_alert($alert) {
    echo '<div class="alert alert-info">';
    if(is_string($alert)) {
        echo "<ul><li>$alert</li></ul>";
    } else if(is_array($alert)) {
        echo '<ul>';
        foreach($alert as $s) {
            echo "<li>$s</li>";
        }
        echo '</ul>';
    }
    echo '</div>';
}
function warning_alert($alert) {
    echo '<div class="alert alert-warning">';
    if(is_string($alert)) {
        echo "<ul><li>$alert</li></ul>";
    } else if(is_array($alert)) {
        echo '<ul>';
        foreach($alert as $s) {
            echo "<li>$s</li>";
        }
        echo '</ul>';
    }
    echo '</div>';
}
function danger_alert($alert) {
    echo '<div class="alert alert-danger">';
    if(is_string($alert)) {
        echo "<ul><li>$alert</li></ul>";
    } else if(is_array($alert)) {
        echo '<ul>';
        foreach($alert as $s) {
            echo "<li>$s</li>";
        }
        echo '</ul>';
    }
    echo '</div>';
}