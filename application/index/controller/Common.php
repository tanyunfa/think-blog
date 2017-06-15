<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $webset =  $this->loadWebSet();
        $this->assign('_webset',$webset);
        $cateData = $this->loadCateData();
        $this->assign('_cateData',$cateData);
        $allCateData = $this->localAllCateData();
        $this->assign('_allCateData',$allCateData);
        $allTagData = $this->localAllTagData();
        $this->assign('_allTagData',$allTagData);
        $allLinkData = $this->allLinkData();
        $this->assign('_allLinkData',$allLinkData);
        $newArticle = $this->loadArticleData();
        $this->assign('_newArticle',$newArticle);
    }

    private function loadArticleData(){
        return db('article')->order('sendtime desc')->limit(3)->select();
    }

    private function allLinkData(){
        return db('link')->select();
    }
    private function localAllTagData(){
        return db('tag')->order('tag_id desc')->select();
    }
    private function localAllCateData(){
        return db('cate')->order('cate_sort desc')->select();
    }

    private function loadCateData(){
        return db('cate')->where('cate_pid',0)->order('cate_sort desc')->select();
    }

    private function loadWebSet(){
        return db('webset')->column('webset_value','webset_name');
    }
}
