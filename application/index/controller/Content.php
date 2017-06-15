<?php

namespace app\index\controller;


class Content extends Common
{
    public function index()
    {
        //通过get获取文章ID
        $arc_id = input('param.arc_id');
        //更新点击量
        db('article')->where('arc_id', $arc_id)->setInc('arc_click');
        //找出对应ID的文章
        $arc_content = db('article')->where('arc_id', $arc_id)->find();
        //更改title并渲染到页面
        $headTitle = ['title' => "详情页-{$arc_content['arc_title']}"];
        $this->assign('headTitle', $headTitle);
        //在文章数据里追加标签数据
        $arc_content['tags'] = db('arc_tag')->alias('at')->join('__TAG__ t', 'at.tag_id=t.tag_id')
            ->where('at.arc_id', $arc_id)
            ->select();

        //上一篇下一篇数据
        $pre_arc = db('article')->where('sendtime>' . intval($arc_content['sendtime']))->where('is_recycle', 2)->order('sendtime asc')->limit(1)->find();

        $next_arc = db('article')->where('sendtime<' . intval($arc_content['sendtime']))->where('is_recycle', 2)->order('sendtime desc')->limit(1)->find();



        $this->assign('pre_arc', $pre_arc);
        $this->assign('next_arc', $next_arc);
//        halt($pre_arc);
        $this->assign('articleContent', $arc_content);
        return $this->fetch();
    }
}
