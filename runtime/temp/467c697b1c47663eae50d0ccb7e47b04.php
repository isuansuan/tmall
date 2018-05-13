<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"C:\AppServ\www\tmall\public/../application/admin\view\prodimg\badd.html";i:1522723331;s:55:"C:\AppServ\www\tmall\application\admin\view\layout.html";i:1524455925;}*/ ?>
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
				
<style>  
  
       /*表单标签*/  
       #box{  
           margin:20px auto;  
           width:1100px;  
           padding-bottom: 10px;  
           min-height:550px;  
           background:#FFd;  
       }  
  
       /*点击添加图片按钮div包裹*/  
       .addbtn_wrap{  
           position: relative;  
       }  
  
       /*添加图片按钮*/  
       .addbtn{  
           position: absolute;  
       }  
       input[type=file]{  
           width: 100px;  
           position: absolute;  
           top: 5px;  
           opacity: 0;  
       }  
  
       /*提交按钮*/  
       input[type=submit]{  
           margin: 0 auto;  
           display: none;  
       }  
  
       /*所有图片div包裹*/  
       .img_wrap{  
           width:600px;  
           margin-top: 40px;  
           float: left;  
           margin-bottom: 40px;  
       }  
  
  
       .pic_wrap{  
           width: 180px;  
           height: 160px;  
           float: left;  
           position: relative;  
           margin: 5px;  
       }  
  
  
       .img{  
           width: 180px;  
           height: 160px;  
          float: left;  
       }  
  
       .delete{  
           width: 180px;  
           height: 160px;  
           position: absolute;  
           display: none;  
           border-radius: 6px;  
       }  
  
       .delete img{  
           float: right;  
       }  
  
   </style>  
   <script src='/static/up/moreimgup.js'></script>
<form  method="post" enctype="multipart/form-data" action="<?php echo url('bdoUpload'); ?>"  id="box">  
	 <div class="form-group">
        <label for="exampleInputPassword1">所属品牌</label>
        <select class="form-control"  name='shop_id'>
          <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
          <option value='<?php echo $dat['id']; ?>'><?php echo $dat['sname']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
      </div>
  
    <!--file包裹-->  
    <div class="addbtn_wrap">  
        <input type="button" class="btn btn-primary addbtn" value="点击添加图片">  
        <input type="file" name="image[]" id="file1" style="z-index: 1" onchange="getPhoto(this)" multiple>  
    </div>  
  
  
    <!--图片包裹-->  
    <div class="img_wrap">  
  
    </div>  
  
    <input type="submit" value="开始上传" class=" btn btn-primary ">  
  
  
</form> 
<script type="text/javascript">  
  
  
  
  
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