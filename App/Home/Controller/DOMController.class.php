<?php
namespace Home\Controller;
use think\Controller;

class DOMController extends Controller {

	public function index() {
		echo 'Hello, DOM!';
	}

	public function demo01() {
		return $this->display();
	}
}