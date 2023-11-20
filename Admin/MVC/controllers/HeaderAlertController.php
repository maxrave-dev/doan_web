<?php
require_once("MVC/Models/headeralert.php");
class HeaderAlertController
{
    var $header_model;
    public function __construct()
    {
        $this->header_model = new HeaderAlert();
    }

    public function list()
    {
        $data = array();
        $data = $this->header_model->All();
        require_once("MVC/Views/Admin/index.php");
        //require_once('MVC/views/categories/list.php');
    }

    public function add()
    {
        require_once("MVC/Views/Admin/index.php");
        //require_once('MVC/views/categories/add.php');
    }
    public function store()
    {
        $MaSP = $_POST['MaSP'];
        $noidung = $_POST['noidung'];

        $data = array(
            'noidung' => $noidung,
            'MaSP' => $MaSP,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->header_model->store($data);
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 5;
        $data = $this->header_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once('MVC/views/categories/detail.php');
    }
    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->header_model->delete($_GET['id']);
        }
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->header_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once('MVC/views/categories/edit.php');
    }
    public function update()
    {
        $MaSP = $_POST['MaSP'];
        $noidung = $_POST['noidung'];

        $data = array(
            'id' => $_POST['id'],
            'noidung' =>  $noidung,
            'MaSP' => $MaSP,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->header_model->update($data);
    }
}

