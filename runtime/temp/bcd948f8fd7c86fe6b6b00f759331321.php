<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\AppServ\www\tmall\public/../application/admin\view\index\index.html";i:1524463225;s:55:"C:\AppServ\www\tmall\application\admin\view\layout.html";i:1524455925;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>理想生活上天猫--后台</title>
	<link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/admin/public/css/admin.css">
	<script src='/static/bs/js/jquery.min.js'></script>
	<script src='/static/bs/js/bootstrap.min.js'></script>
	
</head>
<style>
.container-fluid{
	background: linear-gradient(<?php echo \think\Session::get('admintopcolor'); ?> 1%,<?php echo \think\Session::get('admincolor'); ?>);
}

.leftMin{
	background: linear-gradient(<?php echo \think\Session::get('admincolor'); ?> 1%,<?php echo \think\Session::get('admintopcolor'); ?>); ;
}
.dropdown-menu{
	min-width:127px;
}

ol, ul {
     margin-bottom: 0px; 
}
.IndexHOME{
	margin-left:30px;
}
</style>
<body>
	<div class='adminMin'>
		<div class='adminMinTop'>
			<div class="container-fluid">
				<nav class="navbar navbar-default primary">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				      </button>
				      <a class="navbar-brand IndexHOME" href="<?php echo url('admin/index/index'); ?>" style='margin-left:30px;font-size:18px;'>后台管理系统</a>
				    </div>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="#"></a></li>
				        <li><a href="#"></a></li>
				        <li>
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
				        </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				      	<li ><a href="#"><b><?php echo \think\Session::get('adminuser'); ?></b></a></li>
				      	<li class="dropdown">
				      	         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更换导航颜色 <span class="caret"></span></a>
				      	         <ul class="dropdown-menu">
				      	           <li><a href="javascript:;" onclick='chun()'>春风拂面</a></li>
				      	           <li><a href="javascript:;" onclick='xia()'>夏日浅滩</a></li>
				      	           <li><a href="javascript:;" onclick='qiu()'>秋风萧瑟</a></li>
				      	           <li><a href="javascript:;" onclick='dong()' >冬阳照耀</a></li>
				      	         </ul>
				      	       </li>
				        <li><a href="<?php echo url('Index/clear'); ?>"><span class="glyphicon glyphicon-refresh"></span>清除缓存</a></li>
				        <li class="dropdown">
				          <a href="<?php echo url('login/loginout'); ?>">退出系统</a>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
		<div class='adminMinLeft'>
			<div class='leftMin'>
				<div class='leftContent'>
					<div class='leftContentTitle' id='User'>
						<p>
							用户管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('user/select'); ?>" >
									<div>
										<i></i>
										<span>
											查看用户
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Manger'>
						<p>
							管理员管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Manger/select'); ?>">
									<div>
										<i></i>
										<span>
											查看管理员
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Lunbo'>
						<p>
							轮播管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('lunbo/index'); ?>">
									<div>
										<i></i>
										<span>
											查看轮播
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Advert'>
						<p>
							广告管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('advert/index'); ?>">
									<div>
										<i></i>
										<span>
											查看广告
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Brand'>
						<p>
							品牌管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Brand/index'); ?>">
									<div>
										<i></i>
										<span>
											查看品牌
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Brandbgimg'>
						<p>
							品牌右侧管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Brandbgimg/index'); ?>">
									<div>
										<i></i>
										<span>
											查看右侧品牌
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Brandsmimg'>
						<p>
							品牌左侧管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Brandsmimg/index'); ?>">
									<div>
										<i></i>
										<span>
											查看左侧品牌
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Shop'>
						<p>
							商品管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('shop/index'); ?>">
									<div>
										<i></i>
										<span>
											查看商品
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Prodimg'>
						<p>
							商品详情管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('prodimg/index'); ?>">
									<div>
										<i></i>
										<span>
											商品祥情左图
										</span>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo url('prodimg/bindex'); ?>">
									<div>
										<i></i>
										<span>
											商品祥情下图
										</span>
									</div>
								</a>
							</li>
                            <li>
                            	<a href="<?php echo url('prodimg/cindex'); ?>">
                            		<div>
                            			<i></i>
                            			<span>
                            				商品祥情机身颜色
                            			</span>
                            		</div>
                            	</a>
                            </li>
                            <li>
                            	<a href="<?php echo url('prodimg/dindex'); ?>">
                            		<div>
                            			<i></i>
                            			<span>
                            				商品祥情顶部图片
                            			</span>
                            		</div>
                            	</a>
                            </li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Status'>
						<p>
							订单状态管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Status/index'); ?>">
									<div>
										<i></i>
										<span>
											查看状态
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Dindan'>
						<p>
						 订单管理
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Dindan/index'); ?>">
									<div>
										<i></i>
										<span>
											查看订单
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Comment'>
						<p>
						 评论管理	
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Comment/index'); ?>">
									<div>
										<i></i>
										<span>
											查看评论
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle'id='Data'>
						<p>
							数据恢复
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('data/index'); ?>">
									<div>
										<i></i>
										<span>
											用户表数据恢复
										</span>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo url('data/manger'); ?>">
									<div>
										<i></i>
										<span>
											管理员数据恢复
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='Config'>
						<p>
							系统配置
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('Config/index'); ?>">
									<div>
										<i></i>
										<span>
											配置管理
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle' id='System'>
						<p>
							系统管理
						</p>
						<i></i>
					</div>
					<div class='leftContentHtml'>
						<ul>
							<li>
								<a href="<?php echo url('System/index'); ?>">
									<div>
										<i></i>
										<span>
											修改密码
										</span>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo url('Login/loginout'); ?>">
									<div>
										<i></i>
										<span>
											退出系统
										</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class='leftContent'>
					<div class='leftContentTitle'>

					</div>
				</div>
			</div>
		</div>
		<div class='adminMinRight'>
			<div class='rightContent'>
				
