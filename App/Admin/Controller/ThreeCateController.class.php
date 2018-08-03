<?php
namespace Admin\Controller;
use Think\Controller;

class ThreeCateController extends Controller {
    
    //二级目录
    public function index(){
        $res = getHightMiddleCate(1);
    	$three = D('three_cate');
    	$tcates = $three->select();
    	$this->assign('tcates',$tcates);
    	return $this->display('three/index');
    }

    //添加三级目录页面
    public function add(){
        $hcates = D('hight_cate')->select();
        $this->assign('hcates',$hcates);
    	return $this->display('three/add');
    }

    //获取二级栏目
    public function getMiddleCate(){
        $data['hight_id'] = I('post.hight_id');
        $mCates = D('middle_cate')->where($data)->select();
        $mcateStr = '';
        if(count($mCates)>0){
            foreach($mCates as $k => $mcate){
                $mcateStr .= '<option value="'.$mcate['id'].'">'.$mcate['name'].'</option>';
            }
            echo $mcateStr;
        }else{
            echo '<option value="0">暂无二级目录</option>';
        }
    }

    //添加三级目录逻辑
    public function addAct(){
        $data = I('post.');
        $data['created_at'] = time();
        $data['updated_at'] = time();
    	$res = D('three_cate')->add($data);
    	$this->success('操作成功',U('admin/ThreeCate/index'));
    }

    //修改三级目录
    public function save(){
    	$id = I('get.id');
        $hcates = D('hight_cate')->select();
    	$mcates = D('middle_cate')->select();
    	$tcate  = D('three_cate')->find($id);
        $tcate['hight_id'] = D('ThreeCate')->getHigh($tcate['middle_id']);
    	$this->assign('hcates',$hcates)->assign('mcates',$mcates)->assign('tcate',$tcate);
    	return $this->display('three/save');
    }

    //修改三级目录逻辑
    public function saveAct(){
    	$data = I('post.');
    	$data['updated_at'] = time();
    	$res = D('three_cate')->save($data);
    	$this->success('操作成功',U('admin/ThreeCate/index'));
    }

    //删除二级目录
    public function del(){
    	$id  = I('get.id');
    	$res = D('three_cate')->where("id=$id")->delete();
    	$this->success('操作成功',U('Admin/ThreeCate/index'));
    }

}