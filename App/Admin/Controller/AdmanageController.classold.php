<?php 
namespace Admin\Controller;
class AdmanageController extends ComController
{
	public function index()
	{

	}
	/*
	typemana:管理广告类型列表

	 */
	public function typemana()
	{
		$Ads_type = M("ads_type")->select();
		$this->assign("meta_title","广告类型列表");
		$this->assign("Ads_type",$Ads_type)->display("typemana");
	}
	public function addtype()
	{
		$this->display();
	}

	//修改广告类型
	public function edit()
	{
		if(!I('typename'))
		{
			$this->assign("meta_title","修改广告类型");
			$typenum = I("typenum");
			$user = M("ads_type")->where("typenum = $typenum")->find();
			$remark=$user['remark'];
			$typename=$user['typename'];
			$this->assign("typenum",$typenum);
			$this->assign("typename",$typename);
			$this->assign("remark",$remark);				
			$this->display("typeEdit");
		}
		else
		{
			$this->assign("meta_title","修改广告类型");			 
			$data['typenum'] = I("typenum");
			$data['typename'] = I("typename");
			$data['remark'] = I("remark");
			$user = M('ads_type')->data($data)->save();
			$this->success('修改成功！',U('typemana'));
		}
		
	}

	//删除广告类型
	public function del(){
		$typenum = I("typenum");
		$user = M('ads_type')->where("typenum = $typenum")->delete();
		$this->success("删除成功！",U('typemana'));
	}

	//新增广告类型
	public function addty(){
		if(!IS_POST){
			$this->assign("meta_title","新增广告类型");
			$this->display("addtype");
		}
		else{
			$data["typename"] = I("typename");
			$data["remark"] = I("remark");
			if($data['typename']=='')
			echo "<script>alert('类型名不能为空');window.location='add.html'</script>";
			else{
				if(M("ads_type")->add($data)) $this->success('添加成功',U('typemana'));
				else $this->error("添加失败",U('typemana'));
			}
		}
	}

	//查询广告列表
	public function adlist()
	{
		$date = date("Y-m-d");
		$ltdate['endtime']  = array('lt',$date);
		$ltdata['is_delete'] = 1;
		M("ads")->where($ltdate)->save($ltdata);
		$gtdate['endtime']  = array('gt',$date);
		$gtdata['is_delete'] = 0;
		M("ads")->where($gtdate)->save($gtdata);
		$Ads_list = M("ads")->select();
		$this->assign("meta_title","广告内容列表");
		$this->assign("list",$Ads_list)->display("adlist1.0");	
	}

	//审核通过
	public function adpass()
	{
		$adnum = I("adnum");
		$data["adverify"] = 1;
		$user = M('ads')->where("adnum = $adnum")->save($data);
		$Ads_list = M("ads")->select();
		$this->assign("meta_title","广告内容列表");
		$this->assign("list",$Ads_list)->display("adlist1.0");		
	}


	//审核未通过
	public function adnopass()
	{
		$adnum = I("adnum");
		$data["adverify"] = 2;
		$user = M('ads')->where("adnum = $adnum")->save($data);
		$Ads_list = M("ads")->select();
		$this->assign("meta_title","广告内容列表");
		$this->assign("list",$Ads_list)->display("adlist1.0");		
	}


	//查询我的广告
	public function myadlist()
	{
		$date = date("Y-m-d");
		$ltdate['endtime']  = array('lt',$date);
		$ltdata['is_delete'] = 1;
		M("ads")->where($ltdate)->save($ltdata);
		$gtdate['endtime']  = array('gt',$date);
		$gtdata['is_delete'] = 0;
		M("ads")->where($gtdate)->save($gtdata);
		$uid=$_SESSION["uid"];
		$Ads_mylist = M("ads")->where("uid=$uid")->select();
		$this->assign("meta_title","我的广告列表");
		$this->assign("list",$Ads_mylist)->display("Admanage/myadlist");	
	}

	//激活广告
	public function active()
	{
		$adnum = I("adnum");
		$data['starttime'] = I("starttime");
		$data['endtime'] = I("endtime");
		$data['is_submit']=1;
		$data['adverify']=0;
		$user = M('ads')->where("adnum = {$adnum}")->save($data);
		$this->success("激活成功！",U('myadlist'));
	}


	//通过地区查询广告下方的餐厅名称及id
	public function getHotelByArea()
	{
		$data["h_province"]=I('province');
		$data["h_city"]=I('city');
		$data["h_district"]=I('district');
		$m=M('hotel');
		$hotelname=$m->where($data)->field('id,h_name')->select();
		// dump($data["h_district"]);die;
		$this->ajaxReturn($hotelname);

	}