<link rel="stylesheet" type="text/css" href="/static/admin/public/css/simple-calendar.css">
<script type="text/javascript" src="/static/admin/public/js/simple-calendar.js"></script>
<!-- ...............日历js...................... -->
<style>
.loading{
	display:none;
}
.breadcrumb {
    margin-bottom:0px;
}
.yibiao{
	width:1100px;
	height:150px;
	margin-top:30px;
}
.yibiao .comment{
	width:237px;
	height:141px;
	border:1px solid #337ab7;
	float:left;
	border-radius:5px;
	overflow:hidden;
	background: #f5f5f5;
	margin-left:25px;
}
.yibiao .comment .comment_A{
	width:237px;
	height:97px;
	background: #337ab7;
}
.yibiao .comment .comment_A .comment_Aa{
	float:left;
}
.yibiao .comment .comment_A .comment_Ab{
	width:120px;
	height:97px;
	overflow:hidden;
	float:right;
	text-align:right;
}
.yibiao .comment .comment_A .comment_Ab p{
	color:#fff;
	font-size:24px;
	font-weight:700;
	margin-right:30px;
	margin-top:15px;
}
.yibiao .comment .comment_A .comment_Ab span{
	color:#fff;
	margin-right:20px;
	font-size:16px;
}
.yibiao .comment p  span{
	line-height:40px;
	margin-left:5px;
}
.yibiao .comment a{
	text-decoration:none;
}
.yibiao .comment p i{
	float:right;
}
.yibiao .order{
	width:237px;
	height:141px;
	border:1px solid #f0ad4e;
	float:left;
	margin-left:25px;
	border-radius:5px;
	overflow:hidden;
	background: #f5f5f5;
}
.yibiao .order .order_A{
	width:237px;
	height:97px;
	background: #f0ad4e;
}
.yibiao .order .order_A .order_Aa{
	float:left;
}
.yibiao .order .order_A .order_Ab{
	width:120px;
	height:97px;
	overflow:hidden;
	float:right;
	text-align:right;
}
.yibiao .order .order_A .order_Ab p{
	color:#fff;
	font-size:24px;
	font-weight:700;
	margin-right:30px;
	margin-top:15px;
}
.yibiao .order .order_A .order_Ab span{
	color:#fff;
	margin-right:20px;
	font-size:16px;
}
.yibiao .order p  span{
	line-height:40px;
	margin-left:5px;
}
.yibiao .order a{
	text-decoration:none;
	color:#f0ad4e;
}
.yibiao .order p i{
	float:right;
}
.yibiao .fangwen{
	width:237px;
	height:141px;
	border:1px solid #5cb85c;
	float:left;
	border-radius:5px;
	margin-left:25px;
	overflow:hidden;
	background: #f5f5f5;
}
.yibiao .fangwen .fangwen_A{
	width:237px;
	height:97px;
	background: #5cb85c;
}
.yibiao .fangwen .fangwen_A .fangwen_Aa{
	float:left;
}
.yibiao .fangwen .fangwen_A .fangwen_Ab{
	width:120px;
	height:97px;
	overflow:hidden;
	float:right;
	text-align:right;
}
.yibiao .fangwen .fangwen_A .fangwen_Ab p{
	color:#fff;
	font-size:24px;
	font-weight:700;
	margin-right:30px;
	margin-top:15px;
}
.yibiao .fangwen .fangwen_A .fangwen_Ab span{
	color:#fff;
	margin-right:20px;
	font-size:16px;
}
.yibiao .fangwen p  span{
	line-height:40px;
	margin-left:5px;
}
.yibiao .fangwen a{
	text-decoration:none;
	color:#5cb85c;
}
.yibiao .fangwen p i{
	float:right;
}
.yibiao .zhuce{
	width:237px;
	height:141px;
	border:1px solid #d9534f;
	float:left;
	border-radius:5px;
	margin-left:25px;
	overflow:hidden;
	background: #f5f5f5;
}
.yibiao .zhuce .zhuce_A{
	width:237px;
	height:97px;
	background: #d9534f;
}
.yibiao .zhuce .zhuce_A .zhuce_Aa{
	float:left;
}
.yibiao .zhuce .zhuce_A .zhuce_Ab{
	width:120px;
	height:97px;
	overflow:hidden;
	float:right;
	text-align:right;
}
.yibiao .zhuce .zhuce_A .zhuce_Ab p{
	color:#fff;
	font-size:24px;
	font-weight:700;
	margin-right:30px;
	margin-top:15px;
}
.yibiao .zhuce .zhuce_A .zhuce_Ab span{
	color:#fff;
	margin-right:20px;
	font-size:16px;
}
.yibiao .zhuce p  span{
	line-height:40px;
	margin-left:5px;
}
.yibiao .zhuce a{
	text-decoration:none;
	color:#d9534f;
}
.yibiao .zhuce p i{
	float:right;
}
.zuinew{
	width:1100px;
	height:350px;
	margin-top:30px;
}
.zuinew .zuinew_Left{
	width:500px;
	height:310px;
	border:1px solid #e5e5e5;
	margin-left:25px;
	float:left;
}
.zuinew .zuinew_Left .tabletr{
	display:inline-block;
	width:498px;
	height:40px;
	font-size:15px;
	background: #fafafa;
	line-height:40px;
	color:#888;
}
.table{
	font-size:14px;
}
.table tr th{
	font-size:13px;
}
.zuinew .zuinew_Right{
	width:500px;
	height:310px;
	border:1px solid #e5e5e5;
	margin-left:25px;
	float:left;
}
.zuinew .zuinew_Right table {
	text-align:center;
}
.zuinew .zuinew_Right .tabletr{
	display:inline-block;
	width:498px;
	height:40px;
	font-size:15px;
	background: #fafafa;
	line-height:40px;
	color:#888;
}
</style>
<div class="breadcrumb">
  <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
  <li><a href="" class='Index_Rili'>日历</a></li>
  <li class='openRili'><a href="javascript:;"  >打开日历</a></li>
  <li class='closeRili'><a href="javascript:;"  >关闭日历</a></li>
