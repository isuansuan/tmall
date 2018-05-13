<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\captcha\Captcha;
class Index extends Error{
    public function index(){
      // 广告
      $advert=db('advert')->limit(1)->order('sort desc')->select();
      $this->assign('advert',$advert);
      // 幻灯片
      $lunbo=db('lunbo')->limit(6)->order('sort desc')->select();
      $this->assign('lunbo',$lunbo);
      // 热门品牌
      $remenbrand=db('brand')->limit(6)->select();
      $this->assign('remenbrand',$remenbrand); 
      // 上市新机
      $shangshi=db('shop')->order('rand()')->limit(15)->where('shelf',0)->select();
      $this->assign('shangshi',$shangshi); 
      // 遍历主页
      $bad=db('brand')->limit(11)->select();
      foreach ($bad as &$value) {
         $brandbgimg=db('brandbgimg')->where('brand_id',$value['id'])->limit(11)->select();
         $value['brandbgimg']=$brandbgimg;

         $brandsmimg=db('brandsmimg')->where('brand_id',$value['id'])->limit(11)->select();
         $value['brandsmimg']=$brandsmimg;

         $shop=db('shop')->where('brand_id',$value['id'])->limit(5)->where('shelf',0)->select();
         $value['shop']=$shop;    
      }
        $this->assign('bad',$bad);
        // 品牌
        $brand=db('brand')->select();
        $this->assign('brand',$brand); 
         // 主页最下方商品
        $Bshop=db('shop')->order('rand()')->limit(25)->where('shelf',0)->select();
         $this->assign('Bshop',$Bshop);
         // session中购物车物品
         $carshops=session('shops'); 
         $this->assign('carshops',$carshops);  
        return view();
          
    } 
    public function product(){
      $shopid=input('param.');
      $userid=session('homeid');
      $time=date('Y-m-d'); 
      // 我的足迹
      if($userid){
        db('footmark')->insert(['user_id'=>$userid,'time'=>$time,'shop_id'=>$shopid['id']]);
      }
      // session中购物车物品
      $carshops=session('shops'); 
      $this->assign('carshops',$carshops); 
      // 商品价格等查询
      $prodshop=db('shop')->where('id',$shopid['id'])->find();
      $this->assign('prodshop',$prodshop);
      // 查看商品是否在收藏夹中
      $collectshop=db('collect')->where('user_id',$userid)->where('shop_id',$shopid['id'])->find();
      $this->assign('collectshop',$collectshop);  
      // 商品详情左侧图片
      $data=db('prodimg')->where('shop_id',$shopid['id'])->select();
      $this->assign('data',$data);
      // 商品详情下方图
      $prodbotimg=db('prodbotimg')->where('shop_id',$shopid['id'])->select();
      $this->assign('prodbotimg',$prodbotimg);  
      // 商品详情右侧随机商品
      $shops=db('shop')->order('rand()')->limit(12)->select();
      $this->assign('shops',$shops); 
      // 商品机身颜色和内存
      $shopcolor=db('prodcolor')->where('shop_id',$shopid['id'])->select();
      $this->assign('shopcolor',$shopcolor);
      // 商品详情顶部图片 
      $shopbrandid=db('shop')->where('id',$shopid['id'])->find();
      $brandimg=db('prodtopimg')->where('brand_id',$shopbrandid['brand_id'])->find();
      $this->assign('brandimg',$brandimg);
      //评论
      $comment=db('comment')->where('shop_id',$shopid['id'])->join('user','comment.user_id=user.id')->field('comment.*,user.username')->select(); 
      foreach ($comment as &$value) {  
        $dindan=db('dindan')->where('shop_id',$shopid['id'])->where('user_id',$value['user_id'])->select();
        $value['dindan']=$dindan;
        $imgs= explode(",",$value['img']);
        array_shift($imgs);
        $value['imgs']=$imgs;
         
      }
      $this->assign('comment',$comment);
      // 这个商品的品论条数 
      $commenttot=db('comment')->where('shop_id',$shopid['id'])->count();
       $this->assign('commenttot',$commenttot); 
      return view();
    }
    // 加入购物车
    public function ajax_caradd(){
      if(session('color')&&session('neicun')){
        $id=input('post.id');
        $data=db('shop')->where('id',$id)->find();
        $data['color']=session('color');
        session('color',null);
        $data['neicun']=session('neicun');
        session('neicun',null);
        $num=session('num');
        if($num){
          $data['num']=session('num');
          session('num',1);
        }else{
          $data['num']=1;
        } 
        if(session("shops.{$id}")){
             $shop=session("shops.{$id}");
             $numa=$shop['num'];
             if($num){
               $numa=$numa+$num;
             }else{
              $numa=$numa+1;
             } 
             $data['num']=$numa;
          }
        session("shops.{$id}",$data); 
        $carshops=session('shops'); 
        $shops=array_pop( $carshops ); 
        $this->assign('shops',$shops);  
        if($shops){
          echo $this->fetch();
        }else{
          echo 0;
        }  
      }

    }
    // session中存入商品颜色
    public function ajax_procolor(){
      $id=input('post.id');
      session('color',null);
      $data=db('prodcolor')->where('id',$id)->find();
      $color=$data['color'];
      session('color',$color);
      if($color){
        echo 1;
      }else{
        echo 0;
      }
    }
    // session中存入商品内存
    public function ajax_proneicun(){
        $id=input('post.id');
        session('neicun',null);
        $data=db('prodcolor')->where('id',$id)->find();
        $neicun=$data['neicun'];
        session('neicun',$neicun);
        if($neicun){
          echo 1;
        }else{
          echo 0;
        }
    }
    // 商品详情加num
    public function ajax_jia(){
      $shopstock=input('post.shopstock');
      $id=input('post.id');  
      $data=db('shop')->where('id',$id)->find();
      $stock=$data['stock'];
      if($shopstock==$stock){
        $jiastock=$stock;
      }else{
        $jiastock=$shopstock+1;
      }
      session('num',$jiastock); 
     if($jiastock){
      echo $jiastock;
     }else{
      echo 0;
     }
    }
    // 商品详情减num
    public function ajax_jian(){
      $shopstock=input('post.shopstock');
      if($shopstock==1){
        $shopstock=1;
        $stock=$shopstock;
      }else{
         $stock=$shopstock-1;
      }
      session('num',$stock); 
      if($stock){
         echo $stock;
        }else{
         echo 0;
        }
     
    }
    // 收藏商品
    public function ajax_addcollect(){
      $shopid=input('post.id');
      $userid=session('homeid');
      $rst=db('collect')->insert(['user_id'=>$userid,'shop_id'=>$shopid]);
      if($rst){
        echo 1;
      }else{
        echo 0;
      } 
    }

