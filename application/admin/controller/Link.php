<?php

namespace app\admin\controller;

use think\Controller;

class Link extends Controller
{
    protected $db;
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\Link();
    }

    public function index(){

        $field = db('link')->paginate(15);
        $this->assign('field',$field);

        return $this->fetch();
    }
    public function store(){


        if (request()->isPost()){
            $linkData = input('post.');
            $res = $this->db->store($linkData);
            if ($res['valid']){
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }
        $link_id = input('param.link_id');
        if ($link_id){
            $oldData = $this->db->find($link_id);
        }else{
            $oldData = ['link_name'=>'','link_url'=>'','link_sort'=>'100'];
        }
        $this->assign('oldData',$oldData);
        return $this->fetch();
    }

    public function del(){
        $link_id = input('param.link_id');
        if (\app\common\model\Link::destroy($link_id)){
            $this->success('删除成功');exit;
        }else{
            $this->error('删除失败');exit;
        }
    }
}
