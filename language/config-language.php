<?php
 session_start();
 header('Cache-control:private');

 if(isset($_GET['lang']))
 {
 	$lang = $_GET['lang'];

 	// Register session
 	$_SESSION['lang'] = $lang;

 	// Define Cookie
 	setcookie('lang',$lang,time() + (3600 * 24 * 30));

 	//Search cookie and session if exist
 }
 else 
 	if(isset($_SESSION['lang']))
 	{
 		$lang = $_SESSION['lang'];
 	}
 else
 	if(isset($_COOKIE['lang']))
 	{
 		$lang = $_COOKIE['lang'];
 	}
 else
    {
      $lang = 'en';
      $_SESSION['lang'] = 'en';
    }

    // Conditional of language
  switch ($lang) {
    case 'en':
    $lang_file = 'en.php';
    break;

    case 'de':
    $lang_file = 'de.php';
    break;

    case 'es':
    $lang_file = 'es.php';
    break;

    case 'fr':
    $lang_file = 'fr.php';
    break;

    default:
    $lang_file = 'en.php';
 }
    include_once 'language/'.$lang_file;
?>