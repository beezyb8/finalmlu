<?php

if(!defined('__CONFIG__')) {
    exit('404 Gateway Error, Text 1(516)640-2417 and inform about error');
}

class DB {

    protected static $con;

    private function __construct() {

        try {

            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_system', 'root', '');
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, false);

        } catch(PDOException $e) {
            echo "If you see this text 15166402417";
            exit;
        }
    }

    public static function getConnection() {

        if (!self::$con) {
            new DB();
        }

        return self::$con;
    }
}

?>