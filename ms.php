<?php
include ('first.php');

$op = myrequest('op');

switch ($op) {
	case "addnew":
		addnew();
		break;
	case "del":
		del();
		break;
	case "edit":
		edit();
		break;

}

header('Location: index.php');

function edit()
{
	global $todos;
	$id = myrequest('id');
	$memo = myrequest('memo');
	$udata = array('$set' => array('memo' => $memo));
	$todos->update(['_id' => new MongoId($id)], $udata);
}

function del()
{
	global $todos;
	$id = myrequest('id');
	$todos->remove(['_id' => new MongoId($id)]);
}

function addnew()
{
	global $todos;
	$memo = myrequest('memo');

	$todo = array(
		'memo' => $memo,
		'created_at' => date('Y-m-d H:i:s'),
	);

	$todos->save($todo);

}

