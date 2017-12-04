<?php
namespace app\admin\model;
use think\Model;

class Role extends Model
{
	//定义多对多关联用户与角色多对多
	public function user()
	{
		return $this->belongsToMany('User','user_role','uid','role_id');
	}
	
}