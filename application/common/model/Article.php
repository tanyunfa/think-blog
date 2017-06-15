<?php

namespace app\common\model;

use think\Model;

class Article extends Model
{
    protected $pk = 'arc_id';
    protected $table = 'blog_article';
    protected $auto = ['admin_id'];
    protected $insert = ['sendtime'];
    protected $update = ['updatetime'];

    protected function setAdminIdAttr($value)
    {
        return session('admin.admin_id');
    }

    protected function setSendTimeAttr($value)
    {
        return time();
    }

    protected function setUpdateTimeAttr($value)
    {
        return time();
    }


    public function store($data){
        //验证
        //添加数据库

        if (!isset($data['tag'])){
            //没有选择标签
            return ['valid'=>0,'msg'=>'请选择标签'];
        }
       $res = $this->validate(true)->allowField(true)->save($data);
       if ($res){

            foreach ($data['tag'] as $v)
            {

                $arcTagData = [
                  'arc_id'=>$this->arc_id,
                  'tag_id'=>$v,
                ];
                (new ArcTag())->save($arcTagData);
            }

           return ['valid'=>1,'msg'=>'添加文章成功'];
       }else{
           return ['valid'=>0,'msg'=>$this->getError()];
       }
    }

    public function getAll($is_reqycle){
        return db('article')->alias('a')
            ->join('__CATE__ c','a.cate_id=c.cate_id')->where('a.is_recycle',$is_reqycle)
            ->field('a.arc_id,a.arc_title,a.arc_author,a.sendtime,a.arc_sort,a.updatetime,c.cate_name')
            ->order('a.arc_sort desc,a.sendtime desc,a.arc_id desc  ')->paginate(15);
    }

    public function changeSort($data){
        $result = $this->validate([
            'arc_sort'=>'require|between:1,9999'
        ],[
            'arc_sort.require'=>'请输入排序',
            'arc_sort.between'=>'排序需要1-9999',
        ])->save($data,[$this->pk=>$data['arc_id']]);

        if ($result){
            return ['valid'=>1,'msg'=>'操作成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }

    public function edit ($data){
        $res = $this->validate(true)->allowField(true)->save($data,[$this->pk => $data['arc_id']]);

        if ($res){
            (new ArcTag())->where('arc_id',$data['arc_id'])->delete();
            foreach ($data['tag'] as $v)
            {

                $arcTagData = [
                    'arc_id'=>$this->arc_id,
                    'tag_id'=>$v,
                ];
                (new ArcTag())->save($arcTagData);
            }
            return ['valid'=>1,'msg'=>'修改成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }

    public function del($arc_id){
        if (Article::destroy($arc_id)){
            (new ArcTag())->where('arc_id',$arc_id)->delete();
            return ['valid'=>1,'msg'=>'操作成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
}
