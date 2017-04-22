<?php
class Session {
    public static function create() {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + 3600 * 24 * 7);
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function check() {
        @session_start();
        if(!empty($_SESSION)) {
            return true;
        } else {
            session_destroy();
            return false;
        }
    }

    public static function destroy() {
        @session_start();
        if(!empty($_SESSION)){
            session_destroy();
        }
    }
}