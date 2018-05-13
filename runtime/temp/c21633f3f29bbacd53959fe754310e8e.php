<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"C:\AppServ\www\tmall\public/../application/index\view\car\index.html";i:1524326937;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header2.html";i:1524212117;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>好生活上天猫-购物车</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/car.js'></script>
</head>
<style>
  .carstock{
    width:27px;
    height:20px;
    border:none;
    outline:none;
    text-align:center;
  }
</style>
<body>
<div class='main'>
   <div class='header'>
 <div class='both'>
   <div class='left'>
     <p>
        <i class="iconfont icon-wxbzhuye"></i>
        <a href="<?php echo url('index/index'); ?>">天猫首页</a>
       </p>
       <p class='miao'>
         喵，欢迎来天猫
       </p>
       <?php if(\think\Session::get('homeid')): ?>
        <p>
          <a href="<?php echo url('person/index'); ?>" style='color:#ff0036;font-weight:bold'><?php echo \think\Session::get('homeuser'); ?></a>
        </p>
        <p>
          <a href="<?php echo url('index/loginout'); ?>">退出</a>
        </p>
       <?php else: ?>
        <p>
          <a href="<?php echo url('index/login'); ?>">请登录</a>
        </p>
        <p>
          <a href="<?php echo url('index/register'); ?>">免费注册</a>
        </p>
       <?php endif; ?>
   </div>
   <div class='right'>
     <div class='right_top'>
       <div class='right_a'>
         <div class='top'>
           <p class='wife'>
             <i class="iconfont icon-category"></i>
             <span>网站导航</span>
           </p>
         </div>
         <div class='bottom'>
           <div class='bottom_a'>
             <p>
               <span>热点推荐</span>
               <span>Hot</span>
             </p>
             <ul>
               <li>
                 <a href="">天猫超市</a>
               </li>
               <li>
                 <a href="">喵鲜生</a>
               </li>
               <li>
                 <a href="">科技新品</a>
               </li>
               <li>
                 <a href="">女装新品</a>
               </li>
               <li>
                 <a href="">酷玩街</a>
               </li>
               <li>
                 <a href="">内衣新品</a>
               </li>
               <li>
                 <a href="">试美妆</a>
               </li>
               <li>
                 <a href="">运动新品</a>
               </li>
               <li>
                 <a href="">时尚先生</a>
               </li>
               <li>
                 <a href="">精明妈咪</a>
               </li>
               <li>
                 <a href="">吃乐会</a>
               </li>
               <li>
                 <a href="">企业采购</a>
               </li>
               <li>
                 <a href="">会员积分</a>
               </li>
               <li>
                 <a href="">天猫国际</a>
               </li>
               <li>
                 <a href="">品质频道</a>
               </li>
             </ul>
           </div>
           <div class='bottom_b'>
             <p>
               <span>行业市场</span>
               <span>Market</span>
             </p>
             <ul>
               <li>
                 <a href="">美妆</a>
               </li>
               <li>
                 <a href="">电器</a>
               </li>
               <li>
                 <a href="">女装</a>
               </li>
               <li>
                 <a href="">男装</a>
               </li>
               <li>
                 <a href="">女鞋</a>
               </li>
               <li>
                 <a href="">男鞋</a>
               </li>
               <li>
                 <a href="">内衣</a>
               </li>
               <li>
                 <a href="">箱包</a>
               </li>
               <li>
                 <a href="">运动</a>
               </li>
               <li>
                 <a href="">母婴</a>
               </li>
               <li>
                 <a href="">家装</a>
               </li>
               <li>
                 <a href="">医药</a>
               </li>
               <li>
                 <a href="">食品</a>
               </li>
               <li>
                 <a href="">配饰</a>
               </li>
               <li>
                 <a href="">汽车</a>
               </li>
             </ul>
           </div>
           <div class='bottom_c'>
             <p>
               <span>服务指南</span>
               <span>Help</span>
             </p>
             <ul>
               <li>
                 <a href="">帮助中心</a>
               </li>
               <li>
                 <a href="">品质保障</a>
               </li>
               <li>
                 <a href="">特色服务</a>
               </li>
               <li>
                 <a href="">7天退换货</a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <div class='right_b'>
         <div class='top'>
           <p class='wife'>
             <a href="#">商家支持</a>
           </p>
         </div>
         <div class='bottom1'>
           <div class='bottom1_top'>
             <p>
               商家：
             </p>
             <ul class='left'>
               <li>
                 <a href="">
                   商家中心
                 </a>
               </li>
               <li>
                 <a href="">
                   商家入驻
                 </a>
               </li>
               <li>
                 <a href="">
                   商家品控
                 </a>
               </li>
               <li>
                 <a href="">
                   天猫智库
                 </a>
               </li>
             </ul>
             <ul class='right'>
               <li>
                 <a href="">
                   商家中心
                 </a>
               </li>
               <li>
                 <a href="">
                   商家入驻
                 </a>
               </li>
               <li>
                 <a href="">
                   商家品控
                 </a>
               </li>
               <li>
                 <a href="">
                   天猫智库
                 </a>
               </li>
             </ul>
           </div>
           <div class='bottom1_bottom'>
             <p>
               帮助：
             </p>
             <ul class='left'>
               <li>
                 <a href="">帮助中心</a>
               </li>
             </ul>
             <ul class='right'>
               <li>
                 <a href="">问商友</a>
               </li>
             </ul>
           </div>
           
           
         </div>
       </div>
       
       <div class='top'>
         <p>
           <a href="#">淘宝网</a>
         </p>
         
       </div>
       <div class='top'>
         <p>
           <i class="iconfont icon-iconfontshouji"></i><a href="#">手机版</a>
         </p>
       </div>
       <div class='right_c'>
         <div class='top' >
           <p class='wife' >
             <a href="<?php echo url('Person/collect'); ?>">收藏夹</a>
           </p>
         </div>
         <div class='bottom2'>
           <p>
             <a href="<?php echo url('Person/collect'); ?>">收藏的宝贝</a>
           </p>
           <p>
             <a href="">收藏的店铺</a>
           </p>
           
         </div>
       </div>
       
       <div class='top'>
         <p>
           <i class="iconfont icon-cart"></i>
           <a href="<?php echo url('car/index'); ?>">购物车
            </a>
         </p>
       </div>
       <div class='right_d'>
         <div class='top'>
           <p class='wife'>
             <a href="<?php echo url('person/index'); ?>">我的淘宝</a>
           </p>
         </div>
         <div class='bottom3'>
           <p>
             <a href="<?php echo url('Person/indent'); ?>">已买到的宝贝</a>
           </p>
           <p>
             <a href="<?php echo url('Person/footmark'); ?>">我的足迹</a>
           </p>
         </div>
       </div>          
       
     </div>

   </div>
   
   <div class='clear'></div>
 </div>  
