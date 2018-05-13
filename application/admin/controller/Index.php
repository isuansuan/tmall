<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Lock{
    public function index(){ 
     // 今日评论
        $time=date('Y-m-d');
        $commenttot=db('comment')->where('time',$time)->count(); 
        $this->assign('commenttot',$commenttot); 
        // 今日订单
        $dindantot=db('dindan')->where('time',$time)->count(); 
        $this->assign('dindantot',$dindantot);
        // 今日访问
        $fangwentot=db('user')->where('lastlogin',$time)->count();
        $this->assign('fangwentot',$fangwentot);
        // 总注册用户
        $usertot=db('user')->count(); 
        $this->assign('usertot',$usertot);  
        // 最新的5个用户
        $newusers=db('user')->where('delval',1)->order('id desc')->limit(5)->select(); 
        $this->assign('newusers',$newusers);    
        // 最新的5个订单
        $neworders=db('dindan')->join('user','dindan.user_id=user.id')->join('status','dindan.status_id=status.id')->field('dindan.*,user.username,status.sname')->group('dindan.code')->order('dindan.id desc')->limit(5)->select(); 
        $this->assign('neworders',$neworders);   
    	return view();
    }
    // 清除缓存
    public function clear(){
    	$dir='../runtime';
        $this->delDir($dir);
        $this->redirect(url('Index/index'));
    }
    public function delDir($dir){
    	if(!file_exists($dir)){
    		return false;
    	}
    	$arr=scandir($dir);
    	foreach ($arr as $key => $value) {
    		if($key>1){
    			$path=$dir.'/'.$value;
    			if(is_dir($path)){
                      $this->delDir($path);
    			}
    			if(is_file($path)){
    				unlink($path);
    			}
    		}
    	}
    }
    public function ajax_chun(){
        $topcolor=input('post.topcolor');
        $color=input('post.color');
        session('admincolor',$color);
        session('admintopcolor',$topcolor);
        echo 1;  
    }
     public function ajax_qiu(){
        $color=input('post.color');
        $topcolor=input('post.topcolor');
        session('admincolor',$color);
        session('admintopcolor',$topcolor);
        echo 1;  
    }
     public function ajax_xia(){
        $color=input('post.color');
        $topcolor=input('post.topcolor');
        session('admincolor',$color);
        session('admintopcolor',$topcolor);
        echo 1;  
    }
     public function ajax_dong(){
        $color=input('post.color');
        $topcolor=input('post.topcolor');
        session('admincolor',$color);
        session('admintopcolor',$topcolor);
        echo 1;  
    }
    public function ajax_quan(){
        $i=input('post.i');
        session('status',$i); 
        echo 1;  
    }
    public function ajax_outquan(){
        $i=input('post.i');
        session('status',$i); 
        echo 1;  
    }
    public function ajax_Dindan(){
        session('dindantot',null);
        session('dindanstatus',1);
        echo 1;
    }
   
}
