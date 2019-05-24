<?php
use UNI\tools\Db;
class adpositionController extends uni{
	//前置操作
	public function __init(){
		parent::__init();
		model('manage')->isLogin(); //自动执行 构造方法
	}
	
	
	public function index()
    {
	  if(UNi_POST){
		  $res=Db::name('adposition')->where('adpositionname like ?', '%'.$_POST['key'].'%')->order('sort asc')->getall();
		  $this->datasort=$this->sort($res);
	  }else{
		  
		  $this->data=Db::name('adposition')->paginate(9)->fields();
		  


		  
	  }
	  $this->count=Db::name('adposition')->count();
	  $this->display();
    }
	
	public function add()
    {
    	if(UNi_POST){
			//表单验证
			$checkRules = [
					'adpositionname'  => ['string', '2,10', '栏目名称为 2 - 10 字符'],
					'en_name' =>['must', '', '英文名称必须填写'],
				];
				$checker = new UNI\tools\dataChecker($_POST, $checkRules);
				$res = $checker->check();
			if(!$res){
				$this->error($checker->error);	
			}
			
			$info=Db::name('adposition')->add($_POST);
			if($info){
				//echo '<script>alert("你好，添加成功了！");parent.location.reload()</script>';
				$this->success('添加成功',2);
			}else{
				$this->error($checker->error);
			}
    	}
	  $res=Db::name('adposition')->getall();
	  $this->datasort=$this->sort($res);
      $this->display();
    }
    
	public function edit()
    {
	if(UNi_POST){
		//表单验证
		$checkRules = [
                'adpositionname'  => ['string', '2,10', '栏目名称为 2 - 10 字符'],
				'en_name' =>['must', '', '英文名称必须填写'],
            ];
            $checker = new UNI\tools\dataChecker($_POST, $checkRules);
            $res = $checker->check();
		if(!$res){
			$this->error($checker->error);	
		}

		$info=Db::name('adposition')->where('id = ?',$_POST['id'])->update($_POST);
		if($info){
			//echo '<script>alert("你好，添加成功了！");parent.location.reload()</script>';
			$this->success('修改成功',2);
		}else{
			$this->error($checker->error);
		}
    }

	$this->data=Db::name('adposition')->where('id = ?', $this->gets[0])->get();
	$res=Db::name('adposition')->getall();
	$this->datasort=$this->sort($res);
      $this->display();
    }
	public function ajax()
    {
		
		if($_POST['type']=='adposition_sort'){
			$arrlength=count($_POST['id']);
			$ar=[];
			for($x=0;$x<$arrlength;$x++)
			{
				$ar[$x]=['id'=>$_POST['id'][$x], 'sort'=>$_POST['sort'][$x]];
			}
			foreach($ar as $k=>$v){
				Db::name('adposition')->where('id = ?',$v['id'])->update($v);
			}
			json(1);
		}
		if($_POST['type']=='adposition_del'){
			if(Db::name('adposition')->where('fid = ?',$_POST['id'])->get()){
				json(2); //下级有东西不能删除
			}else{
				if(Db::name('adposition')->where('id = ?',$_POST['id'])->del()){
					json(1);//修改成功返回1
				}else{
					json(0);
				}
			}
		}
		json(0);
    }
	
	
	 public function index1()
    {
    	$adposition=new Adpositionmodel();
    	if(request()->isPost()){
    		$data=input('key');
    		$adposition=Db::table('lizhili_adposition')
			->alias('a')
			->join('lizhili_category c','a.category_id = c.id','LEFT')
			->order('a.sort asc,a.id desc')
			->where('iscate',1)
			->where('a.ad_title','like','%'.$data.'%')
			->field('a.*,c.catename')
			->paginate(8);
    	}else{
    		$adposition=Db::table('lizhili_adposition')
			->alias('a')
			->join('lizhili_category c','a.category_id = c.id','LEFT')
			->order('a.sort asc,a.id desc')
			->where('iscate',1)
			->field('a.*,c.catename')
			->paginate(8);
    	}
		$this->assign('adposition',$adposition);
		$count1=db('adposition')->where('iscate',1)->count();
		$this->assign('count1', $count1);
       	return $this->fetch();
    }
	public function ajax1()
    {
    	$data=input('param.');
		$adposition=new Adpositionmodel();
		if($data['type']=='adposition_del'){
			$id=$data['id'];
			$info=$adposition->destroy($id);
			
			if($info){
				return 1;//修改成功返回1
			}else{
				return 0;
			}

		}
		if($data['type']=='adposition_sort'){
			$arrlength=count($data['id']);
			$ar=[];
			for($x=0;$x<$arrlength;$x++)
			{
			    $ar[$x]=['id'=>$data['id'][$x], 'sort'=>$data['sort'][$x]];
			}
			$info=$adposition->saveAll($ar);
			if($info){
				return 1;//修改成功返回1
			}else{
				return 0;
			}

		}
		
		if($data['type']=='adposition_start'){
			if(db('adposition')->where('id',$data['id'])->setField('isopen',1)){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
       	if($data['type']=='adposition_stop'){
			if(db('adposition')->where('id',$data['id'])->setField('isopen',0)){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
		return 0;
    }
	public function add1()
    {
    	if(request()->isPost()){
			$data=input('post.');
			
			$validate = Loader::validate('Adposition');
			if(!$validate->check($data)){
				$this->error($validate->getError());
			}	
			$file = request()->file('pic');
			if($file){
				$info = $file->move(ROOT_PATH . 'public' . DS . 'ad');
				$data['pic']='/ad/'.$info->getSaveName();
			}
			if(!isset($data['isopen'])){
				$data['isopen']=0;
			}else{
				$data['isopen']=1;
			}
			$adposition=new Adpositionmodel();
			$adposition->data($data);
			$res=$adposition->allowField(true)->save();
			if($res){
				return $this->success('添加成功',url('adposition/index',['st'=>1]));
			}else{
				$this->error('广告位添加失败了');
			}
    	}
    	$CategoryRes=Db::name('category')->where('fid',0)->select();
    	$this->assign('CategoryRes', $CategoryRes);
       return $this->fetch();
    }
	public function edit1()
    {
    	$adposition = new Adpositionmodel();
    	if(request()->isPost()){
    		$data=input('post.');
			$validate = Loader::validate('Adposition');
			if(!$validate->check($data)){
				$this->error($validate->getError());
			}	
			if(!isset($data['isopen'])){
				$data['isopen']=0;
			}else{
				$data['isopen']=1;
			}
			$file = request()->file('pic');
			if($file){
				$info = $file->move(ROOT_PATH . 'public' . DS . 'ad');
				$data['pic']='/ad/'.$info->getSaveName();
			}
			
			$res=$adposition->allowField(true)->save($data,['id' => input('id')]);
			
			if($res){
				return $this->success('修改成功',url('adposition/index',['st'=>1]));
			}else{
				$this->error('广告位修改失败了');
			}
    	}
		$CategoryRes=Db::name('category')->where('fid',0)->select();
    	$this->assign('CategoryRes', $CategoryRes);
		$id=input('id');
		$data= $adposition->get($id);
		$this->assign('data',$data);
       return $this->fetch();
    }
	
	
}