</div>
 <div class='clear'></div>
 <div class='header2_content'> 
 <div class='header2_left'>
   <img src="/static/public/img/logo3.png" alt="">
 </div> 
 
  <div class='header2_right'>
    <form action="">
     <div class='header1_btn_right_a'>
      <input type="text">
      <button class='button1'>搜天猫</button>
      </div>
    </form>
  </div>

</div> 
    <div class='clear'></div>
   <div class='car_content'>
    <?php if(!session('shops')): ?>
    <div class='car_ctt_top'><!-- 购物车没有物品界面以隐藏 -->
     <div class='car_top'>
      <p>
        <span>
          您的位置：
        </span>
        <a href="">
          首页
        </a>
        <span>
          >
        </span>
        <a href="<?php echo url('Person/index'); ?>">
          我的淘宝
        </a>
        <span>
          >
        </span>
        <span>
          我的购物车
        </span>
      </p>
       <p>
         <span>
           购物车帮您一次性完成批量购买与付款，下单更便捷，付款更简单！
         </span>
         <a href="">
           如何使用购物车
         </a>
       </p>
      
     </div>
     <div class='car_bottom'>
      <div class='car_btm_A'>
        <p>
          <span>
            您的购物车还是空的，赶紧行动吧！您可以：
          </span>
        </p>
        <p>
          <span>
            看看
          </span>
          <a href="<?php echo url('Person/collect'); ?>">
            我的收藏夹
          </a>
        </p>
        <p>
          <span>
            看看
          </span>
          <a href="<?php echo url('Person/indent'); ?>">
            已买到的宝贝
          </a>
        </p>
        
      </div>
       
     </div>
  </div>
  <?php else: ?>
     <!-- ........................................................ -->
     <!-- .......................购物车有物品显示界面< -->
     <div class='car_ctt_top1'>
      <div class='car_ctt_top1_A'>
        <ul>
          <li>
            <p>
              <span>全部商品</span>
            </p>
          </li>
          <li>
            <p>
               <span>降价商品</span>
            </p>
          </li>
          <li>
           <p>
             <span>库存紧张</span>
           </p>
          </li>
        </ul>
        <div class='car_ctt_top1_A_a'>
          <span>
            已选商品（不含运费）
          </span>
          <span>
            0.00
          </span>
          <a href="javascript:;">结算</a>
        </div>
      </div>
      <div class='car_ctt_top1_B'>
        <div class='car_ctt_top1_B_a'>
          <label for="">
            <input type="checkbox" name="" id="carAll" class='shopCInput'> &nbsp;<span>全选</span>
          </label>
          
        </div>
        <div class='car_ctt_top1_B_b'>
          <span>
            商品信息
          </span>
        </div>
        <div class='car_ctt_top1_B_c'>
          
        </div>
        <div class='car_ctt_top1_B_d'>
          <span>
            单价
          </span>
        </div>
        <div class='car_ctt_top1_B_e'>
          <span>
            数量
          </span>
        </div>
        <div class='car_ctt_top1_B_f'>
          <span>
            金额
          </span>
        </div>
        <div class='car_ctt_top1_B_g'>
          <span>
            操作
          </span>
        </div>
      </div>
          <!-- .......................购物车物品< -->
      <?php
       $tot=0;
        if(is_array($carshops) || $carshops instanceof \think\Collection || $carshops instanceof \think\Paginator): $i = 0; $__LIST__ = $carshops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carshop): $mod = ($i % 2 );++$i;
       $tot+=$carshop['num']*$carshop['price'];
       ?>
        <div id='tr<?php echo $carshop['id']; ?>'>
          <form action="<?php echo url('Car/qrdd'); ?>">
          <div class='car_ctt_top1_C1'>
          <!-- <input type="checkbox" name="" id="" class='chkBox ' > -->
          <img src="/static/public/img/2018-02-08_001905.png" alt="">
        </div>
         <div class='car_ctt_top1_C'>
           <div class='car_ctt_top1_C_a'>
            <input type="checkbox" name="shopid[]" id="" class='spbtmCheck' value='<?php echo $carshop['id']; ?>' price='<?php echo $carshop['price'] * $carshop['num']; ?>'>
             
           </div>
           <div class='car_ctt_top1_C_b'>
            <div class='car_ctt_top1_C_b1'>
              <img src="/static/upload/shop/<?php echo $carshop['img']; ?>" alt="">
            </div>
            <div  class='car_ctt_top1_C_b2'>
              <div class='car_ctt_top1_C_b3'>
                <a href="<?php echo url('Index/product',array('id'=>$carshop['id'])); ?>">
                  <?php echo $carshop['sname']; ?><?php echo $carshop['introduce']; ?>
                </a>
              </div>
              <div class='car_ctt_top1_C_b4'>
                <ul>
                  <li>
                    <a href="">
                      <img src="/static/public/img/xcard.png" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="/static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="/static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
           </div>
           <div class='car_ctt_top1_C_c'>
            <p>
              <span>
                <?php if($carshop['color']): ?>
                颜色分类：<?php echo $carshop['color']; else: endif; ?>
              </span>
              <br>
              <span>
                <?php if($carshop['neicun']): ?>
                内存大小：<?php echo $carshop['neicun']; else: endif; ?>
              </span>
            </p>
           </div>
           <div class='car_ctt_top1_C_d'>
             <p>
               <span>
                 ￥<?php echo $carshop['price'] +559; ?>
               </span>
             </p>
             <p>
               <span>
                 ￥<?php echo $carshop['price']; ?>
               </span>
             </p>
           </div>
           <div class='car_ctt_top1_C_e'>
            <p>
              <a href="javascript:;" onclick='carjian(<?php echo $carshop['id']; ?>,<?php echo $carshop['price']; ?>,this)'>
                -
              </a>
              <div>
                <span >
                  <input type="text" value='<?php echo $carshop['num']; ?>' class='carstock' id="<?php echo $carshop['id']; ?>">
                </span>
              </div>
              <a href="javascript:;" onclick='carjia(<?php echo $carshop['id']; ?>,<?php echo $carshop['price']; ?>,this)'>
                +
              </a>
            </p>
           </div>
           <div class='car_ctt_top1_C_f'>
             <p>
               <span id="<?php echo $carshop['id']; ?>">
                 ￥<?php echo $carshop['price'] * $carshop['num']; ?>
               </span>
             </p>
           </div>
           <div class='car_ctt_top1_C_g'>
             <p>
               <a href="">
                 移入收藏夹
               </a>
             </p>
             <p>
               <a href="javascript:;" onclick='del(<?php echo $carshop['id']; ?>,this)'>
                 删除
               </a>
             </p>
           </div>
         </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>

       <div class='car_ctt_top1_D'>
        <div class='car_ctt_top1_D_a'>
          <input type="checkbox" name="" id="all" class='shopCInput'><span>全选</span>
        </div>
        <div class='car_ctt_top1_D_b'>
          <a href="javascript:;" onclick='delAll()'>
            删除
          </a>
          <a href="">
            移入收藏夹
          </a>
          <a href="">
            分享
          </a>
        </div>
        <div class='car_ctt_top1_D_c'>
          <div  class='car_ctt_top1_D_c1'>
            <p>已有商品 <span><?php echo count(session('shops')); ?></span> 件</p>
          </div>
          <div  class='car_ctt_top1_D_c2'>
          <p >合计(不含运费)：<span>￥<span class='shopprice'> <?php echo $tot ?> </span>.00</span> </p>
          </div>
          <div  class='car_ctt_top1_D_c3'>
           <a href="javascript:;" onclick='contact(this)'>
             结算
           </a>
           <!-- <input type="" onclick='contact(this)' value="提交"> -->
          </div>
          </form>
        </div>
        </div>
      </div>
      <?php endif; ?>
       <!-- ...................购物车有物品显示界面>............... -->
       <div class='car_bottom1'>
         <div class='car_bottom1_A'>
           <ul>
             <li class='car_bottom1_A_li1'>
               <span>
                 掌柜热卖
               </span>
             </li>
             <li class='car_bottom1_A_li2'>
               <span>
                 最近浏览过的
               </span>
             </li>
             <li class='car_bottom1_A_li3'>
               <span>
                 猜你喜欢的
               </span>
             </li>
           </ul>
         </div>
         <div class='car_bottom1_B'>
           <ul>
            <?php if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
            <li>
              <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
              </a>
              <p>
                <span>
                  ￥<?php echo $shop['price']; ?>
                </span>
              </p>
              <p>
                <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                  <?php echo $shop['sname']; ?>
                </a>
              </p>
              <p class='car_bottom1_B_a'>
                <span>
                  库存：<?php echo $shop['stock']; ?>
                </span>
                <img src="/static/public/img/2018-02-07_214321.png" alt="">
              </p>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

           </ul>
         </div>
         <div class='car_bottom1_C'>
           <ul>
            <?php if(is_array($shopas) || $shopas instanceof \think\Collection || $shopas instanceof \think\Paginator): $i = 0; $__LIST__ = $shopas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopa): $mod = ($i % 2 );++$i;?>
            <li>
              <a href="<?php echo url('index/product',array('id'=>$shopa['id'])); ?>">
                <img src="/static/upload/shop/<?php echo $shopa['img']; ?>" alt="">
              </a>
              <p>
                <span>
                  ￥<?php echo $shopa['price']; ?>
                </span>
              </p>
              <p>
                <a href="<?php echo url('index/product',array('id'=>$shopa['id'])); ?>">
                  <?php echo $shopa['sname']; ?>
                </a>
              </p>
              <p class='car_bottom1_C_a'>
                <span>
                  库存：<?php echo $shopa['stock']; ?>
                </span>
                <img src="/static/public/img/2018-02-07_214321.png" alt="">
              </p>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
         </div>
         <div class='car_bottom1_D'>
           <ul>
            <?php if(is_array($shopbs) || $shopbs instanceof \think\Collection || $shopbs instanceof \think\Paginator): $i = 0; $__LIST__ = $shopbs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopb): $mod = ($i % 2 );++$i;?>
            <li>
               <a href="<?php echo url('index/product',array('id'=>$shopb['id'])); ?>">
                 <img src="/static/upload/shop/<?php echo $shopb['img']; ?>" alt="">
               </a>
               <p>
                 <span>
                   ￥<?php echo $shopb['price']; ?>
                 </span>
               </p>
               <p>
                 <a href="<?php echo url('index/product',array('id'=>$shopb['id'])); ?>">
                   <?php echo $shopb['sname']; ?>
                 </a>
               </p>
               <p class='car_bottom1_D_a'>
                 <span>
                   库存：<?php echo $shopb['stock']; ?>
                 </span>
                 <img src="/static/public/img/2018-02-07_214321.png" alt="">
               </p>
             </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
         </div>
       </div>
     </div>
    
