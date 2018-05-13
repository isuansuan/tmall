<?php 
namespace app\admin\controller;
use think\Controller;
class Prodimg extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('prodimg')->where('sname','like',"%$search%")->join('shop','prodimg.shop_id=shop.id')->field('prodimg.*,shop.sname')->paginate(8);
		$this->assign('data',$data);

		$page=$data->render();
		$this->assign('page',$page);

		$tot=db('prodimg')->count();
		$this->assign('tot',$tot);  
		return view();
	}
    // 删除
    public function del($id){
      $data=db('prodimg')->where('id',$id)->find();  
      $rst=unlink('./static/upload/prodimg/'.$data['img']);
      if($rst){
      	$etc=db('prodimg')->where('id',$id)->delete();
        if($etc){
        	$this->success('删除成功!',url('index'),'','1');
        }else{
        	$this->error('删除失败!',url('index'),'','1');
        }

      }else{
      	$this->error('图片删除失败!',url('index'),'','1');
      }		
    }
    public function add(){
            $data=db('shop')->select();
            $this->assign('data',$data);
            return view();
    }
    public function doUpload(){  
  
    $files = request()->file('image');
    $sid=input('post.shop_id');     
    $info="";  
    foreach($files as $picFile){  
  
        // 移动到框架应用根目录/public/uploads/ 目录下  
        $info = $picFile->move('./static/upload/prodimg');     
  
        /*获取存储路径，以便插入数据库*/  
       $path= "/uploads/images/".$info->getSaveName(); 
       $a=strpos($path,'/',9) ;
       $href=substr($path,$a+1);

       $arr=['img'=>$href,'shop_id'=>$sid];
    
       $rst=db('prodimg')->insert($arr);  
        
    }
    if($rst){
        $this->success('添加成功',url('index'),'','1');
    }else{
        $this->errot('添加失败',url('index'),'','1');
    }   
    }  
    public function edit($id){
        $data=db('shop')->select();
        $this->assign('data',$data);

        $prodimg=db('prodimg')->where('id',$id)->find();
        $this->assign('prodimg',$prodimg);
        return view();
    }
    public function Upload(){  
  
    $files = request()->file('image');
    $data=input('post.');
     $sid=input('post.shop_id');
    $info="";  
    foreach($files as $picFile){  
  
        // 移动到框架应用根目录/public/uploads/ 目录下  
        $info = $picFile->move('./static/upload/prodimg');     
  
        /*获取存储路径，以便插入数据库*/  
       $path= "/uploads/images/".$info->getSaveName(); 
       $a=strpos($path,'/',9) ;
       $href=substr($path,$a+1);

       $arr=['img'=>$href,'shop_id'=>$sid];
    
       $rst=db('prodimg')->where('id',$data['id'])->update($arr);  
        
    }
    if($rst){
        $this->success('添加成功',url('index'),'','1');
    }else{
        $this->errot('添加失败',url('index'),'','1');
    }   
    }


