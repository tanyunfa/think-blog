<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{
    protected $pk = 'admin_id';
    protected $table = 'blog_admin';


    /**
     * 登录功能
     * @param $data
     * @return array
     */
    public function login($data)
    {
        //执行验证
        $validate = Loader::validate('Admin');

        if (!$validate->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        //比对用户名和密码是否正确

        $userInfo = $this->where('admin_username', $data['admin_username'])->where('admin_password', Crypt::encrypt($data['admin_password']))->find();
        if (!$userInfo) {
            //说明在数据库未匹配相关数据
            return ['valid' => 0, 'msg' => '用户名或密码不正确'];
        };
        //将用户信息存入到session当中
        session('admin.admin_id', $userInfo['admin_id']);
        session('admin.admin_username', $userInfo['admin_username']);
        return ['valid' => 1, 'msg' => '登录成功'];
    }

    /**
     * 修改密码
     * @param $data
     * @return array
     */
    public function pass($data)
    {
        //1.执行验证
        $validate = new Validate([
            'admin_password'=>'require',
            'new_password'=>'require',
            'check_new_password'=>'require|confirm:new_password'
        ],[
            'admin_password.require'=>'请输入原始密码',
            'new_password.require'=>'请输入新密码',
            'check_new_password.require'=>'请输入确认密码',
            'check_new_password.confirm'=>'请确认两次密码是否一致'
        ]);

        if (!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        //2.原始是否正确
        $userInfo = $this->where('admin_id',session('admin.admin_id'))->where('admin_password', Crypt::encrypt($data['admin_password']))->find();
        if (!$userInfo){
            return ['valid'=>0,'msg'=>'原始密码不正确'];
        }
        //3.修改密码
        $res = $this->save([
            'admin_password'=>Crypt::encrypt($data['new_password'])
        ],[
            $this->pk=>session('admin.admin_id')
        ]);

        if ($res){
            return ['valid'=>1,'msg'=>'修改密码成功'];
        }else{
            return ['valid'=>0,'msg'=>'修改密码失败'];
        }

    }
}
