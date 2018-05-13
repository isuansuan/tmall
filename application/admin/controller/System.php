<?php 
namespace app\admin\controller;
use think\Controller;
use think\Session;
class System extends Lock{
	public function index(){
		if(request()->isPost()){

			$pass=input('post.password');
			$id=Session::get('adminid');
			$password=md5($pass);
			$rst=db('manger')->where('id',$id)->update(['password'=>$password]);
			if($rst){
				$this->success('修改成功!',url('Login/index'),'','1');
			}else{
				$this->error('修改失败!',url('index'),'','1');
			}

		}else{
			return view();
		}
		
		
	}
}
 ?>