<div class=' footer'>
    <div class='footer_a'>
        <ul>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152732.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152908.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152932.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_153026.png" alt="">
                </a>
            </li>
        </ul>
        
    </div>
    <div class='footer_b'>
        <div class='footer_b_b'>
           <div class='footer_b_a'>
               <dl>
                   <dt>购物指南</dt>
                   <dd>
                       <a href="">
                           免费注册
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           开通支付宝
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝支付
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>电器城保障</dt>
                   <dd>
                       <a href="">
                           花呗分期
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           预约配送
                       </a>
                   </dd>
                   <dd>
                        <a href="">
                           送货入户
                       </a>
                   </dd>
                   <dd>
                        <a href="">
                           全国联保
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>支付方式</dt>
                   <dd>
                       <a href="">
                           支付宝快捷支付
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝余额付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝钱包付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           货到付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           新人支付
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>商家服务</dt>
                   <dd>
                       <a href="">
                           入驻天猫电器城
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           加入电器城服务保障
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           电器城喵言喵语圈子
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           电器城商家管理规范
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>
                       手机电器城
                   </dt>
                   <dd>
                       <img src="/static/public/img/T1N64NFrxcXXb.IvUG-116-112.png" alt="">
                   </dd>
               </dl>
               
           </div>
            
        </div>
       
    </div>
