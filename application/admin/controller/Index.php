<?php
namespace app\admin\controller;

class Index extends Admin
{
    public function index(){

        // $this->assign('__URL_MAP__', json_encode($this->get_url_control()));

        return view('index');
    }
}
