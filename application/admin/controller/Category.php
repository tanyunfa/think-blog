<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{
    protected $db;
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\Category();
    }

    public function index(){

        //$field = db('cate')->select();
        $field = $this->db->getAll();
        $this->assign('field',$field);
        return $this->fetch();
    }
    public function add(){
        if (request()->isPost()){

            $res = $this->db->store(input('post.'));
            if ($res['valid']){
                $this->success($res['msg'],'index');
            }else{
                $this->error($res['msg'],'add');
            }
        }
        return $this->fetch();
    }



    public function addSon(){
        if (request()->isPost()){
            $res = $this->db->store(input('post.'));
            if ($res['valid']){
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg'],'add');exit;

            }
        }
        $cate_id=input('param.cate_id');
        $data = $this->db->where('cate_id',$cate_id)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function edit(){

        if (request()->isPost()){

            $res = $this->db->edit(input('post.'));
            if ($res['valid']){
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }


        $cate_id = input('param.cate_id');
        $oldData = $this->db->find($cate_id);
        $this->assign('oldData',$oldData);
        $cateData = $this->db->getCateData($cate_id);
        $this->assign('cateData',$cateData);

        return $this->fetch();
    }

    public function del()
    {
        $cate_id = input('get.cate_id');
        $res = $this->db->del($cate_id);
        if ($res){
            $this->success($res['msg'],'index');exit;
        }else{
            $this->error($res['msg'],'index');exit;
        }
    }
}