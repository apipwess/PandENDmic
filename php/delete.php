<?php
require_once "../lib/Database.php";
require_once "../controller/story.php";
require_once "../model/messageModel.php";
$db = new Database();
$model = new messageModel($db);
$controller = new Story($model);
$id = $_GET['id']; 
$controller->delete($id)
    ?>