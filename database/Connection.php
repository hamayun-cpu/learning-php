<?php

class Connection {
    public static function connect() {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=learnPhp', 'hamayun', 'Waheed12');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}