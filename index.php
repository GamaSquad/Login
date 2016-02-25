<?php
    db_connect();

    function db_connect() {  
    static $connection; 
    if(!isset($connection)) {   
        $config = parse_ini_file('/bin/config.ini'); 
        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
    }
    if($connection === false) {
        return mysqli_connect_error(); 
    }else
    return $connection;
}
?>