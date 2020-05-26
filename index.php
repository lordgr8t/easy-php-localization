<?php
@session_start();
$LangArray = array("ru", "en");
$DefaultLang = "ru";
if(@$_SESSION['NowLang']) {
	if(!in_array($_SESSION['NowLang'], $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
}
else {
	$_SESSION['NowLang'] = $DefaultLang;
}
$language = addslashes($_GET['lang']);
if($language) {
	if(!in_array($language, $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
	else {
		$_SESSION['NowLang'] = $language;
	}
}
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("lang/lang.".$CurentLang.".php");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $Lang['title']; ?></title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<h1><?php echo $Lang['header_title']; ?></h1>
	<h3><?php echo $Lang['site_slogan']; ?></h3>
	<a href="https://twitter.com/gr8t_mark">Twitter</a><br>
	<a href="index.php?lang=ru"><img src="img/ru.png"></a> 
	<a href="index.php?lang=en"><img src="img/en.png"></a> 
</td>
</body>
</html>