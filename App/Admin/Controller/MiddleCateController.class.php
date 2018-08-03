<?php
namespace Admin\Controller;
use Think\Controller;

class MiddleCateController extends Controller {
    
    //二级目录
    public function index(){
    	$middle = D('Middle_cate');
    	$mcates = $middle->select();
    	$this->assign('mcates',$mcates);
    	return $this->display('middle/index');
    }

    //添加二级目录页面
    public function add(){
        $hcates = D('hight_cate')->select();
        $this->assign('hcates',$hcates);
    	return $this->display('middle/add');
    }

    //添加二级目录逻辑
    public function addAct(){
    	$hcate = D('hight_cate');
    	$data['name'] = trim(I('name'));
        $data['hight_id'] = I('hightId');
    	$data['created_at'] = time();
    	$data['updated_at'] = time();
    	$res = D('middle_cate')->add($data);
    	$this->success('操作成功',U('admin/MiddleCate/index'));
    }

    //修改二级目录
    public function save(){
    	$id = I('get.id');
        $hcates = D('hight_cate')->select();
    	$mcatem = D('middle_cate');
    	$mcate = $mcatem->find($id);
    	$this->assign('hcates',$hcates)->assign('mcate',$mcate);
    	return $this->display('middle/save');
    }

    //修改二级目录
    public function saveAct(){
    	$data = I('post.');
    	$data['updated_at'] = time();
    	$res = D('middle_cate')->save($data);
    	$this->success('操作成功',U('admin/MiddleCate/index'));
    }

    //删除二级目录
    public function del(){
    	$id  = I('get.id');
    	$res = D('middle_cate')->where("id=$id")->delete();
    	$this->success('操作成功',U('Admin/MiddleCate/index'));
    }

}