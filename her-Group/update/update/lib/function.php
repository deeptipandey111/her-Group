<?php

require_once 'datamanager.php';

class scriptClass {

    public $connection;

    public function __construct() {

        //data base connection.

        $this->connection = new Connection();
    }


    public function getAllUsers() {

        $sql="select* from users"; 

         $result = mysql_query($sql);
       
 while ($record = mysql_fetch_assoc($result)) {

            $users[] = $record;
        }

        return $users;
    }

    

}
?>

