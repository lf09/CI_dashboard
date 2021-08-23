<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    public function index(){

        //$dados_server['geral'] = phpinfo();
        $dados_server['uname'] = shell_exec('cat /etc/issue.net');
        $dados_server['cpu'] = shell_exec("mpstat | awk '{print$3}' | sed -n '4p'");
        $dados_server['memoriaEmUso'] = ceil((shell_exec("vmstat -s | awk '{print$1}' | sed -n '2p'"))/(1024*1024));
        $dados_server['memoriaTotal'] = ceil((shell_exec("vmstat -s | awk '{print$1}' | sed -n '1p'"))/(1024*1024));
        $dados_server['hd'] = shell_exec("df -h | grep sda | awk '{print$2,$3,$4,$5}' | egrep G");
        echo view('dashboard', $dados_server);

    }

}