    // 登录页面
    public function login(){
     if(request()->isPost()){
        $username=input('post.username');
        $password=md5(input('post.password'));
        $data=db('user')->where('username',$username)->where('delval','1')->where('password',$password)->find();
        if($data){
          session('homeuser',$data['username']);
          session('homeid',$data['id']);
          $num=$data['num'];
          $num++;
          $time=date('Y-m-d');
          db('user')->where('id',$data['id'])->update(['num'=>$num,'lastlogin'=>$time]);
          $this->redirect(url('index/index'));
        }else{
           $this->redirect(url('index/login'));
        }
     }else{
      return view();
     }
    }
    // 验证用户名是否存在
    public function ajax_loginuser(){
      $username=input('post.username');
      $rst=db('user')->where('username',$username)->where('delval','1')->select();
      if($rst){
        echo 1;
      }else{
        echo 0;
      }
    }
    // 验证密码是否正确
    public function ajax_loginpass(){
      $username=input('post.username');
      $password=md5(input('post.password'));

      $rst=db('user')->where('username',$username)->where('password',$password)->where('delval','1')->select();
      if($rst){
        echo 1;
      }else{
        echo 0;
      }
    }
    // 注册页面
    public function register(){
      return view();
    }
    // 提交注册数据
    public function registeradd(){
      $data=input('post.');
      unset($data['tele'],$data['verify'],$data['rpassword']);
      $data['password']=md5(trim($data['password']));
      $data['username']=htmlspecialchars(addslashes(trim($data['username'])));
      $rst=db('user')->insert($data);
      if($rst){
        session('homeuser',$data['username']);
        $id=db('user')->getLastInsID();
        session('homeid',$id);
        $this->redirect(url('index/register1'));
      }else{
        $this->redirect(url('index/register'));
      }
      
    }
    // 接收验证码
    public function ajax_ify(){
      $yzm=input('post.yzm');
      $rst=$this->check_verify($yzm);
      if($rst){
        echo 1;
      }else{
        echo 0;
      }
       
    }
    // 检测验证码
    public function check_verify($code, $id = ''){
      $captcha = new Captcha();
      return $captcha->check($code, $id);
      }

