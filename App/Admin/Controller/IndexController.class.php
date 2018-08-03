<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    
    //后台首页
    public function index(){
    	return $this->display('index/index');
    }

    public function layouts(){
    	return $this->display('layouts/default');
    }
}