</div>
<div class='IndexContact'>
	<div class='yibiao'>
		<div class='comment'>
			<div class='comment_A'>
				<div class='comment_Aa' >
					<img src="/static/admin/public/img/2018-04-23_093914.png" alt="">
				</div>
				<div class='comment_Ab'>
					<p><?php echo $commenttot; ?></p>
					<span>今日评论!</span>
				</div>
			</div>
	     <a href="<?php echo url('Comment/index'); ?>">
	     	<p class='bottom'>
	     	<span>
	     		查看详情
	     	</span>
	     	<i><img src="/static/admin/public/img/2018-04-23_095653.png" alt=""></i>
	     </p>
	     </a>
		</div>
		<div class='order'>
			<div class='order_A'>
				<div class='order_Aa' >
					<img src="/static/admin/public/img/2018-04-23_093948.png" alt="">
				</div>
				<div class='order_Ab'>
					<p><?php echo $dindantot; ?></p>
					<span>今日订单!</span>
				</div>
			</div>
	     <a href="<?php echo url('Dindan/index'); ?>">
	     	<p class='bottom'>
	     	<span>
	     		查看详情
	     	</span>
	     	<i><img src="/static/admin/public/img/2018-04-23_100345.png" alt=""></i>
	     </p>
	     </a>
		</div>
		<div class='fangwen'>
			<div class='fangwen_A'>
				<div class='fangwen_Aa' >
					<img src="/static/admin/public/img/2018-04-23_094026.png" alt="">
				</div>
				<div class='fangwen_Ab'>
					<p><?php echo $fangwentot; ?></p>
					<span>今日访问!</span>
				</div>
			</div>
	     <a href="<?php echo url('User/select'); ?>">
	     	<p class='bottom'>
	     	<span>
	     		查看详情
	     	</span>
	     	<i><img src="/static/admin/public/img/2018-04-23_100757.png" alt=""></i>
	     </p>
	     </a>
		</div>
		<div class='zhuce'>
			<div class='zhuce_A'>
				<div class='zhuce_Aa' >
					<img src="/static/admin/public/img/2018-04-23_094058.png" alt="">
				</div>
				<div class='zhuce_Ab'>
					<p><?php echo $usertot; ?></p>
					<span>总注册用户!</span>
				</div>
			</div>
			  <a href="<?php echo url('User/select'); ?>">
			  	<p class='bottom'>
			  	<span>
			  		查看详情
			  	</span>
			  	<i><img src="/static/admin/public/img/2018-04-23_101440.png" alt=""></i>
			  </p>
			  </a>	
		</div>
	</div>
	<div class='zuinew'>
		<div class='zuinew_Left'>
			<table class="table table-striped">
			  <tr><span class='tabletr'>&nbsp;&nbsp;最新注册的5个用户</span></tr> 
			  <tr style='height:40px'>
			  	<th>用户名</th>
			  	<th>最后登录时间</th>
			  	<th>登录次数</th>
			  	<th>状态</th>
			  </tr>
			  <?php if(is_array($newusers) || $newusers instanceof \think\Collection || $newusers instanceof \think\Paginator): $i = 0; $__LIST__ = $newusers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newuser): $mod = ($i % 2 );++$i;?>
			  <tr style='height:40px'>
			  	<td><?php echo $newuser['username']; ?></td>
			  	<td><?php echo $newuser['lastlogin']; ?></td>
			  	<td><?php echo $newuser['num']; ?></td>
			  	<td>
			  		<?php if($newuser['status'] == '0'): ?>
			  		禁用
			  		<?php else: ?>
			  		正常
			  		<?php endif; ?>
			  	</td>
			  </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
		<div class='zuinew_Right'>
			<table class="table table-striped">
			  <tr><span class='tabletr'>&nbsp;&nbsp;最新的5条订单</span></tr>
			  <tr style='height:40px'>
			  	<th>用户</th>
			  	<th>订单号</th>
			  	<th>下单时间</th>
			  	<th>状态</th>
			  	<th>确认收货</th>
			  </tr>
			  <?php if(is_array($neworders) || $neworders instanceof \think\Collection || $neworders instanceof \think\Paginator): $i = 0; $__LIST__ = $neworders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$neworder): $mod = ($i % 2 );++$i;?>
			  <tr style='height:40px'>
			  	<td><?php echo $neworder['username']; ?></td>
			  	<td><?php echo $neworder['code']; ?></td>
			  	<td><?php echo $neworder['time']; ?></td>
			  	<td><?php echo $neworder['sname']; ?></td>
			  	<td>
			  		<?php if($neworder['affirm'] == '0'): ?>
			  		否
			  		<?php else: ?>
			  		是
			  		<?php endif; ?>
			  	</td>
			  </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div> 
