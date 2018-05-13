<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\AppServ\www\tmall\public/../application/admin\view\brand\edit.html";i:1522409702;s:55:"C:\AppServ\www\tmall\application\admin\view\layout.html";i:1524455925;}*/ ?>
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
				
<script src="/static/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/static/up/uploadify.css">
<div class="breadcrumb">
  <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
  <li><a href="">品牌管理</a></li>
  <li><a href="">修改品牌</a></li>
  <li class="pull-right"><a href=""><span class="glyphicon glyphicon-refresh"></span></a></li>
</div>
  <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">修改品牌</h4>
  </div>
  <div class="modal-body">
    <form action='<?php echo url('brand/update'); ?>' id='' enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="exampleInputPassword1">品牌名称</label>
	    <input type="text" class="form-control" name='bname' value='<?php echo $data['bname']; ?>'>
	  </div>
    <div class="form-group">
      <label for="exampleInputEmail1">原图</label>
      <input type="hidden" name="oldimg" id='oldimg' value='<?php echo $data['img']; ?>'>
      <input type="hidden" name="id" value='<?php echo $data['id']; ?>'>
      <div style='width:163px;height:123px;border:1px solid #ccc'>
        <img src="/static/upload/brand/<?php echo $data['img']; ?>" alt="">
      </div>
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">图片</label>
        <input type="hidden" name="img" id='img'>
        <input id="file_upload" name="" type="file" multiple="true">
        <div id="queue" style='width:163px;height:123px;border:1px solid #ccc'></div>
      </div>
      <button type="submit" class="btn btn-danger">提交</button>
      <button type="reset" class="btn btn-info">重置</button>
    </form>
  </div>
  <div class="modal-footer">

</div>
<script>
  $(function() {
    $('#file_upload').uploadify({
      
      'swf'      : '/static/up/uploadify.swf',
      'uploader' : '<?php echo url("ajax_upload"); ?>',
      'buttonText':'上传品牌图',
      'fileObjName':'file',
      onUploadSuccess:function(file,data,response){
        img="<img src='/static/upload/brand/"+data+"' alt='' width='163px' height='123px'>"
        $('#queue').html(img);
        $('#img').val(data);
      }
    });
  });
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