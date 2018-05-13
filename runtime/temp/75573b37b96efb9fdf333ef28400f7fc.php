<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\AppServ\www\tmall\public/../application/index\view\index\product.html";i:1524455924;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header1.html";i:1524212128;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>理想生活上天猫--商品详情</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
  <link rel="stylesheet" href="/static/public/css/style.css">
  <link rel="stylesheet" type="text/css" href="/static/public/citycss/city-picker.css">
  <link rel="stylesheet" type="text/css" href="/static/public/citycss/main.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
  <script src="/static/public/js/jquery.jqzoom.js"></script>
  <script src='/static/public/js/product.js'></script>
  <script src="/static/public/cityjs/city-picker.data.js"></script>
  <script type="text/javascript" src="/static/public/cityjs/city-picker.js"></script>
</head>
<style>
/*放大镜*/
  #jqzoom{
    width:418px;
    height:418px;
  }
  .pc_xiaotu ul li{
    margin-right:9.5px;
    margin-left:9.5px;
  }
  .shopstock{
    border:none;
    outline:none;
    height:38px;
  }\
  /*放大弹窗*/
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
    width:980px;
    height:626px;
    cursor: default;
    position: fixed;
    top:5px;
    left:15%;
    z-index:3;
    display:none;
  }
  .viewer .viewer-control{
    width:100px;
    height:626px;
    background: #000;
    float:left;
  }
  .viewer .viewer-control .viewer-controlLeft{
    width:42px;
    height:70px;
    margin-top:278px;
    margin-left:29px;
    cursor: pointer;
  }
  .viewer .viewer-panel{
    width:620px;
    height:626px;
    float:left;
    background: #fff;
  }
  .viewer .viewer-panel img{
    width:620px;
    height:626px;
    background: #fff;
  }
  .viewer .viewer-contr{
    width:100px;
    height:626px;
    background: #000;
    float:left;
  }
  .viewer .viewer-contr .viewer-contrRight{
    width:42px;
    height:70px;
    margin-top:278px;
    margin-left:29px;
    cursor: pointer;
  }
  .viewer .viewer-side{
    width:160px;
    height:626px;
    background-color: #F3F3F3;
    float:left;
    text-align:center;
    position: relative;
  }
  
  .viewer .viewer-side i{
    display:block;
    width:25px;
    height:25px;
    font-style:normal;
    font-size:25px;
    text-align:center;
    line-height:25px;
    color:#ccc;
    float:right;
    margin-top:10px;
    margin-right:10px;
    cursor: pointer;
  }
  .viewer .viewer-side h3{
    display:inline-block;
    color: #6c6c6c;
      font-size: 12px;
      font-weight: 700;
      width:120px;
      margin-top:20px;
      margin-left:7px;
  }
  .viewer .viewer-side .viewer-sideA{
    width:110px;
    height:270px;
    margin:0 auto;
    margin-top:30px;
    overflow:hidden;
  }
  .viewer .viewer-side li{
      float: left;
      border: 2px solid #F3F3F3;
      width: 50px;
      height: 50px;
      list-style:none;
      cursor: pointer;
      background: #fff;
  }
  .viewer .viewer-side li img{
    width:50px;
    height:50px;
  }
  .viewer .viewer-side .viewer-sideABot{
    position: absolute;
    right:0;
    bottom:-3px;
  }
  /*城市级联*/
  .city-picker-span{
    border:none;
    margin-top:10px;
    margin-left:30px;
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
    <div class='clear'></div>
    <div class='content'>
      <div class='product_dongtai'>
        <a href="">
          <img src="/static/upload/prodtopimg/<?php echo $brandimg['img']; ?>" alt="">
        </a>
      </div>
      <div class='product_content'>
        <div class='pc_left'>
          <div class='pc_left_L'>
            <div class='pc_left_L_T jqzoom' >
              <img  id='jqzoom' src="/static/public/img/timg.jpg" jqimg="" alt="">
            </div>
            <div class='clear'></div>
            <div class='pc_xiaotu'>
              <ul>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
                <li>
                  <img src="/static/upload/prodimg/<?php echo $dat['img']; ?>"  alt="">
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
            <div class='clear'></div>
            <div class='pc_left_L_B'>
              <span class='pc_left_L_B_a'>
                <a href="">
                  分享
                </a>
              </span>
              <span class='pc_left_L_B_b'>
                收藏商品 （48888人气）
              </span>
              <span class='pc_left_L_B_c'>
                <a href="">
                  举报
                </a>
              </span>
              
            </div>
          </div>
          <div class='pc_left_R'>
            <div class='pc_left_R_A'>
              <a href="">
                <span class='pc_left_R_A_1'>
                【优惠200元】<?php echo $prodshop['sname']; ?><?php echo $prodshop['introduce']; ?>

                </span>
                <p>
                  <span class='pc_left_R_A_2'>
                  直降100元领券再减100
                </span>
                </p>
              </a>
            </div>
            <div class='pc_left_R_B'></div>
            <div class='pc_left_R_C'>
              <dl>
                <dt>
                  <img src="/static/public/img/2018-02-02_205729.png" alt="">
                </dt>
                <dd>
                  价格
                </dd>
                <dd>
                  本店活动
                </dd>
              </dl>
              <dl>
                <dt>
                 全天猫实用商品通用
                </dt>
                <dd class='pc_left_R_C_a'>
                  
                 ¥<?php echo $prodshop['price']-498; ?> - ¥ <?php echo $prodshop['price']; ?> 
                </dd>
                <dd class='pc_left_R_C_b'>
                  满<?php echo $prodshop['price']-1005; ?>包邮
                </dd>
              </dl>
              <dl>
                <dt>
                  <a href="">
                    <img src="/static/public/img/2018-02-02_205858.png" alt="">
                  </a>
                </dt>
                <dd></dd>
                <dd class='pc_left_R_C_c'>
                  更多优惠
                </dd>
              </dl>
            </div>
            <div class='pc_left_R_D'>
              <span style='float:left'>地址</span>
              <div style="position: relative;float:left" >
                  <input class='cityinput'  readonly type="text" data-toggle="city-picker" placeholder="点击从下拉面板中选择省/市/区县/镇">
              </div>
            </div>
            <div class="pc_left_R_E">
              <div class="pc_left_R_E_a">
                <span>
                  库存：
                </span>
                <span>
                  <?php echo $prodshop['stock']; ?>件
                </span>
              </div>
              <div class="pc_left_R_E_b">
                <span>
                  累计评价:
                </span>
                <span>
                  <?php echo $commenttot; ?>条
                </span>
              </div>
              <div class="pc_left_R_E_c">
                <span>
                  送天猫积分
                </span>
                <span>
                  <?php echo $prodshop['price']/10; ?>
                </span>
                <span>
                  起
                </span>
              </div>
            </div>
            <div class="pc_left_R_F">
              
              <div class="pc_left_R_F_b">
                <div class="pc_left_R_F_b1">
                  <span>
                    机身颜色
                  </span>
                </div>
                <div class="pc_left_R_F_b2">
                  <ul>
                    <?php if(is_array($shopcolor) || $shopcolor instanceof \think\Collection || $shopcolor instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcolor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopc): $mod = ($i % 2 );++$i;?>
                    <div class='divb' onclick='procolor(<?php echo $shopc['id']; ?>,this)' style='cursor: pointer;'>
                      <li>
                        <a href="javascript:;" >
                          <img src="/static/upload/prodcolor/<?php echo $shopc['img']; ?>" alt="">
                        </a>
                        <span>
                          <?php echo $shopc['color']; ?>
                        </span>
                      </li>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>
              </div>
              <div class="pc_left_R_F_c">
                <div class="pc_left_R_F_c1">
                  <span>
                    套餐类型
                  </span>
                </div>
                <div class="pc_left_R_F_c2">
                  <a href="">
                    <span>
                      官方标配
                    </span>
                  </a>
                </div>
                
              </div>
              <div class="pc_left_R_F_d">
                <div class="pc_left_R_F_d1">
                  <span>
                    储存容量
                  </span>
                </div>
                <div class="pc_left_R_F_d2">
                  <?php if(is_array($shopcolor) || $shopcolor instanceof \think\Collection || $shopcolor instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcolor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopneicun): $mod = ($i % 2 );++$i;?>
                  <div class='divc'>
                  <a href="javascript:;" onclick='proneicun(<?php echo $shopneicun['id']; ?>,this)'>
                    <span>
                      <?php echo $shopneicun['neicun']; ?>
                    </span>
                  </a>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </div>
              <div class="pc_left_R_F_e">
                <div class="pc_left_R_F_e1">
                  <span>
                    版本类型
                  </span>
                </div>
                <div class="pc_left_R_F_e2">
                  <a href="">
                    <span>
                      中国大陆
                    </span>
                  </a>
                </div>
              </div>
              <div class="pc_left_R_F_f">
                <div class="pc_left_R_F_f1">
                  <span>
                    购买方式
                  </span>
                </div>
                <div class="pc_left_R_F_f2">
                  <div class='divd'>
                    <a href="" class="pc_left_R_F_f21">
                      <span>
                        裸机
                      </span>
                    </a>
                  </div>
                  <div class='divd'>
                     <a href="" >
                      <span>
                        赠60元通信生活礼包
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="pc_left_R_F_g">
                <div class="pc_left_R_F_g1">
                  <span>
                    数量
                  </span>
                </div>
                <div class="pc_left_R_F_g2">
                  <ul>
                    <li style='overflow:hidden'>
                      <input type="text" value='1' class='shopstock' readonly >
                      <!-- <span class='shopstock'>
                        1
                      </span> -->
                    </li>
                    <li>
                      <a href="javascript:;" onclick='jia(<?php echo $prodshop['id']; ?>,this)'>
                        <span>
                          +
                        </span>
                      </a>
                      <br>
                      <a href="javascript:;" onclick='jian(this)'>
                        <span>
                          -
                        </span>
                      </a>
                    </li>
                    <li class="pc_left_R_F_g2_a">
                      <span>
                        件
                      </span>
                    </li>
                    <li class="pc_left_R_F_g2_b">
                      <span>
                        库存:<?php echo $prodshop['stock']; ?>件
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="pc_left_R_F_h">
                <div class="pc_left_R_F_h1">
                  <span>
                    花呗分期
                  </span>
                </div>
                <div class="pc_left_R_F_h2">
                  <p>
                    <?php if(!\think\Session::get('homeid')): ?>
                    <a href="<?php echo url('index/login'); ?>">
                      登录
                    </a>
                    <span>
                      后确认是否享有该服务
                    </span>
                    <?php else: endif; ?>
                    <a href="">
                      什么是花呗分期
                    </a>
                  </p>
                  <ul>
                    <div class='dive'>
                      <li>
                        <a href="">
                          ¥<span>988.55</span>起x3期
                          <br>
                          (含手续费)
                        </a>
                      </li>
                    </div>
                    <div class='dive'>
                      <li>
                        <a href="">
                          ¥<span>504.90</span>起x3期
                          <br>
                          (含手续费)
                        </a>
                      </li>
                    </div>
                    <div class='dive'>
                      <li>
                        <a href="">
                          ¥<span>259.69</span>起x3期
                          <br>
                          (含手续费)
                        </a>
                      </li>
                    </div>
                  </ul>
                </div>
              </div>  
              <div class="pc_left_R_F_i">
                <?php if(!$collectshop): if(\think\Session::get('homeid')): ?>
                  <a href="javascript:;" onclick='addcollect(<?php echo $prodshop['id']; ?>,this)'>
                    <div class="pc_left_R_F_i1">
                        <span>
                           收藏商品
                        </span>
                    </div>
                  </a>
                  <?php else: ?>
                   <a href="<?php echo url('Index/login'); ?>">
                     <div class="pc_left_R_F_i1">
                         <span>
                            登录
                         </span>
                     </div>
                   </a>
                  <?php endif; else: ?>
                <a href="javascript:;">
                  <div class="pc_left_R_F_i1">
                      <span>
                         已收藏
                      </span>
                  </div>
                </a>
                <?php endif; ?>
                <a href="javascript:;" onclick='caradd(<?php echo $prodshop['id']; ?>)'>
                  <div class="pc_left_R_F_i2">
                    <span>
                     加入购物车
                    </span>
                  </div>
                </a>

              </div>
            </div>
            <div class="pc_left_R_G">
              <div class="pc_left_R_G_a">
                <span>
                  服务承诺
                </span>
              </div>
              <div class="pc_left_R_G_b">
                <a href="">
                  免举证退换货
                </a>
                <a href="">
                  正品保证 
                </a>
                <a href="">
                  极速退款
                </a>
                <a href="">
                  赠运费险
                </a>
                <a href="">
                 支付方式
                </a>
                <a href="">
                七天无理由退换
                </a>
              </div>

            </div>
          </div>
           
        </div>
        <div class='Pc_zuiright_wai'>
            <span class='Pc_zuiright_wai1'>................
            </span>&nbsp&nbsp <span>看了又看</span> &nbsp&nbsp 
            <span class='Pc_zuiright_wai2'>................</span>
          <div class='Pc_zuiright'>
            <div class='pc_right'>
              <ul>
                <?php if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
                <li>
                  <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                    <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
                  </a>
                  <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                    <?php echo $shop['sname']; ?><?php echo $shop['introduce']; ?>
                  </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
            </div>
            <div class='Pc_zuiright_bottom'>
              <div class='Pc_zuiright_bottom_left'>
                
              </div>
              <div class='Pc_zuiright_bottom_right'>
                
              </div>
          </div>
        </div>
      </div>
    </div> 
    <div class='clear'></div>
    <div class='pc_bottom'>
        <div>
          <img src="/static/public/img/TB1U3r4PpXXXXX2a-50.png" alt="">
        </div>
        <div class='pc_bottom_left'>
          <div class='pc_bottom_left_one'>
            <div class='shop_intro'>
              <p>
                oppo手机官方旗舰店
                <img src="/static/public/img/2018-03-06_143809.png" alt="">
              </p>
            </div>
            <div class='shop_cert'>
              
            </div>
            <div class='btnArea'>
              <div class='btnArea1'>
                <a href="">
                  进店逛逛
                </a>
              </div>
              <div class='btnArea2'>
                <a href="">
                  收藏店铺
                </a>
              </div>
              
            </div>
          </div>
          <div class='pc_bottom_left_two'>
            <div class='skin-box-hd'>
              <p>本店搜索</p>
            </div>
            <ul>
              <li >
                <label for="" class='keyword'>
                  关键字
                  <input type="text" name="" id="">
                </label>
              </li>
              <li>
                <label for="" class='price'>
                  价格
                  <input type="text" name="" id=""> -
                  <input type="text">
                </label>
              </li>
              <li>
                <div class='submit'>
                  <input type="submit" value="搜索">
                </div>
              </li>
              <li class='hotkey'>
                <p>
                  R9全网通 R9 Plus
                </p>
              </li>
            </ul>
          </div>
          <div class='pc_bottom_left_three'>
            
          </div>
        </div>
        <div class='pc_bottom_right'>
          <div class='pc_bottom_right_A'>
            <ul>
              <li class='SPXQ'>
                <a href="javascript:;" class='SPXQa'>
                  商品详情
                </a>
              </li>
              <li class='SPXQ'>
                <a href="javascript:;" class=''>
                  规格参数
                </a>
              </li>
              <li class='LJPJ'>
                <a href="javascript:;" class='LJPJa'>
                  累计评价<span class='LJPJb'><?php echo $commenttot; ?></span>
                </a>
              </li>
              <li class='pc_bottom_right_A_a'>
                <a href="">
                  <img src="/static/public/img/2018-02-03_223109.png" alt="">
                </a>
              </li>
            </ul>
          </div>
          <div class='pc_bottom_right_display_none'>
          <div class='pc_bottom_right_B'>
            <img src="/static/public/img/2018-02-03_223828.png" alt="">
          </div>
          <div class='pc_bottom_right_C'>
            <?php if(is_array($prodbotimg) || $prodbotimg instanceof \think\Collection || $prodbotimg instanceof \think\Paginator): $i = 0; $__LIST__ = $prodbotimg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prodbot): $mod = ($i % 2 );++$i;?>
            <img src="/static/upload/prodbotimg/<?php echo $prodbot['img']; ?>" alt="" width='790px'>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          </div>
          <div class='PL'>
            <div class='PL_A'>
              <img src="/static/public/img/2018-02-03_225633.png" alt="">
            </div>
            <div class='PL_D'>
              <div class='PL_D_a'>
                <p>我也要评价！</p>
              </div>
            </div>
            <div class='PL_C'>
              <form action="">
                <textarea name="" id=""></textarea>
                <div class='PL_C_a'>
                  <input type="submit" value="发表">
                </div>
              </form>
              
            </div>
            <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm): $mod = ($i % 2 );++$i;?>
            <div class='PL_B'>
              <div class='PL_B1'>
                <div class='PL_B1_a' style='height:55px;overflow:hidden'>
                  <span>
                    <?php echo $comm['content']; ?>
                  </span>
                </div>
                <div class='PL_B1_b'>
                  <ul>
                    <?php if(is_array($comm['imgs']) || $comm['imgs'] instanceof \think\Collection || $comm['imgs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $comm['imgs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?>
                    <li>
                      <img src="/static/upload/comment/<?php echo $img; ?>" alt="">
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>
                  <div class='PL_B1_c'>
                    <span>
                      <?php echo $comm['time']; ?>
                    </span>
                  </div>
              </div>
              <?php if(is_array($comm['dindan']) || $comm['dindan'] instanceof \think\Collection || $comm['dindan'] instanceof \think\Paginator): $i = 0; $__LIST__ = $comm['dindan'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ddan): $mod = ($i % 2 );++$i;?>
              <div class='PL_B2'>
                <div>
                  <p>
                    <span class='PL_B2_a'>
                      机身颜色：
                    </span>
                    <span class='PL_B2_b'>
                      <?php echo $ddan['color']; ?>
                    </span>
                  </p>
                  <p>
                    <span class='PL_B2_a'>
                      套餐类型：
                    </span>
                    <span class='PL_B2_b'>
                      官方标配
                    </span>
                  </p>
                  <p>
                    <span class='PL_B2_a'>
                      存储容量：
                    </span>
                    <span class='PL_B2_b'>
                       <?php echo $ddan['neicun']; ?>
                    </span>
                  </p>
                  <p>
                    <span class='PL_B2_a'>
                      版本类型：
                    </span>
                    <span class='PL_B2_b'>
                      中国大陆
                    </span>
                  </p>
                </div>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              <div class='PL_B3'>
                <span>
                  <span class='commentuser'><?php echo $comm['username']; ?></span>（匿名）
                </span>
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
    </div>
    <div class='clear'></div>
    <div class='viewermain'>
      
    </div>
    <div class='viewer'>
      <div class='viewer-control'>
        <div class='viewer-controlLeft'>
          <img src="/static/public/img/2018-04-13_191755.png" alt="">
        </div>
      </div>
      <div class='viewer-panel'>
        <img src="/static/public/img/TB2x8EUlbuWBuNjSszgXXb8jVXa_!!370627083-0-item_pic.jpg" alt="">
      </div>
      <div class='viewer-contr'>
        <div class='viewer-contrRight'>
          <img src="/static/public/img/2018-04-13_191819.png" alt="">
        </div>
        
      </div>
      <div class='viewer-side'>
        <i class='closeviewer'>&times;</i>
        <h3><?php echo $prodshop['sname']; ?><br><?php echo $prodshop['introduce']; ?></h3>
        <div class='viewer-sideA'>
          <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datimg): $mod = ($i % 2 );++$i;?>
           <li>
             <a href="">
               <img src="/static/upload/prodimg/<?php echo $datimg['img']; ?>" alt="" class="qazimg">
             </a>
           </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
            
        </div>
        <div class='viewer-sideABot'>
          <img src="/static/public/img/2018-04-13_203521.png" alt="">
        </div>
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
   <div class='Youce_zhan'>
       <div class='youce'> 
          <div class='youce_a'>
              <img src="/static/public/img/2018-01-19_161557.png" alt="">
          </div> 
          <ul>
              <li class='IYouce_Zhan'>
                 <div class='youce_b'>
                   <p class='youce_b_a'>
                       <i class="iconfont icon-cart youce_b_c"></i>
                   </p>
                   <p class='youce_b_b'>
                       购物车
                   </p>
                     
                 </div> 
              </li>
              <li>
                <div class='youce_b_d1'>
                    <p class='youce_b_d'>
                        ￥
                    </p>
                    <div class='youce_b_d2'> 
                        <a href="">
                            我的资产
                        </a>
                    </div>
                </div>
              </li>
              <li>
                <div class='youce_b_e1'>
                    <p class='youce_b_e'>
                        ✰
                    </p>
                    <div class='youce_b_e2'> 
                        <a href="">
                            我的收藏
                        </a>
                    </div>
                </div>
                  
              </li>
          </ul>
          <ul class='youce_c'>
            <li>
                <div class='youce_c_a1'>
                    <p>
                        <i class="iconfont icon-category youce_c_a"></i>
                    </p>
                    <div class='youce_c_a2'>
                        <img src="/static/public/img/2018-03-06_092924.png" alt="">
                    </div>
                </div>
                
            </li>
            <li class='youce_c_b'>
                <p>
                    <a href="#">
                         ^<br>   TOP
                    </a>
                </p>
            </li>
          </ul>
        </div>
        <div class='Youce_GouJie'>
            <div class='Youce_Gou'>
                <div class='Youce_GouA'>
                    <label for="">
                        <input type="checkbox" name="" id="Indexall" ><span>全选 </span>
                    </label>
                    <span class='Youce_GouAQuan'>
                        全屏查看
                    </span> 
                </div>
                <?php if(is_array($carshops) || $carshops instanceof \think\Collection || $carshops instanceof \think\Paginator): $i = 0; $__LIST__ = $carshops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carshop): $mod = ($i % 2 );++$i;?>
                <div class='Youce_GouB'>
                    <div class='Youce_GouBTop'>
                        <input type="checkbox" name="" id="" class='chkbox'>
                        <img src="/static/public/img/TB1ziRwRpXXXXcAXFXXXXXXXXXX-23-12.png" alt="">
                        <span class='Youce_GouBTopA'>鑫然华数码专营店</span>
                        <span class='Youce_GouBTopB'>￥<?php echo $carshop['price']; ?></span>
                    </div>
                    <div class='Youce_GouBBottom'>
                        <div class='Youce_GouBBottomA'>
                            <input type="checkbox" name="" id="" class='chkbox'>
                        </div>
                        <div class='Youce_GouBBottomB'>
                            <img src="/static/upload/shop/<?php echo $carshop['img']; ?>" alt="">
                        </div>
                        <div class='Youce_GouBBottomC'>
                            <p title='<?php echo $carshop['sname']; ?>' class='Youce_GouBBottomCA'><?php echo $carshop['sname']; ?></p>
                            <p title='<?php echo $carshop['introduce']; ?>'><?php echo $carshop['introduce']; ?></p>
                        </div>
                        <div class='Youce_GouBBottomD'>
                            <span><?php echo $carshop['num']; ?></span>
                        </div>
                        <div class='Youce_GouBBottomE'>
                            <span>￥<?php echo $carshop['price']; ?></span>
                        </div>
                        
                    </div>
                 </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class='Youce_GouJieBotm'>
                <div class='Youce_GouJieBotmA'>
                    <span class='Youce_GouJieBotmALeft'>
                        
                    </span>
                    <span class='Youce_GouJieBotmARight'>
                        
                    </span>
                </div>
                 <a href="<?php echo url('car/index'); ?>">
                      <div class='Youce_GouJieBotmB'>
                         <div class='Youce_GouJieBotmBA'>
                             <span>
                                 去购物车结算
                             </span>
                             <i></i>
                         </div>
                     </div>
                 </a>
            </div>
        </div>
   </div>
   <div class='product_jrgwc'>
        <div class='product_jrgwc_top'>
          <div class='product_jrgwc_top_left'>
             <p>
               <i class="iconfont icon-success"></i>
             </p>
          </div>
          <div class='product_jrgwc_top_both'>
            <p class='product_jrgwc_top_both_a'>
              成功加入购物车
            </p>
            <p class='product_jrgwc_top_both_b'>
              您可以<a href="<?php echo url('car/index'); ?>" class='product_jrgwc_top_both_c'>去购物车结算</a>,或先使用<a href="" class='product_jrgwc_top_both_d'>天猫APP</a>
              领取新用户福利礼包 &nbsp; <a href="" class='product_jrgwc_top_both_c'>立即下载天猫APP</a>
            </p>
          </div>
          <div class='product_jrgwc_top_right'>
             <p>
               &times;
             </p>
          </div>
        </div>
        <div class='product_jrgwc_both'>
          <p>
            达人的购物里都有啥
          </p>
        </div>
        <div class='product_jrgwc_bottom'>
          <div class='product_jrgwc_bottom_left'>
            
          </div>
          <div class='product_jrgwc_bottom_both'>
            <div class='product_jrgwc_bottom_both_a'>
              <ul>
                <?php if(is_array($shops) || $shops instanceof \think\Collection || $shops instanceof \think\Paginator): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
                <li>
                  <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                    <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
                  </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
          <div class='product_jrgwc_bottom_right'>
            
          </div>
        </div>
        <div class='product_jrgwc_top_x3j'>
          ◆
        </div>
  </div>   
