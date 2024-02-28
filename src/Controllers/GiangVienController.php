<?php

namespace Phuon\LamBaiThi\Controllers;

use Phuon\LamBaiThi\Commons\Controller;
use Phuon\LamBaiThi\Models\GiangVien;

class GiangVienController extends Controller
{

    private GiangVien $giangVien;

    public function __construct()
    {
        $this->giangVien = new GiangVien();
    }
    public function index()
    {
        $data['giangViens'] = $this->giangVien->getList();
        return $this->renderView('giangvien.index', $data);
    }
    public function add()
    {
        if(!empty($_POST)){
            $this->giangVien->insert(
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
            );
            header('Location: /giang-vien/');
            exit();
        }
        return $this->renderView('giangvien.add');
    }
    public function update($id)
    {
    }
    public function delete($id)
    {
        $giangVien =$this->giangVien->getByID($id);
        if(empty($giangVien)){
            echo '404 - Not found';
            die;
        }
        $this->giangVien->deleteByID($id);

        header('Location: /giang-vien/');
            exit();
    }
}
