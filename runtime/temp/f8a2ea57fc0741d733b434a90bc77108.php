<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\AppServ\www\tmall\public/../application/index\view\person\user.html";i:1523689390;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>添加联系人 -淘宝网</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
  <link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
    <link rel="stylesheet" href="/static/public/css/user.css">
  <link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
  <script src='/static/bs/js/jquery.min.js'></script>
   <script src='/static/public/js/user.js'></script>
   <script src='/static/public/js/area.js'></script>
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
                      <a href="<?php echo url('person/user'); ?>">
                        收货地址
                      </a>
                    </dd>
                    <dd>
                      <a href="<?php echo url('person/portrait'); ?>">
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
      <div class='user_content'>
        <div class='user_left'>
          <div class='user_left_A'>
            <a href="">
              <img src="/static/public/img/TB1yeWeIFXXXXXx160.jpg" alt="">
            </a>
          </div>
          <div class='user_left_B'>
            <dl>
              <dt>账号管理</dt>
              <dd>
                <a href="">安全设置</a>
              </dd>
              <dd>
                <a href="">个人资料</a>
              </dd>
              <dd>
                <a href="">个人成长信息</a>
              </dd>
              <dd>
                <a href="">支付宝绑定设置</a>
              </dd>
              <dd>
                <a href="">微博绑定设置</a>
              </dd>
              <dd>
                <a href="">个人交易信息</a>
              </dd>
              <dd>
                <a href="">收货地址</a>
              </dd>
              <dd>
                <a href="">网站提醒</a>
              </dd>
              <dd>
                <a href="">旺旺网页版设置</a>
              </dd>
              <dd>
                <a href="">应用授权</a>
              </dd>
              <dd>
                <a href="">分享绑定</a>
              </dd>
            </dl>
          </div>
        </div>
        <div class='user_right'>
          <div class='user_right_A'>
            <p>
              <span>收货地址</span>
            </p>
          </div>
          <div class='user_right_B'>
            <span>
              新增收货地址　
            </span>
            <span>
              电话号码、手机号选填一项, 其余均为必填项
            </span>
          </div>
          <form action="" onsubmit='return false' id='addForm'>
            <div class='user_right_city'>
              <span>所在地区</span>
              <div class='user_right_cityA'>
                <select id="s_province" name="s_province" class="portrait_contentRightJuB" value=''>
                </select>
                <select id="s_city" name="s_city"  class="portrait_contentRightJuC" value=''>
                </select>
                <select id="s_county" name="s_county" class="portrait_contentRightJuD" value=''>
                </select>
              </div>
            </div>
            <div class='user_right_C'>
              <span>收货地址</span>
               <textarea name="addr" id="" placeholder='建议您如实填写收货地址，例如街道信息，门牌号码，楼层和房间号等信息'></textarea>
            </div>
            <div class='user_right_D'>
              <span>邮政编码</span>
              <input type="text" name='noun' placeholder='如您不清楚邮递区号，请填写000000'>
            </div>
            <div class='user_right_E'>
              <span>收货人姓名</span>
              <input type="text" name='cname' placeholder='长多不超过15个字符'>
            </div>
            <div class='user_right_F'>
              <span>手机号码</span>
              <select name="" id="">
                <option value="">中国大陆+86</option>
                <option value="">香港+852</option>
                <option value="">澳门+853</option>
                <option value="">台湾+886</option>
              </select>
              <input type="text" name='tel' placeholder='电话号码，手机号码必须填写一项'>
            </div>
            <div class='user_right_G'>
              <span>电话号码</span>
              <select name="" id="">
                <option value="">中国大陆+86</option>
                <option value="">香港+852</option>
                <option value="">澳门+853</option>
                <option value="">台湾+886</option>
              </select>
              <input type="text" placeholder='区号'>-
              <input type="text" placeholder='电话号码'>-
              <input type="text" placeholder='分机'>
            </div>
            <input type="hidden" name="user_id" value='<?php echo \think\Session::get('homeid'); ?>'>
            <div class='user_right_H'>
              <input type="checkbox" name="" id=""><span>设置为默认收货地址</span>
            </div>
            <div class='user_right_I'>
              <input type="submit" onclick='useradd()' value="保存">
            </div>
          </form>
          <div class='user_right_J'>
            <div class='user_right_J_a'>
              <p>
                <span>已保存了<?php echo $tot; ?>条地址</span>
              </p>
            </div>
            <table style='text-align:center'>
              <tr>
                <th>收货人</th>
                <th>收货地址</th>
                <th>邮编</th>
                <th>电话/手机</th>
                <th>操作</th>
              </tr>
              <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
              <tr>
                <td>
                  <?php echo $dat['cname']; ?>
                </td>
                <td>
                  <?php echo $dat['s_province']; ?><?php echo $dat['s_city']; ?><?php echo $dat['s_county']; ?><?php echo $dat['addr']; ?>
                </td>
                <td>
                  <?php echo $dat['noun']; ?>
                </td>
                <td>
                  <?php echo $dat['tel']; ?>
                </td>
                <td>
                  <p>
                    <a href="javascript:;" onclick='userdel(<?php echo $dat['id']; ?>,this)'>删除</a>
                  </p>
                </td>
              </tr>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              <!-- <tr>
                <th>收货人</th>
                <th>收货地址</th>
                <th>邮编</th>
                <th>电话/手机</th>
                <th>操作</th>
              </tr>
              <tr>
                <td>
                  张三
                </td>
                <td>
                  设置为默认收货地址设置为默认收货地址
                </td>
                <td>
                  041000
                </td>
                <td>
                  273128439423
                </td>
                <td>
                  <p>
                    <a href="">修改</a>
                    <span>|</span>
                    <a href="">删除</a>
                  </p>
                </td>
              </tr> -->
              
            </table>
          </div>
        </div>
        <div class='clear'></div>
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
function useradd(){
  str=$('#addForm').serialize();
  $.post('<?php echo url("Person/ajax_useradd"); ?>',{str:str},function(data){
    if(data){
      $('.user_right_J table').append(data);
    }
  });
}
function userdel(id,obj){
  $.post('<?php echo url("Person/ajax_userdel"); ?>',{id:id},function(data){
    if(data==1){
      $(obj).parent().parent().parent().remove();
    }else{
      return false;
    }
  });   
}
 _init_area();
</script>

</html>