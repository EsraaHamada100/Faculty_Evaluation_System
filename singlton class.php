<?php
class database 
{
    public static $dbServerName = "localhost";
    public static $dbUserName = "root";
    public static $dbPassword = "";
    public static $dbName = "automated_teacher_evaluation";

    private function __construct()
    {
        echo "Connection created";

    }
    public static function Connect ()
    {
        if (!isset(self::$connection))
        {
            self::$connection = new database;

        }
        return self::$connection;
    }
    public static function Query($sql){
        mysql_query($sql);
    }
   
}
$db=database :: Connect();
$dp2=database::Connect();