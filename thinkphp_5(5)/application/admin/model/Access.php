<?php
namespace app\admin\model;
use think\Model;

class Access extends Model
{
	public function role()
	{
		return $this->belongsToMany('Role','\\app\\model\\Role_access','role_id','access_id');
	}
	
}