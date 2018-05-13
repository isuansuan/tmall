<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\AppServ\www\tmall\public/../application/index\view\index\more.html";i:1523697036;s:61:"C:\AppServ\www\tmall\application\index\view\Index\header.html";i:1524212175;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>理想生活上天猫--更多</title>
    <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
    
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/index.js'></script>
</head>
<style>
    .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination>li {
    display: inline;}
 .pagination>li:first-child>span{
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination>li:last-child>a  {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}      
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
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
              <p class='headername'>
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
					<div class='header_shouji'>
						<p>
							<i class="iconfont icon-iconfontshouji"></i><a href="#">手机版</a>
						</p>
						<div class='header_shouji_erweima'>
							<img src="/static/public/img/2018-03-06_094125.png" alt="">
						</div>
					</div>
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
							<a href="<?php echo url('Person/index'); ?>">我的淘宝</a>
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
		
		
	</div>
	<div class='header_btn'>
		<div class='header_btn_left'>
			<p>
				<a href="<?php echo url('index/index'); ?>">
					<img src="/static/public/img/logo.png" alt="">
				</a>
				
			</p>
		</div>
		
		<div class='header_btn_right'>
			<form action="<?php echo url('index/more'); ?>" >
				
				<input type="text" title='请输入搜索内容'  value='&nbsp;&nbsp;搜索 天猫 商品/品牌/店铺' class='header_input' name='search'>
				<div class='header_form'>
					<span>
						&nbsp;搜索 天猫 商品/品牌/店铺
					</span>
				</div>
				<button>搜索</button>
			</form>
		</div>
	</div>
	
</div>
    <div class='clear'></div>
    <div class='header_dh'>
    	<ul class='header_dh_l'>
    		<li>
    			<a href="">电器城首页</a>
    		</li>
    		<li>
    			<a href="">新首发</a>
    		</li>
    		<li>
    			<a href="">酷玩街</a>
    		</li>
    		<li>
    			<a href="">花呗分期</a>
    		</li>
    		<li>
    			<a href="">手机馆</a>
    		</li>
    		<li>
    			<a href="">苏宁易购</a>
    		</li>
    	</ul>
    	<ul class='header_dh_r'>
    		<li>
    			<a href="">电器城服务台</a>
    		</li>
    	</ul>

    </div>
    <div class='clear'></div>
    <div class='content'>
    <div class='more_a'>
     <div class='more_a_a'>
         <span>
             品牌
         </span>
     </div>
     <div class="more_a_b">
         <ul>
            <?php if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$band): $mod = ($i % 2 );++$i;?>
              <li>
                 <a href="<?php echo url('index/more',array('brandid'=>$band['id'])); ?>">
                     <img src="/static/upload/brand/<?php echo $band['img']; ?>" alt="">
                 </a>
             </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
     </div>
     <div class='more_a_c'>
        <div class='more_a_c_a'>
            <span>+</span>
            <span>多选</span>
        </div>
        <div class='more_a_c_b'>
            <span>更多</span>
        </div>
         
     </div>
        
    </div>
    <div class='more_b'>
     <div class='more_b_a'>
         <span>
             分类
         </span>
     </div>
     <div class='more_b_b'>
         <span>
             手机
         </span>
     </div>
     <div class='more_b_c'>
         <div class='more_b_c_a'>
             <span>更多</span>
         </div>
     </div>
        
    </div>
    <div class='more_c'>
     <div class='more_c_a'>
         <span>
             网络类型
         </span>
     </div>
     <div class='more_c_b'>
        <a href="<?php echo url('index/more',array('internet'=>'电信')); ?>">
            <span>电信</span>
        </a>
        <a href="<?php echo url('index/more',array('internet'=>'移动')); ?>">
            <span>移动</span>
        </a>
         <a href="<?php echo url('index/more',array('internet'=>'联通')); ?>">
            <span>联通</span>
        </a>
         <!-- <span>TD-LTE/FDD-LTE/TDS/WCDMA/GSM</span> -->
     </div>
     <div class='more_c_c'>
         <div class='more_c_c_a'>
             <span>更多</span>
         </div>
     </div>
    </div>
    <div class='more_d'>
     <div class='more_d_a'>
         <span>
             屏幕大小
         </span>
     </div>
     <div class='more_d_b'>
        <a href="<?php echo url('index/more',array(' screen'=>'0')); ?>">
            <span>4.5英寸</span>
        </a>
        <a href="<?php echo url('index/more',array(' screen'=>'4.5')); ?>">
            <span>5.0英寸</span>
        </a>
        <a href="<?php echo url('index/more',array(' screen'=>'5.0')); ?>">
            <span>5.5英寸</span>
        </a>
        <a href="<?php echo url('index/more',array(' screen'=>'5.5')); ?>">
            <span>6.0英寸</span>
        </a>
     </div>   
    </div>
    <div class='morecont'>
        <ul>
            <?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$moreshop): $mod = ($i % 2 );++$i;?>
            <li>
                <div class='morecont_Div'>
                    <div class='morecont_Div_a'>
                        <a href="<?php echo url('index/product',array('id'=>$moreshop['id'])); ?>">
                            <img src="/static/upload/shop/<?php echo $moreshop['img']; ?>" alt="">
                        </a>
                    </div>
                    <div class='morecont_Div_b'>
                        <span>
                            ￥<?php echo $moreshop['price']; ?>
                        </span>
                        
                    </div>
                    <div class='morecont_Div_c'>
                       <a href="<?php echo url('index/product',array('id'=>$moreshop['id'])); ?>">
                           <span class='morecont_Div_c_a'>
                               <?php echo $moreshop['sname']; ?> 
                           </span>
                           <span class='morecont_Div_c_b'>
                               <?php echo $moreshop['introduce']; ?>
                           </span>
                       </a>
                        
                    </div>
                    <div class='morecont_Div_d'>
                        <span>
                            博珏数码专营店
                        </span>
                        
                    </div>
                    <div class='morecont_Div_e'>
                        <div class='morecont_Div_e_a'>
                            <span class='morecont_Div_e_a_a'>
                                库存:
                            </span>
                            <span class='morecont_Div_e_a_b'>
                                <?php echo $moreshop['stock']; ?>件
                            </span>
                            
                        </div>
                        <div class='morecont_Div_e_b'>
                            <a href="">
                                <img src="/static/public/img/2018-02-02_141812.png" alt="">
                            </a>
                        </div>
                        
                    </div>     
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class='clear'></div>
    </div>
    <div class='clear'></div>
    <div style='width:1190px;margin:0 auto;text-align:center'>
        <?php echo $page; ?>
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
                  <a href="<?php echo url('Car/index'); ?>">
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
</div>
	
</body>
<script>
</script>

</html>