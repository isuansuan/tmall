<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\AppServ\www\tmall\public/../application/index\view\index\login.html";i:1523277832;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>理想生活上天猫--登录</title>
    <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/style.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/login.js'></script>
</head>
<style>
</style>
<body>
<div class='loginmain'>
   <div class="top">
       <a href="<?php echo url('index/index'); ?>">
           <img src="/static/public/img/logo1.png" alt="">
       </a>
       <div class='login_Tixing'>
         <p>
           为确保您账户的安全及正常使用，依《网络安全法》相关要求，6月1日起会员账户需绑定手机。如您还未绑定，请尽快完成，感谢您的理解及支持！
         </p>
       </div>
   </div>
   <div class='bottom'>
    <div class='bottom_a'>
      <div class='right'>
        <div class='right_top'>
            <div class='right_a' id='right_a'>
            
            </div>
            <div class='right_b'>
                
            </div>
            <div class='right_c' id='right_c'>
                <span>
                    密码登录
                </span>
            </div>
            <div class='login_saoma'>
                <span>手机扫码，安全登录</span>
            </div>
        </div> 
        <div class='right_bottom' id='right_bottom'>
            <form action="javascript:;" method='post'>
                <div class='right_bottom_a'>
                    <label for="">
                        <input type="text" name='username' placeholder='会员名/邮箱/手机号' onblur='loginuser(this)' class='logininputname' >
                    </label>
                    <span class='loginusername'><i>&times;</i> 用户名不存在!</span>   
                </div>
                <div class='right_bottom_b'>
                    <input type="password" name='password' placeholder='密码'
                    onblur='loginpass(this)' class='logininputpass' >
                    <span class='loginpassword'><i>&times;</i> 密码不正确!</span>  
                </div>
                <div class='right_bottom_c'>
                    <input type="submit" value="登录" class='loginsubmit'>
                </div>
            </form>
            <div class='login_content'>
                <a href="<?php echo url('index/register'); ?>">
                    免费注册
                </a>
                <a href="">
                    忘记会员名
                </a>
                <a href="">
                    忘记密码
                </a>
           </div>
        </div>
        <div class='login_erweima'>
            <div class='login_erweima1'>
                <img src="/static/public/img/2018-03-05_150717.png" alt="">
            </div>
            <div class='login_erweima2'>
                <a href="<?php echo url('index/login'); ?>">密码登录</a>
                <a href="<?php echo url('index/register'); ?>">免费注册</a>
            </div>
        </div>
      </div>  
    </div>

   </div>
   <div class='login_bottom'>
       <ul>
           <li>
               <a href="">关于我们</a>
               <span>|</span>
           </li>
            <li>
               <a href="">联系我们</a>
               <span>|</span>
           </li>
            <li>
               <a href="">人才招聘</a>
               <span>|</span>
           </li>
            <li>
               <a href="">商家入驻</a>
               <span>|</span>
           </li>
            <li>
               <a href="">广告服务</a>
               <span>|</span>
           </li>
            <li>
               <a href="">手机天猫</a>
               <span>|</span>
           </li>
            <li>
               <a href="">友情链接</a>
               <span>|</span>
           </li>
            <li>
               <a href="">销售联盟</a>
               <span>|</span>
           </li>
            <li>
               <a href="">天猫社区</a>
               <span>|</span>
           </li>
            <li>
               <a href="">天猫公益</a>
               <span>|</span>
           </li>
            <li>
               <a href="">English Site</a>
               <span></span>
           </li>
       </ul>
       <div class='login_bottomG'>
           <span>Copyright © 2004-2018  天猫TM.com 版权所有</span>
       </div>
   </div>
</div>
	
</body>
<script>
  function loginuser(obj){
     user=$(obj).val(); 
     $.post('<?php echo url("ajax_loginuser"); ?>',{username:user},function(data){
       if(data==1){
        $('.loginusername').hide();
        $('.logininputname').data({'s':1})
       }else{
        $('.loginusername').show();
        $(obj).val('');
        $('.logininputname').data({'s':0})
       }
     }); 
  }
  function loginpass(obj){
    user=$('.logininputname').val();
    pass=$(obj).val();
    $.post('<?php echo url("index/ajax_loginpass"); ?>',{password:pass,username:user},function(data){
      if(data==1){
        $('.logininputpass').data({'s':1})
       $('.loginpassword').hide();
      }else{
        $('.logininputpass').data({'s':0})
        $('.loginpassword').show();
        $(obj).val('');
        
      }
    });
  }
  $('.loginsubmit').click(function(){
   a=$('.logininputpass').data('s');
   b=$('.logininputname').data('s');
   c=a+b;
   if(c==2){
     $('form').attr({'action':'<?php echo url("index/login"); ?>'}).submit();
   }else{
    return false;
   }
  })
</script>

</html>