	//通过机构名称查询广告下方的餐厅名称及id
	public function getHotelByOrg()
	{
		$org_data['org_name'] = I('org_name');
		// $org_data['org_name'] = '必胜客集团';
		$org_id = M('org')->where($org_data)->getField('id');
		$data["org_id"]=$org_id;
		$m=M('hotel');
		$hotelname=$m->where($data)->field('id,h_name')->select();
		// dump($hotelname);die;
		$this->ajaxReturn($hotelname);
	}
	//选择机构
	public function getOrg(){
		$orgname=M('org')->getField('org_name',true);
		//dump($orgname);die;
		$this->ajaxReturn($orgname);

	}


	//添加广告
	public function add()
	{
		import("Org.Net.UploadFile"); 
        $upload = new \UploadFile(); 
        //设置上传文件大小 
        $upload->maxSize = 3292200; 
        //设置上传文件类型 
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
        // $upload->rootPath =__ROOT__;  
        //设置附件上传目录 
        $upload->savePath = C("IMAGES"); 
        //设置需要生成缩略图，仅对图像文件有效 
        // $upload->thumb = true; 
        // 设置引用图片类库包路径 
        // $upload->imageClassPath = '@.ORG.Image'; 
        //设置需要生成缩略图的文件后缀 
        // $upload->thumbPrefix = 'm_';  //缩略图 
        //设置缩略图最大宽度 
        // $upload->thumbMaxWidth = '400,200'; 
        //设置缩略图最大高度 
        // $upload->thumbMaxHeight = '400,200'; 
        //设置上传文件规则 
        $upload->saveRule = uniqid;
        //删除原图 
        // $upload->thumbRemoveOrigin = true; 
        // dump($upload);die;
        
		if(!IS_POST){
			$m=M('ads_type');
			$m2=M('org');
			$data=$m->select();
			$data2=$m2->where('id>0')->select();
			$this->assign('types',$data);
			$this->assign('org',$data2);
			$this->assign("meta_title","新增广告");
			$this->display("add");
		}
		else{
			if(!$upload->upload()){ 
	            //捕获上传异常 
	            $this->error($upload->getErrorMsg()); 
       		} 
        	else{ 
	            //取得成功上传的文件信息 
	            $uploadList = $upload->getUploadFileInfo(); 
	            import('ORG.Util.Image');
	            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址') 
	            //Image::water($uploadList[0]['savepath'].'m_'.$uploadList[0]['savename'], '/tp/Examples/File/Tpl/default/Public/Images/logo2.png');
	            $_POST['image'] = $uploadList[0]['savename']; 
        	} 
        // $baseurl = __ROOT__.C("IMAGES");
        // $imageUrl = substr($baseurl.$_POST['image'],1);
        $upUrl = substr(C("IMAGES"),1);
        // dump($upload);die;
        $imageUrl = __ROOT__.$upUrl.$_POST['image'];
        // dump($imageUrl);die;
        //$time = time();
		//$data = array("picture"=>$imageUrl,"edit_time"=>$time);
		// dump($data);die;
		//$id = array("id"=>$id);
		// dump($id);die;
		//$up = M('cookmenu')->where($id)->save($data);
		// dump($up);die;
		// dump($imageUrl);die;
    //     if ($up !== false) {
    //     	//更新版本信息
    //     	// $saveVersion = array("val"=>$time);
 			// // SaveConfig("SynVersion",$saveVersion);	//这里用的是菜单图片的上传函数，所以不用更新版本信息
 			// echo chenggong;
    //         // $this->success('上传图片成功！'); 
    //     } else { 
    //         $this->error('上传图片失败!'); 
    //     }
        	$data["uid"] = $_SESSION["uid"];
			$data["starttime"] = I("starttime");
			$data["endtime"] = I("endtime");
			$data["adname"] = I("adname");
			$data["adtext"] = I("adtext");
			$data["adremark"] = I("adremark");
			$data["adpic"] = $imageUrl;
			$data["adhref"] = I("adhref");
			$data["adtitle"] = I("adtitle");
			$data["adtype"] = I("adtype");
			$data["introduction"] = I("introduction");
			$data["activity"] = I("activity");
			$data["phone"] = I("phone");
			$data["vehicle"] = I("vehicle");
			$data["detail"] = I("detail");
			$data["edit_time"] = time();
			$data["is_submit"] =I("is_submit");
			$data["ad_hotel"]=I("storeHotelId");
			//SaveConfig("adVersion",array("val"=>$data["edit_time"]));
			if(M("ads")->add($data)) {
					if($data["is_submit"]==1)
						$this->success('提交成功！',U('myadlist'));
					else
						$this->success('保存成功！',U('myadlist'));
					// $this->success('提交成功',U('myadlist'));
					//$this->ajaxReturn('添加成功');
				}
			else 
				{
					$this->error("添加失败",U('add'));
				}
	}
} 
	

