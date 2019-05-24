<?php
namespace uni\model; //使用命名空间
use UNI\tools\Db;
class manage extends \uni{
    public function __construct(){ //构造方法
		
    }
	public function isLogin(){
		if(!getSession('admin_name') or !getSession('admin_id')){
			return $this->error('请登陆后访问',u('login','index'));
		}
	}
}


