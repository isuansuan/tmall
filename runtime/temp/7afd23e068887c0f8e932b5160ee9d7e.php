<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\AppServ\www\tmall\public/../application/index\view\person\collect.html";i:1523967376;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>理想生活上天猫--收藏夹</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
    <link rel="stylesheet" href="/static/public/css/collect.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/person.js'></script>
</head>
<style>
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
    <div class='person_content'>
      <div class='person_top'>
        <div class='person_top_both'>
          <a href="">
            <div class='collectimg'>
              
            </div>
          </a>
          <div class='collectbaby'>
              <ul>
                <li>
                  <a href="">
                    宝贝收藏
                  </a>
                </li>
                <li>
                   <a href="">
                    店铺收藏
                  </a>
                </li>
              </ul>
          </div>
          <div class='person_top_both_c'>
            <input type="text">
            <button>搜索</button>
          </div>
        </div>
      </div>
      <?php if($collectshops): ?>
      <div class='collectTop'>
        <div class='collectTopA'>
          <ul>
            <li>
              <a href="">
                全部宝贝
              </a>
            </li>
            <li>
              <a href="">
                失效
              </a>
            </li>
            <li>
              <a href="">
                同店宝贝
              </a>
            </li>
          </ul>
        </div>
        <div class='collectTopB'>
          <div class='collectTopBtext'>
            <input type="text">
          </div>
          <div class='collectTopBbutton'>
            <input type="button" value="搜索">
          </div>
        </div>
      </div>
      <div class='collectshop'>
        <?php if(is_array($collectshops) || $collectshops instanceof \think\Collection || $collectshops instanceof \think\Paginator): $i = 0; $__LIST__ = $collectshops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$collectshop): $mod = ($i % 2 );++$i;?>
        <div class='collectshopA'>
          <div class='collectshopAimg'>
           <a href="<?php echo url('Index/product',array('id'=>$collectshop['id'])); ?>">
             <img src="/static/upload/shop/<?php echo $collectshop['img']; ?>" alt="">
           </a>
           <div class='close' onclick='collectdel(<?php echo $collectshop['id']; ?>,this)'>
             <span>&times;</span>
           </div>
          </div>
          <div class='collectshopAsname'>
            <i><img src="/static/public/img/confirmOrderTmall.png" alt=""></i>
            <a href=""><?php echo $collectshop['sname']; ?><?php echo $collectshop['introduce']; ?></a>
          </div>
          <div class='collectshopAprice'>
            <span>￥<?php echo $collectshop['price']; ?>.00</span>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class='clear'></div>
      </div>
      <div class='clear'></div>
      <?php else: ?>
      <div class='collectBot'>
        <div class='collectBot_A'>
          <div class='collectBot_Aimg'>
            <img src="/static/public/img/TB16ztmHFXXXXX7XFXXIrnAJFXX-89-89.png" alt="">
          </div>
          <div class='collectBot_Acontact'>
            <p>你还没收藏过商品哦</p>
            <p><a href="<?php echo url('Index/index'); ?>">去随便逛逛吧，</a><span>看看有没有喜欢的</span></p>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class='clear'></div>
      <div class='indentshops'>
       <div class='indentshops_A'>
         <h3>
           热卖单品
         </h3>
         <ul>
           <li><a href="<?php echo url('Index/more',array('more'=>1)); ?>">更多></a></li>
           <?php if(is_array($brands) || $brands instanceof \think\Collection || $brands instanceof \think\Paginator): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
           <li><a href="<?php echo url('Index/more',array('brandid'=>$brand['id'])); ?>"><?php echo $brand['bname']; ?></a></li>
           <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
       </div>
        <?php if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
        <div class='indentshops_B'>
         <div class='indentshops_B_img'>
           <a href="<?php echo url('Index/product',array('id'=>$shop['id'])); ?>">
             <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
           </a>
         </div>
         <div class='indentshops_B_price'>
           <span class='price'>￥<?php echo $shop['price']; ?>.00</span>
           <span class='jprice'>￥<?php echo $shop['price'] + 499; ?>.00</span>
           <a href=""></a>
         </div>
         <div class='indentshops_B_name'>
           <p>
             <a href="<?php echo url('Index/product',array('id'=>$shop['id'])); ?>">
               <?php echo $shop['sname']; ?><?php echo $shop['introduce']; ?>
             </a>
           </p>
         </div>
         <div class='indentshops_B_stock'>
           <span>
             库存：<?php echo $shop['stock']; ?>件
           </span>
           <a href="">
             优惠促销
           </a>
         </div>
          <div class='indentshops_B_introduce'>
            <p>
             <span>
               <?php echo $shop['sname']; ?><?php echo $shop['introduce']; ?>
             </span>
              
            </p>
            <div class='indentshops_B_animate'>
              
            </div>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class='clear'></div>
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
 function collectdel(id,obj){
  $.post('<?php echo url("ajax_collectdel"); ?>',{id:id},function(data){
    if(data==1){
      $(obj).parent().parent().hide();
    }else{
      confirm('删除失败!');
    }
  });
 }
</script>

</html>