    // 判断数据库是否有此用户名
    public function ajax_user(){
      $username=input('post.username');
      $rst=db('user')->where('username',$username)->select();
      if($rst){
        echo 0; 
      }else{
        echo 1;
      }
    }
    // 退出登录
    public function loginout(){
      session('homeid',null);
      session('homeuser',null);
      session('shops',null);
      session('prods',null);
      session('num',null);
      session('addr',null);
      session('tot',null);
      $this->redirect(url('index/index'));
    }   
   
    public function register1(){
      return view();
    }
    
    // 更多页面
    public function more(){
      $data=input('param.brandid');
      $internet=input('param.internet');
       $more=input('param.more');
      $search=input('param.search');
      $start_price=input('param.start_price');
      $screen=input('param.screen');
           
        // 品牌查询
      $brand=db('brand')->limit(8)->select();
      $this->assign('brand',$brand); 
      // 判断是否有品牌id
      if($data){
        $shop=db('shop')->where('brand_id',$data)->paginate(40);
        $this->assign('shop',$shop);
      }
        // 判断是否有网络类型
      if($internet){
        $shop=db('shop')->where('internet',$internet)->where('shelf',0)->paginate(40);
        $this->assign('shop',$shop);   
      }
      // 判断搜索
      if($search){
        $shop=db('shop')->where('sname','like',"%$search%")->where('shelf',0)->paginate(40);
        $this->assign('shop',$shop);
      }
     // 判断没有参数查出所有商品
      if($more){
        $shop=db('shop')->where('shelf',0)->paginate(40);
        $this->assign('shop',$shop);
      }
      // 判断价格
      // 0-1000
      switch ($start_price) {
        case '0':
          $shop=db('shop')->where('price',['>',0],['<',1000],'and')->paginate(40);
          $this->assign('shop',$shop);
          break;
        case '1000':
          $shop=db('shop')->where('price',['>',1000],['<',1500],'and')->paginate(40);
          $this->assign('shop',$shop);
          break;
        case '1500':
          $shop=db('shop')->where('price',['>',1500],['<',2500],'and')->paginate(40);
          $this->assign('shop',$shop);
          break;  
        case '2500':
          $shop=db('shop')->where('price',['>',2500],['<',10000000],'and')->paginate(40);
          $this->assign('shop',$shop);
          break;  
      }
      // 判断屏幕大小
      switch ($screen) {
        case '0':
          $shop=db('shop')->where('screen',['>',0],['<',5.0],'and')->paginate(40);
          $this->assign('shop',$shop); 
          break;
        case '4.5':
          $shop=db('shop')->where('screen',['>',4.5],['<',5.5],'and')->paginate(40);
          $this->assign('shop',$shop); 
          break;
        case '5.0':
          $shop=db('shop')->where('screen',['>',5.0],['<',6.0],'and')->paginate(40);
          $this->assign('shop',$shop);
          break;  
        case '5.5':
          $shop=db('shop')->whereOr('screen','>',5.5)->paginate(40);
          $this->assign('shop',$shop);
          break;  
      }
  
    // 分页
      $page=$shop->render();
      $this->assign('page',$page); 
      // session中购物车物品
      $carshops=session('shops'); 
      $this->assign('carshops',$carshops); 
      
      return view();
    }
   
}
