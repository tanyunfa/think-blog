<?php

namespace app\index\validate;

use think\Validate;

class Comment extends Validate
{
    protected $rule = [
        "comments_content" => "require",
        "comments_name" => "require",
        "comments_email" => "require|email",
        "comments_website" => "require"
    ];
    protected $message = [
        "comments_content.require"=>"请输入评论内容",
        "comments_name.require" => "请输入你的昵称",
        "comments_email.require" => "请输入你的邮箱",
        "comments_email.email" => "邮箱格式不正确",
        "comments_website.require" => "请输入你的个人站点",
    ];

}