</div>
   </div> 
</div>
</body>
<script>
// 购物车删除商品
function del(id,obj){
  $.post('<?php echo url("car/ajax_del"); ?>',{id:id},function(data){
     if(data==0){
      $(obj).parent().parent().parent().parent().remove();
     }else{
       return false;
     }
  });
}
// 购物车批量删除
function delAll(){
  check=$('.spbtmCheck:checked');
  arr=new Array();
  for(i=0;i<check.length;i++){
    arr[i]=check.eq(i).val();
  }
  str=arr.join(',',arr);
  $.post('<?php echo url("ajax_delAll"); ?>',{str:str},function(data){
     if(data==1){
      for(i=0;i<arr.length;i++){
        $('#tr'+arr[i]).remove();
      }
     }
  });
}
// 购物车加物品
function carjia(id,price,obj){
  carstock=$(obj).prev().children().children().val();
  $.post('<?php echo url("car/ajax_carjia"); ?>',{id:id,carstock:carstock},function(data){
    if(data){
      pace=price*data;
      $(obj).parent().next().children().children().html('￥'+pace);
      $(obj).prev().children().children().val(data);
    }
  });
}
// 购物车减商品
function carjian(id,price,obj){
  carstock=$(obj).parent().next().children().children().val();
 $.post('<?php echo url("car/ajax_carjian"); ?>',{id:id,carstock:carstock},function(data){
  if(data){
    pace=price*data;
    $(obj).parent().parent().next().children().children().html('￥'+pace);
    $(obj).parent().next().children().children().val(data);
  }
});
 
}
// 点击单选计算被选中的商品总价
$('.spbtmCheck').click(function(){
  a=$(this).attr('price');
  b=$('.spbtmCheck:checked').length;
  price=0;
  for(i=0;i<b;i++){
    price+=parseInt($('.spbtmCheck:checked').eq(i).attr('price'));
  }
  $('.shopprice').html(price);
})
// 点击全选计算被选中的商品总价
$('.shopCInput').click(function(){
  a=$('.spbtmCheck').attr('price');
  b=$('.spbtmCheck').length;
  price=0;
  for(i=0;i<b;i++){
    price+=parseInt($('.spbtmCheck').eq(i).attr('price'));
  }
  $('.shopprice').html(price);
})
// 购物车判断有无联系人
function contact(obj){
  $.post('<?php echo url("ajax_contact"); ?>',function(data){
    if(data==1){
      if($(".spbtmCheck").is(":checked")){
        $('form').submit();
      }else{
        confirm("您还没有选择商品呦!");
      }
      
    }else{
      if(confirm("您还没有收货地址!")){
        location.href='<?php echo url("Person/user"); ?>';
      }
      
    }
  });
}
// 购物车单选多选
function clas(clas){
    return document.getElementsByClassName(clas);
  }
  for(i=0;i<clas('spbtmCheck').length;i++){
    clas('spbtmCheck')[i].setAttribute('s',0);
    clas('spbtmCheck')[i].onclick=function(){
       v=this.getAttribute('s');
      if(v==0){
      this.checked=true;
      this.setAttribute('s',1);
      this.parentNode.parentNode.style.background='#fff4e8';
    }else{
      this.checked=false;
      this.setAttribute('s',0);
      this.parentNode.parentNode.style.background='#fff';
    }
    }
  }
  for(j=0;j<clas('shopCInput').length;j++){
    clas('shopCInput')[j].setAttribute('s',0);
    clas('shopCInput')[j].onclick=function(){
       v=this.getAttribute('s');
       
      if(v==0){
      for(i=0;i<clas('spbtmCheck').length;i++){
          clas('spbtmCheck')[i].checked=true;
          clas('spbtmCheck')[i].setAttribute('s','1');
          this.setAttribute('s',1);
          $('.shopCInput').attr('s',1);
           for(j=0;j<clas('shopCInput').length;j++){
           clas('shopCInput')[j].checked=true;
          }
           for(ix=0;ix<clas('car_ctt_top1_C').length;ix++){
            clas('car_ctt_top1_C')[ix].style.background='#fff4e8';
           }
    }
  }else{
    for(i=0;i<clas('spbtmCheck').length;i++){
          clas('spbtmCheck')[i].checked=false;
          clas('spbtmCheck')[i].setAttribute('s','0');
          this.setAttribute('s',0);
          $('.shopCInput').attr('s',0);
           for(j=0;j<clas('shopCInput').length;j++){
           clas('shopCInput')[j].checked=false;
          }
          for(ix=0;ix<clas('car_ctt_top1_C').length;ix++){
            clas('car_ctt_top1_C')[ix].style.background='#fff';
           }
    }
  }
  }
}
$(document).ready(function(){
  $('#carAll').click();
})

</script>

</html>