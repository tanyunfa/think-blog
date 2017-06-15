<?php

namespace app\common\model;

use think\Model;

class Link extends Model
{
    protected $pk = 'link_id';
    protected $table = 'blog_link';

    public function store($data){
        $result = $this->validate(true)->save($data,$data['link_id']);
        if ($result){
            return ['valid'=>1,'msg'=>'添加成功'];
        }else{
            return ['valid'=>0,'msg'=>'添加失败'];
        }
    }
}
