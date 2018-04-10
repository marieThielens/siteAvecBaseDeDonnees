<?php
function debug($var){
  echo '<pre>';
  print_r($var);
    echo '</pre>';
}
function dd($var){
  debug($var);
  die();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$tableau = array(
    "database" => array(
    "host" => 'localhost' ,
    "user" => 'root' ,
    "password" => 'root' ,
    "dbname" => 'alloFilms'
    )
  );

  ?>