<?php

require_once '../src/Controller/pageController.php';

$controller = new pageController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'contact') {
        $controller->contact();
    } elseif ($_GET['action'] == 'artwork') {
        $controller->construction();
    } elseif ($_GET['action'] == 'portfolio') {
        $controller->construction();
    } elseif ($_GET['action'] == 'service') {
        $controller->construction();
    } else {
        $controller->construction();
    }
} else {
    $controller->home();
}
