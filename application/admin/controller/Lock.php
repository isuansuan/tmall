<?php 
namespace app\admin\controller;
use think\Controller;
class Lock extends Error{
	public function _initialize(){
		if(!session('adminuser')){
			$this->redirect(url('Login/index'));
		}
	}
	
}
 ?>