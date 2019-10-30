<?php ob_start(); ?>
<?php

// Includes

//Database Include
include_once 'includes/db.php';

// Functions Include
include_once 'includes/functions.php';

// Titles Include
include_once 'includes/titles.php';

// Includes the tools page && class
include_once 'includes/tools.php';


// Security Headers
// External iframes not allowed??
header("X-Frame-Options: sameorigin"); 

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// X-XSS-Protection enables
header("X-XSS-Protection: 1; mode=block");

// x-content-type
// Potentially prevents bootstrap from loading
header("X-Content-Type-Options: nosniff");

// Strict transport security
header("Strict-Transport-Security: max-age=31536000");

?>


<!doctype html>
<html lang="en"> <!-- START OF: <html> -->
  <head> <!-- START OF: <head> -->
    
    <!-- CSS Links -->
    
        <!-- Link to css normalising sheet. -->
        <link rel="stylesheet" type="text/css" href="styles/normalise.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Link to css sheet -->
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
    
    
    <!-- IE 8 and below compatibility with HTML5 -->
    
        <!--[if IE]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
            </script>
        <![endif]-->     
    
    <!-- Declare <meta> variables -->
    
        <!-- Declare description of website -->
        <meta name="description" content="">
        <!-- Declare author of website. -->
        <meta name="author" content="Rohan Dyre">
        <!-- Declare keywords relating to SEO of website content -->
        <meta name="keywords" content="">
        <!-- Required meta tags -->
        <!-- Defines the character encoding used -->
        <meta charset="utf-8">
        <!-- Ensure resizing based on device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    <!-- Change the title of the website -->
    <title><?php $page_Title = "Home"; echo $page_Title; ?></title>
    
    
  </head> <!-- END OF: <head> -->
  
  
  <body> <!-- START OF: <body> -->