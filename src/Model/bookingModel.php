<?php

namespace Src\Model;

class bookingModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM booking";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function update($id, $data)
    {
        $sql = "CALL updateBook(?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['type']);
        $stmt->bindParam(2, $data['status']);
        $stmt->bindParam(3, $data['customers']);
        $stmt->bindParam(4, $data['phone']);
        $intId = (int)$id;
        $stmt->bindParam(5, $intId);
        $stmt->execute();
    }

//    public function getById($id)
//    {
//        $sql = "SELECT * FROM booking WHERE id =".id;
//        $stmt = $this->dbConnect->query($sql);
//        return $stmt->fetch();
//    }
}