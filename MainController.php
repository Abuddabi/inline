<?php


class MainController
{
    public $pdoAd;

    public function __construct()
    {
        require_once 'MyLogger.php';
        require_once 'PDOAdapter.php';

        $errorLogger = new MyLogger('log.txt');
        $pdoAd = new PDOAdapter(
            $dsn = 'mysql:host=localhost;dbname=inline',
            $username = 'root',
            $password = '',
            $errorLogger
        );

        $this->pdoAd = $pdoAd;
    }
}