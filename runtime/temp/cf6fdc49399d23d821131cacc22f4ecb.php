<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\AppServ\www\tmall\public/../application/index\view\person\xghead.html";i:1524020613;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>修改头像-淘宝网</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
  <link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/xghead.css">
  <link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
  <script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/xghead.js'></script>
   <script src="/static/up/jquery.uploadify.min.js" type="text/javascript"></script>
   <link rel="stylesheet" type="text/css" href="/static/up/uploadify.css">
</head>
<style>
  .uploadify-queue{
    display:none;
  }
  .uploadify-button{
    opacity:0;
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
                      <a href="">
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
    <div class='portrait_content'>
      <div class="portrait_contentLeft">
        <div class="portrait_contentLeftTop">
          <a href="">
            <img src="/static/upload/head/<?php echo $head['img']; ?>" alt="" class='topimg'>
          </a>
        </div>
        <div class="portrait_contentLeftBottom">
           <dl>
             <dt>账号管理</dt>
             <dd>
               <a href="">
                 安全设置
               </a>
             </dd>
             <dd class='portrait_contentLeftBottomA'>
               <a href="">
                 个人资料
               </a>
             </dd>
             <dd>
               <a href="">
                 个人成长信息
               </a>
             </dd>
             <dd>
               <a href="">
                 支付宝绑定设置
               </a>
             </dd>
             <dd>
               <a href="">
                 微博绑定设置
               </a>
             </dd>
             <dd>
               <a href="">
                 个人交易信息
               </a>
             </dd>
             <dd>
               <a href="">
                 收货地址
               </a>
             </dd>
             <dd>
               <a href="">
                 网站提醒
               </a>
             </dd>
             <dd>
               <a href="">
                 旺旺网页版设置
               </a>
             </dd>
             <dd>
               <a href="">
                 应用授权
               </a>
             </dd>
             <dd>
               <a href="">
                 分享绑定
               </a>
             </dd>
           </dl>
        </div>
      </div>
      <div class="portrait_contentRight">
        <div class="portrait_contentRightTop">
            <div class="portrait_contentRightTopOne">
               <span>
                 个人资料
               </span>
            </div>
        </div>
        <div class="portrait_contentRightTopTwo">
          <div class="portrait_contentRightTopThree">
            
          </div>
           <div class="portrait_contentRightTopFore">
             <a href="<?php echo url('person/portrait'); ?>">
               基本资料
             </a>
           </div>
           <div class="portrait_contentRightTopFive">
              <a href="<?php echo url('person/xghead'); ?>">
                头像照片
              </a>
           </div>
        </div>
        <div class='xgheadContent'>
          <div class='xgheadContTop'>
            
          </div>
          <form action="javascript:;">
          <div class='xgheadContTopA'>
            <div class='xgheadContTopAFile'>
              <!-- <input type="file" name="" id="" class='xgheadContTopAFileHead'> -->
               <input type="hidden" name="img" id='img'>
              <input id="file_upload" name="" type="file" multiple="true" style="opacity:0" value='' >
            </div>
            <p>仅支持JPG、GIF、PNG图片文件，且文件小于5M。</p>
          </div>
          <div class='xgheadContBottom'>
            <div class='xgheadContBottomLeft'>
              <img  src="/static/upload/head/<?php echo $head['img']; ?>" alt="" class='xgheadContBottomLeftImg '>
            </div>
            <div class='xgheadContBottomRight'>
              <div class='xgheadContBottomRightA'>
                <span>
                  您上传的头像会自动生成三种尺寸，请注意中小尺寸的头像是否清晰
                </span>
              </div>
              <div class='xgheadContBottomRightB'>
                <div class='xgheadContBottomRightC'>
                  <img src="/static/upload/head/<?php echo $head['img']; ?>" alt="" class='xgheadContBottomRightCImg '>
                </div>
                <p>
                  大尺寸头像,160&times;160 像素
                </p>
              </div>
              <div class='xgheadContBottomRightD'>
                <div class='xgheadContBottomRightE'>
                  <div class='xgheadContBottomRightF'>
                    <img src="/static/upload/head/<?php echo $head['img']; ?>" alt="" class='xgheadContBottomRightFImg '>
                  </div>
                  <p>
                    中尺寸头像60&times;60像素
                  </p>
                </div>
                <div class='xgheadContBottomRightG'>
                  <div class='xgheadContBottomRightH'>
                    <img src="/static/upload/head/<?php echo $head['img']; ?>" alt="" class='xgheadContBottomRightHImg '>
                  </div>
                  <p>
                    小尺寸头像30&times;30像素
                  </p>
                </div>
              </div>
            </div>
            <div class='clear'></div>
            <div class='xgheadContBottomSubmit'>
              <input type="submit" onclick='uphead()' value="保存">
            </div>
            </form>
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
</div>
</body>
<script>
$(function() {
  $('#file_upload').uploadify({
    
    'swf'      : '/static/up/uploadify.swf',
    'uploader' : '<?php echo url("ajax_upload"); ?>',
    'buttonText':'上传广告',
    'fileObjName':'file',
    onUploadSuccess:function(file,data,response){
      img="<img src='/static/upload/head/"+data+"' alt=''>"
      $('.xgheadContBottomRightC').html(img);
      $('.xgheadContBottomLeft').html(img);
      $('.xgheadContBottomRightF').html(img);
      $('.xgheadContBottomRightH').html(img);
      $('#img').val(data);
    }
  });
});
function uphead(){
  src=$('#img').val();
  if(src){
    $.post('<?php echo url("Person/ajax_head"); ?>',{src:src},function(data){
      if(data==1){
        $('.topimg').attr({'src':'/static/upload/head/'+src});
      }else{
        return false;
      }
    });
  }

}
</script>

</html>