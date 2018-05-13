<?php 
namespace app\index\controller;
use think\Controller;
class Car extends Lock{
	public function index(){
		// session中购物车物品
         $carshops=session('shops'); 
         $this->assign('carshops',$carshops); 	
          // 掌柜热卖
         $shops=db('shop')->order('rand()')->limit(4)->select();
         $this->assign('shops',$shops);
         // 最近浏览过的
         $shopas=db('shop')->order('rand()')->limit(4)->select();
         $this->assign('shopas',$shopas);
         // 猜你喜欢的
         $shopbs=db('shop')->order('rand()')->limit(4)->select();
         $this->assign('shopbs',$shopbs);
		return view();
	}
	// 购物车删除商品
	public function ajax_del(){
		$shopid=input('post.id');
		$shop=session("shops.{$shopid}",null);
		if($shop){
			echo 1;
		}else{
			echo 0;
		}

	}
	// 购物车批量删除
	public function ajax_delAll(){
		$ids=input('post.str');
		$arr=explode(',',$ids);
		foreach ($arr as $key => $value) {
			session("shops.{$value}",null);
		}
		echo 1;
		
	}
	// 购物车加数量
	public function ajax_carjia(){
		$id=input('post.id');
		$carnum=input('post.carstock');
		$stock=db('shop')->where('id',$id)->find();
		if($carnum==$stock['stock']){
			$num==$stock['stock'];
		}else{
			$num=$carnum+1;
		}
		$shop=session("shops.{$id}");
        $shop['num']=$num;
        session("shops.{$id}",$shop);	
        echo $shop['num'];
		// echo $num;
					
	}
	// 购物车减数量
	public function ajax_carjian(){
		$id=input('post.id');
		$carnum=input('post.carstock');
		if($carnum==1){
			$num=1;
		}else{
			$num=$carnum-1;
		}
		$shop=session("shops.{$id}");
        $shop['num']=$num;
        session("shops.{$id}",$shop);	
        echo $shop['num'];
	}
     // 检测是否有收获地址
	public function ajax_contact(){
		$userid=session('homeid');
		$data=db('contact')->where('user_id',$userid)->select();
		if($data){
			echo 1;
		}else{
			echo 0;
		}
	}
	// 确认订单页面
	public function qrdd(){
		$user_id=session('homeid');
		$contacts=db('contact')->where('user_id',$user_id)->limit(4)->select();
	    $this->assign('contacts',$contacts);
	    $shopid=input('param.');
	    $shops=array();
	    foreach ($shopid['shopid'] as $key => $id) {	
	    	   $seshops=session('shops');
	    	   foreach ($seshops as $key => $value) {
	    	   		if($key==$id){
	    	   			$shops[$key]=$value; 	   				
	    	   		}		
         	}	
	    } 
	    $this->assign('shops',$shops);	 		
		return view();
	}
	public function submitdindan(){
		$addr=input('param.addr');
		$tot=input('param.tot');
		$province=input('param.s_province');
		$city=input('param.s_city');
		$county=input('param.s_county');
		session('prods.province',$province);
		session('prods.city',$city);
		session('prods.county',$county);
		session('prods.tot',$tot);
		session('prods.addr',$addr);
		$contactid=input('param.contactid');
		$code='Z'.time().rand();
		$time=date('Y-m-d');
		$shopid=input('param.id');
		session('prods.code',$code);
		$userid=session('homeid');
          $a=input('param.');
          foreach ($a['shopid'] as $key => $id) {
          	$seshops=session('shops');		
          	foreach ($seshops as $key => $value) {
          		if($key==$id){
          		 $rst=db('dindan')->insert(['code'=>$code,'time'=>$time,'num'=>$value['num'],'color'=>$value['color'],'neicun'=>$value['neicun'],'user_id'=>$userid,'shop_id'=>$value['id'],'contact_id'=>$contactid]);
          		 if($rst){
          		 	$shopst=db('shop')->where('id',$value['id'])->find();
          		 	$stock=$shopst['stock']-$value['num'];
          		 	db('shop')->where('id',$value['id'])->update(['stock'=>$stock]);
          		 	session("shops.{$id}",null);
          		  }			
          		}
          	}
          }
          $this->redirect(url('Car/alipay'));
	}
	// 支付页面
	public function alipay(){
		$data=session('prods');	
		$this->assign('data',$data);	
		return view();
	}
	// 购买成功
	public function shopwin(){
		$data=session('prods');
		$this->assign('data',$data);
		return view();
	}
	public function qrsh(){
		$code=input('param.code');
		$userid=session('homeid');
		$shopid=input('param.shopid');	
		// 查询收货地址等 	
		$contact=db('dindan')->where('dindan.code',$code)->join('contact','dindan.contact_id=contact.id')->field('dindan.code,dindan.time,contact.s_province,contact.s_city,contact.s_county,contact.cname,contact.addr,contact.tel,contact.noun')->find();
         // 查询商品
		$shops=db('dindan')->where('dindan.code',$code)->where('shop_id',$shopid)->join('shop','dindan.shop_id=shop.id')->field('dindan.num,shop.*')->select();
		$this->assign('contact',$contact);
		$this->assign('shops',$shops);	
		return view();
	}
	public function ajax_okinfo(){
		$code=input('post.code');
		session('prods',null);
		$shopid=input('post.shopid');
		$rst=db('dindan')->where('code',$code)->where('shop_id',$shopid)->update(['affirm'=>1]);
		if($rst){
			echo 1;
		}else{
			echo 0;
		}
	}
}

 ?>