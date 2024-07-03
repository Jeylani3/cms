<?php

require 'config.php';

class Database {

    public $connection;
    public function __construct($config, $username='admin', $password='mansojey56') {

       $dsnQueryString  = http_build_query($config, ' ', ';');
       $dsn = 'mysql:' . $dsnQueryString;
//       $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $config['host'], $config['port'], $config['dbname'], $config['charset']);
       // dd($dsn);
//     //   dd($dsn1);


      //  $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';  hard coded
        //$dsn = 'mysql:host=' . constant('DB_HOST') . ';port=' . constant('DB_PORT') . ';dbname=' . constant('DB_NAME') . ';charset=' . constant('DB_CHARSET');
      //  $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    public function query($query, $params = [])
    {

        $statement = $this->connection->prepare($query);

       $statement->execute($params);

//        return $statement->fetchAll(PDO::FETCH_ASSOC);
         return $statement;

    }
}