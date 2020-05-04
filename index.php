<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start a session
session_start();


//require the auto load file
require_once ("vendor/autoload.php");

//instantiate the F3 Base class
$f3 = Base::instance();

//default route
$f3->route('GET /', function($f3)
{
    //echo "<h1>Week 5</h1>";

    //create variables in the hive
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);

    //define array of fruits
    $f3->set('fruits', array('apple', 'orange', 'pear'));
    $f3->set('bookmarks', array('www.google.com', 'www.greenriver.edu', 'www.'));

    $f3->set('desserts', array("chocolate"=>"Chocolate Mousse", "vanilla"=>"Vanilla Custard", "strawberry"=>"Strawberry 
    Shortcake"));

    //conditional content
    $f3->set('preferredCustomer', true);
    $f3->set('lastLogin', strtotime('-1 week'));

    //Display the template
    $view = new Template();
    echo $view->render('views/info.html');
});


//run f3
$f3->run();