</body>
<script>
// 添加购物车
function caradd(id){
  $.post('<?php echo url("index/ajax_caradd"); ?>',{id:id},function(data){
      if(data){
          $('.Youce_Gou').append(data);
          $('.product_jrgwc').fadeIn(500);
          $('.IYouce_Zhan').css({'background':'#ff0036'});
          
      }else{
          confirm("您还没有选择规格!");
      }
  });
}
// 加商品数量
function jia(id,obj){
  shopstock=$('.shopstock').val();
  $.post('<?php echo url("index/ajax_jia"); ?>',{id:id,shopstock:shopstock},function(data){
     $('.shopstock').val(data);
  });
}
// 减商品数量
function jian(obj){
  shopstock=$('.shopstock').val();
  $.post('<?php echo url("index/ajax_jian"); ?>',{shopstock:shopstock},function(data){
     $('.shopstock').val(data);
  });
}
// 存商品颜色
function procolor(id,obj){
  $.post('<?php echo url("index/ajax_procolor"); ?>',{id:id},function(data){
         if(data==1){
          $('.divb').css({'border':'2px solid #fff'});
          $('.divb').children().css({'border':'1px solid #ccc'});
          $(obj).children().css({'border':'1px solid #fff'});
          $(obj).css({'border':'2px solid #ff0036'});
         }else{
          return false;
         } 
  });
}
// 存商品内存
function proneicun(id,obj){
  $.post('<?php echo url("index/ajax_proneicun"); ?>',{id:id},function(data){
     if(data==1){
          $('.divc').css({'border':'2px solid #fff'});
          $('.divc').children().css({'border':'1px solid #ccc'});
          $(obj).css({'border':'1px solid #fff'});
          $(obj).parent().css({'border':'2px solid #ff0036'});
         }else{
          return false;
         } 
  });
}
 // 放大镜
