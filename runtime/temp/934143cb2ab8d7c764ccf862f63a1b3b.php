<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\AppServ\www\tmall\public/../application/index\view\car\qrdd.html";i:1523699631;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>好生活上天猫-确认订单</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
  <link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
  <link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
  <script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/person.js'></script>
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
    <div class='qrddContent'>
      <div class='qrddCont_Top'>
        <div class='qrddCont_TopLeft'>
          <a href="">
            <img src="/static/public/img/logo1.png" alt="">
          </a>
        </div>
        <div class='qrddCont_TopRight'>
          <ul>
            <li>
              <div class='qrddCont_TopRightA'>
                <div class='qrddCont_TopRightAa'>
                  <span>查看购物车</span>
                </div>
                <div class='qrddCont_TopRightAb'></div>
              </div>
            </li>
             <li>
              <div class='qrddCont_TopRightA'>
                <div class='qrddCont_TopRightAa'>
                  <span>拍下商品</span>
                </div>
                <div class='qrddCont_TopRightAb1'>
                   <span>2</span>
                </div>
              </div>
            </li>
            <li>
              <div class='qrddCont_TopRightA'>
                <div class='qrddCont_TopRightAa'>
                  <span>付款到支付宝</span>
                </div>
                <div class='qrddCont_TopRightAb2'>
                   <span>3</span>
                </div>
              </div>
            </li>
            <li>
              <div class='qrddCont_TopRightA'>
                <div class='qrddCont_TopRightAa'>
                  <span>确认收货</span>
                </div>
                <div class='qrddCont_TopRightAb3'>
                   <span>4</span>
                </div>
              </div>
            </li>
            <li>
              <div class='qrddCont_TopRightA'>
                <div class='qrddCont_TopRightAa'>
                  <span>评价</span>
                </div>
                <div class='qrddCont_TopRightAb4'>
                  <span>5</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <form action="<?php echo url('Car/submitdindan'); ?>" method='post'>
      <div class='qrddCont_address'>
        <div class='qrddCont_addressTop'>
          <h2>选择收货地址</h2>
        </div>
        <div class='qrddCont_addressBoth'>
          <?php if(is_array($contacts) || $contacts instanceof \think\Collection || $contacts instanceof \think\Paginator): $k = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$contact): $mod = ($k % 2 );++$k;?>
          
          <div class='qrddCont_addressBothA'>
            <div class='qrddCont_addressBothAa'>
              
            </div>
            <div class='qrddCont_addressBothAc'>
              <p>
                  <span class='shouhuo'>
                    <?php echo $contact['cname']; ?>
                  </span>
                  <?php if($k==1): ?>
                 <input type="radio" name="contactid" id="" class='radioa' value='<?php echo $contact['id']; ?>' checked style='opacity:0'>
                 <?php else: ?>
                 <input type="radio" name="contactid" id="" class='radioa' value='<?php echo $contact['id']; ?>' style='opacity:0'>
                 <?php endif; ?>
              </p>
            </div>
            <div class='qrddCont_addressBothAd'>
              <span class='dizhi'>
                <?php echo $contact['s_province']; ?><?php echo $contact['s_city']; ?><?php echo $contact['s_county']; ?><?php echo $contact['addr']; ?><br><?php echo $contact['tel']; ?>
              </span>
            </div>
            <div class='qrddCont_addressBothAe'>
              <a href="">
                修改
              </a>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class='qrddCont_addressBottom'>
          <input type="button" value="使用新地址">
          <a href="<?php echo url('Person/user'); ?>">
            管理收货地址
          </a>
        </div>
      </div>
      <div class='qrddCont_stationTab'>
        <div class='qrddCont_stationTabA'>
          <div class='qrddCont_stationTabAa'>
            <p>菜鸟驿站代收服务<span>免费</span></p>
          </div>
        </div>
        <div class='qrddCont_stationTabB'>
          <p>
            收货不便，可以使用<span>菜鸟驿站代收服务</span>
          </p>
        </div>
      </div>
      <div class='qrddCont_orderDesc'>
        <h2>确认订单信息</h2>
        <div class='qrddCont_orderDescBtom'>
          <div class='qrddCont_orderDescBtomA'>
            <span>店铺宝贝</span>
          </div>
          <div class='qrddCont_orderDescBtomB'>
            <span>商品属性</span>
          </div>
          <div class='qrddCont_orderDescBtomC'>
            <span>单价</span> 
          </div>
          <div class='qrddCont_orderDescBtomD'>
              <span>数量</span>
          </div>
          <div class='qrddCont_orderDescBtomE'>
            <span>优惠方式</span>
          </div>
          <div class='qrddCont_orderDescBtomF'>
            <span>小计</span>
          </div>
        </div>
      </div>
      
      <div class='qrddCont_order'>
        <div class='qrddCont_orderInfo'>
          <img src="/static/public/img/TB1yV.nSXXXXXcbXpXXXXXXXXXX-32-32.png" alt="">
          <span>店铺: <a href="">天猫超市</a></span>
          <i></i>
        </div>
        <?php 
          $tot=0;
         if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;
         $tot+=$shop['num']*$shop['price'];
         ?>
        <div class='qrddCont_orderitem'>
          <div class='qrddCont_orderitemA'>
            <div class='qrddCont_orderitemAImg'>
              <input type="hidden" name="shopid[]" value='<?php echo $shop['id']; ?>'>
              <a href="">
                <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
              </a>
            </div>
            <div class='qrddCont_orderitemAShu'>
              <p>
                <?php echo $shop['sname']; ?>
              </p>
              <ul>
                <li>
                  <a href="">
                    <img src="/static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/static/public/img/xcard.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class='qrddCont_orderitemB'>
            
          </div>
          <div class='qrddCont_orderitemC'>
            <span>
              ￥<?php echo $shop['price']; ?>
            </span>
          </div>
          <div class='qrddCont_orderitemD'>
            <span><?php echo $shop['num']; ?></span>
          </div>
          <div class='qrddCont_orderitemE'>
            
          </div>
          <div class='qrddCont_orderitemF'>
            <span>
              ￥<?php echo $shop['price'] * $shop['num']; ?>.00
            </span>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class='qrddCont_orderExt'>
          <div class='qrddCont_orderExtLeft'>
            <input type="checkbox" name="" id=""><span>开具发票</span>
          </div>
          <div class='qrddCont_orderExtRight'>
            <div class='qrddCont_orderExtRightTop'>
              <div class='qrddCont_orderExtRightTopA'>
                <span>
                  运送方式: &nbsp; 普通配送快递￥00.00
                </span>
                <b>00.00</b>
              </div>
              <div class='qrddCont_orderExtRightTopB'>
                <img src="/static/public/img/TB1No7XbvxNTKJjy0FjXXX6yVXa-145-28.png" alt=""> &nbsp; 
                <span>19:00前付款，承诺<span>3月15日</span>送达</span>
              </div>
              <div class='qrddCont_orderExtRightTopC'>
                <span>预约时间</span>
                <div class='qrddCont_orderExtRightTopCRight'>
                  <span>
                    可预约配送时间
                  </span>
                  <i></i>
                </div>
              </div>
            </div>
            <div class='qrddCont_orderExtRightBottom'>
              <span class='qrddCont_orderExtRightBottomA'>运费险: </span>
              <input type="checkbox" name="" id="">
              <span class='qrddCont_orderExtRightBottomB'>运费险</span>
              <span class='qrddCont_orderExtRightBottomC'>￥0.20购买</span>
              <div class='qrddCont_orderExtRightBottomD'>
                <span>0.20</span>
              </div>
              <div class='qrddCont_orderExtRightBottomE'>
                <img src="/static/public/img/TB1QFFkMXXXXXcNXFXXXXXXXXXX-32-32.png" alt="">
                <img src="/static/public/img/TB1zNZ_LVXXXXasapXXXXXXXXXX-32-32.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class='qrddCont_orderPay'>
          <p>店铺合计(含运费) <span>￥<?php echo $tot; ?></span></p>
        </div>
        <div class='qrddCont_orderfacility'>
          <input type="checkbox" name="" id=""> <span>找人代付</span>
          <input type="checkbox" name="" id=""> <span>匿名购买</span>
        </div>
      </div>
      
      <div class='clear'></div>
      <div class='qrddCont_payInfo'>
        <div class='qrddCont_payInfoRight'>
          <div class='qrddCont_payInfoRightA'>
            <div class='qrddCont_payInfoRightB'>
              <p>实付款: <span>￥ <?php echo $tot  ?>.00  </span></p>
            </div>
            <div class='qrddCont_payInfoRightC'>
              <p>寄送至：<span class='shouhuodizhi'>
              </span>
            </p>
            </div>
            <div class='qrddCont_payInfoRightD'>
              <p>收货人：<span class='shouhuoren'>啦啦啦 38217392187</span></p>
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="s_province" value='<?php echo $contact['s_province']; ?>'>
      <input type="hidden" name="s_city" value='<?php echo $contact['s_city']; ?>'>
      <input type="hidden" name="s_county" value='<?php echo $contact['s_county']; ?>'>
      <input type="hidden" name="tot" value='<?php echo $tot; ?>'>
      <input type="hidden" name="addr" value='<?php echo $contact['addr']; ?>'>
      <div class='qrddCont_submitOrder'>
        <div class='qrddCont_submitOrderRight'>
          <p><a href="<?php echo url('Car/index'); ?>">返回购物车</a></p>
          <a href="<?php echo url('car/alipay'); ?>">
            <div >
              <!-- <span>提交订单</span> -->
              <input type="submit" value="提交订单" class='qrddCont_submitOrderRightA' style='border:0;cursor: pointer;' >
            </div>
          </a>
        </div>
      </div>
      </form>
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

