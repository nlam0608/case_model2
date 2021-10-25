<?php

namespace Src\Controller;

use Src\Model\foodsModel;

class foodsController
{
    private $foodsModel;

    public function __construct()
    {
        $this->foodsModel = new foodsModel();
    }

    public function index()
    {
        $foods = $this->foodsModel->getAll();
        include_once "src/View/foods/list.php";
    }

    public function manager()
    {
        $foods = $this->foodsModel->getAll();
        include_once "src/View/foods/managerList.php";
    }

//    public function delete($id)
//    {
//        $this->foodsModel->delete($id);
//        include_once "src/View/foods/managerList.php";
//    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->foodsModel->delete($id);
        header("Location:index.php?page=food&action=managerList");
    }

    public function showDetails($id)
    {
        $food = $this->foodsModel->getById($id);
        include_once "src/View/foods/detail.php";

    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "src/View/foods/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "ingredient" => $_REQUEST["ingredient"],
                "kind_of" => $_REQUEST["kind_of"],
                "image" => $_REQUEST["image"],
            ];
            $this->foodsModel->store($data);
            header("Location:index.php?page=food&action=managerList");
        }
    }

    public function editFood($id)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $ingredient = $_POST["ingredient"];
            $kind_of = $_POST["kind_of"];
            $image = $_POST["image"];
            $this->foodsModel->edit($id,[
                'name' => $name,
                'price' => $price,
                'ingredient' => $ingredient,
                'kind_of' => $kind_of,
                'image' => $image,
            ]);
            header('Location:index.php?page=food&action=managerList');
        } else {
            $food = $this->foodsModel->getById($id);
            include_once "src/View/foods/edit.php";
        }
    }

    public function ShowFormCreate()
    {
        include_once "src/View/foods/create.php";
    }

    public function showFoodsAppetizer()
    {
        $foods = $this->foodsModel->foodAppetizer();
        include_once "src/View/foods/list.php";
    }

    public function showFoodsMainDishes()
    {
        $foods = $this->foodsModel->foodMainDishes();
        include_once "src/View/foods/list.php";
    }

    public function showFoodsDesserts()
    {
        $foods = $this->foodsModel->foodDesserts();
        include_once "src/View/foods/list.php";
    }
}