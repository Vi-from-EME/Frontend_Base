<?php
/**
 * The Indexer
 * @Author Vishwa LiyanaArachchi
 *
 * @package EME Frontend Base
 * @subpackage choweme_frontend_base
 * @since choweme_frontend_base 1.0
 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HTML Prototypes</title>
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="./assets/images/favicon/site.webmanifest">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<style>
		* {
			font-family:"Montserrat", Helvetica, sans-serif;	
		}
		h1 {
			margin : 15px auto;
			text-align:center;
			color: #666;
			line-height : 2rem;
		}
		ul {
			margin:0 25%;
			min-width: 300px;
			padding:0;	
		}
		ul > li{
			margin:1px 0;
			padding:0;
			list-style:none;
		}
		ul > li > a{
			background-color:#f3f3f3;
			text-decoration: none;
			text-transform:uppercase;
			color: #666;
			font-size: 14px;
			display:block;
			padding:10px 15px;
			-webkit-transition:all .2s ease-in;
			-moz-transition:all .2s ease-in;
			-o-transition:all .2s ease-in;
			transition:all .2s ease-in;
		}
		ul > li > a:hover{
			background-color:#9C9999;
			color: #FFF;
		}
	</style>
</head>
<body>
	<?php
	$_dir = "base-templates/";
// Open a directory, and read its contents
	$files = array_values(array_filter(scandir($_dir), function($file) {
		return !is_dir($file);
	}));
	echo "<h1>HTML PROTOTYPES</h1>";
	echo "<ul>";
	if($files){
		foreach($files as $file){

			// Exclude hidden directories/files
			if( str_starts_with($file, '.') ) continue;
			
			echo "<li><a href=\"". $_dir . $file ."\" target=\"_blank\">". $file ." </a></li>";
		}
	}
	echo "</ul>";
	?>
</body>
</html>