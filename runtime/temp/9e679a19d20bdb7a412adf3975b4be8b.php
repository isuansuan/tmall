<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\AppServ\www\tmall\public/../application/admin\view\login\index.html";i:1523513323;}*/ ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>天猫后台</title>
	<link rel="stylesheet" href="/static/admin/public/css/style.css">
	<script src='/static/bs/js/jquery.min.js'></script>
</head>
<style>
.baohan{
	width:505px;
	height:80px;
}
.baohan .yzuser{
	color:#ff0036;
	font-size:14px;
	float:right;
	display:none;
}
.baohan .yzuser i{
	display:inline-block;
	width:12px;
	height:12px;
	background: #ff0036;
	color:#fff;
	text-align:center;
	line-height:12px;
	font-style:normal;
	border-radius:6px;

}
.baohan .yzpass{
	color:#ff0036;
	font-size:14px;
	float:right;
	display:none;
}
.baohan .yzpass i{
	display:inline-block;
	width:12px;
	height:12px;
	background: #ff0036;
	color:#fff;
	text-align:center;
	line-height:12px;
	font-style:normal;
	border-radius:6px;

}
</style>
<body>
	<div class='LoginMin'>
		<div class='Login_Content'>
			<div class='Login_ContentTop'>
				<img src="/static/admin/public/img/logo1.png" alt="">
			</div>
			<div class='Login_ContentBottom'>
				
			</div>
			<div class='Login_ContentBottomCont'>
				<div class='Login_Go'>
					<div class='Login_GoBottom'>
						<div class='Login_GoBottomA'>
							<form action="<?php echo url('index'); ?>" method='post'>
								<div class='baohan'>
									<div class='Login_formgroup'>
										<input type="text" name="username" id="" onblur='loginuser(this)' placeholder='用户名' class='login_user'>
									</div>
									<span class='yzuser'><i>&times;</i>&nbsp;用户名不存在!</span>
								</div>
								<div class='baohan'>
									<div class='Login_formgroup'>
										<input type="password" name="password" id="" onkeyup='loginpass(this)' placeholder='密码' class='login_pass'>
									</div>
									<span class='yzpass'><i>&times;</i>&nbsp;密码错误!</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	function loginuser(obj){
        user=$(obj).val();
        $.post('<?php echo url("ajax_user"); ?>',{user:user},function(data){
          if(data==1){
          	$('.login_user').attr({'s':1});
          	$('.yzuser').hide();
          }else{
          	$('.login_user').attr({'s':0});
          	$('.yzuser').show();
          }
        });
	}
	function loginpass(obj){
       pass=$(obj).val();
       user=$('.login_user').val();
       	$.post('<?php echo url("ajax_pass"); ?>',{pass:pass,user:user},function(data){
       		if(data==1){
       		$('.yzpass').hide();
             $('form').submit();
       		}else{
              $('.yzpass').show();
       		}

       	});
	}
$(window).load(function(){
	$('.Login_Go').show(800);
})	
</script>
</html>