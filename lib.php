<?php

function myrequest ( $name )
{
	if (isset($_POST[$name]))  { 
		return $_POST[$name];
	} elseif (isset($_GET[$name])) {
		return $_GET[$name];
	} else {
		return "";
	}
}
