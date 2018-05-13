<?php 
namespace app\admin\controller;
use think\Controller;
class Shop extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('shop')->where('sname','like',"%$search%")->join('brand','shop.brand_id=brand.id')->field('shop.*,brand.bname')->paginate(15);
		$this->assign('data',$data);
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('shop')->count();
		$this->assign('tot',$tot);

		return view();
	}
    public function add(){
    	if(request()->isPost()){
    		$data=input('post.');
    		$rst=db('shop')->insert($data);	
    		if($rst){
    			$this->success('添加成功!',url('index'),'','1');
    		}else{
    			$this->error('添加失败!',url('index'),'','1');
    		}

    	}else{
    		$data=db('brand')->select();
    		$this->assign('data',$data);
    		return view();
    	}
    	
    }
    // 图片上传
    public function ajax_upload(){
    	// 获取表单上传文件 例如上传了001.jpg
    	$file = request()->file('file');
    	// 移动到框架应用根目录/public/uploads/ 目录下
    	$info = $file->move('./static/upload/shop');
    	if($info){
    	// 成功上传后 获取上传信息
    	// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
    	echo $info->getSaveName();
    	}else{
    	// 上传失败获取错误信息
    	echo $file->getError();
    	}
    }
    // 删除
    public function del($id){
      $data=db('shop')->where('id',$id)->find();
      $rst=unlink('./static/upload/shop/'.$data['img']);
      if($rst){
      	$etc=db('shop')->where('id',$id)->delete();
        if($etc){
        	$this->success('删除成功!',url('index'),'','1');
        }else{
        	$this->error('删除失败!',url('index'),'','1');
        }

      }else{
      	$this->error('图片删除失败!',url('index'),'','1');
      }		
    }
    
    // 修改
    public function edit($id){
        $data=db('shop')->where('id',$id)->find();
        $this->assign('data',$data);
        $brand=db('brand')->select();
        $this->assign('brand',$brand);
        return view();
    }
    public function update(){
    	$data=input('post.');
    	if($data['img']){
    		unlink('./static/upload/shop/'.$data['oldimg']);
    		unset($data['oldimg']);
    	}else{
    		$data['img']=$data['oldimg'];
    		unset($data['oldimg']);
    	}
    	$rst=db('shop')->where('id',$data['id'])->update($data);
    	if($rst){
    		$this->success('修改成功!',url('index'),'','1');
    	}else{
    		$this->error('修改失败!',url('index'),'','1');
    	}
    	
    }
}
 ?>