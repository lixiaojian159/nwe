<?php

/**
 * getHightCate   获取一级目录名称
 * @param   int     $id
 * @return  string  $str 
 */
function getHightCate($id){
	$hight = D('hight_cate')->where('id='.$id)->find();
	return $hight['name']; 
}

/**
 * 
 */

function getHightMiddleCate($id){
	$middle = D('middle_cate')->where('id='.$id)->find();
	$hight  = D('hight_cate')->where('id='.$middle['hight_id'])->find();
	$str  = '';
	$str .= $hight['name'].' 》'.$middle['name'];
	return $str;
}