	//修改广告信息
	public function adsedit(){
	import("Org.Net.UploadFile"); 
        $upload = new \UploadFile(); 
        //设置上传文件大小 
        $upload->maxSize = 3292200; 
        //设置上传文件类型 
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
        // $upload->rootPath =__ROOT__;  
        //设置附件上传目录 
        $upload->savePath = C("IMAGES"); 
        //设置需要生成缩略图，仅对图像文件有效 
        // $upload->thumb = true; 
        // 设置引用图片类库包路径 
        // $upload->imageClassPath = '@.ORG.Image'; 
        //设置需要生成缩略图的文件后缀 
        // $upload->thumbPrefix = 'm_';  //缩略图 
        //设置缩略图最大宽度 
        // $upload->thumbMaxWidth = '400,200'; 
        //设置缩略图最大高度 
        // $upload->thumbMaxHeight = '400,200'; 
        //设置上传文件规则 
        $upload->saveRule = uniqid;
        //删除原图 
        // $upload->thumbRemoveOrigin = true; 
        // dump($upload);die;
		if(!$_POST['adname']){
			$this->assign("meta_title","修改广告内容");
			$adnum = I("adnum");
			$editlist = M("ads")->where("adnum = $adnum")->find();
			$m2=M('org');
			$data2=$m2->where('id>0')->select();
			// dump($editlist);die;
			$this->assign("list",$editlist);	
			$this->assign('org',$data2);
			$this->display("adsedit");
		}else{
			if(!$upload->upload()){ 
				// echo 111;die;
	            //捕获上传异常 
	            $this->error($upload->getErrorMsg()); 
       		} 
        	else{ 
	            //取得成功上传的文件信息 
	            $uploadList = $upload->getUploadFileInfo(); 
	            import('ORG.Util.Image');
	            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址') 
	            //Image::water($uploadList[0]['savepath'].'m_'.$uploadList[0]['savename'], '/tp/Examples/File/Tpl/default/Public/Images/logo2.png');
	            $savename = $uploadList[0]['savename']; 
        	} 
	        // $baseurl = __ROOT__.C("IMAGES");
	        // $imageUrl = substr($baseurl.$_POST['image'],1);
	        $upUrl = substr(C("IMAGES"),1);
	        // dump($upload);die;
	        $imageUrl = __ROOT__.$upUrl.$savename;
	        // dump($imageUrl);die;
	       // $time = time();
			//$data = array("picture"=>$imageUrl,"edit_time"=>$time);
			// dump($data);die;
			//$id = array("id"=>$id);
			// dump($id);die;
			//$up = M('cookmenu')->where($id)->save($data);
		// dump($up);die;
		// dump($imageUrl);die;
    //     if ($up !== false) {
    //     	//更新版本信息
    //     	// $saveVersion = array("val"=>$time);
 			// // SaveConfig("SynVersion",$saveVersion);	//这里用的是菜单图片的上传函数，所以不用更新版本信息
 			// echo chenggong;
    //         // $this->success('上传图片成功！'); 
    //     } else { 
    //         $this->error('上传图片失败!'); 
    //     }
			$this->assign("meta_title","修改广告内容");		
			$data['adnum'] = I("adnum");
			$data['adname'] = I("adname");
			$data['starttime'] = I("starttime");
			$data['endtime'] = I("endtime");
			$data['adtext'] = I("adtext");
			$data['adremark'] = I("adremark");
			$data["adpic"] = $imageUrl;
			$data['adhref'] = I("adhref");
			$data['adtitle'] = I("adtitle");
			$data['adtype'] = I("adtype");
			$data['adshowcount'] = I("adshowcount");
			$data["introduction"] = I("introduction");
			$data["activity"] = I("activity");
			$data["address"] = I("address");
			$data["phone"] = I("phone");
			$data["vehicle"] = I("vehicle");
			$data["detail"] = I("detail");
			$data["edit_time"] = time();
			$user = M('ads')->data($data)->save();
			$this->success('修改成功！',U('adlist'));
		}
		
	}

	//删除广告信息
	public function adsdel()
	{
		$adnum = I("adnum");
		$user = M('ads')->where("adnum = $adnum")->delete();
		$this->success("删除成功！",U('myadlist'));
	}
}
 ?>
