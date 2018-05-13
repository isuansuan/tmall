<?php
namespace app\admin\controller;
use think\Controller;
class Advert extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('advert')->where('href','like',"%$search%")->paginate(8);
		$this->assign('data',$data);

		$page=$data->render();
		$this->assign('page',$page);

		$tot=db('advert')->count();
		$this->assign('tot',$tot);
		return view();
	}
	public function del(){
		$id=input('param.id');
		$data=db('advert')->where('id',$id)->find();
		$rst=unlink('./static/upload/advert/'.$data['img']); 
	    if($rst){
	         db('advert')->where('id',$id)->delete();
	    	$this->success('删除成功!',url('index'),'','1');
	    }else{
	    	$this->error('删除失败!',url('index'),'','1');
	    }
	}
	public function add(){
		if(request()->isPost()){
			$dat=input('post.');
			$rst=db('advert')->insert($dat);
			if($rst){
				$this->success('添加成功',url('advert/index'),'','1');
			}else{
				$this->error('添加失败',url('advert/index'),'','1');
			}
		}else{
			return view();
		}
		
	}

	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/advert');
		if($info){
		// 成功上传后 获取上传信息
		// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		echo $info->getSaveName();
		}else{
		// 上传失败获取错误信息
		echo $file->getError();
		}
	}
	// 排序
	public function ajax_sort(){
         $data=input('post.');
         $rst=db('advert')->where('id',$data['id'])->update(['sort'=>$data['sort']]);
         echo $rst;
	}
	public function edit(){
		$id=input('param.id');
		$data=db('advert')->where('id',$id)->find();
		$this->assign('data',$data);		
		return view();

	}
	public function update(){
		$data=input('post.');
		if(!$data['img']){
			$data['img']=$data['oldimg'];
			unset($data['oldimg']);
		}else{
			unlink('./static/upload/advert/'.$data['oldimg']);
			unset($data['oldimg']);
		}
		$rst=db('advert')->where('id',$data['id'])->update($data);
		if($rst){
			$this->success('修改成功',url('index'),'','1');
		}else{
			$this->error('修改失败',url('index'),'','1');
		}
	}
} 
 ?>