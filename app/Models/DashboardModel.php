<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model{

	protected $DBGroup = "default";
    protected $table = 'usuarios_dashboard';
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
	protected $insertID = 0;
    protected $returnType = 'array';
	protected $useSoftDeletes = false;
	protected $protectFields = true;
	protected $allowedFields = [
	'user_name',
	'user_password',
	'user_email'
	];
	

	public function getEmail($email){
		
		$request = $this->where('user_email', $email)->first();
		return !is_null($request) ? $request : [];

	}



	//Dates
	#protected $useTimestramps = true;
	#protected $dateFormat = 'datetime';
	#protected $createdField = 'created_at';
	#protected $deletedFiel = 'deleted_at';
	
	
}