<?php
namespace Admin\Model;
use Think\Model;

class ThreeCateModel extends Model{

    public function show(){
    	echo '123';
    }
	//获取一级目录middle_id
	public function getHigh($id){
		$middle = D('middle_cate')->find($id);
		$hight  = D('hight_cate')->find($middle['hight_id']);
		return $hight['id'];
	}
}