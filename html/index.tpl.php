<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MongoDB Todo Example</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
</head>
<body>
<div class='container'>
<h2>Todo List</h2>
<ul class='list-group'>
<?php
foreach ($list as $k => $v) 
{
	printf("<li class='list-group-item'>
	<span class='badge'>%s</span>
	<a href='index.php?id=%s' class='btn btn-info'>編輯</a>
	<a href='ms.php?op=del&id=%s' class='btn btn-danger'>刪除</a>
	%s",$v['created_at'],$v['_id'],$v['_id'],$v['content']);
}
?>
</ul>
<hr>
<form action='ms.php' method=post class='form-horizontal'>
    <input type=hidden name=op value='<?php echo $data['op'] ?>'>
    <input type=hidden name=id value='<?php echo $data['id'] ?>'>
	<div class='form-group'>
		<label class='col-sm-2 control-label'>Content</label>
		<div class='col-sm-10'>
		    <input type='text' name='content' class='form-control' value='<?php echo $data['content'] ?>'>
		</div>
	</div>
	<div class='well'>
	    <input type=submit class='btn btn-primary' value='Send'>
	</div>
</form>

</div>
</body>
</html>
