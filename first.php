<?php
include "lib.php";
include "_priv/config.php";


$mongoClient = new \MongoClient('mongodb://' . $config['dbhost']);
$db = $mongoClient->$config['dbname'];
$todos = $db->todos;

