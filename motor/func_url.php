<?php /*oriandras.hu*/
session_start();
if($_GET["day"]){
	$day=DateTime::createFromFormat('Ymd', $_GET["day"]);
	$day=$_GET["day"];
}
else {
	$fullurl = parse_url($_SERVER['REQUEST_URI']);
	//print_r($fullurl);
	$slug = preg_replace('/^./', '', $fullurl['path']);
	if(!$slug || $slug=="" || $slug=="/"){
		$day=date("Ymd");
		//print_r($slug);
	}
	else {
		$day=$slug;
	}
	//$day=DateTime::createFromFormat('Ymd', $slug);
}
//print_r($day);
//echo $day['date'];
$_SESSION["day"]=$day;
?>