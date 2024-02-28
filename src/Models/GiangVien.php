<?php

namespace Phuon\LamBaiThi\Models;

use Phuon\LamBaiThi\Commons\Model;

class GiangVien extends Model
{
    public function getList()
    {
        try {
            $sql = "SELECT * FROM giangvien ORDER BY id DESC ";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function getByID($id)
    {
        try {    
            $sql = "SELECT * FROM giangvien WHERE id :=id";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id",$id) ;
            

            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function insert($name, $email, $phone)
    {
        try {    
            $sql = "
                INSERT INTO giangvien(name, email, phone)
                VALUES (:name, :email, :phone)
            ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function updateByID($id)
    {
    }
    public function deleteByID($id)
    {
        try {    
            $sql = "DELETE FROM giangvien WHERE id :=id";
    
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id) ;
            
            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
