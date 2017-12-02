<?php
class Config {
    public $layout = "layouts/layout";

    public $db = array(
        'sqlite' => array(
                        'driver'=>'sqlite',
                        'dbname'=>'../app/data/test.sqlite',
                    ),
        'mysql' => array(
                        'driver'=>'mysql',
                        'dbname'=>'test',
                        'host'=>'localhost',
                        'user'=>'root',
                        'password'=>'',
                    ),
    );

    public $mailer = array(
        'gmail' => array(
                    'isSMTP' => true,
                    'SMTPAuth' => true,
                    'SMTPSecure' => 'ssl',
                    'Host' => 'smtp.gmail.com',
                    'Port' => 465,
                    'Username' => 'riux.mend@gmail.com',
                    'Password' => 'mysqlserver',
                    'From' => 'riux.mend@gmail.com',
                    'FromName' => 'Administrador',
                ),
    );

}