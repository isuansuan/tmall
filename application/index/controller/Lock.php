<?php 
namespace app\index\controller;
use think\Controller;
class Lock extends Error{
	public function _initialize(){
		if(!session('homeuser')){
			$this->redirect(url('Index/index'));
		}
	}
	
}
 ?>