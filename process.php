<?php

/**
 * index includes this file
 */

require_once 'autoload.php';

// form validation
if (!($_SERVER['REQUEST_METHOD'] === 'POST')) {
    die("Error: invalid request !!!");
}
if (empty($_POST['title']) || empty($_POST['content']) || empty($_POST['type'])) {
    die("Error: some required data is empty !!!");
}

// declare variables
[$title, $content, $type] = [$_POST['title'], $_POST['content'], $_POST['type']];

// process
$className = "Exporter\\" . (strtoupper($type)) . "Exporter";
$obj = new $className(['title' => $title, 'content' => $content]);
$obj->export();
