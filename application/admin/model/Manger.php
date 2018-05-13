<?php 
namespace app\admin\model;
use think\Model;
class Manger extends Model{

	public function addM($arr){
		return $this->save($arr);
	}
	public function delM($id){
       return $this::destroy($id);
	}
}
 ?>