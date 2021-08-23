<?php

namespace App\Controllers;
use App\Models\DashboardModel;

class Dashboardloginpage extends BaseController{

    public function index(){

        return view('loginpage');
	}


    public function SignIn(){
        
        $login = $this->request->getPost('user_email');
        $password = $this->request->getPost('user_password');

        $emailModel = new DashboardModel();
        $dadosUsuario = $emailModel-> getEmail($email);
        
        if(count($dadosUsuario) > 0) {

            $hashUsuario = password_hash($password, PASSWORD_DEFAULT);
            if(password_verify($password, PASSWORD_DEFAULT)){
                session()->set('isLoggedIn', true);
                session()->set('user_email', $dadosUsuario['user_email']);
                return redirect()->to('/dashboard');
            } else{
                session()->setFlashData('msg', 'Dados incorretos');
                return redirect()->to('/Dashboardloginpage');
            }

        } else {
            session()->setFlashData('msg', 'Dados incorretos');
            return redirect()->to('/Dashboardloginpage');
        }

    }
	
}