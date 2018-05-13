<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\AppServ\www\tmall\public/../application/index\view\car\qrsh.html";i:1524444945;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header1.html";i:1524212128;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>确认收货!</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/car.js'></script>
</head>
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
<div class='header1_btn'>
  <div class='header1_btn_left'>
   <div class='header1_btn_left_a'>
     <p>
       <a href="">
         <img src="/static/public/img/logo1.png" alt="" width='150px'>
       </a>
     </p>
   </div>
    
    <div class='header1_btn_left_b'>
     <div class='header1_btn_left_b_L'>
       <p class='header1_btn_left_b_L_a'>
         <span>
           官方旗舰店
         </span>
       </p>
       <p class='header1_btn_left_b_L_b'>
         <span>
           品牌直销
         </span>
         <a href="">
           <img src="/static/public/img/2018-02-02_141812.png" alt="">
         </a>
       </p>
       
     </div>
     <div class='header1_btn_left_b_R'>
       <p class='header1_btn_left_b_R_a'>
         描述服务物流
       </p>
       <p class='header1_btn_left_b_R_b'>
         <span>
           4.8^  &nbsp4.7-4.8^
         </span>
       </p>
     </div>
    </div>
    <div class='header1_btn_left_c'>
      <img src="/static/public/img/2018-02-02_192745.png" alt="">
      <div class='header1_btn_left_d'>
        <img src="/static/public/img/2018-02-02_192934.png" alt="">
      </div>
    </div>
  </div> 
  <div class='header1_btn_right'>
    <form action="">
     <div class='header1_btn_right_a'>
      <input type="text">
      <button class='button1'>搜天猫</button>
      </div>
      <button class='button2'>搜本店</button>
    </form>
  </div>

</div> 
    <div class='clear'></div>
    <div class='product_Hr'></div>
    <div class='qrshContent'>
      <div class='qrshCont_confirmPayImage'>
        <div class='qrshCont_img'>
          <img src="/static/public/img/comformPayFlow.png" alt="">
        </div>
        <div class='confirmPayTime1'>
          <span>2018-3-14 14:45:30</span>
        </div>
        <div class='confirmPayTime2'>
          <span>2018-3-14 14:45:30</span>
        </div>
        <div class='confirmPayTime3'>
          <span>2018-3-14 14:45:30</span>
        </div>
      </div>
      <div class='qrshCont_confirmPayOrderInfo'>
        <h4>我已收到货，同意支付宝付款</h4>
      </div>
      <div class='qrshCont_confirmPayOrder'>
        <div class='qrshCont_confirmPayOrderTop'>
          <p>订单信息</p>
        </div>
        <div class='qrshCont_confirmPayOrderBottom'>
          <div class='qrshCont_confirmPayOrderBottomTop'>
            <div class='qrshCont_confirmPayOrderBottomTopA'>
              <h4>宝贝</h4>
            </div>
            <div class='qrshCont_confirmPayOrderBottomTopB'>
              <h4>单价</h4>
            </div>
            <div class='qrshCont_confirmPayOrderBottomTopC'>
              <h4>数量</h4>
            </div>
            <div class='qrshCont_confirmPayOrderBottomTopD'>
              <h4>商品总价</h4>
            </div>
            <div class='qrshCont_confirmPayOrderBottomTopE'>
              <h4>运费</h4>
            </div>
          </div>
          <?php 
             $tot=0;
           if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;
           $tot+=$shop['price'] * $shop['num'];
           ?>
          <div class='qrshCont_confirmPayOrderBottomBot'>
            <div class='qrshCont_confirmPayOrderBottomBotA'>
              <div class='qrshCont_confirmPayOrderBottomBotAImg'>
                <a href="">
                  <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
                </a>
              </div>
              <div class='qrshCont_confirmPayOrderBottomBotAWenzi'>
                <a href="">
                  <?php echo $shop['sname']; ?><?php echo $shop['introduce']; ?>
                </a>
              </div>
            </div>
            <div class='qrshCont_confirmPayOrderBottomBotB'>
              <span>
                ￥<?php echo $shop['price']; ?>
              </span>
            </div>
            <div class='qrshCont_confirmPayOrderBottomBotC'>
              <span>
                <?php echo $shop['num']; ?>
              </span>
            </div>
            <div class='qrshCont_confirmPayOrderBottomBotD'>
               <span>
                ￥<?php echo $shop['price'] * $shop['num']; ?>.00
              </span>
            </div>
            <div class='qrshCont_confirmPayOrderBottomBotE'>
              <span>
                0.00
              </span>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
      <div class='qrshCont_shifukuan'>
        <p>实付款: <span>￥ <?php echo $tot  ?>.0</span></p>
      </div>
      <div class='clear'></div>
      <div class='qrshCont_confirmPayDetail'>
        <dl class='qrshCont_confirmPayDetailA'>
          <dd>订单编号:</dd>
          <dd>卖家昵称:</dd>
          <dd>收货信息:</dd>
          <dd>成交时间:</dd>
        </dl>
        <dl  class='qrshCont_confirmPayDetailB'>
          <dd><span><?php echo $contact['code']; ?></span>
            <img src="/static/public/img/confirmOrderTmall.png" alt="">
          </dd>
          <dd>
            <span>天猫商铺</span>
            <i></i>
          </dd>
          <dd><span><?php echo $contact['s_province']; ?><?php echo $contact['s_city']; ?><?php echo $contact['s_county']; ?><?php echo $contact['addr']; ?>,<?php echo $contact['cname']; ?>,<?php echo $contact['tel']; ?>,<?php echo $contact['noun']; ?></span></dd>
          <dd><span><?php echo date('Y-m-d H:i:s',time()); ?></span></dd>
        </dl>
      </div>
      <div class='clear'></div>
      <div class='qrshCont_confirmPayButton'>
        <div class='qrshCont_confirmPayButtonA'>
          <h3>请收到货后，再确认收货！否则您可能钱货两空！</h3>
        </div>
        <div class='qrshCont_confirmPayButtonB'>
          <a href="javascript:;" onclick='okinfo("<?php echo $shop['id']; ?>","<?php echo $contact['code']; ?>",this)'>
            <div class='qrshCont_confirmPayButtonBZhifu'>
              <span>确认支付</span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class='clear'></div>
    
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
</body>
<script>
function okinfo(shopid,code,obj){
  $.post('<?php echo url("ajax_okinfo"); ?>',{shopid:shopid,code:code},function(data){
    if(data==1){
      location.href='<?php echo url("Person/indent4"); ?>';
    }else{
      return flase;
    }
  });
}
</script>

</html>