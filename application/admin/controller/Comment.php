<?php
namespace app\admin\controller;
use think\Controller;
class Comment extends Lock{
	public function index(){
		$search=input('param.search');
		
		$data=db('comment')->where('sname','like',"%$search%")->join('user','comment.user_id=user.id')->join('shop','comment.shop_id=shop.id')->field('comment.*,user.username,shop.sname')->select();
		foreach ($data as &$value) {
			$imgs=explode(',',$value['img']);
			array_shift($imgs);
			$value['imgs']=$imgs;
		}
		$this->assign('data',$data);

		$tot=db('comment')->join('user','comment.user_id=user.id')->join('shop','comment.shop_id=shop.id')->field('comment.*,user.username,shop.sname')->count();
        $this->assign('tot',$tot);
		return view();
	}
	public function del(){
		$id=input('param.id');
		$data=db('comment')->where('id',$id)->find();
		$imgs=explode(',',$data['img']);
		array_shift($imgs);	
		foreach ($imgs as $key => $value){
		 unlink('./static/upload/comment/'.$value); 
		}
		$rst=db('comment')->where('id',$id)->delete();
		if($rst){
			$this->redirect(url('Comment/index'));
		}else{
			$this->error(url('Comment/index'));
		}
	}
} 
 ?>