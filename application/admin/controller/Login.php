<?php
namespace app\admin\controller;

use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{
    public function login(){
//        echo Crypt::encrypt('admin888');
//        echo Crypt::decrypt('h3vPU8JGuF3VS/uxIpjRSw==');
        //测试数据连接
        /*$data = db('admin')->find(1);
        dump($data);*/



        if (request()->isPost()){
            $res = (new Admin())->login(input('post.'));
            if ($res['valid']){
                //说明登录成功
                $this->success($res['msg'],'admin/entry/index');
                exit;
            }else{
                //说明登录失败
                $this->error($res['msg']);exit;
            }
        };
        //加载模板文件
        return $this->fetch('index');
    }


    public function loginout(){
        session(null);
        $this->success('退出成功','admin/entry/index');
    }
};