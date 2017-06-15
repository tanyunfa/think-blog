<?php

namespace app\index\controller;


use app\common\model\Category;

class Lists extends Common
{
    public function index(){
        $cate_id = input('param.cate_id');
        $tag_id = input('param.tag_id');
        if ($cate_id){
            $cids=(new Category())->getSon(db('cate')->select(),$cate_id);
            $cids[]=$cate_id;
            $articleData = db('article')->alias('a')->join('__CATE__ c','a.cate_id=c.cate_id')
                ->where('a.is_recycle',2)
                ->whereIn('a.cate_id',$cids)->select();
            $headTitle = ['title'=>"博客-分类列表页"];
            $this->assign('headTitle',$headTitle);
        }
        if ($tag_id){
            $articleData = db('article')->alias('a')->join('__ARC_TAG__ at','a.arc_id=at.arc_id')
                ->join('__CATE__ c','a.cate_id=c.cate_id')
                ->where('a.is_recycle',2)
                ->whereIn('at.tag_id',$tag_id)->select();
            $headTitle = ['title'=>"博客-标签列表页"];
            $this->assign('headTitle',$headTitle);
        }
        foreach ($articleData as $k=>$v){
            $articleData[$k]['tags']=db('arc_tag')->alias('at')
                ->join('__TAG__ t','at.tag_id=t.tag_id')
                ->where('at.arc_id',$v['arc_id'])->field('t.tag_id,t.tag_name')
                ->select();
        }

        $this->assign('articleData',$articleData);
        return $this->fetch();
    }
}
