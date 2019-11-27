<?php
    class DB {
        private static function connect() {
            $pdo = new PDO('mysql:host=165.22.140.244:3306; dbname=LDT; charset=utf8', 'thejokers', 'CSS475_TheJokers');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

        public static function jsquery($query, $params = array()) {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);
            if(explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
        }

        public static function query($query, $params = array()) {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);
            if(explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
            }
        }
    }
?>
