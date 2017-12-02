<?php
class DB {
    static function connect($db){
        if ($db['driver'] == 'sqlite') {
            $driver = $db['driver'];
            $dbname = $db['dbname'];
            return new PDO("$driver:$dbname");
        }
        if ($db['driver'] == 'mysql') {
            $driver = $db['driver'];
            $dbname = $db['dbname'];
            $host = $db['host'];
            $user = $db['user'];
            $password = $db['password'];
            return new PDO("$driver:dbname=$dbname;host=$host;", $user, $password);
        }
    }
}