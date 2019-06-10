<?php
use UNI\tools\Db;
class listController extends uni{
	public function __init(){
		parent::__init();
	}
	public function index(){
		$url=explode("/",$_SERVER["REDIRECT_URL"]);
		if( isset($url[2]) and substr($url[2],-5)== '.html'){
			$url=substr($url[2],0,strlen($url[2])-5); 
		}else{
			$url=$url[2] ?? '';
		}
		if($url!=''){
			$temp=Db::name('cate')->where('en_name = ?',$url)->value('template');
		}
		$this->display($temp,true);
	}	
	
}