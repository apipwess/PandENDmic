<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link href="../assets/css/home.css" rel="stylesheet">
        <meta charset="utf-8">
        <style>
            Body {
                background: url(https://assets.hongkiat.com/uploads/minimalist-dekstop-wallpapers/4k/original/10.jpg);
                background-size: cover;
            }
        </style>
    </head>
    <?php
    require_once "../lib/Database.php";
    require_once "../controller/story.php";
    require_once "../model/messageModel.php";
    $db = new Database();
    $model = new messageModel($db);
    $controller = new Story($model);
    ?>
    <header>
      <form class="form">
        <img src="https://img.icons8.com/nolan/96/virus.png"/>
        <?php
            $id = $_GET['id']; 
            $controller->detail($id) ?>
    </header>
    
</html>