$('.qrddCont_addressBothAa').hide();
$(document).ready(function(){
  $('.qrddCont_addressBothA').eq(0).css({'background':'url("/static/public/img/TB1OVRCRpXXXXaMXFXXXXXXXXXX-237-106.png")'});
  $('.qrddCont_addressBothAa').eq(0).show();
  a=$('.qrddCont_addressBothAc .shouhuo').html();
  b=$('.qrddCont_addressBothAd .dizhi').html();
  $('.shouhuoren').html(a);
  $('.shouhuodizhi').html(b);
})

$('.qrddCont_addressBothA').click(function(){
    var s=$(this).index('.qrddCont_addressBothA');
     $('.qrddCont_addressBothAa').hide();
    $('.qrddCont_addressBothA').css({'background':'url("/static/public/img/T1VPiBXvpeXXbjLKQ7-237-106.png")'});
    $(this).eq(0).children().show();
    $(this).css({'background':'url("/static/public/img/TB1OVRCRpXXXXaMXFXXXXXXXXXX-237-106.png")'});
      $('.radioa').eq(s).prop('checked','true');
      a=$(this).children().eq(1).children().children().html()
      b=$(this).children().eq(2).children().html()
       $('.shouhuodizhi').html(b);
      $('.shouhuoren').html(a);
    
})
</script>

</html>