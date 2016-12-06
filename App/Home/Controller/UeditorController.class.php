<?php
namespace Home\Controller;

use Think\Controller;

class UeditorController extends Controller {

    public function index() {
        echo "hello";
    }

    public function upload() {
        echo json_encode(1);
    }

    public function test() {
        $data = I();
        var_dump($data);
        $this->display();
    }
}
