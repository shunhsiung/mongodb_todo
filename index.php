<?php
include ('first.php');

$list = $todos->find();

$id = myrequest('id');

foreach ($list as $k => $v)
{
	$edit = sprintf("<a href='index.php?id=%s'>編輯</a>",$v['_id']);
	$delete = sprintf("<a href='ms.php?op=del&id=%s'>刪除</a>",$v['_id']);
	printf("<li>%s %s %s %s",$v['memo'],$v['created_at'],$edit,$delete);
}

$memo = "";
$op = "addnew";
if (strlen($id) > 0) {
	$todo = $todos->findOne(['_id' => new MongoId($id)]);
	$memo = $todo['memo'];
	$op = "edit";
}

?>
<form action='ms.php' method=post>
	<input type=hidden name=op value='<?php echo $op ?>'>
	<input type=hidden name=id value='<?php echo $id ?>'>
	<input type='text' name=memo value='<?php echo $memo ?>'>
	<input type=submit>
</form>
