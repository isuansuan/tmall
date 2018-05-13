<?php 
namespace app\index\controller;
use think\Controller;
class Person extends Lock{
	public function index(){
		// 定时器商品
		$intervalshops=db('shop')->order('rand()')->limit(9)->where('shelf',0)->select();
		$this->assign('intervalshops',$intervalshops);	
         // 猜你喜欢商品
		$likeshops=db('shop')->order('rand()')->limit(18)->where('shelf',0)->select();
		$this->assign('likeshops',$likeshops);	
		// 头像
		$userid=session('homeid');
		$head=db('user')->where('id',$userid)->find();
		$this->assign('head',$head);
		// 商品
		$shops=db('shop')->order('rand()')->limit(15)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);
		return view();
	}
	// 修改登录密码
	public function updatepass(){
		$userid=session('homeid');
		$pass=md5(input('post.password'));
		$rst=db('user')->where('id',$userid)->update(['password'=>$pass]);
		if($rst){
			$this->redirect(url('index/login'));
		}
	}
	// 全部订单
	public function indent(){
        $user_id=session('homeid');
        $search=input('param.search');
		$indents=db('dindan')->where('sname','like',"%$search%")->where('val',0)->join('shop','dindan.shop_id=shop.id')->where('user_id',$user_id)->where('user_id',$user_id)->field('dindan.*,shop.sname,shop.introduce,shop.img,shop.price')->paginate(6);	
		$this->assign('indents',$indents);
		// 分页
		$page=$indents->render();
		$this->assign('page',$page);
		// 商品
		$shops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);
	
		return view();
	}
    public function ajax_indentdel(){
    	$indentid=input('post.id');	
    	$rst=db('dindan')->where('id',$indentid)->update(['val'=>1]);
    	if($rst){
    		echo 1;
    	}else{
    		echo 0;
    	}
    	
    }
    // 待付款
	public function indent1(){
		$shops=session('shops');
		$this->assign('shops',$shops);	
		// 商品
		$moreshops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('moreshops',$moreshops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);
		return view();
	}
	// 待发货
	public function indent2(){
		$user_id=session('homeid');
		$search=input('param.search');
		$data=db('dindan')->where('sname','like',"%$search%")->where('val',0)->join('shop','dindan.shop_id=shop.id')->where('user_id',$user_id)->where('status_id',1)->field('dindan.*,shop.sname,shop.img,shop.price')->select();
		$this->assign('data',$data);
		// 商品
		$shops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);
		return view();
	}
	// 待收货
	public function indent3(){
		$user_id=session('homeid');
		$search=input('param.search');
		$data=db('dindan')->where('sname','like',"%$search%")->where('val',0)->join('shop','dindan.shop_id=shop.id')->where('user_id',$user_id)->where('status_id',3)->where('affirm',0)->field('dindan.*,shop.sname,shop.img,shop.price')->select();
		$this->assign('data',$data);
		// 商品
		$shops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);
		return view();
	}
	// 待评价
	public function indent4(){
		$user_id=session('homeid');
		$search=input('param.search');
		$data=db('dindan')->where('sname','like',"%$search%")->where('val',0)->join('shop','dindan.shop_id=shop.id')->where('user_id',$user_id)->where('status_id',3)->where('affirm',1)->field('dindan.*,shop.sname,shop.img,shop.price')->select();
		$this->assign('data',$data);
		// 商品
		$shops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);	
		return view();
	}
	
	public function indent5(){
		$user_id=session('homeid');
		$search=input('param.search');
		$data=db('dindan')->where('sname','like',"%$search%")->where('val',0)->join('shop','dindan.shop_id=shop.id')->where('user_id',$user_id)->where('status_id',4)->where('affirm',1)->field('dindan.*,shop.sname,shop.img,shop.price')->select();
		$this->assign('data',$data);
		// 商品
		$shops=db('shop')->order('rand()')->limit(8)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);	
		return view();
	}
	// 收货地址页面
	public function user(){
		$user_id=session('homeid');
		$data=db('contact')->where('user_id',$user_id)->select();
		$this->assign('data',$data);
		$tot=db('contact')->where('user_id',$user_id)->count();
		$this->assign('tot',$tot);
		return view();
	}
	// 添加收货地址
	public function ajax_useradd(){
		 $data=input('post.str');
         parse_str($data,$arr);
         $arr['addr']=htmlspecialchars(addslashes(trim($arr['addr'])));
         $arr['cname']=htmlspecialchars(addslashes(trim($arr['cname'])));
         $arr['tel']=trim($arr['tel']);
         $arr['noun']=trim($arr['noun']);
         $rst=db('contact')->insert($arr);
         $cid=db('contact')->getLastInsID();
         $this->assign('arr',$arr);
         $this->assign('cid',$cid);
         if($rst){
          echo	$this->fetch();
         }else{
         	echo 0;
         }
	}
	// 删除收货地址
	public function ajax_userdel(){
		$cid=input('post.id');
		$rst=db('contact')->where('id',$cid)->delete();
		if($rst){
			echo 1;
		}else{
			echo 0;
		}
	}
    // 个人资料页面
	public function portrait(){
		// 头像
		$userid=session('homeid');
		$head=db('user')->where('id',$userid)->find();
		$this->assign('head',$head);
		// 资料
		$personal=db('personal')->where('user_id',$userid)->find();
		$this->assign('personal',$personal);
		return view();
	}
	// 个人资料
	public function addziliao(){
		$data=input('param.');
		$userid=session('homeid');
		$rst=db('personal')->where('user_id',$userid)->find();
		if($rst){
           db('personal')->where('user_id',$userid)->update(['nickname'=>$data['nickname'],'username'=>$data['username'],'sex'=>$data['sex'],'s_province'=>$data['s_province'],'s_city'=>$data['s_city'],'s_county'=>$data['s_county'],'user_id'=>$userid]);
           $this->redirect(url('Person/portrait'));
		}else{
          db('personal')->insert(['nickname'=>$data['nickname'],'username'=>$data['username'],'sex'=>$data['sex'],'s_province'=>$data['s_province'],'s_city'=>$data['s_city'],'s_county'=>$data['s_county'],'user_id'=>$userid]);
          $this->redirect(url('Person/portrait'));
		}

	}
    // 修改头像页面
	public function xghead(){
		$userid=session('homeid');
		$head=db('user')->where('id',$userid)->find();
        $this->assign('head',$head);
		return view();
	}
    // 图片上传
    public function ajax_upload(){
    	// 获取表单上传文件 例如上传了001.jpg
    	$file = request()->file('file');
    	// 移动到框架应用根目录/public/uploads/ 目录下
    	$info = $file->move('./static/upload/head');
    	if($info){
    	// 成功上传后 获取上传信息
    	// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
    	echo $info->getSaveName();
    	}else{
    	// 上传失败获取错误信息
    	echo $file->getError();
    	}
    }
    // 修改头像
    public function ajax_head(){
    	$src=input('post.src');
    	$userid=session('homeid');
    	$rst=db('user')->where('id',$userid)->update(['img'=>$src]);
    	if($rst){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
    // 评论页面
	public function evaluate(){
		$shopid=input('param.id');
		$shop=db('shop')->where('id',$shopid)->find();
		$this->assign('shop',$shop);	
		return view();
	}
	// 评论页面添加图片
	public function ajaxAddCommentImg(){
	      $file = request()->file('file');
	      $info = $file->move('./static/upload/comment/');
	      if($info){
	        echo $info->getSaveName();
	      }else{
	        echo $file->getError();
	      }
	   }
	  // 提交评论
	public function ajax_comment(){
		$shopid=input('post.id');
		$userid=session('homeid');
		$img=input('post.zhi');
		$time=date('Y-m-d');
		$comment=htmlspecialchars(addslashes(trim(input('post.pinglun'))));
		db('dindan')->where('shop_id',$shopid)->where('user_id',$userid)->update(['status_id'=>4]);
		$rst=db('comment')->insert(['content'=>$comment,'img'=>$img,'time'=>$time,'user_id'=>$userid,'shop_id'=>$shopid]);
		if($rst){
			echo 1;
		}else{
			echo 0;
		}

	}
	// 收藏夹
	public function collect(){
		// 商品
		$shops=db('shop')->order('rand()')->limit(15)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);

		// 用户收藏的商品
		$userid=session('homeid');
		$collectshops=db('collect')->where('user_id',$userid)->join('shop','collect.shop_id=shop.id')->field('shop.*')->group('collect.shop_id')->select();
		$this->assign('collectshops',$collectshops);
		return view();
	}
   
     // 收藏夹删除商品
	public function ajax_collectdel(){
		$shopid=input('post.id');
		$userid=session('homeid');
		$rst=db('collect')->where('user_id',$userid)->where('shop_id',$shopid)->delete();
        if($rst){
        	echo 1;
        }else{
        	echo 0;
        }
	}
	// 我的足迹
	public function footmark(){
		// 商品
		$shops=db('shop')->order('rand()')->limit(15)->where('shelf',0)->select();
		$this->assign('shops',$shops);
		// 品牌
		$brands=db('brand')->limit(11)->select();
		$this->assign('brands',$brands);

		// 用户足迹的商品
		$userid=session('homeid');
		$footshops=db('footmark')->where('user_id',$userid)->group('footmark.time')->select();
		foreach ($footshops as $key => &$value) {
			$shop=db('footmark')->where('user_id',$userid)->where('time',$value['time'])->join('shop','footmark.shop_id=shop.id')->field('shop.*')->group('footmark.shop_id')->select();
			$value['shops']=$shop;
		}
		$this->assign('footshops',$footshops);	
		return view();
	}
	 // 我的足迹删除  
	public function ajax_footdel(){
		$shopid=input('post.id');
		$userid=session('homeid');
		$rst=db('footmark')->where('user_id',$userid)->where('shop_id',$shopid)->delete();
        if($rst){
        	echo 1;
        }else{
        	echo 0;
        }
	}
    // 我的拍卖页面
	public function auction(){
		return view();
	}
}

 ?>