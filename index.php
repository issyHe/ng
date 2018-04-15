<?php
$exclude = array('components/layout/_layout','services/ui/prompt','components/layout/footer');

if(empty($_SERVER["HTTP_ANGULAR_DEMO_TOKEN"])){
	$page = $_GET['typeid'];
	if(in_array($page, $exclude)){
		$path = $page.'.html';
		$string = file_get_contents($path);
		echo $string;
		exit;
	}else{
		header('HTTP/1.1 401');
	}
}else{
	$page = $_GET['typeid'];
	$path = $page.'.html';
	$string = file_get_contents($path);
	echo $string;
	exit;
}