

<?php
if(!isset($_REQUEST['controller']))
{
	require_once 'controller/user_controller.php';
	$controller=new UserController();
	$controller->indexUser();
}else{
	$controller=$_REQUEST['controller'];
	$action=$_REQUEST['action'];
	require_once 'controller/'.$controller.'_controller.php';
	$controller=ucwords($controller).'Controller';
	$controller=new $controller;
	call_user_func(array($controller,$action));
}
?>