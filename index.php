<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/GunplaRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();


$gunplaRepository = new GunplaRepository($databaseManager);
$gunpla = $gunplaRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// echo "<pre>";
// print_r($_SERVER) ;
// echo "</pre>";

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create($databaseManager);
        break;
    case 'edit':
        edit($databaseManager);
        break;
    default:
        overview();
        break;
}

function overview()
{
    global $gunplaRepository; 
    $gunpla = $gunplaRepository->get();
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    require 'overview.php';
}

function create()
{
    global $gunplaRepository;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $gunplaRepository->create($name, $grade, $series, $date);
        
        header('location: ./');
        exit;

    }
    require "create.php";

    
    // TODO: provide the create logic
    // if(isset($_POST['submit'])) {
    //     $gunplaRepository = new $gunplaRepository($databaseManager);
    //     $gunplaRepository->create();
    // }
    // require "create.php";

}
function edit()
{
    global $gunplaRepository;
    $gunpla = $gunplaRepository->find($_GET['id']);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        

    }else{
        $gunplaRepository->find($_GET['id']);
        require "edit.php";
    }
    print_r( $_GET);   
}