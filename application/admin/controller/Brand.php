<?php 
namespace app\admin\controller;
use think\Controller;
class Brand extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('brand')->where('bname','like',"%$search%")->paginate(5);
		$this->assign('data',$data);

		$page=$data->render();
		$this->assign('page',$page);

		$tot=db('brand')->count();
		$this->assign('tot',$tot);
		return view();
	}
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			$rst=db('brand')->insert($data);
			if($rst){
				$this->success('添加成功!',url('brand/index'),'','1');
			}else{
				$this->error('添加失败!',url('brand/index'),'','1');
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
		$info = $file->move('./static/upload/brand');
		if($info){
		// 成功上传后 获取上传信息
		// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		echo $info->getSaveName();
		}else{
		// 上传失败获取错误信息
		echo $file->getError();
		}
	}
     // 删除品牌
	public function del($id){
		$data=db('brand')->where('id',$id)->find();
		$rst=unlink('./static/upload/brand/'.$data['img']); 
        if($rst){
             db('brand')->where('id',$id)->delete();
        	$this->success('删除成功!',url('index'),'','1');
        }else{
        	$this->error('删除失败!',url('index'),'','1');
        }
		
	}

    // 删除
    public function brandbgdel($id){
      $data=db('brandbgimg')->where('id',$id)->find();
      $rst=unlink('./static/upload/brandbgimg/'.$data['img']);
      if($rst){
      	$etc=db('brandbgimg')->where('id',$id)->delete();
        if($etc){
        	$this->success('删除成功!',url('index'),'','1');
        }else{
        	$this->error('删除失败!',url('index'),'','1');
        }

      }else{
      	$this->error('图片删除失败!',url('index'),'','1');
      }		
    }
	public function edit($id){
		$data=db('brand')->where('id',$id)->find();
		$this->assign('data',$data);
		return view();
	}
	public function update(){
		$data=input('post.');
		if($data['img']){
			unlink('./static/upload/brand/'.$data['oldimg']);
			unset($data['oldimg']);	
		}else{
			$data['img']=$data['oldimg'];
			unset($data['oldimg']);
		}
		$rst=db('brand')->where('id',$data['id'])->update($data);
		if($rst){
			$this->success('修改成功!',url('index'),'','1');
		}else{
			$this->error('修改失败!',url('index'),'','1');
		}
		
	}
}
 ?>