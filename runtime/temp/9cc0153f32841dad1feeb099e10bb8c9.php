<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\AppServ\www\tmall\public/../application/index\view\person\indent2.html";i:1524554468;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>好生活上天猫-待发货</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
  <link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
    <link rel="stylesheet" href="/static/public/css/indent.css">
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
    <div class='person_content'>
      <div class='person_top'>
        <div class='person_top_both'>
          <a href="<?php echo url('Person/index'); ?>">
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
                      <a href="">
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
                      <a href="#">
                        收货地址
                      </a>
                    </dd>
                    <dd>
                      <a href="">
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
    </div>
   <div class="indent_content">
    <div class='indent_left'>
      <dl>
        <dt>全部功能</dt>
        <dd>
          <a href="<?php echo url('car/index'); ?>">我的购物车</a>
        </dd>
        <dd class='indent_left_a'>
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
          <a href="">购买过得店铺</a>
        </dd>
        <dd>
          <a href="">
            我的发票
          </a>
        </dd>
        <dd>
          <a href="">
            我的收藏
          </a>
        </dd>
        <dd>
          <a href="">我的积分</a>
        </dd>
        <dd>
          <a href="">我的优惠券</a>
        </dd>
        <dd>
          <a href="">
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
          <a href="">我的足迹</a>
        </dd>
        <dd>
          <a href="">
            流量钱包
          </a>
        </dd>
      </dl>
    </div>
    <div class="indent_right">
      <div class="indent_right_A">
        <ul>
          <li>
            <a href="<?php echo url('person/indent'); ?>" >所有订单</a>
            <span>|</span>
          </li>
          <li >
            <a href="<?php echo url('person/indent1'); ?>" >代付款</a>
            <span>|</span>
          </li>
          <li class='indent_right_A_a'>
            <a href="<?php echo url('person/indent2'); ?>" style='color:#f40'>代发货</a>
            <span>|</span>
          </li>
          <li>
            <a href="<?php echo url('person/indent3'); ?>">待收货</a>
            <span>|</span>
          </li>
          <li>
            <a href="<?php echo url('person/indent4'); ?>">待评价</a>
            <span>|</span>
          </li>
          <li>
            <a href="<?php echo url('person/indent5'); ?>">已评价</a>
          </li>
        </ul>
        <ul>
          <li>
            <img src="/static/public/img/2018-02-19_123230.png" alt="">
            <a href="">
              订单回收
            </a>
          </li>
        </ul>
      </div>
      <div class='indent_right_B'>
        <form action="">
          <div class='indent_right_B_b'>
            <input type="text" name="search" id="" placeholder='输入商品标题或订单号进行查询'>
          </div>
          <div class='indent_right_B_a'>
            <input type="submit" value="订单搜索">
          </div>
        </form>
        <a href="">更多条件筛选</a>
      </div>
      <div class='indent_right_C'>
        <div class='indent_right_C_a'>
          <p>
            宝贝
          </p>
        </div>
        <div class='indent_right_C_b'>
          <p>
            单价
          </p>
        </div>
        <div class='indent_right_C_c'>
          <p>
            数量
          </p>
        </div>
        <div class='indent_right_C_d'>
          <p>
            商品操作
          </p>
        </div>
        <div class='indent_right_C_e'>
          <p>
            实付款
          </p>
        </div>
        <div class='indent_right_C_f'>
          <p>
            交易状态
          </p>
        </div>
        <div class='indent_right_C_g'>
          <p>
            交易操作
          </p>
        </div>
      </div>
      <div class='indent_right_D'>
        <div class='indent_right_D_a'>
          <a href="">上一页</a>
        </div>
        <div class='indent_right_D_b'>
          <a href="">下一页</a>
        </div>
      </div>
      <?php if(!$data): ?>
      <div class='noshop' style='width:870px;height:120px;margin-top:50px'>
        <img src="/static/public/img/T1MQ1cXhtiXXXXXXXX-78-120.png" alt=""
        style='float:left;margin-left:270px'>
        <span style='float:left;margin-top:45px;margin-left:10px;font-size:14px'>没有符合条件的宝贝，请尝试其他搜索条件。</span>
      </div>
      <?php else: if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
      <div class='indent_right_E'>
        <div class='indent_right_E_top'>
          <div class='indent_right_E_top_a'>
            <input type="checkbox" name="" id="">
            <span><?php echo $dat['time']; ?></span>
            <span>订单号：<?php echo $dat['code']; ?></span>
          </div>
          <div class='indent_right_E_top_b'>
            <a href="">详细请联系...</a>
          </div>
          <div class='indent_right_E_top_c'>
            <a href=""> 和我联系</a>
          </div>
          <div class='indent_right_E_top_d'>
            <a href="javascript:;" onclick='indentdel(<?php echo $dat['id']; ?>,this)'>
              <img src="/static/public/img/2018-02-19_152735.png" alt="">
            </a>
          </div>
        </div>
        <div class='indent_right_E_bottom'>
          <div class='indent_right_E_bottom_a'>
            <a href="<?php echo url('Index/product',array('id'=>$dat['shop_id'])); ?>">
            <img src="/static/upload/shop/<?php echo $dat['img']; ?>" alt="">
            </a>
            <div class='indent_right_E_bottom_a1'>
              <p>
                <a href="">
                  <?php echo $dat['sname']; ?>
                </a>
              </p>
              <p>
                <span>
                  颜色分类：<?php echo $dat['color']; ?>
                </span>
              </p>
              <p>
                <img src="..//static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                <img src="..//static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
              </p>
            </div>
          </div>
          <div class='indent_right_E_bottom_b'>
            <p>
              <span>
                ￥<?php echo $dat['price'] + 499; ?>
              </span>
            </p>
            <p>
              <span>
                ￥<?php echo $dat['price']; ?>
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_c'>
            <p>
              <span>x<?php echo $dat['num']; ?></span>
            </p>
          </div>
          <div class='indent_right_E_bottom_d'>
            <dl>
              <dd>
                <a href="">申请售后</a>
              </dd>
              <dd>
                <a href="">投诉卖家</a>
              </dd>
              <dd>
                <a href="">运费险已失效</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_e'>
            <p>
              ￥<?php echo $dat['price'] * $dat['num']; ?>
            </p>
            <p>
              <span>
                (含运费：￥0.00)
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_f'>
            <dl>
              <dd>
                <a href="">交易成功</a>
              </dd>
              <dd>
                <a href="">查看物流</a>
              </dd>
              <dd>
                <a href="">双方已评</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_g'>
            <dl>
              <dd>
                <a href=":javascript:;">收货后可评价</a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
      <!-- <div class='indent_right_E'>
        <div class='indent_right_E_top'>
          <div class='indent_right_E_top_a'>
            <input type="checkbox" name="" id="">
            <span>2018-01-15</span>
            <span>订单号：107973743358558352</span>
          </div>
          <div class='indent_right_E_top_b'>
            <a href="">详细请联系...</a>
          </div>
          <div class='indent_right_E_top_c'>
            <a href=""> 和我联系</a>
          </div>
          <div class='indent_right_E_top_d'>
            <a href="">
              <img src="/static/public/img/2018-02-19_152735.png" alt="">
            </a>
          </div>
        </div>
        <div class='indent_right_E_bottom'>
          <div class='indent_right_E_bottom_a'>
            <img src="/static/public/img/TB2540amLBNTKJjSszeX0x220.jpg" alt="">
            <div class='indent_right_E_bottom_a1'>
              <p>
                <a href="">
                  时尚高端咖啡棕色时来运转满钻旋转大表盘真皮男女士手表石英表
                </a>
              </p>
              <p>
                <span>
                  颜色分类：棕色雪花[优质皮
                </span>
              </p>
              <p>
                <img src="/static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                <img src="/static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
              </p>
            </div>
          </div>
          <div class='indent_right_E_bottom_b'>
            <p>
              <span>
                ￥520.00
              </span>
            </p>
            <p>
              <span>
                ￥180.00
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_c'>
            <p>
              <span>1</span>
            </p>
          </div>
          <div class='indent_right_E_bottom_d'>
            <dl>
              <dd>
                <a href="">申请售后</a>
              </dd>
              <dd>
                <a href="">投诉卖家</a>
              </dd>
              <dd>
                <a href="">运费险已失效</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_e'>
            <p>
              ￥180.00
            </p>
            <p>
              <span>
                (含运费：￥0.00)
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_f'>
            <dl>
              <dd>
                <a href="">交易成功</a>
              </dd>
              <dd>
                <a href="">订单详情</a>
              </dd>
              <dd>
                <a href="">查看物流</a>
              </dd>
              <dd>
                <a href="">双方已评</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_g'>
            <dl>
              <dd>
                <a href="">追加评论</a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class='indent_right_E'>
        <div class='indent_right_E_top'>
          <div class='indent_right_E_top_a'>
            <input type="checkbox" name="" id="">
            <span>2018-01-15</span>
            <span>订单号：107973743358558352</span>
          </div>
          <div class='indent_right_E_top_b'>
            <a href="">详细请联系...</a>
          </div>
          <div class='indent_right_E_top_c'>
            <a href=""> 和我联系</a>
          </div>
          <div class='indent_right_E_top_d'>
            <a href="">
              <img src="/static/public/img/2018-02-19_152735.png" alt="">
            </a>
          </div>
        </div>
        <div class='indent_right_E_bottom'>
          <div class='indent_right_E_bottom_a'>
            <img src="/static/public/img/TB2540amLBNTKJjSszeX0x220.jpg" alt="">
            <div class='indent_right_E_bottom_a1'>
              <p>
                <a href="">
                  时尚高端咖啡棕色时来运转满钻旋转大表盘真皮男女士手表石英表
                </a>
              </p>
              <p>
                <span>
                  颜色分类：棕色雪花[优质皮
                </span>
              </p>
              <p>
                <img src="/static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                <img src="/static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
              </p>
            </div>
          </div>
          <div class='indent_right_E_bottom_b'>
            <p>
              <span>
                ￥520.00
              </span>
            </p>
            <p>
              <span>
                ￥180.00
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_c'>
            <p>
              <span>1</span>
            </p>
          </div>
          <div class='indent_right_E_bottom_d'>
            <dl>
              <dd>
                <a href="">申请售后</a>
              </dd>
              <dd>
                <a href="">投诉卖家</a>
              </dd>
              <dd>
                <a href="">运费险已失效</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_e'>
            <p>
              ￥180.00
            </p>
            <p>
              <span>
                (含运费：￥0.00)
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_f'>
            <dl>
              <dd>
                <a href="">交易成功</a>
              </dd>
              <dd>
                <a href="">订单详情</a>
              </dd>
              <dd>
                <a href="">查看物流</a>
              </dd>
              <dd>
                <a href="">双方已评</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_g'>
            <dl>
              <dd>
                <a href="">追加评论</a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class='indent_right_E'>
        <div class='indent_right_E_top'>
          <div class='indent_right_E_top_a'>
            <input type="checkbox" name="" id="">
            <span>2018-01-15</span>
            <span>订单号：107973743358558352</span>
          </div>
          <div class='indent_right_E_top_b'>
            <a href="">详细请联系...</a>
          </div>
          <div class='indent_right_E_top_c'>
            <a href=""> 和我联系</a>
          </div>
          <div class='indent_right_E_top_d'>
            <a href="">
              <img src="/static/public/img/2018-02-19_152735.png" alt="">
            </a>
          </div>
        </div>
        <div class='indent_right_E_bottom'>
          <div class='indent_right_E_bottom_a'>
            <img src="/static/public/img/TB2540amLBNTKJjSszeX0x220.jpg" alt="">
            <div class='indent_right_E_bottom_a1'>
              <p>
                <a href="">
                  时尚高端咖啡棕色时来运转满钻旋转大表盘真皮男女士手表石英表
                </a>
              </p>
              <p>
                <span>
                  颜色分类：棕色雪花[优质皮
                </span>
              </p>
              <p>
                <img src="/static/public/img/T1bnR4XEBhXXcQVo..-14-16.png" alt="">
                <img src="/static/public/img/T1EQA5FpVgXXceOP_X-16-16.jpg" alt="">
              </p>
            </div>
          </div>
          <div class='indent_right_E_bottom_b'>
            <p>
              <span>
                ￥520.00
              </span>
            </p>
            <p>
              <span>
                ￥180.00
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_c'>
            <p>
              <span>1</span>
            </p>
          </div>
          <div class='indent_right_E_bottom_d'>
            <dl>
              <dd>
                <a href="">申请售后</a>
              </dd>
              <dd>
                <a href="">投诉卖家</a>
              </dd>
              <dd>
                <a href="">运费险已失效</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_e'>
            <p>
              ￥180.00
            </p>
            <p>
              <span>
                (含运费：￥0.00)
              </span>
            </p>
          </div>
          <div class='indent_right_E_bottom_f'>
            <dl>
              <dd>
                <a href="">交易成功</a>
              </dd>
              <dd>
                <a href="">订单详情</a>
              </dd>
              <dd>
                <a href="">查看物流</a>
              </dd>
              <dd>
                <a href="">双方已评</a>
              </dd>
            </dl>
          </div>
          <div class='indent_right_E_bottom_g'>
            <dl>
              <dd>
                <a href="">追加评论</a>
              </dd>
            </dl>
          </div>
        </div>
      </div> -->
    </div>
    <div class='clear'></div>
   </div>
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
function indentdel(id,obj){
  $.post('<?php echo url("ajax_indentdel"); ?>',{id:id},function(data){
     if(data==1){
      $(obj).parent().parent().parent().remove();
     }else{
      return false;
     }
  });
}
</script>

</html>