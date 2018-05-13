<?php 
namespace app\admin\validate;
use think\Validate;
class User extends Validate{
	// 验证规则
     protected $rule=[
     'username'=>'require|unique:user|min:3',
     'password'=>'require|min:5',

     ];
	// 提示消息
    protected $message=[
    'username.require'=>'用户名不能为空!',
    'username.unique'=>'用户名以存在!',
    'username.min'=>'用户名必最少3位!',
    'password.require'=>'密码不能为空!',
    'password.min'=>'密码最少5位!',
    ];
	// 场景
	protected $scene=[
	'edit'=>['username','password'],
	'add'=>['username','password']
	];
}
 ?>