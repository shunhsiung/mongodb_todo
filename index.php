<?php
include ('first.php');

$list = $todos->find()->sort(['_id' => -1]);

$id = myrequest('id');

$content = "";
$op = "addnew";
if (strlen($id) > 0) {
	$todo = $todos->findOne(['_id' => new MongoId($id)]);
	$content = $todo['content'];
	$op = "edit";
} 

$data = array(
	'id' => $id,
	'op' => $op,
	'content' => $content,
);

include('html/index.tpl.php');
?>
