<?php
include("login.php");
// Database file, i.e. file with real data
$data_file = USERS_LIST_FILE;

// Database definition file. You have to describe database format in this file.
// See flatfile.inc.php header for sample.
$structure_file = 'users.def';

// Fields delimiter
$delimiter = ',';

// Number of lines to skip
$skip_lines = 1;

include("../config/admin.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

	</script>
	<script type="text/javascript" src="js/excanvas.pack.js"></script>
	<script type="text/javascript" src="js/jquery.flot.pack.js"></script>
    <script type="text/javascript" src="markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>

	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>
<div class="container" id="container">
    <div  id="header">
    	<div id="profile_info">
			<img src="img/avatar.jpg" id="avatar" alt="avatar" />
			<p>Welcome <strong>Admin</strong>. <a href="?logout=1">Log out?</a></p>
			<p>System Version:<a href="http://crystalwebmail.com/?versionfeatures=<?php echo systemversion; ?>"><?php echo systemversion; ?></a></p>
			<p class="last_login">Last login: 21:03 12.05.2010</p>
		</div>
		<div id="logo"><h1><a href="index.php">AdmintTheme</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	    <?php
	    include ('nav.php');
	    ?>
<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="left">
			<div id="subpage">
				<h2 class="ico_mug">Editing Main.inc.php</h2>
				<div class="clearfix">
				<div class="content_sub_page">
<!--
Syntax Highlighting By CodeMirror and
Copyright (c) 2008-2010 Yahoo! Inc. All rights reserved.
The copyrights embodied in the content of this file are licensed by
Yahoo! Inc. under the BSD (revised) open source license

@author Dan Vlad Dascalescu <dandv@yahoo-inc.com>

Everything Else By Hunter Dolan :)
-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <style>
 .CodeMirror-line-numbers {
        width: 2.2em;
        color: #aaa;
        background-color: #eee;
        text-align: right;
        padding: .4em;
        margin: 0;
        font-family: monospace;
        font-size: 10pt;
        line-height: 1.1em;
      }
  </style>
    <script src="../program/crystal/syntax/js/codemirror.js" type="text/javascript"></script>
  <body>
<?php 
$filename = "../config/main.inc.php";  
$newdata = $_POST['code']; 
if ($newdata != '') { 
$fw = fopen($filename, 'w') or die('Error Code: ADM103 <br> Did you Move the Admin Directory? How about the config directory? Did you re-name the main.inc.php file? If error continues please check the forum.'); 
$fb = fwrite($fw,stripslashes($newdata)) or die('Error Code: ADM104 <br> Please Make sure the main.inc.php is set to CHMOD 777');
fclose($fw); 
} 

// open file 
  $fh = fopen($filename, "r") or die("Error Code: ADM103 <br> Did you Move the Admin Directory? How about the config directory? Did you re-name the main.inc.php file? If error continues please check the forum."); 
// read file contents 
  $data = fread($fh, filesize($filename)) or die("Error Code: ADM103 <br> Did you Move the Admin Directory? How about the config directory? Did you re-name the main.inc.php file? If error continues please check the forum."); 
// close file 
  fclose($fh); 
// print file contents 
 echo "
 <div style='border: 1px solid black; width: 920px;'>
<form action='$_SERVER[php_self]' method= 'post' > 
<textarea id='code' name='code' cols='100%' rows='100%'> $data </textarea> 
</div>
<br>
<center>
<input type='submit' value='Save to main.inc.php'> 
</center>
</form>"; 

?>
<script type="text/javascript">
      var editor = CodeMirror.fromTextArea('code', {
        height: "350px",
        parserfile: ["parsexml.js", "parsecss.js", "tokenizejavascript.js", "parsejavascript.js",
                     "tokenizephp.js", "parsephp.js",
                     "parsephphtmlmixed.js"],
        stylesheet: ["../program/crystal/syntax/css/phpcolors.css"],
        path: "../program/crystal/syntax/js/",
        continuousScanning: 500
      });
    </script>
<?php
include ('footer.php')
?>
