<?php

namespace Src\Controller;
use Src\Model\bookingModel;
class bookingController
{
    private $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new bookingModel();
    }

    public function index()
    {
        $bookings = $this->bookingModel->getAll();
        include_once "src/View/booking/list.php";
    }

    public function saveBook($id)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $type = $_POST['type'];
            $status = $_POST['status'];
            $customers = $_POST['customers'];
            $phone = $_POST['phone'];
            $this->bookingModel->update($id,[
                'type' => $type,
                'status' => $status,
                'customers'=>$customers,
                'phone'=>$phone
            ]);

        }
        header("Location:index.php?page=default");
    }

    public function showInformation($id)
    {
        $booking = $this->bookingModel->getById($id);
        include_once "src/View/booking/information.php";
    }
}