<?php
namespace Admin\Controller;
use Think\Controller;

class CateController extends Controller {
    
    //一级目录
    public function index(){
    	$hight  = D('hight_cate');
    	$hcates = $hight->select();
    	$this->assign('hcates',$hcates);
    	return $this->display('hight/index');
    }

    //添加一级目录页面
    public function add(){
    	return $this->display('hight/add');
    }

    //添加一级目录逻辑
    public function addAct(){
    	$hcate = D('hight_cate');
    	$data['name'] = trim(I('name'));
    	$data['created_at'] = time();
    	$data['updated_at'] = time();
    	$hcate->add($data);
    	$this->success('操作成功',U('admin/cate/index'));
    }

    //修改一级目录
    public function save(){
    	$id = I('get.id');
    	$hcatem = D('hight_cate');
    	$hcate = $hcatem->find($id);
    	$this->assign('hcate',$hcate);
    	return $this->display('hight/save');
    }

    //修改二级目录
    public function saveAct(){
    	$data = I('post.');
    	$data['updated_at'] = time();
    	$hcatem = D('hight_cate');
    	$res = $hcatem->save($data);
    	$this->success('操作成功',U('admin/cate/index'));
    }

    //删除二级目录
    public function del(){
    	$id  = I('get.id');
    	$res = D('hight_cate')->where("id=$id")->delete();
    	$this->success('操作成功',U('Admin/cate/index'));
    }

}