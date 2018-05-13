<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\AppServ\www\tmall\public/../application/index\view\person\index.html";i:1524554499;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>我的淘宝</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/person.js'></script>
</head>
<style>
  .indentshops{
    width:726px;
    margin:0 auto;
    margin-top:40px;
  }
  .indentshops .indentshops_A{
    width:726px;
    height:34px;
    border-bottom:2px solid #e5e5e5;
    margin:0 auto;
  }
  .indentshops .indentshops_A h3{
    display:inline-block;
    padding: 0 10px;
      border-bottom: 2px solid #F40;
      color: #F40;
      font-weight: bold;
      font-size: 17px;
      line-height:34px;
      float:left;
  }
  .indentshops .indentshops_A ul li{
    list-style:none;
    float:right;
    margin-left:10px;
  }
  .indentshops .indentshops_A ul li a{
    text-decoration:none;
    color:#3c3c3c;
    line-height:34px;
    font-size:12px;
  }
  .indentshops .indentshops_A ul li a:hover{
    color:#f40;
  }
  .indentshops .indentshops_B{
    width:230px;
    height:390px;
    float:left;
    border: 1px solid #e5e5e5;
    margin-right:3px;
     margin-left:5px;
     margin-top:10px;
     margin-bottom:10px;
  }
  .indentshops .indentshops_B .indentshops_B_img{
    width:230px;
    height:230px;
  }
  .indentshops .indentshops_B .indentshops_B_price{
    width:214px;
    height:18px;
    margin:0 auto;
  }
  .indentshops .indentshops_B .indentshops_B_price .price{
    font: 700 17px Verdana,Arial;
    line-height: 17px;
    color:#f40;
  }
   .indentshops .indentshops_B .indentshops_B_price .jprice{
    color: #AAA;
    text-decoration: line-through;
    font-weight: normal;
    font-size: 12px;
  }
  .indentshops .indentshops_B .indentshops_B_price a{
    display:inline-block;
    width:27px;
    height:14px;
    background: url('/static/public/img/TB1M61YGVXXXXclXVXXNojYZpXX-209-202.png') -5px -79px no-repeat;
    float:right;
    margin-top:4px;
  }
  .indentshops .indentshops_B .indentshops_B_name{
    width:214px;
    height:24px;
    overflow:hidden;
    margin:0 auto;
    margin-top:5px;

  }
  .indentshops .indentshops_B .indentshops_B_name p a{
    color: #666;
    text-decoration: none;
    font-size:13px;
  }
  .indentshops .indentshops_B .indentshops_B_name p a:hover{
    color:#f40;
    text-decoration:underline;
  }
  .indentshops .indentshops_B .indentshops_B_stock{
    width:214px;
    height:18px;
    margin:0 auto;
  }
  .indentshops .indentshops_B .indentshops_B_stock span{
    color:#9a9a9a;
    font-size:13px;
  }
  .indentshops .indentshops_B .indentshops_B_stock a{
    display:inline-block;
    width:48px;
    height:15px;
    background:#49cc00;
    font-size:11px;
    color:#fff;
    float:right;
    text-decoration:none;
    margin-top:2px;
  }
   .indentshops .indentshops_B .indentshops_B_introduce{
    width:214px;
    height:65px;
    background: #fff8e5;
    margin:0 auto;
    margin-top:14px;  
    position: relative;
   }
   .indentshops .indentshops_B .indentshops_B_introduce .indentshops_B_animate{
    width:22px;
    height:22px;
    border-radius:11px;
    position: absolute;
    top:-8px;
    left:-8px;
    background: url('/static/public/img/TB1.uuWGpXXXXbhapXXMERzIXXX-22-352.png') 0 0 no-repeat;
   }
   .indentshops .indentshops_B .indentshops_B_introduce p{
    width:200px;
    height:65px;
    margin-left:14px;
    font-size:13px;
    color:#666;
    overflow:hidden;
   }
   .indentshops .indentshops_B .indentshops_B_introduce:hover{
    background: #f40;
   }
   .indentshops .indentshops_B .indentshops_B_introduce:hover p span{
    color:#fff;
   }
   .indentshops .indentshops_B .indentshops_B_introduce p span{
    float:left;
    margin-top:13px;
   }
   /*修改弹窗*/
   .main{
     position: relative;
   }
   .viewermain{
     width:1800px;
     height:700px;
     position: fixed;
     margin:0 auto;
     top:0;
     left:0;
     background: #000;
     opacity:0.15;
     display:none;
   }
   .viewer{
     width:500px;
     height:300px;
     border-radius:5px;
     cursor: default;
     position: fixed;
     top:50px;
     left:33%;
     z-index:3;
     background: #fff;
     display:none;
   }
   .viewer .viewer_son{
    width:300px;
    margin-left:80px;
    margin-top:50px;
   } 
   .viewer p{
    height: 18px;
    line-height: 18px;
    font-size: 16px;
    color: #3c3c3c;
    margin-top: 9px;
    margin-bottom: 30px;
    font-weight: 700;
    margin-top:10px;
   }
   .viewer span{
    font-size:12px;
    float:right;
    color:#fff;
   }
   .viewer .loginpass{
    width: 270px;
        font-size: 14px;
        line-height: 18px;
        height: 18px;
        padding: 11px 8px 11px 20px;
        border: 1px solid #ddd;
        display:block;
        outline:none;
   }
   .viewer .loginsubmit{
    width: 300px;
        height: 42px;
        line-height: 42px;
        background: #AF0000;
        border:none;
        color:#fff;
        cursor: pointer;
        margin-top:30px;
        outline:none;
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
    <div class='person_content'>
      <div class='person_top'>
        <div class='person_top_both'>
          <a href="<?php echo url('person/index'); ?>">
            <div class='person_top_both_a'>
              
            </div>
          </a>
          <div class='person_top_both_b'>
            <ul>
              <li>
                <span>
                  首页
                </span>
              </li>
              <li class='person_top_both_b1'>
                <span>
                  账户设置
                </span>
                <div class='person_top_both_b2'>
                  <dl class='person_top_both_b3'>
                    <dt>安全设置</dt>
                    <dd>
                      <a href="javascript:;" class='updatepass'>
                        修改登录密码
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        手机绑定
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        密保问题设置
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        其他
                      </a>
                    </dd>
                  </dl>
                  <dl class='person_top_both_b4'>
                    <dt >个人资料</dt>
                    <dd>
                      <a href="<?php echo url('person/user'); ?>">
                        收货地址
                      </a>
                    </dd>
                    <dd>
                      <a href="<?php echo url('person/portrait'); ?>">
                        修改头像、昵称
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        消息提醒设置
                      </a>
                    </dd>
                  </dl>
                  <dl class='person_top_both_b5'>
                    <dt>账号绑定</dt>
                    <dd>
                      <a href="">
                        支付宝绑定
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        微博绑定
                      </a>
                    </dd>
                    <dd>
                      <a href="">
                        分享绑定
                      </a>
                    </dd>
                  </dl>
                </div>
              </li>
              <li>
                <span>
                  消息
                </span>
              </li>

            </ul>
          </div>
          <div class='person_top_both_c'>
            <input type="text">
            <button>搜索</button>
          </div>
        </div>
      </div>
      <div class='person_bottom'>
        <div class='person_bottom1'>
          <dl>
            <dt>全部功能</dt>
            <dd>
              <a href="<?php echo url('car/index'); ?>">
                我的购物车
              </a>
            </dd>
            <dd>
              <a href="<?php echo url('person/indent'); ?>">
                已买到的宝贝
              </a>
            </dd>
            <dd>
              <a href="<?php echo url('person/auction'); ?>">
                我的拍卖
              </a>
            </dd>
            <dd>
              <a href="">
                机票酒店保险
              </a>
            </dd>
            <dd>
              <a href="">
                我的彩票
              </a>
            </dd>
            <dd>
              <a href="">
                我的游戏
              </a>
            </dd>
            <dd>
              <a href="">
                官方集运
              </a>
            </dd>
            <dd>
              <a href="">
                购买过的店铺
              </a>
            </dd>
            <dd>
              <a href="">
                我的发票
              </a>
            </dd>
             <dd>
              <a href="">
                开票信息
              </a>
            </dd>
             <dd>
              <a href="">
                发票管理
              </a>
            </dd>
            <dd>
              <a href="">
                我的收藏
              </a>
            </dd>
            <dd>
              <a href="">
                我的积分
              </a>
            </dd>
            <dd>
              <a href="">
                我的优惠券
              </a>
            </dd>
            <dd>
              <a href="#">
                评价管理
              </a>
            </dd>
            <dd>
              <a href="">
                退款维权
              </a>
            </dd>
            <dd>
              <a href="">
                退款管理
              </a>
            </dd>
            <dd>
              <a href="">
                售后管理
              </a>
            </dd>
            <dd>
              <a href="">
                投诉管理
              </a>
            </dd>
            <dd>
              <a href="">
                我的足迹
              </a>
            </dd>
            <dd>
              <a href="">
                流量钱包
              </a>
            </dd>
          </dl>
        </div>
        <div class='person_bottom2'>
          <div class='person_bottom2_A'>
            <div class='person_bottom2_A_a'>
              <div class='person_bottom2_A_b'>
                <div class='person_bottom2_A_c'>
                  <img src="/static/upload/head/<?php echo $head['img']; ?>" alt="">
                </div>
                <div class='person_bottom2_A_d'>
                  <p>
                    <a href="<?php echo url('Person/portrait'); ?>">
                      <?php echo \think\Session::get('homeuser'); ?> (<span>欢迎来天猫</span>)
                    </a>
                  </p>
                </div>
              </div>
              <div class='person_bottom2_A_e'>
                <ul>
                  <li>
                    <a href="<?php echo url('person/user'); ?>">
                      我的收货地址
                    </a>
                  </li>
                  <li>
                    <a href="">
                      我的优惠信息
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="..//static/public/img/2018-02-08_134609.png" alt="">
                      <span>
                        我的支付宝
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class='person_bottom2_A_f'>
              <ul>
                <li>
                  <a href="<?php echo url('Person/indent1'); ?>">
                    待付款
                  </a>
                </li>
                <li>
                  <a href="<?php echo url('Person/indent2'); ?>">
                    待发货
                  </a>
                </li>
                <li>
                  <a href="<?php echo url('Person/indent3'); ?>">
                    待收货
                  </a>
                </li>
                <li>
                  <a href="<?php echo url('Person/indent4'); ?>">
                    待评价
                  </a>
                </li>
                <li>
                  <a href="">
                    退款
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class='person_bottom2jia'>
             <div class='person_bottom2jia1'>
               <div class='person_bottom2jia2'>
                 <ul>
                  <?php if(is_array($intervalshops) || $intervalshops instanceof \think\Collection || $intervalshops instanceof \think\Paginator): $i = 0; $__LIST__ = $intervalshops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$intervalshop): $mod = ($i % 2 );++$i;?>
                   <li>
                     <div>
                       <a href="<?php echo url('Index/product',array('id'=>$intervalshop['id'])); ?>">
                         <img src="/static/upload/shop/<?php echo $intervalshop['img']; ?>" alt="">
                       </a>
                     </div>
                     <div class='person_bottom2_C_a'>
                       <p>
                         <span>￥<?php echo $intervalshop['price']; ?></span>
                         <span>￥<?php echo $intervalshop['price'] + 499; ?></span>
                       </p>
                     </div>
                     <div class='person_bottom2_C_b'>
                       <a href="" title='<?php echo $intervalshop['sname']; ?><?php echo $intervalshop['introduce']; ?>'>
                         <?php echo $intervalshop['sname']; ?><?php echo $intervalshop['introduce']; ?>
                       </a>
                       
                     </div>
                     <div class='person_bottom2_C_c'>
                       <p>
                         <span>库存：<?php echo $intervalshop['stock']; ?>件</span>
                       </p>
                     </div>
                   </li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
               </div>
             </div>
          </div> 
          <div class='person_bottom2_B'>
            <p>
              <span>
                根据浏览，猜我喜欢
              </span>
            </p>
              <img src="/static/public/img/2018-02-08_140645.png" alt="" class='person_huanyizu'>
          </div>
          <div class='person_bottom2_C'>
            <div class='person_bottom2_D'>
            <ul>
              <?php if(is_array($likeshops) || $likeshops instanceof \think\Collection || $likeshops instanceof \think\Paginator): $i = 0; $__LIST__ = $likeshops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$likeshop): $mod = ($i % 2 );++$i;?>
               <li>
                 <div>
                   <a href="<?php echo url('Index/product',array('id'=>$intervalshop['id'])); ?>">
                     <img src="/static/upload/shop/<?php echo $likeshop['img']; ?>" alt="">
                   </a>
                 </div>
                 <div class='person_bottom2_C_a'>
                   <p>
                     <span>￥<?php echo $likeshop['price']; ?></span>
                     <span>￥<?php echo $likeshop['price'] + 599; ?></span>
                   </p>
                 </div>
                 <div class='person_bottom2_C_b'>
                   <a href="" title='<?php echo $likeshop['sname']; ?><?php echo $likeshop['introduce']; ?>'>
                     <?php echo $likeshop['sname']; ?><?php echo $likeshop['introduce']; ?>
                   </a>
                   
                 </div>
                 <div class='person_bottom2_C_c'>
                   <p>
                     <span>库存：<?php echo $likeshop['stock']; ?>件</span>
                   </p>
                 </div>
               </li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            </div>
            <div class='clear'></div>
          </div>
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
        </div>
        <div class='person_bottom3'>
          <div class='person_bottom3_A'>
            <ul>
              <li>
                <p>
                  <img src="..//static/public/img/2018-02-08_143938.png" alt="">
                </p>
              </li>
              <li>
                <span>
                  我的日历
                </span>
              </li>
              <li>
                <a href="">
                  <img src="..//static/public/img/2018-02-08_144120.png" alt="">
                </a>
              </li>
            </ul>
          </div>
          <div class='person_bottom3_B'>
            <p id='Gindex_date'>
              08
            </p>
            <p>
              <span id='Gindex_week'>星期四</span>
            </p>
            <p>
              <span id='Gindex_year'>2018.02</span>
            </p>
          </div>
          <div class='person_bottom3_C'>
            <p>
              <span>便民服务</span>
            </p>
          </div>
          <div class='person_bottom3_D'>
            <ul class='person_bottom3_D_a'>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_151536.png" alt="">
                  <p>
                    <span>手机</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152003.png" alt="">
                  <p>
                    <span>点卡</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_151727.png" alt="">
                  <p>
                    <span>飞机</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_151923.png" alt="">
                  <p>
                    <span>彩票</span>
                  </p>
                </li>
              </a>
             
            </ul>
            <ul class='person_bottom3_D_a'>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152432.png" alt="">
                  <p>
                    <span>水电煤</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152525.png" alt="">
                  <p>
                    <span>保险</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152547.png" alt="">
                  <p>
                    <span>转账</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152617.png" alt="">
                  <p>
                    <span>还款</span>
                  </p>
                </li>
              </a>
            </ul>
            <ul class='person_bottom3_D_a'>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152740.png" alt="">
                  <p>
                    <span>外卖</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152805.png" alt="">
                  <p>
                    <span>酒店</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152827.png" alt="">
                  <p>
                    <span>快递</span>
                  </p>
                </li>
              </a>
              <a href="">
                <li class='person_bottom3_D_a1'>
                  <img src="..//static/public/img/2018-02-08_152857.png" alt="">
                  <p>
                    <span>火车票</span>
                  </p>
                </li>
              </a>
             
            </ul>
          </div>
          <div class='person_bottom3_E'>
            <a href="">
              <img src="..//static/public/img/TB1HxK7pf2H8KJjy1zkXXXr7pXa.jpg" alt="">
            </a>
          </div>
        </div>
        <div class='clear'></div>
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
    <div class='clear'></div>
    <div class='viewermain'>
      
    </div>
    <div class='viewer'>
      <div class='viewer_son'>
        <p>修改登录密码</p>
        <form action="<?php echo url('Person/updatepass'); ?>" method='post'>
          <input type="password" name="password" id="" class='loginpass'>
          <span class='loginpass_tishi'>密码长度至少6位</span>
          <input type="submit" value="保存" class='loginsubmit'>
        </form>
      </div>  
    </div>
</div>
</body>
<script>
 $('.updatepass').click(function(){
   $('.viewermain').show();
   $('.viewer').show();
 })
 $('.viewermain').click(function(){
   $('.viewermain').hide();
   $('.viewer').hide();
 })
 $('.loginsubmit').click(function(){
    length=$('.loginpass').val().length;
    if(length<6){
      $('.loginpass_tishi').css({'color':'#ff0036'}); 
      return false;
    }else{
      $('.loginpass_tishi').css({'color':'#fff'}); 
      return true;
    }
 })
</script>

</html>