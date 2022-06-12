<?php

try{

    $connection = new PDO("mysql:dbname=ilwo;host=localhost","root","");

}
catch(PDOException $ex){
echo "Error occured : " . $ex->getMessage();
}

?>