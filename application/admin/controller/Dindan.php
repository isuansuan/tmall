<?php 
namespace app\admin\controller;
use think\Controller;
class Dindan extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('dindan')->where('username','like',"%$search%")->join('user','dindan.user_id=user.id')->join('status','dindan.status_id=status.id')->field('dindan.*,user.username,status.sname')->group('dindan.code')->paginate(8);
		$this->assign('data',$data);
		
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('dindan')->join('user','dindan.user_id=user.id')->join('status','dindan.status_id=status.id')->field('dindan.*,user.username,status.sname')->group('dindan.code')->count();
		$this->assign('tot',$tot);	
		return view();
	}
	public function ordershop(){
		$code=input('param.code');
		$search=input('param.search');
		$data=db('shop')->where('sname','like',"%$search%")->join('dindan','dindan.shop_id=shop.id')->where('dindan.code',$code)->field('dindan.num,dindan.color,dindan.neicun,shop.*')->paginate(8);
		$this->assign('data',$data);
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('shop')->join('dindan','dindan.shop_id=shop.id')->where('dindan.code',$code)->field('dindan.num,dindan.color,dindan.neicun,shop.*')->count();
		$this->assign('tot',$tot);
		return view();
	}
	public function contact(){
		$search=input('param.search');
		$cid=input('param.cid');
		$data=db('contact')->where('cname','like',"%$search%")->where('id',$cid)->paginate(8);
		$this->assign('data',$data);
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('contact')->where('id',$cid)->count();
		$this->assign('tot',$tot);		
		return view();
	}
	public function edit(){
		$code=input('param.code');
		$this->assign('code',$code);
		$sid=input('param.sid');
		$this->assign('sid',$sid);
		$status=db('status')->select();
		$this->assign('status',$status);
		return view();
	}
	public function update(){
		$status_id=input('param.status_id');
		$code=input('param.code');
		$rst=db('dindan')->where('code',$code)->update(['status_id'=>$status_id]);	
		if($rst){
			$this->redirect(url('Dindan/index'));
		}else{
			$this->error(url('Dindan/index'));
		}
	}
	public function del(){
		$code=input('param.code');
		$rst=db('dindan')->where('code',$code)->delete();
		if($rst){
			$this->redirect(url('Dindan/index'));
		}else{
			$this->error(url('Dindan/index'));
		}
	}
}
 ?>