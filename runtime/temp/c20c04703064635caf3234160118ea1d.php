<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\AppServ\www\tmall\public/../application/index\view\index\index.html";i:1524292558;s:61:"C:\AppServ\www\tmall\application\index\view\Index\header.html";i:1524212175;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>手机馆-2017-理想生活上天猫</title>
    <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/index.js'></script>
</head>
<style>
        
</style>
<body>
<div class='main'>
    <div class='advert'>
        <img src="/static/upload/advert/<?php echo $advert['0']['img']; ?>" alt="" width='1349px' height='80px'>
        <div class='closeAdvert'>
            <span>&times;</span>
        </div>
    </div>
     
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
    	<div class='ctn_top'>
            <div class='win'>
                     <div class='slidedid'>
                        <?php if(is_array($lunbo) || $lunbo instanceof \think\Collection || $lunbo instanceof \think\Paginator): $i = 0; $__LIST__ = $lunbo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunb): $mod = ($i % 2 );++$i;?>
                        <div class='slidedivp'><a href="<?php echo $lunb['href']; ?>"><img src="/static/upload/lunbo/<?php echo $lunb['img']; ?>" alt=""></a></div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                     </div>
                     <div class='titles'>
                        <a href="javascript:;" class='slidead'>1</a>
                        <a href="javascript:;" class='slidead'>2</a>
                        <a href="javascript:;" class='slidead'>3</a>
                        <a href="javascript:;" class='slidead'>4</a>
                        <a href="javascript:;" class='slidead'>5</a>
                        <a href="javascript:;" class='slidead'>6</a>
                     </div>
                     <div class='ctn_l'>
                        <div class='ctn_l_a'>
                            <p>
                                <i class="iconfont icon-success"></i>
                                <span>
                                    热门品牌
                                </span>
                            </p>
                            <ul>
                                <?php if(is_array($remenbrand) || $remenbrand instanceof \think\Collection || $remenbrand instanceof \think\Paginator): $i = 0; $__LIST__ = $remenbrand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Indexremenbrand): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a href="<?php echo url('index/more',array('brandid'=>$Indexremenbrand['id'])); ?>"><?php echo $Indexremenbrand['bname']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- <li>
                                    <a href="">小米</a>
                                </li>
                                <li>
                                    <a href="">荣耀</a>
                                </li>
                                <li>
                                    <a href="">苹果</a>
                                </li>
                                <li>
                                    <a href="">魅族</a>
                                </li>
                                <li>
                                    <a href="">华为</a>
                                </li>
                                <li>
                                    <a href="">三星</a>
                                </li> -->
                            </ul>
                            
                        </div>
                        <div class='ctn_l_b'>
                            <p>
                                <i class="iconfont icon-success"></i>
                                <span>
                                    价格预算
                                </span>
                            </p>
                            <ul>
                                <li>
                                    <a href="<?php echo url('index/more',array('start_price'=>0)); ?>">1000元以下</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array('start_price'=>1000)); ?>">1000-1500元</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array('start_price'=>1500)); ?>">1500-2500元</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array('start_price'=>2500)); ?>">2500元以上</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class='ctn_l_c'>
                            <p>
                                <i class="iconfont icon-success"></i>
                                <span>
                                    网络类型
                                </span>
                            </p>
                            <ul>
                                <li>
                                    <a href="<?php echo url('index/more',array('internet'=>'移动')); ?>">移动</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array('internet'=>'联通')); ?>">联通</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array('internet'=>'电信')); ?>">电信</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class='ctn_l_d'>
                            <p>
                                <i class="iconfont icon-success"></i>
                                <span>
                                    屏幕大小
                                </span>
                            </p>
                            <ul>
                                <li>
                                    <a href="<?php echo url('index/more',array(' screen'=>'0')); ?>">4.5英寸</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array(' screen'=>'4.5')); ?>">适手5.0英寸</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array(' screen'=>'5.0')); ?>">5.5英寸</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('index/more',array(' screen'=>'5.5')); ?>">5.5英寸以上</a>
                                </li>
                                
                            </ul>
                        </div>

                     </div> 
                      <div class='ctn_r'>
                         <img src="/static/public/img/hd.png" alt="">
                 </div>
            </div>
    	</div>
    	<div class='content_a'>
    		<div class='content_a_top'>
    			<p>
    				<span class='content_a_top_a'>FOCUS</span>
    				<span class='content_a_top_b'>热门机型</span>
    			</p>
    		</div>
    		<div class='content_a_both'>
    			<div>
    				<p>
    					<a href="">
    						近期上市新机
    					</a>
    				</p>
    			</div>
    		</div>
    		<div class='izy_content_lunbo'>
                <div class='izy_content_lunbo_zhong'>
                    <div class='izycontent_a_bottom'>
                        <ul>
                            <?php if(is_array($shangshi) || $shangshi instanceof \think\Collection || $shangshi instanceof \think\Paginator): $i = 0; $__LIST__ = $shangshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ssxj): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class='content_a_bottom_a'>
                                    <a href="<?php echo url('index/product',array('id'=>$ssxj['id'])); ?>">
                                        <img src="/static/upload/shop/<?php echo $ssxj['img']; ?>" alt="" class='c_a_b_a'>
                                    </a>
                                    
                                </div>
                                <div class='content_a_bottom_b'>
                                    <a href="">
                                        <?php echo $ssxj['sname']; ?>
                                    </a>
                                    <p>
                                        <span>
                                            <?php echo $ssxj['introduce']; ?>
                                        </span>
                                    </p>
                                    
                                </div>
                                <div class='content_a_bottom_c'>
                                    <span class='content_a_bottom_c_l'>
                                        ￥<?php echo $ssxj['price']; ?>
                                    </span>
                                    <span class='content_a_bottom_c_r'>
                                        库存:<?php echo $ssxj['stock']; ?>件
                                    </span>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div> 
                </div>
                <div class='izy_content_lunboLeft'>
                    
                </div> 
                <div class='izy_content_lunboRight'>
                    
                </div>
                    
            </div>	
            <div class="clear"></div>	
    	</div>
        <div class="clear"></div>
        <div class='kongbai'></div>
        <div class='fixedtiao'>
            <div class='content_b '>
                <div class='content_b_a'>
                    <p class='content_b_a_yearMD'>
                        2018/1/19
                    </p>
                    <p class='content_b_a_week'>
                        星期五
                    </p>
                    
                </div>
                <div class='content_b_b'>
                    <p>
                        品牌上新计划
                    </p>
                </div>
                <div class='content_b_c'>
                    <ul>
                        <?php if(is_array($bad) || $bad instanceof \think\Collection || $bad instanceof \think\Paginator): $i = 0; $__LIST__ = $bad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bda): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('index/more',array('brandid'=>$bda['id'])); ?>">
                                <?php echo $bda['bname']; ?>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <li>
                            <a href="<?php echo url('index/more',array('more'=>1)); ?>">
                                实惠精选
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='clear'></div>
        <?php if(is_array($bad) || $bad instanceof \think\Collection || $bad instanceof \think\Paginator): $k = 0; $__LIST__ = $bad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$daba): $mod = ($k % 2 );++$k;?>
        <div class='content_c'>
            <div class='content_c_a'>
                <p class='content_c_a_a'>
                    <span class='content_c_a_a_a'><?php echo $k; ?>F</span>
                    <span class='content_c_a_a_b'><?php echo $daba['bname']; ?>直供</span>
                </p>
                <div class='content_c_a_b'>
                    <p class='content_c_a_b_a'>
                        <span><?php echo $daba['bname']; ?>新品首发,抢好礼</span>
                    </p>
                    <p class='content_c_a_b_b'>
                        <span>正品保障 全国联保 无忧退换货</span>
                    </p>
                    
                </div>
                <div class='content_c_a_c'>
                    <a href="">
                        <i class="iconfont icon-success content_c_a_c_a"></i> 
                        <span>400热线电话</span>
                    </a>
                   
                </div>
                <div class='content_c_a_d'>
                    <a href="">
                        <span>查找服务网点></span>
                    </a>
                    <a href="">
                        <span><?php echo $daba['bname']; ?>社区</span>
                    </a>
                </div>
            </div>
            <div class='clear'></div>
            <div class='content_content'>
            <div class='content_c_b'>
                <?php if(is_array($daba['brandsmimg']) || $daba['brandsmimg'] instanceof \think\Collection || $daba['brandsmimg'] instanceof \think\Paginator): $i = 0; $__LIST__ = $daba['brandsmimg'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$smimg): $mod = ($i % 2 );++$i;?>
                <div class='zycontent_c_d'>
                    <a href="<?php echo url('index/more',array('brandid'=>$smimg['brand_id'])); ?>">
                        <img src="/static/upload/brandsmimg/<?php echo $smimg['img']; ?>" alt="">
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; if(is_array($daba['brandbgimg']) || $daba['brandbgimg'] instanceof \think\Collection || $daba['brandbgimg'] instanceof \think\Paginator): $i = 0; $__LIST__ = $daba['brandbgimg'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bgimg): $mod = ($i % 2 );++$i;?>
                <div class='zycontent_c_c'>
                    <a href="<?php echo url('index/more',array('brandid'=>$bgimg['brand_id'])); ?>">
                        <img src="/static/upload/brandbgimg/<?php echo $bgimg['img']; ?>" alt="">
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class='content_a_bottom'>
                <ul>
                    <?php if(is_array($daba['shop']) || $daba['shop'] instanceof \think\Collection || $daba['shop'] instanceof \think\Paginator): $i = 0; $__LIST__ = $daba['shop'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
                    <li>
                        <div class='content_a_bottom_a'>
                            <a href="<?php echo url('index/product',array('id'=>$shop['id'])); ?>">
                                <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="" class='c_a_b_a'>
                            </a>
                        </div>
                        <div class='content_a_bottom_b'>
                            <a href="">
                                <?php echo $shop['sname']; ?>
                            </a>
                            <p>
                                <span>
                                    <?php echo $shop['introduce']; ?>
                                </span>
                            </p>
                            
                        </div>
                        <div class='content_a_bottom_c'>
                            <span class='content_a_bottom_c_l'>
                                ￥<?php echo $shop['price']; ?>
                            </span>
                            <span class='content_a_bottom_c_r'>
                                库存:<?php echo $shop['stock']; ?>件
                            </span>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
            </div>
            </div>   
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class='content_d'>
            <div class='content_d_a'>
                <span class='content_d_a_a'>BRAND</span>
                <span class='content_d_a_b'>入驻品牌</span>
            </div>
            <div class='content_d_c'>
                <ul>
                    <?php if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brad): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('index/more',array('brandid'=>$brad['id'])); ?>">
                            <img src="/static/upload/brand/<?php echo $brad['img']; ?>" alt="">
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class='content_e'>
            <div class='content_e_a'>
                <p>
                    猜你喜欢
                </p>
            </div>
            <?php if(is_array($Bshop) || $Bshop instanceof \think\Collection || $Bshop instanceof \think\Paginator): $i = 0; $__LIST__ = $Bshop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Bshp): $mod = ($i % 2 );++$i;?>
            <div class='content_e_b'>
                <div class='zy_content_e_b1'>
                    <a href="<?php echo url('index/product',array('id'=>$Bshp['id'])); ?>">
                        <img src="/static/upload/shop/<?php echo $Bshp['img']; ?>" alt="">
                    </a>
                </div>
                <div class='content_e_b_a'>
                    <p>
                        <a href="<?php echo url('index/product',array('id'=>$Bshp['id'])); ?>">
                           <?php echo $Bshp['sname']; ?>,<?php echo $Bshp['introduce']; ?>
                        </a>
                    </p> 
                </div>
                <div class='content_e_b_b'>
                    <p>
                        <a href="">
                           ￥<?php echo $Bshp['price']; ?>
                        </a>
                    </p>
                </div>
                <div class='content_e_b_c'>
                    <p>
                        <a href="<?php echo url('index/product',array('id'=>$Bshp['id'])); ?>">
                            立即购买
                        </a>
                    </p>
                    
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
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
                         </div>
                     </div>
                 </a>
            </div>
        </div>
       
   </div>
</div>
</body>
<script>
       dobj=new Date();
       year=dobj.getFullYear();
       month=dobj.getMonth()+1;
       date=dobj.getDate();
       week=dobj.getDay();
       switch(week){
         case 0:
           $('.content_b_a_week').html('星期日');
           break;
         case 1:
            $('.content_b_a_week').html('星期一');
            break;
         case 2:
            $('.content_b_a_week').html('星期二');
            break;
          case 3:
             $('.content_b_a_week').html('星期三');
             break;
          case 4:
             $('#Gindex_week').html('星期四');
             break;
          case 5:
             $('.content_b_a_week').html('星期五');
             break; 
          case 6:
             $('.content_b_a_week').html('星期六');
             break;               
       }
       if(date<10){
        date='0'+date
       }
       yearMD=year+'/'+month+'/'+date;
       $('.content_b_a_yearMD').html(yearMD);
    

</script>
</html>