<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\Model\Login as LoginModel;
class Login extends Controller{
    public function index(){
        if(request()->isPost()){
           $username=input('post.username');
           $password=md5(input('post.password'));
           $rst=db('manger')->where('username',$username)->where('password',$password)->where('delval','1')->find();
           if($rst){
             session('adminuser',$username);
             session('adminid',$rst['id']);
             $num=$rst['num'];
             $num++;
             db('manger')->where('id',$rst['id'])->update(['num'=>$num]);
             $this->redirect(url('Index/index'));
           }else{
            $this->redirect(url('Login/index'));
           }  
        }else{
           return view();  
        }
    }
    	
    public function loginout(){
        $mangerid=session('adminid');
        $time=time();
        db('manger')->where('id',$mangerid)->update(['lastlogin'=>$time]);
    	session('adminuser',null);
    	session('adminid',null);
        // 变换颜色
        session('admincolor',null);
        session('admintopcolor',null);
        // 判断隐藏状态
        session('status',null);
    	$this->redirect(url('Login/index'));
    }
    public function ajax_user(){
        $user=input('post.user');
        $rst=db('manger')->where('username',$user)->where('delval','1')->find();
        if($rst){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function ajax_pass(){
        $pass=md5(input('post.pass'));
        $user=input('post.user');
        $rst=db('manger')->where('username',$user)->where('password',$pass)->where('delval','1')->find();    
        if($rst){
            echo 1;
        } else{
            echo 0;
        }
    }
   
}
