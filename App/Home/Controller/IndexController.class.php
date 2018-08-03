<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //底层模版测试
    public function layouts(){
    	return $this->display('layouts/default');
    }

    //首页
    public function index(){
    	return $this->display('index/index');
    }
}