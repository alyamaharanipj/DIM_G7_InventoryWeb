<?php

    class Dashboard extends Controller {

    public function index(){
        $data['title'] = 'Dashboard';
        $data['dashboard'] = $this->model('DashboardModel')->getProfitAndLoss();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/header');
    }
}