<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboardcadastro extends BaseController {

    private $localDashboardModel;
		
    public function __construct(){
        
        $this->localDashboardModel = new DashboardModel();
    }

    public function index(){
        return view('cadastro');
    }

    public function insert(){

        if($this->request->getMethod() == 'post'){
           
            $this->localDashboardModel->set('user_name', $this->request->getPost('user_name'));
            $this->localDashboardModel->set('user_email', $this->request->getPost('user_email'));
            $this->localDashboardModel->set(
                'user_password', password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT));
                        

            if($this->localDashboardModel->insert()){
                return view('loginpage');
                #return redirect()->to('/admin');
            }else{
                $data['msg'] = 'Erro ao inserir categoria';
            }
        }
		
       }

    }
