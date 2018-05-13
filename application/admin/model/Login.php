<?php 
 namespace app\admin\model;
 use think\Model;
  class Login extends Model{
  	public function login($arr){
  		$admin=Manger::getByusername($arr['username']);
  		if($admin){
  			$id=$admin['id'];
  			$user=$admin['username'];
  			$pass=$admin['password'];
  			$status=$admin['status'];
  			$num=$admin['num'];
  			if($status==1){
  				if($pass==md5($arr['password'])){
  					session('adminuser',$user);
  					session('adminid',$id);
  					$num++;
  					$time=time();
  					Manger::update(['num'=>$num,'lastlogin'=>$time],['id'=>$id]);
  					return 4;
  				}else{
  					// 判断密码！
  					return 0;
  				}	
  			}else{
  				// 判断状态!
  				return 2;
  			};	
  		}else{
  			// 判断用户名!
  			return 3;
  		}
  	}
  }
 ?>