public function bindex(){
        $search=input('param.search');
        $data=db('prodbotimg')->where('sname','like',"%$search%")->join('shop','prodbotimg.shop_id=shop.id')->field('prodbotimg.*,shop.sname')->paginate(8);
        $this->assign('data',$data);

        $page=$data->render();
        $this->assign('page',$page);

        $tot=db('prodbotimg')->count();
        $this->assign('tot',$tot);  
        return view();
    }
    // 删除
    public function bdel($id){
      $data=db('prodbotimg')->where('id',$id)->find();  
      $rst=unlink('./static/upload/prodbotimg/'.$data['img']);
      if($rst){
        $etc=db('prodbotimg')->where('id',$id)->delete();
        if($etc){
            $this->success('删除成功!',url('bindex'),'','1');
        }else{
            $this->error('删除失败!',url('bindex'),'','1');
        }

      }else{
        $this->error('图片删除失败!',url('bindex'),'','1');
      }     
    }
    public function badd(){
            $data=db('shop')->select();
            $this->assign('data',$data);
            return view();
    }
    public function bdoUpload(){  
  
    $files = request()->file('image');
    $sid=input('post.shop_id');     
    $info="";  
    foreach($files as $picFile){  
  
        // 移动到框架应用根目录/public/uploads/ 目录下  
        $info = $picFile->move('./static/upload/prodbotimg');     
  
        /*获取存储路径，以便插入数据库*/  
       $path= "/uploads/images/".$info->getSaveName(); 
       $a=strpos($path,'/',9) ;
       $href=substr($path,$a+1);

       $arr=['img'=>$href,'shop_id'=>$sid];
    
       $rst=db('prodbotimg')->insert($arr);  
        
    }
    if($rst){
        $this->success('添加成功',url('bindex'),'','1');
    }else{
        $this->errot('添加失败',url('bindex'),'','1');
    }   
    }  
    public function bedit($id){
        $data=db('shop')->select();
        $this->assign('data',$data);

        $prodbotimg=db('prodbotimg')->where('id',$id)->find();
        $this->assign('prodbotimg',$prodbotimg);
        return view();
    }
    public function bUpload(){  
  
    $files = request()->file('image');
    $data=input('post.');
     $sid=input('post.shop_id');
    $info="";  
    foreach($files as $picFile){  
  
        // 移动到框架应用根目录/public/uploads/ 目录下  
        $info = $picFile->move('./static/upload/prodbotimg');     
  
        /*获取存储路径，以便插入数据库*/  
       $path= "/uploads/images/".$info->getSaveName(); 
       $a=strpos($path,'/',9) ;
       $href=substr($path,$a+1);

       $arr=['img'=>$href,'shop_id'=>$sid];
    
       $rst=db('prodbotimg')->where('id',$data['id'])->update($arr);  
        
    }
    if($rst){
        $this->success('添加成功',url('bindex'),'','1');
    }else{
        $this->errot('添加失败',url('bindex'),'','1');
    }   
    }  

    

    public function cindex(){
            $search=input('param.search');
            $data=db('prodcolor')->where('sname','like',"%$search%")->join('shop','prodcolor.shop_id=shop.id')->field('prodcolor.*,shop.sname')->paginate(8);
            $this->assign('data',$data);

            $page=$data->render();
            $this->assign('page',$page);

            $tot=db('prodcolor')->count();
            $this->assign('tot',$tot);  
            return view();
        }
        // 删除
        public function cdel($id){
          $data=db('prodcolor')->where('id',$id)->find();  
          $rst=unlink('./static/upload/prodcolor/'.$data['img']);
          if($rst){
            $etc=db('prodcolor')->where('id',$id)->delete();
            if($etc){
                $this->success('删除成功!',url('cindex'),'','1');
            }else{
                $this->error('删除失败!',url('cindex'),'','1');
            }

          }else{
            $this->error('图片删除失败!',url('cindex'),'','1');
          }     
        }
        public function cadd(){
                $data=db('shop')->select();
                $this->assign('data',$data);
                return view();
        }
        public function cdoUpload(){  
      
        $files = request()->file('image');
        $sid=input('post.shop_id');
        $color=input('post.color');  
        $neicun=input('post.neicun');   
        $info="";  
        foreach($files as $picFile){  
      
            // 移动到框架应用根目录/public/uploads/ 目录下  
            $info = $picFile->move('./static/upload/prodcolor');     
      
            /*获取存储路径，以便插入数据库*/  
           $path= "/uploads/images/".$info->getSaveName(); 
           $a=strpos($path,'/',9) ;
           $href=substr($path,$a+1);

           $arr=['img'=>$href,'shop_id'=>$sid,'color'=>$color,'neicun'=>$neicun];
        
           $rst=db('prodcolor')->insert($arr);  
            
        }
        if($rst){
            $this->success('添加成功',url('cindex'),'','1');
        }else{
            $this->errot('添加失败',url('cindex'),'','1');
        }   
        }  
        public function cedit($id){
            $data=db('shop')->select();
            $this->assign('data',$data);

            $prodbotimg=db('prodcolor')->where('id',$id)->find();
            $this->assign('prodbotimg',$prodbotimg);
            return view();
        }
        public function cUpload(){  
      
        $files = request()->file('image');
        $data=input('post.');
         $sid=input('post.shop_id');
         $color=input('post.color');
         $neicun=input('post.neicun');  
        $info="";  
        foreach($files as $picFile){  
      
            // 移动到框架应用根目录/public/uploads/ 目录下  
            $info = $picFile->move('./static/upload/prodcolor');     
      
            /*获取存储路径，以便插入数据库*/  
           $path= "/uploads/images/".$info->getSaveName(); 
           $a=strpos($path,'/',9) ;
           $href=substr($path,$a+1);

           $arr=['img'=>$href,'shop_id'=>$sid,'color'=>$color,'neicun'=>$neicun];
        
           $rst=db('prodcolor')->where('id',$data['id'])->update($arr);  
            
        }
        if($rst){
            $this->success('添加成功',url('cindex'),'','1');
        }else{
            $this->errot('添加失败',url('cindex'),'','1');
        }   
        }  



        public function dindex(){
          $data=db('prodtopimg')->join('brand','prodtopimg.brand_id=brand.id')->field('prodtopimg.*,brand.bname')->paginate(8);
          $this->assign('data',$data);

          $page=$data->render();
          $this->assign('page',$page);

          $tot=db('prodtopimg')->count();
          $this->assign('tot',$tot);
          return view();
        }
        public function ddel(){
          $id=input('param.id');
          $data=db('prodtopimg')->where('id',$id)->find();
          $rst=unlink('./static/upload/prodtopimg/'.$data['img']); 
            if($rst){
                 db('prodtopimg')->where('id',$id)->delete();
              $this->success('删除成功!',url('dindex'),'','1');
            }else{
              $this->error('删除失败!',url('dindex'),'','1');
            }
        }
        public function dadd(){
          if(request()->isPost()){
            $dat=input('post.');
            $rst=db('prodtopimg')->insert($dat);
            if($rst){
              $this->success('添加成功',url('prodimg/dindex'),'','1');
            }else{
              $this->error('添加失败',url('prodimg/dindex'),'','1');
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
          $info = $file->move('./static/upload/prodtopimg');
          if($info){
          // 成功上传后 获取上传信息
          // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
          echo $info->getSaveName();
          }else{
          // 上传失败获取错误信息
          echo $file->getError();
          }
        }
        public function dedit(){
          $id=input('param.id');

          $brand=db('brand')->select();
          $this->assign('brand',$brand);

          $data=db('prodtopimg')->where('id',$id)->find();
          $this->assign('data',$data);    
          return view();

        }
        public function dupdate(){
          $data=input('post.');
          if(!$data['img']){
            $data['img']=$data['oldimg'];
            unset($data['oldimg']);
          }else{
            unlink('./static/upload/prodtopimg/'.$data['oldimg']);
            unset($data['oldimg']);
          }
          $rst=db('prodtopimg')->where('id',$data['id'])->update($data);
          if($rst){
            $this->success('修改成功',url('dindex'),'','1');
          }else{
            $this->error('修改失败',url('dindex'),'','1');
          }
        }
}
  ?>