$('.divb').mouseenter(function(){
  a=$(this).children().children().children().attr('src');
  $('#jqzoom').attr('src',a);
  $('#jqzoom').attr('jqimg',a);
})

// 收藏商品
function addcollect(id,obj){
   $.post('<?php echo url("ajax_addcollect"); ?>',{id:id},function(data){
     if(data==1){
       $(obj).children().children().html('已收藏');    
     }else{
      return false;
     }
   });
}

// 放大弹窗
$('.viewermain').click(function(){
  $(this).fadeOut(500);
  $('.viewer').hide();
})
$('.closeviewer').click(function(){
  $('.viewermain').fadeOut(500);
  $('.viewer').hide();
})

$('.jqzoom').click(function(){
  $('.viewermain').show();
  $('.viewer').show();
});

$('.viewer-side li').mouseenter(function(){
  $('.viewer-side li').css({'border':'2px solid #f3f3f3'});
  $(this).css({'border':'2px solid #f40'});
  a=$(this).children().children().attr('src');
  $('.viewer-panel').children().attr({'src':a});

});
$(document).ready(function(){
  $('.viewer-sideA').children().eq(0).css({'border':'2px solid #f40'});
  a=$('.viewer-side li').children().children().attr('src');
  $('.viewer-panel').children().attr({'src':a}); 
   $('.divb').eq(0).click();
  $('.divc a').eq(0).click();
})
//放大弹窗右箭头
i=0;
$('.viewer-contrRight').click(function(){
  leng=$('.qazimg').length;
   if(i==leng){
    i=0;
   }
   src=$('.qazimg').eq(i).attr('src');
   $('.qazimg').parent().parent().css({'border':'2px solid #f3f3f3'});
   $('.qazimg').eq(i).parent().parent().css({'border':'2px solid #f40'});
   // alert(src)
   $('.viewer-panel').children().eq(0).attr('src',src);
    i++;
   
})
// 放大弹窗左箭头
$('.viewer-controlLeft').click(function(){
  leng=$('.qazimg').length;
   if(i<0){
    i=leng-1;
   }
   src=$('.qazimg').eq(i).attr('src');
   $('.qazimg').parent().parent().css({'border':'2px solid #f3f3f3'});
   $('.qazimg').eq(i).parent().parent().css({'border':'2px solid #f40'});
   // alert(src)
   $('.viewer-panel').children().eq(0).attr('src',src);
   i--;
})

// *号隐评论用户名
cohtml=$('.commentuser').html();
couser=cohtml.substring(0,1)+'****'+cohtml.substring(3);
$('.commentuser').html(couser);
</script>

</html>