</div>
<div class='IndexRili' style='display:none'>
	<div id='container'></div>
</div>
<!-- .................日历...................... -->
<script>
	var myCalendar = new SimpleCalendar('#container');
	// .....................
		dobj=new Date();
	    year=dobj.getFullYear();
	    month=dobj.getMonth()+1;
	    date=dobj.getDate();
	    hour=dobj.getHours();
	    minute=dobj.getMinutes();
	    second=dobj.getSeconds();
		time=year+'-'+month+'-'+date+'&nbsp; ' +hour+':'+minute;
		$('.TIME').html(time);
// ........................................................................
         $('.openRili').show();
         $('.closeRili').hide();
		$('.closeRili').click(function(){
			$('.IndexRili').hide(200);
			$('.IndexContact').show(800);
			$('.closeRili').hide();
			$('.openRili').show();
		})
		$('.openRili').click(function(){
			$('.IndexRili').show(800);
			$('.IndexContact').hide(200);
			$('.closeRili').show();
			$('.openRili').hide();
		})
</script>
			</div>
		</div>
	</div>	
</body>
<script>
	$('.leftContentHtml').hide();
	$('.leftContentTitle').click(function(){
		$('.leftContentHtml').hide();
		$(this).next().show();
		$('.leftContentTitle i').css({'background':'url("/static/admin/public/img/icon3.png") no-repeat'})
		$(this).children().eq(1).css({'background':'url("/static/admin/public/img/icon2.png") no-repeat'})
		$('.leftContentTitle p').css({'color':'#434343'});
		$(this).children().css({'color':'#3d89cb'});
	})
	$('#<?php echo \think\Request::instance()->controller(); ?>').click();
 
	$('.Quanping').click(function(){
		i=1;
		$.post('<?php echo url("Index/ajax_quan"); ?>',{i:i},function(data){
          if(data==1){
          	$('.adminMinTop').hide();
          	$('.adminMinLeft').hide();
          	$('.Quanping').hide();
          	$('.QuanpingOut').show();
          	$('.adminMinRight .rightContent').css({'width':'1349px'});
          }
		});
	})
	$(document).ready(function(){
		if("<?php echo \think\Session::get('status')==1; ?>"){
			$('.adminMinTop').hide();
			$('.adminMinLeft').hide();
			$('.Quanping').hide();
			$('.QuanpingOut').show();
			$('.adminMinRight .rightContent').css({'width':'1349px'});
		}
	})
	$('.QuanpingOut').click(function(){
		i=0;
		$.post('<?php echo url("Index/ajax_outquan"); ?>',{i:i},function(data){
	      if(data==1){
	      	$('.adminMinTop').show();
	      	$('.adminMinLeft').show();
	      	$('.Quanping').show();
	      	$('.adminMinRight .rightContent').css({'width':'1120px'});
	      	$('.QuanpingOut').hide();
	      }
		});
	})
	function chun(){

		color='#fff';
		topcolor='#84ff84';
		$.post('<?php echo url("Index/ajax_chun"); ?>',{color:color,topcolor:topcolor},function(data){
          if(data==1){
          	location.reload();
          }
		});
	}
	function qiu(){
		topcolor='#ffde85f2';
		color='#fff';
		$.post('<?php echo url("Index/ajax_qiu"); ?>',{color:color,topcolor:topcolor},function(data){
          if(data==1){
          	location.reload();
          }
		});
	}
	function xia(){
		topcolor='#1affff';
		color='#fff';
		$.post('<?php echo url("Index/ajax_xia"); ?>',{color:color,topcolor:topcolor},function(data){
          if(data==1){
          	location.reload();
          }
		});
	}
		function dong(){
			topcolor='#e7e7e7';
			color='#fff';
			$.post('<?php echo url("Index/ajax_dong"); ?>',{color:color,topcolor:topcolor},function(data){
	          if(data==1){
	          	location.reload();
	          }
			});
		}
</script>
</html>