<?php
class database 
{
    public static $connection;

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