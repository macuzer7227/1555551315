<?php

require_once('class.cPanelEmailMgr.php');

$args['cpUser'] = 		'username';  	// Your cPanel username
$args['cpPassword'] = 	'pass12345';  	// Your cPanel password
$args['cpDomain'] = 		'example.com';  // Your domain name (sans the www.)
$args['cpSkin'] = 		'x3';  			// Skin version of your cPanel install
$args['useHttps'] = 		true;  			// Whether or not to use https://

$cPanelEmailMgr = new cPanelEmailMgr($args);

//  Create 'testuser@example.com' with a mailbox diskspace quota of 20MB
if(!$cPanelEmailMgr->createAccount('test','example.com',20)) {
	die('could not create account');
}

//  Delete the 'testuser@example.com' email account
if(!$cPanelEmailMgr->deleteAccount('test','example.com')) {
	die('could not delete account');
}

?>