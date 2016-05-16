<?php

$title = "My Search Engine";
$name = 'Search Page';
$page = '';

if(isset($_GET['p']) && $_GET['p']=='post'){
    $page = 'post';
}else if(isset($_GET['p']) && $_GET['p']=='result'){
    include_once 'controllers/result.php';
    $page = 'result';
}else if(isset($_GET['p']) && $_GET['p']=='details'){
    $page = 'details';
}else{
    $page = 'home';
}
include_once 'views/'.$page.'.php';


?>
