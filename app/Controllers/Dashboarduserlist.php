<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboarduserlist extends BaseController{

		private $DashboardModel;
		
		public function __construct(){
			
			$this->DashboardModel = new DashboardModel();
		}
		
		public function index(){

			return view('userlist', [
		'userlist' => $this->DashboardModel->findAll()]);
		
		}
		
		public function delete($id){

			if($this->DashboardModel->delete($id)){
				//echo view('userlist_message',
				//['userlist_messages' => 'Usuário Excluído!']);
				return view('userlist', [
					'userlist' => $this->DashboardModel->findAll()]);
			} else{
				echo view("Erro");
			}
		}

		public function create(){

			return view('cadastro');
		}

		public function store(){
			if($this->DashboardModel->save($this->request->getPost())){
				return view('userlist', [
					'userlist' => $this->DashboardModel->findAll()]);
			}else{
				echo "Ocorreu um erro";
			}
		}

		public function edit($id){
			return view('userlist_edit',[
			'user' => $this->DashboardModel->find($id)]);
		}
}