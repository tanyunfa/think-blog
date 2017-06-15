<?php

namespace app\index\controller;


class Index extends Common
{
    public function index(){
        $headTitle = ['title'=>'博客-首页'];
        $this->assign('headTitle',$headTitle);
        $articleData = db('article')->alias('a')->join('__CATE__ c','a.cate_id=c.cate_id')
            ->where('a.is_recycle',2)
            ->order('sendtime desc')->select();
//        halt($articleData);
        $this->assign('articleData',$articleData);
        return $this->fetch();
    }
}
