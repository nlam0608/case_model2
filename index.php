<?php

session_start();
if(!isset($_SESSION['isLogin'])||empty($_SESSION['isLogin'])){
    header('location: login.php');
}
require __DIR__ . '/vendor/autoload.php';

use Src\Controller\bookingController;
use Src\Controller\foodsController;


$bookingController = new bookingController();
$foodsController = new foodsController();
$page = $_REQUEST['page'];
$action = $_REQUEST['action'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/sidebar.css">

</head>
<body>
<div class="col-12">
    <?php include_once "src/View/layout/header.php"; ?>
</div>
<hr>
<div class="row">
    <?php
    switch ($page) {
        case "food":
            switch ($action) {
                case "list":
                    $foodsController->index();
                    break;
                    case "managerList":
                    $foodsController->manager();
                    break;
                case"foodAppetizer":
                    $foodsController->showFoodsAppetizer();
                    break;
                case"foodMainDishes":
                    $foodsController->showFoodsMainDishes();
                    break;
                case"foodDesserts":
                    $foodsController->showFoodsDesserts();
                    break;
                case "food-list":
                    $id = $_REQUEST['id'];
                    $foodsController->showDetails($id);
                    break;
                case"food-create":
                   $foodsController->store();
                    break;
                case"food-delete":
                    $foodsController->delete();
                    break;
                case "order-book":
                    $id = $_REQUEST['id'];
                    $bookingController->saveBook($id);
                    break;
                case "edit-food":
                    $id = $_REQUEST['id'];
                    $foodsController->editFood($id);
            }
            break;
        default:
            $bookingController->index();
            break;
    }
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<!-- ./Footer -->
</body>
</html>
